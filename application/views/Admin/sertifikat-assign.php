<?php
$this->load->view('Admin/Templates/Header');
$this->CI = &get_instance();

?>
<div class="container-fluid">
<div class="row">
    <div class="col mb-4">
        <a id="addNew" class="btn btn-primary" href="#" role="button" style="display: none;"> <i class="fa fa-plus" aria-hidden="true"></i> Add Data</a>
    </div>
    <small style="color: red;">* Pilih certificate dahulu untuk menambahkan data baru. </small>
</div>
<div class="row mb-3">
    <div class="col-md-4">
        <!-- <select class="form-control" id="aktif">
            <option value="">Semua Status Aktif</option>
            <option value="1"> Aktif </option>
            <option value="2"> Tidak Aktif</option>
            <option value="3"> Pending</option>
        </select> -->
        <select class="form-control" id="jenis" style="width: 100%">
            <option value="">Pilih Certificate Dahulu</option>
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
      <th scope="col">Course</th>
      <th scope="col">Certificate</th>
      <th scope="col" width="150px">Action</th>
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
                    <p> Assign <span id="namaCert"> COURSE </span> ke </p>
                     
                    <select class="form-control" id="id_course" style="width: 100%;">
                        <option value="">Pilih Course Dahulu</option>
                    </select>
                    

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

var tokenName = "";
var tokenHash = "";

var jumlah = 1;
var pageIni = 1;
var no = 1;
// showTransaksi(1);
 
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
        url: '<?php echo base_url('Dapur/'); ?>cert_assign/save', 
        dataType : "JSON",
        data:{
            id_course: $('#id_course').find(':selected').val(),
            id_certification: $('#jenis').find(':selected').val(),
            id_certification_req_course: $('#id').val(),
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
            url: '<?php echo base_url('Dapur/'); ?>cert_assign/save', 
            dataType : "JSON",
            data:{
                id_certification_req_course: id,
                [tokenName]: tokenHash
            },
            beforeSend: function(){
                $("#loading").css('display', 'flex');
            },
            success: function(data){ 
                getToken();
                swal("Data berhasil dihapus", {
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
    if ($('#jenis').find(':selected').val() != "") {
        showTransaksi(1);
        statusPage = 1;
    }
}, 1000));
 

$( "#addNew" ).click(function() {
    // $("#modalAdd").modal('show');
    $( '#modalAdd' ).modal( { focus: false}  );
    clear();
    $('#judulModal').text('Add Data');
});
 
$( "#jenis" ).change(function() {
    showTransaksi(1);
    statusPage = 1;

    if ($('#jenis').find(':selected').val() != "" ) {
        $('#addNew').css('display', 'inline-block');
    }
    text = $('#jenis').find(':selected').text();
    $('#namaCert').text(text);
});

if ($('#jenis').find(':selected').val() == "" ) {
    $('#addNew').css('display', 'none');
}

$("#jenis").select2({
    ajax: {
        placeholder: 'pilih data kategori',
        url: "<?=base_url('Dapur/cert_faq/')?>showcert",
        type: "get",
        dataType: 'json',
        delay: 250,
        processResults: function (response) {
            return {
                results: response
            };
        },
        cache: true
    }
});

$("#id_course").select2({
    ajax: {
        placeholder: 'pilih data kategori',
        url: "<?=base_url('Dapur/cert_assign/')?>showcourse",
        type: "get",
        dataType: 'json',
        delay: 250,
        processResults: function (response) {
            return {
                results: response
            };
        },
        cache: true
    }
});

$("#datatable").on("click", ".btnEdit", function(){
    id = $(this).data('id');
    // $("#modalAdd").modal('show');
    $( '#modalAdd' ).modal( { focus: false}  );
    getDataId(id);
    $('#judulModal').text('Edit Data');
});


$(document).on('click', '.halaman', function(){
    var page = $(this).attr("id");
    showTransaksi(page);
    statusPage = page;
});
  
function showTransaksi(page){
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url('Dapur/'); ?>cert_assign/showdata', 
        dataType : "JSON",
        data:{
            page:page,
            id_cert:$('#jenis').find(':selected').val(),
            [tokenName]: tokenHash,
            q:$('#search').val()
        },
        beforeSend: function(){
            $("#loading").css('display', 'flex');
        },
        success: function(data){ 
            html = "";
            $.each(data.data, function(i, item) {
            html += '    <tr>';
            html += '        <td>'+item.id_certification_req_course+'</td>';
            html += '       <td>'+item.nama_course+'</td>';
            html += '       <td>'+item.nama_sertifikasi+'</td>';
            html += '<td><a class="btn btn-sm btn-danger btnDelete" data-id="'+item.id_certification_req_course+'" data-aktif="2" title="Un-Assign Data" > <i class="fa fa-trash" aria-hidden="true"></i></a></td>';
            html += '     </tr>';
            });
            
            if (data.row_count == 0) {
                html = '<td colspan="6" class="text-center"> Tidak ada data </td>';
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
            getToken();
        },
        error: function(){
            html = '<td colspan="6" class="text-center"> Tidak ada data </td>';
            $('#datatable').html(html);               
        }
    });  
}
});  


</script>
 


