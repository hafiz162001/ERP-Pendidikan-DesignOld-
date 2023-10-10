<?php
$this->load->view('Admin/Templates/Header');
$this->CI = &get_instance();

?>
<div class="container-fluid">
<div class="row">
     
</div>
<div class="row mb-3">
    <div class="col-md-4">
        <select class="form-control" id="status">
            <option value="">Semua Status</option>
            <option value="1"> Belum </option>
            <option value="2"> Approved </option>
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
      <th scope="col">Nama Portofolio</th>
      <th scope="col">Course Terkait</th>
      <th scope="col">Nama Customer</th>
      <th scope="col">Kategori</th>
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

<?php
$this->load->view('Admin/Templates/Footer', FALSE);
// $this->load->view('Admin/Templates/editor', FALSE);
?>

<script>

$(document).ready(function(){
var localImage = "";
var id_trx = "";

var tokenName = "";
var tokenHash = "";

var jumlah = 1;
var pageIni = 1;
var no = 1;
var idCloud = 0;
showTransaksi(1);
 
statusPage = 1;
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

$("#datatable").on("click", ".btnDelete", function(){
    id = $(this).data('id');
    inv = $(this).data('invoice');
    aktif = $(this).data('status');

    swal({
        title: "Apakah akan mengubah data?",
        text: "Approve data portofolio",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
    if (willDelete) {
    
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('Dapur/'); ?>porto/course_flag', 
            dataType : "JSON",
            data:{
                id_portofolio: id,
                status_portofolio: aktif,
                [tokenName]: tokenHash
            },
            beforeSend: function(){
                $("#loading").css('display', 'flex');
            },
            success: function(data){ 
                getToken();
                swal("Portofolio berhasil diupdate", {
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
}, 1000));
 
$( "#status" ).change(function() {
    showTransaksi(1);
});
 

$("#datatable").on("click", ".btnEdit", function(){
    id = $(this).data('id');
    // $("#modalAdd").modal('show');
    clear();
    $( '#modalAdd' ).modal( { focus: false}  );
    getDataId(id);
    $('#judulModal').text('Lihat Data');
});
 
$(document).on('click', '.halaman', function(){
    var page = $(this).attr("id");
    showTransaksi(page);
    statusPage = page;
});
  
function showTransaksi(page){
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url('Dapur/'); ?>porto/showdata', 
        dataType : "JSON",
        data:{
            page:page,
            status:$('#status').find(':selected').val(),
            q:$('#search').val()
        },
        beforeSend: function(){
            $("#loading").css('display', 'flex');
        },
        success: function(data){ 
            html = "";
            $.each(data.data, function(i, item) {

            html += '    <tr>';
            html += '        <td>'+item.id_portofolio+'</td>';
            html += '       <td style="word-wrap: break-word; width: 20%">'+item.nama_portofolio+'</td>';
            html += '         <td>  '+item.nama_course+'</td>';
            html += '         <td> '+item.nama_user+'</td>';
            html += '         <td> '+item.nama_kategori_portofolio+' </td>';

            if (item.status_portofolio == 1) {
                status = '<span class="badge badge-secondary">Menunggu Approval</span>';
            } else if(item.status_portofolio == 2) {
                status = '<span class="badge badge-success">Approved</span>';
            } else {
                status = "-";
            }
             
            html += '         <td>'+status+'</td>'; 

            html += '         <td> ';
             
            html += ' <a data-id="'+item.id_portofolio+'" href="<?=base_url()?>Dapur/porto/detail/'+item.id_portofolio+'" target="_blank" class="btn btn-sm btn-primary btnEdit" ><i class="fa fa-eye" aria-hidden="true"></i></a> ';
            if (item.status_portofolio != 2) {
                html += ' <a class="btn btn-sm btn-success btnDelete" data-id="'+item.id_portofolio+'"  data-status="2" title="Approved"> <i class="fa fa-check" aria-hidden="true"></i></a>';
            } else {
                html += ' <a class="btn btn-sm btn-danger btnDelete" data-id="'+item.id_portofolio+'"  data-status="1" title="Batalkan"> <i class="fa fa-trash" aria-hidden="true"></i></a>';
            }
            html += '    </td> </tr>';
            });
            
            if (data.row_count == 0) {
                html = '<td colspan="9" class="text-center"> Tidak ada data </td>';
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
            html = '<td colspan="9" class="text-center"> Tidak ada data </td>';
            $('#datatable').html(html);               
        }
    });  
}
});  


</script>
 


