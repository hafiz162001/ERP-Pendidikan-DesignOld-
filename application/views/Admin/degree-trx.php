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
            <option value="2"> Sudah bayar</option>
            <option value="3"> Gagal</option>
        </select>
    </div>
    <div class="col-md-4">
        <select class="form-control" id="jenis">
            <option value="">Semua Jenis Pendidikan</option>
            <option value="1"> Pendidikan jarak jauh </option>
            <option value="2"> Profesional pendidikan</option>
        </select>
    </div>
    <div class="col-md-4">
        <input type="text" placeholder="Search" id="search" class="form-control">   
    </div>
</div>
 
<table class="table table-bordered table-striped">
  <thead class="bg-secondary text-white">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama Pendidikan</th>
      <th scope="col">Invoice</th>
      <th scope="col">Nama Customer</th>
      <th scope="col">Status</th>
      <th scope="col">Jenis</th>
      <th scope="col">Harga</th>
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
        <h5 class="modal-title" id="judulModal">Lihat Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <div class="row">
                    <!-- Bawah -->
                    <input type="hidden" class="form-control" id="id" >
                    
                    <div class="col-md-2 col-sm-6 mt-2">
                        Nama Certificate
                    </div>

                    <div class="col-md-4 col-sm-6 mt-2" id="nama_course">
                        
                    </div>

                    <div class="col-md-2 col-sm-6 mt-2">
                        Nama Customer
                    </div>

                    <div class="col-md-4 col-sm-6 mt-2" id="nama_user">
                        
                    </div>

                    <div class="col-md-2 col-sm-6 mt-2">
                        Contact
                    </div>

                    <div class="col-md-4 col-sm-6 mt-2" id="contact">
                        
                    </div>

                    <div class="col-md-2 col-sm-6 mt-2">
                        Invoice 
                    </div>

                    <div class="col-md-4 col-sm-6 mt-2" id="invoice">
                          
                    </div>

                    <div class="col-md-2 col-sm-6 mt-2">
                        Total Tagihan 
                    </div>

                    <div class="col-md-4 col-sm-6 mt-2" id="total_tagihan">
                          
                    </div>

                    <div class="col-md-2 col-sm-6 mt-2">
                        Tipe 
                    </div>

                    <div class="col-md-4 col-sm-6 mt-2" id="class">
                          
                    </div>

                    <div class="col-md-2 col-sm-6 mt-2">
                        Tanggal bayar 
                    </div>

                    <div class="col-md-4 col-sm-6 mt-2" id="tanggal_bayar">
                          
                    </div>

                    <div class="col-md-2 col-sm-6 mt-2">
                        Payment 
                    </div>

                    <div class="col-md-4 col-sm-6 mt-2" id="payment">
                          
                    </div>

                    <!-- End bawah -->
                </div>
            </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
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
var localImage = "";
var id_trx = "";

var tokenName = "";
var tokenHash = "";

var jumlah = 1;
var pageIni = 1;
var no = 1;
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

$( "#jenis" ).change(function() {
    showTransaksi(1);
});

