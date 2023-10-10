<?php
$this->load->view('Admin/Templates/Header');
$this->CI = &get_instance();

?>
<div class="container-fluid">
<div class="row">
    <div class="col mb-4">
        <a id="addNew" class="btn btn-primary" href="#" role="button"> <i class="fa fa-plus" aria-hidden="true"></i> Add Data</a>
    </div>
</div>
<div class="row mb-3">
    <div class="col-md-4">
        <select class="form-control" id="aktif">
            <option value="">Semua Status Aktif</option>
            <option value="1"> Aktif </option>
            <option value="2"> Tidak Aktif</option>
            <option value="3"> Pending</option>
        </select>
        
    </div>
    <div class="col-md-4">
         
    </div>
    <div class="col-md-4">
        <input type="text" placeholder="Search" id="search" class="form-control">   
    </div>
</div>
 
<table class="table table-bordered table-striped">
  <thead class="bg-secondary text-white">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama Kategori</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody id="datatable">
     
  </tbody>
</table>
</div>
<p>Total baris : <span id="totalRow"> 0 </span></p>
<nav aria-label="Page navigation sample">
  <ul class="pagination justify-content-end" id="pagination">
    
  </ul>
</nav>

<!-- Modal -->
<div class="modal fade modal-full" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Add Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <div class="row">
                    <!-- Bawah -->
                    <input type="hidden" class="form-control" id="id" >
                    
                    <div class="col-md-12 col-sm-12 p-3">
                  
                        <div class="form-group">
                            <label for="">Nama Kategori</label>
                            <input type="text" class="form-control" id="nama" placeholder="Nama kategori">
                        </div>

                </div>
                    <!-- End bawah -->
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnSave">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php
$this->load->view('Admin/Templates/Footer', FALSE);
// $this->load->view('Admin/Templates/editor', FALSE);
?>

<script>

$(document).ready(function(){

statusPage = 1;
var id_trx = "";

var tokenName = "";
var tokenHash = "";

var jumlah = 1;
var pageIni = 1;
var no = 1;
showTransaksi(1);
 
// getToken();
 
getToken();
function getToken(){
    $.ajax({
        type: 'GET',
        url: '<?php echo base_url('Dapur/'); ?>dashboard/get_token', 
        dataType : "JSON",
        success: function(data){  
            tokenName = data.csrf.name;
            tokenHash = data.csrf.hash;
        },
        error: function(data){
            tokenName = "";
            tokenHash = "";
        }
    });
}

$( "#btnSave" ).click(function() {
    if($('#id').val() == "") {
        text = "menambah data";
    } else {
        text = "mengubah data";
    }

    $.ajax({
        type: 'POST',
        url: '<?php echo base_url('Dapur/'); ?>cert_kategori/save', 
        dataType : "JSON",
        data:{
            id_certification_category: $('#id').val(),
            nama_kategori: $('#nama').val(),
            [tokenName]: tokenHash
        },
        beforeSend: function(){
            $("#loading").css('display', 'flex');
        },
        success: function(data){ 
            getToken();
            
            swal("Berhasil "+text, {
                icon: "success",
            });           
            showTransaksi(statusPage);

            $("#modalAdd").modal('hide');

        },
        complete:function(data){
            $("#loading").css('display', 'none');
            $('#id').val('');
            clear();
        },
        error: function(){
            getToken(); 
            $("#msg").text("Error "+text);
            $(".notice").removeClass('alert-success').addClass('alert-danger');
            $(".notice").fadeIn( 100 );     
            setTimeout(() => {
                $( ".notice" ).fadeOut( 3000 );    
            }, 2000);   
            $("#modalAdd").modal('hide');

        }
    });  

});


function clear(){
    localImage = '';
    $('#nama').val('');
    $('#id').val('');
    $('#deskripsi').val('');     
}


$("#datatable").on("click", ".btnDelete", function(){
    id = $(this).data('id');
    aktif = $(this).data('aktif');

    swal({
        title: "Apakah akan mengubah data?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
    if (willDelete) {
    
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('Dapur/'); ?>cert_kategori/save', 
            dataType : "JSON",
            data:{
                is_aktif: aktif,
                id_certification_category: id,
                [tokenName]: tokenHash
            },
            beforeSend: function(){
                $("#loading").css('display', 'flex');
            },
            success: function(data){ 
                getToken();
                swal("Data berhasil diupdate", {
                    icon: "success",
                });
                
                showTransaksi(statusPage);
            },
            complete:function(data){
                
            },
            error: function(){
                getToken(); 
                swal("Gagal", {
                    icon: "error",
                });  

                showTransaksi(statusPage);
            }
        }); 

    } else {
        swal("Dibatalkan");
    }
    });
     
});

 

function delay(callback, ms) {
    var timer = 0;
    return function() {
        var context = this, args = arguments;
        clearTimeout(timer);
        timer = setTimeout(function () {
        callback.apply(context, args);
        }, ms || 0);
    };
}
 
$('#search').keyup(delay(function (e) {
    showTransaksi(1);
    statusPage = 1;

}, 1000));
 
$( "#aktif" ).change(function() {
    showTransaksi(1);
    statusPage = 1;

});

$( "#addNew" ).click(function() {
    // $("#modalAdd").modal('show');
    $( '#modalAdd' ).modal( { focus: false}  );
    clear();
    $('#judulModal').text('Add Data');
});
 

