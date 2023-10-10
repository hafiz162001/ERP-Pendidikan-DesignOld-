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
            <option value="0"> Belum mengerjakan </option>
            <option value="1"> Belum lulus</option>
            <option value="2"> Lulus</option>
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
      <th scope="col">Silabus</th>
      <th scope="col">Nama Customer</th>
      <th scope="col">Score</th>
      <th scope="col">Score task</th>
      <th scope="col">Tugas</th>
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
                    
                    <div class="col-md-2 col-sm-6 mt-2">
                        Course
                    </div>

                    <div class="col-md-4 col-sm-6 mt-2" id="nama_course">
                        
                    </div>

                    <div class="col-md-2 col-sm-6 mt-2">
                        Silabus
                    </div>

                    <div class="col-md-4 col-sm-6 mt-2" id="nama_silabus">
                        
                    </div>

                    <div class="col-md-2 col-sm-6 mt-2">
                        Nama
                    </div>

                    <div class="col-md-4 col-sm-6 mt-2" id="nama_user">
                        Nama
                    </div>

                    <div class="col-md-2 col-sm-6 mt-2">
                        Email 
                    </div>

                    <div class="col-md-4 col-sm-6 mt-2" id="email">
                        Email 
                    </div>

                    <div class="col-md-2 col-sm-6 mt-2" >
                        Start Time 
                    </div>

                    <div class="col-md-4 col-sm-6 mt-2" id="start_time">
                        Start Time  
                    </div>

                    <div class="col-md-2 col-sm-6 mt-2">
                        Start Task Time 
                    </div>

                    <div class="col-md-4 col-sm-6 mt-2" id="start_task_time">
                        Start Task Time  
                    </div>

                    <div class="col-md-2 col-sm-6 mt-2" >
                        Submit Time 
                    </div>

                    <div class="col-md-4 col-sm-6 mt-2" id="submit_time">
                          
                    </div>

                    <div class="col-md-2 col-sm-6 mt-2">
                        Submit Task Time 
                    </div>

                    <div class="col-md-4 col-sm-6 mt-2" id="submit_task_time">
                          
                    </div>

                    <div class="col-md-2 col-sm-6 mt-2">
                        Score 
                    </div>

                    <div class="col-md-4 col-sm-6 mt-2" id="score">
                        Score  
                    </div>

                    <div class="col-md-2 col-sm-6 mt-2">
                        File
                    </div>

                    <div class="col-md-4 col-sm-6 mt-2" id="fileName">
                        File  
                    </div>

                    <div class="col-md-2 col-sm-6 mt-2" >
                        Score Task 
                    </div>

                    <div class="col-md-4 col-sm-6 mt-2">
                        <input type="text" class="form-control" id="score_task" >
                    </div>

                     

                    <!-- End bawah -->
                </div>
            </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnSave">Update Score Task</button>
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


File.prototype.convertToBase64 = function(callback){
        var reader = new FileReader();
        reader.onloadend = function (e) {
            callback(e.target.result, e.target.error);
        };   
        reader.readAsDataURL(this);
};

// getToken();

