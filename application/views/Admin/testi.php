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
            <option value="">Semua Bintang </option>
            <option value="1"> Bintang 1 </option>
            <option value="2"> Bintang 2 </option>
            <option value="3"> Bintang 3 </option>
            <option value="4"> Bintang 4 </option>
            <option value="5"> Bintang 5 </option>
        </select>
    </div>
    <div class="col-md-4">

    </div>
    <div class="col-md-4">
        <input type="text" placeholder="Search" id="search" class="form-control">   
    </div>
</div>
 
<div id="datatable" class="mb-3">
    
</div>
 
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
 

$(document).on('click', '.halaman', function(){
    var page = $(this).attr("id");
    showTransaksi(page);
    statusPage = page;
});
  
function showTransaksi(page){
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url('Dapur/'); ?>course/showdata_testi', 
        dataType : "JSON",
        data:{
            page:page,
            rating:$('#status').find(':selected').val(),
            id_course:<?=$id?>,
            search:$('#search').val()
        },
        beforeSend: function(){
            $("#loading").css('display', 'flex');
        },
        success: function(data){ 
            html = "";
            $.each(data.data, function(i, item) {
            rating = (item.rating == null) ? 0 : item.rating;
            textRating = "";
            for (let index = 0; index < 5; index++) {
                if ( index < rating ) {
                    textRating += '<i class="fa fa-star" aria-hidden="true" style="color:gold"></i> ';
                } else {
                    textRating +=  '<i class="fa fa-star" aria-hidden="true" ></i> ';
                }
            }

            html += `
                <div class="card" style="width:100%;">
                    <div class="card-body">
                    <h5 class="card-title"> Rating: ${textRating} </h5>               
                    <h6 class="card-subtitle mb-2 text-muted "> ${item.nama_user}</h6>
                    <p class="card-text"> ${item.testimonial}</p>
                    <small class="card-text text-muted text-italic">  ${formatDate_indo(item.waktu_input)}</small>
                    </div>
                </div>
            `;    

            });
            
            if (data.row_count == 0) {
                html = `<div class="card" style="width:100%;">
                    <div class="card-body text-center">
                    <h5 class="card-title"> Tidak ada data testimoni </h5>               
                    </div>
                </div>`;
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
            html = `<div class="card" style="width:100%;">
                    <div class="card-body text-center">
                    <h5 class="card-title"> Tidak ada data testimoni </h5>               
                    </div>
                </div>`;
            $('#datatable').html(html);               
        }
    });  
}
});  


</script>
 