$("#datatable").on("click", ".btnDelete", function(){
    id = $(this).data('id');
    inv = $(this).data('invoice');
    aktif = $(this).data('status');

    swal({
        title: "Apakah akan mengubah data?",
        text: "Approve data transaksi",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
    if (willDelete) {
    
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('Dapur/'); ?>transaksi/update', 
            dataType : "JSON",
            data:{
                status: aktif,
                id_transaction: id,
                jenis_transaksi: 4,
                invoice_number: inv,
                [tokenName]: tokenHash
            },
            beforeSend: function(){
                $("#loading").css('display', 'flex');
            },
            success: function(data){ 
                getToken();
                swal("Transaksi berhasil diupdate", {
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
 

$("#datatable").on("click", ".btnEdit", function(){
    id = $(this).data('id');
    // $("#modalAdd").modal('show');
    $( '#modalAdd' ).modal( { focus: false}  );
    getDataId(id);
    $('#judulModal').text('Lihat Data');
});

function getDataId(id){
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url('Dapur/'); ?>transaksi/showdata_degree', 
        dataType : "JSON",
        data:{
            id: id
        },
        success: function(data){ 
            $.each(data.data, function(i, item) {
                // $('#id_teacher_course').val(item.id_teacher_course).change();
                $('#id').val(item.id_dgr_transaction_degree);
                $('#nama_course').html(item.nama_degree);
                $('#nama_user').html(item.user_name);
                $('#contact').html(item.user_phone+'<br> '+item.user_email);

                if (item.tipe_pendidikan == 1) {
                    item.tipe_pendidikan = '<span class="badge badge-primary">Pendidikan jarak jauh</span>';
                } else if(item.tipe_pendidikan == 2) {
                    item.tipe_pendidikan = '<span class="badge badge-warning">Profesional</span>';
                } else {
                    item.tipe_pendidikan = ' - ';
                }
                $('#class').html(item.tipe_pendidikan);
                $('#total_tagihan').html( 'Rp. '+(item.total_price).toLocaleString());
                $('#invoice').html(item.invoice_number);
                $('#tanggal_bayar').html(item.waktu_melakukan_pembayaran);

                if(item.service_code==9999){  
                    image = "<?=base_url('/assets/images/bni.png')?>";
                    an = "<br> No.rekening 1315441125";
                } else if(item.service_code==9998){  
                    image = "<?=base_url('/assets/images/bca-bank-central-asia.svg')?>";
                    an = "<br> No.rekening 0866131541";
                } else if(item.service_code=="1077"){
                    image = "<?=base_url('/assets/images/link.png')?>";
                    an = "";
                } else if(item.service_code=="1084"){
                    image = "<?=base_url('/assets/images/dana.png')?>";
                    an = "";
                } else if(item.service_code=="1083") {
                    image = "<?=base_url('/assets/images/bayarind.png')?>";
                    an = "";
                } else if(item.service_code=="1085") {
                    image = "<?=base_url('/assets/images/shopee.png')?>";
                    an = "";
                }

                payment = '<img src="'+image+'" style="width: 100px" /> <br> '+an;
                $('#payment').html(payment);
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
        url: '<?php echo base_url('Dapur/'); ?>transaksi/showdata_degree', 
        dataType : "JSON",
        data:{
            page:page,
            status:$('#status').find(':selected').val(),
            tipe_pendidikan:$('#jenis').find(':selected').val(),
            q:$('#search').val()
        },
        beforeSend: function(){
            $("#loading").css('display', 'flex');
        },
        success: function(data){ 
            html = "";
            $.each(data.data, function(i, item) {
            html += '    <tr>';
            html += '        <td>'+item.id_dgr_transaction_degree+'</td>';
            html += '       <td style="word-wrap: break-word; width: 20%">'+item.nama_degree+'</td>';
            html += '         <td>  '+item.invoice_number+'</td>';
            html += '         <td> '+item.user_name+'</td>';

            if (item.status == 1) {
                status = '<span class="badge badge-secondary">Belum</span>';
            } else if(item.status == 2) {
                status = '<span class="badge badge-success">Sudah</span>';
            } else if(item.status == 3) {
                status = '<span class="badge badge-danger">Gagal</span>';
            } else {
                status = "-";
            }
             
            html += '         <td>'+status+'</td>'; 

            if (item.tipe_pendidikan  == 1) {
                status = '<span class="badge badge-primary">Pendidikan Jarak Jauh</span>';
            } else if(item.tipe_sertifikasi  == 2) {
                status = '<span class="badge badge-warning">Profesional</span>';
            } else {
                status = "-";
            }

            html += '         <td>'+status+'</td>'; 
            html += '         <td> ';
            html += 'Rp. '+(item.total_price).toLocaleString()
            html += '           </td>';
            html += '         <td> ';
             
            html += ' <a data-id="'+item.id_dgr_transaction_degree+'" class="btn btn-sm btn-primary btnEdit" ><i class="fa fa-eye" aria-hidden="true"></i></a>';
            if (item.status != 2) {
                html += ' <a class="btn btn-sm btn-success btnDelete" data-invoice="'+item.invoice_number+'" data-id="'+item.id_dgr_transaction_degree+'"  data-status="2" title="Approved"> <i class="fa fa-check" aria-hidden="true"></i></a>';
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
 