$(".ubahFoto").on('change',function(){
    var selectedFile = this.files[0];
    selectedFile.convertToBase64(function(base64){
        var findLeng = base64.split(';base64,')[0].length + 8;
        var cleanbase = base64.substring(findLeng);
        localImage = cleanbase;
        $('#imgprev').attr('src', base64);
        // console.log(localImage);
    }) 
});
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
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url('Dapur/'); ?>tugas/save', 
        dataType : "JSON",
        data:{
            id_customer_syllabus: $('#id').val(),
            score_task: $('#score_task').val(),
            [tokenName]: tokenHash
        },
        beforeSend: function(){
            $("#loading").css('display', 'flex');
        },
        success: function(data){ 
            getToken();
            if(data.status_code != 200) {
                $("#msg").text("Error : "+data.description);
                $(".notice").removeClass('alert-success').addClass('alert-danger');
                $(".notice").fadeIn( 100 );     
                setTimeout(() => {
                    $( ".notice" ).fadeOut( 3000 );    
                }, 2000);   
            } else {
                $("#msg").text("Berhasil mengubah data score");
                $(".notice").removeClass('alert-danger').addClass('alert-success');
                $(".notice").fadeIn( 100 );     
                setTimeout(() => {
                    $( ".notice" ).fadeOut( 3000 );    
                }, 2000);
            }
            $("#modalAdd").modal('hide');

            showTransaksi(1);
        },
        complete:function(data){
            $("#loading").css('display', 'none');
            $('#id').val('');
            clear();
        },
        error: function(){
            getToken(); 
            $("#msg").text("Error mengubah data score");
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
    $('#id').val('');
    $('#score_task').val('');
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

 
 

$("#datatable").on("click", ".btnEdit", function(){
    id = $(this).data('id');
    // $("#modalAdd").modal('show');
    $( '#modalAdd' ).modal( { focus: false}  );
    getDataId(id);
    $('#judulModal').text('Edit Data');
});


$("#id_teacher_course").select2({
    ajax: {
        url: "<?=base_url('Dapur/tugas/')?>showteacher",
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

function getDataId(id){
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url('Dapur/'); ?>tugas/showdata', 
        dataType : "JSON",
        data:{
            id: id
        },
        success: function(data){ 
            $.each(data.data, function(i, item) {
                // $('#id_teacher_course').val(item.id_teacher_course).change();
                $('#id').val(item.id_customer_syllabus);
                $('#nama_course').html(item.course_name);
                $('#nama_silabus').html(item.name);
                $('#nama_user').html(item.user_name);
                $('#email').html(item.email);
                if (item.task_file == null) {
                    $('#fileName').html('<span class="badge badge-danger">File tidak tersedia</span>');
                } else {

                    url = '<a href="<?php echo $this->CI->config->item('bisaUrl')."academy/media/task/";?>'+item.task_file+'"> '+item.task_file+' </a>';
                    $('#fileName').html(url);

                }
                
                $('#score').html(item.score);
                $('#score_task').val(item.score_task);
                if (item.start_time == null) {
                    $('#start_time').html('-');
                } else {
                    date = new Date(item.start_time);
                    newDate = date.getFullYear()+'-'+String(date.getMonth()).padStart(2, "0")+'-'+String(date.getDate()).padStart(2, "0")+' '+String(date.getHours()).padStart(2, "0")+':'+String(date.getMinutes()).padStart(2, "0");
                    $('#start_time').html(newDate);
                }

                if (item.start_task_time == null) {
                    $('#start_task_time').html('-');
                } else {
                    date = new Date(item.start_task_time);
                    newDate = date.getFullYear()+'-'+String(date.getMonth()).padStart(2, "0")+'-'+String(date.getDate()).padStart(2, "0")+' '+String(date.getHours()).padStart(2, "0")+':'+String(date.getMinutes()).padStart(2, "0");
                    $('#start_task_time').html(newDate);
                }

                if (item.submit_time_task == null) {
                    $('#submit_time_task').html('-');
                } else {
                    date = new Date(item.submit_time_task);
                    newDate = date.getFullYear()+'-'+String(date.getMonth()).padStart(2, "0")+'-'+String(date.getDate()).padStart(2, "0")+' '+String(date.getHours()).padStart(2, "0")+':'+String(date.getMinutes()).padStart(2, "0");
                    $('#submit_time_task').html(newDate);
                }

                if (item.submit_time == null) {
                    $('#submit_time').html('-');
                } else {
                    date = new Date(item.submit_time);
                    newDate = date.getFullYear()+'-'+String(date.getMonth()).padStart(2, "0")+'-'+String(date.getDate()).padStart(2, "0")+' '+String(date.getHours()).padStart(2, "0")+':'+String(date.getMinutes()).padStart(2, "0");
                    $('#submit_time').html(newDate);
                }
                
             
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
});
  
function showTransaksi(page){
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url('Dapur/'); ?>tugas/showdata', 
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
            html += '        <td>'+item.id_syllabus+'</td>';
            html += '       <td>'+item.name+'</td>';
            html += '       <td>'+item.user_name+'</td>';
            html += '         <td>'+item.score+'</td>';
            html += '         <td> '+item.score_task+'</td>';

            if (item.status == 0) {
                status = '<span class="badge badge-secondary">Belum Dikerjakan</span>';
            } else if(item.status == 1) {
                status = '<span class="badge badge-danger">Belum Lulus</span>';
            } else if(item.status == 2) {
                status = '<span class="badge badge-success">Lulus</span>';
            } else {
                status = "-";
            }
             
            html += '         <td>'+status+'</td>'; 
            html += '         <td> ';
            if (item.task_file == null) {
                html += '<span class="badge badge-danger">File tidak tersedia</span>';
            } else {
                html += '<span class="badge badge-success">File tersedia</span>';
            }
            html += '           </td>';
            html += '         <td> ';
             
            html += ' <a data-id="'+item.id_customer_syllabus+'" class="btn btn-sm btn-primary btnEdit" ><i class="fa fa-eye" aria-hidden="true"></i></a> </td>';
            html += '     </tr>';
            });
            
            if (data.row_count == 0) {
                html = '<td colspan="7" class="text-center"> Tidak ada data </td>';
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
            html = '<td colspan="7" class="text-center"> Tidak ada data </td>';
            $('#datatable').html(html);               
        }
    });  
}
});  


</script>
 