$("#datatable").on("click", ".btnEdit", function(){
    id = $(this).data('id');
    // $("#modalAdd").modal('show');
    $( '#modalAdd' ).modal( { focus: false}  );
    getDataId(id);
    $('#judulModal').text('Edit Data');
});

 

function getDataId(id){
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url('Dapur/'); ?>cert_kategori/showdata', 
        dataType : "JSON",
        data:{
            id: id
        },
        success: function(data){ 
            $.each(data.data, function(i, item) {
                // $('#id_teacher_course').val(item.id_teacher_course).change();
                $('#id').val(item.id_certification_category);
                $('#nama').val(item.nama);
            });
            
        },
        error: function(){
            $("#msg").text("Error get data");
            $(".notice").removeClass('alert-success').addClass('alert-danger');
            $(".notice").fadeIn( 100 );     
            setTimeout(() => {
                $( ".notice" ).fadeOut( 3000 );    
            }, 2000);
        }
    })
}

$(document).on('click', '.halaman', function(){
    var page = $(this).attr("id");
    showTransaksi(page);
    statusPage = page;

});
  
function showTransaksi(page){
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url('Dapur/'); ?>cert_kategori/showdata', 
        dataType : "JSON",
        data:{
            page:page,
            aktif:$('#aktif').find(':selected').val(),
            q:$('#search').val()
        },
        beforeSend: function(){
            $("#loading").css('display', 'flex');
        },
        success: function(data){ 
            html = "";
            $.each(data.data, function(i, item) {
            html += '    <tr>';
            html += '        <td>'+item.id_certification_category+'</td>';
            html += '       <td>'+item.nama+'</td>';

            if (item.is_aktif == 1) {
                status = '<span class="badge badge-info">Aktif</span>';
            } else if(item.is_aktif == 2) {
                status = '<span class="badge badge-secondary">Tidak Aktif</span>';
            } else if(item.is_aktif == 3) {
                status = '<span class="badge badge-danger">Pending</span>';
            } else {
                status = "-";
            }
             
             
            html += '         <td>'+status+'</td>'; 
            html += '         <td> ';
            if (item.is_aktif == 1) {
                html += '<a class="btn btn-sm btn-danger btnDelete" data-id="'+item.id_certification_category+'" data-aktif="2" title="Ubah ke tidak aktif" > <i class="fa fa-trash" aria-hidden="true"></i></a>';
                html += ' <a class="btn btn-sm btn-secondary btnDelete" data-id="'+item.id_certification_category+'" data-aktif="3" title="Ubah ke pending"> <i class="fas fa-exclamation-triangle"></i></a>';
            } else if(item.is_aktif == 2) {
                html += '<a class="btn btn-sm btn-success btnDelete" data-id="'+item.id_certification_category+'" data-aktif="1" title="Ubah ke aktif"> <i class="fa fa-check" aria-hidden="true"></i></a>';
            } else {
                html += '<a class="btn btn-sm btn-success btnDelete" data-id="'+item.id_certification_category+'" data-aktif="1" title="Ubah ke aktif"> <i class="fa fa-check" aria-hidden="true"></i></a>';
            } 
            html += ' <a data-id="'+item.id_certification_category+'"  class="btn btn-sm btn-primary btnEdit" ><i class="fa fa-pencil-alt" aria-hidden="true"></i></a> </td>';
            html += '     </tr>';
            });
            
            if (data.row_count == 0) {
                html = '<td colspan="4" class="text-center"> Tidak ada data </td>';
                $('#datatable').html(html); 
            } else {
                $('#datatable').html(html);  
            }

            $("#totalRow").text(data.row_count);  
            
            // Buat pagination 
            jumlah = Math.ceil( data.row_count / data.offset);
            jumlah_number = 2;
            start_number = (page > jumlah_number)? page - jumlah_number : 1;
            end_number = (page < (jumlah - jumlah_number))? parseInt(page) + parseInt(jumlah_number) : jumlah;
            pagination = "";

            if (page == 1) {
                pagination += '<li class="page-item disabled"><a class="page-link" href="#">First</a></li>';
                pagination += '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
            } else {
                link_prev = (page > 1)? page - 1 : 1;
                pagination += '<li class="page-item halaman" id="1"><a class="page-link" href="#">First</a></li>';
                pagination += '<li class="page-item halaman" id="'+link_prev+'"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
            }
 
            for (let i = start_number; i <= end_number; i++) {
                link_active = (page == i)? ' active' : '';
                pagination += '<li class="page-item halaman '+link_active+'" id="'+i+'"><a class="page-link" href="#">'+i+'</a></li>'; 
            }

            if(page == jumlah){
                pagination +=  '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
                pagination +=  '<li class="page-item disabled"><a class="page-link" href="#">Last</a></li>';
            } else {
                link_next = (page < jumlah)? parseInt(page) + 1 : jumlah;
                pagination += '<li class="page-item halaman" id="'+link_next+'"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
                pagination += '<li class="page-item halaman" id="'+jumlah+'"><a class="page-link" href="#">Last</a></li>';
            }

            $('#pagination').html(pagination);
        },
        complete:function(data){
            $("#loading").css('display', 'none');
        },
        error: function(){
            html = '<td colspan="4" class="text-center"> Tidak ada data </td>';
            $('#datatable').html(html);               
        }
    });  
}
});  


</script>
 


