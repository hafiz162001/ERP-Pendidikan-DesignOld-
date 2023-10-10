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
            <option value="3"> Selesai</option>
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
      <th scope="col">Nama</th>
      <th scope="col">Nama Course</th>
      <th scope="col">Teacher name</th>
      <th scope="col">Foto</th>
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
        <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">General</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="priceTab-tab" data-toggle="tab" href="#priceTab" role="tab" aria-controls="profile" aria-selected="false">Room Detail</a>
        </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                <div class="row">
                    <!-- Bawah -->
                    <input type="hidden" class="form-control" id="id" >
                    
                    <div class="col-md-12 col-sm-12 p-3">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama</label>
                            <input type="text" class="form-control" id="name" placeholder="Nama Diskusi">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Date Discussion</label>
                            <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                    <input type="text" id="tanggal" class="form-control datetimepicker-input" data-target="#datetimepicker1" readonly/>
                                    <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                            </div>
                        </div>
 
                        <div class="form-group">
                            <label for="">Pilih Teacher</label>
                            <select class="form-control" id="id_teacher_course" style="width: 100%;">
                                <option value="">Pilih Data</option>
                            </select> 
                        </div>

                        <div class="form-group">
                            <img class="rounded" id="imgprev" src="" style="width: 100%; max-width: 100px">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Foto</label>
                            <input type='file' class='ubahFoto form-control-file' accept=".png, .jpg, .jpeg, .PNG, .JPG, .JPEG" />
                        </div>


                        <div class="form-group">
                        <label for="exampleFormControlInput1">Description</label>
                            <textarea rows="5" class="form-control" id="deskripsi"></textarea>
                        </div>

                    </div>

                    
                    <!-- End bawah -->
                </div>
            </div>
            <div class="tab-pane fade" id="priceTab" role="tabpanel" aria-labelledby="price-tab">
                <div class="row">
                    <!-- bagian kiri -->
                    <div class="col-md-12 col-sm-12 p-3">
                        
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Room ID</label>
                            <input type="text" class="form-control" id="room_id" placeholder="Id room vcon bisatampil">
                        </div> 

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Password Peserta</label>
                            <input type="text" class="form-control" id="password_attendee" placeholder="Password untuk peserta.">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Password Moderator</label>
                            <input type="text" class="form-control" id="password_moderator" placeholder="Password moderator">
                        </div>

                    </div>
                     
                    <!-- end kiri -->

                </div>
            </div>

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

var localImage = "";
var id_trx = "";

var tokenName = "";
var tokenHash = "";

var jumlah = 1;
var pageIni = 1;
var no = 1;
showTransaksi(1);

$('#datetimepicker1').datetimepicker({
    icons: {
        time: "far fa-clock",
        date: "fa fa-calendar",
        up: "fa fa-arrow-up",
        down: "fa fa-arrow-down"
    },
    format: 'YYYY-MM-DD HH:mm'
});

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
        url: '<?php echo base_url('Dapur/'); ?>discuss/save', 
        dataType : "JSON",
        data:{
            id_teacher_course: $('#id_teacher_course').find(":selected").val(),
            id_discussion: $('#id').val(),
            name: $('#name').val(),
            date : $('#tanggal').val(),
            photo : localImage,
            name : $('#name').val(),
            password_attendee : $('#password_attendee').val(),
            password_moderator : $('#password_moderator').val(),
            room_id : $('#room_id').val(),
            description: $('#deskripsi').val(),
            [tokenName]: tokenHash
        },
        beforeSend: function(){
            $("#loading").css('display', 'flex');
        },
        success: function(data){ 
            getToken();
            $("#msg").text("Berhasil menambah data");
            $(".notice").removeClass('alert-danger').addClass('alert-success');
            $(".notice").fadeIn( 100 );     
            setTimeout(() => {
                $( ".notice" ).fadeOut( 3000 );    
            }, 2000);
            $("#modalAdd").modal('hide');
           
            showTransaksi(statusPage);
        },
        complete:function(data){
            $("#loading").css('display', 'none');
            $('#id').val('');
            clear();
        },
        error: function(){
            getToken(); 
            $("#msg").text("Error menambah data");
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
    $('#id_teacher_course').val();
    $('#id').val('');
    $('#name').val('');
    $('#tanggal').val('');
    localImage = '';
    $('#name').val('');
    $('#deskripsi').val('');
    $('#room_id').val('');
    $('#password_moderator').val('');
    $('#password_attendee').val('');
    $('.ubahFoto').val('');
    $('#imgprev').attr('src', '');

}

$("#datatable").on("click", ".btnDelete", function(){
    id = $(this).data('id');
    aktif = $(this).data('aktif');
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url('Dapur/'); ?>discuss/delete', 
        dataType : "JSON",
        data:{
            is_aktif: aktif,
            id_discussion: id,
            [tokenName]: tokenHash
        },
        beforeSend: function(){
            $("#loading").css('display', 'flex');
        },
        success: function(data){ 
            getToken();
            $("#msg").text("Berhasil update data");
            $(".notice").removeClass('alert-danger').addClass('alert-success');
            $(".notice").fadeIn( 100 );     
            setTimeout(() => {
                $( ".notice" ).fadeOut( 3000 );    
            }, 2000);
           
            showTransaksi(statusPage);
        },
        complete:function(data){
            
        },
        error: function(){
            getToken(); 
            $("#msg").text("Error menambah data");
            $(".notice").removeClass('alert-success').addClass('alert-danger');
            $(".notice").fadeIn( 100 );     
            setTimeout(() => {
                $( ".notice" ).fadeOut( 3000 );    
            }, 2000);   

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


$("#id_teacher_course").select2({
    ajax: {
        url: "<?=base_url('Dapur/discuss/')?>showteacher",
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
        url: '<?php echo base_url('Dapur/'); ?>discuss/showdata', 
        dataType : "JSON",
        data:{
            id: id
        },
        success: function(data){ 
            $.each(data.data, function(i, item) {

                var dataSelect = $('#id_teacher_course');
                $.ajax({
                    type: 'GET',
                    url: "<?=base_url('Dapur/discuss/')?>showteacher?id="+item.id_teacher_course,
                }).then(function (data) {
                    // create the option and append to Select2
                    data = JSON.parse(data);
                    // console.log(data[0].text);
                    var option = new Option(data[0].text, data[0].id, true, true);
                    dataSelect.append(option).trigger('change');

                    dataSelect.trigger({
                        type: 'select2:select',
                        params: {
                            data: data[0]
                        }
                    });
                });

                // $('#id_teacher_course').val(item.id_teacher_course).change();
                $('#id').val(item.id_discussion);
                $('#name').val(item.name);
                date = new Date(item.date);
                newDate = date.getFullYear()+'-'+String(date.getMonth()).padStart(2, "0")+'-'+String(date.getDate()).padStart(2, "0")+' '+String(date.getHours()).padStart(2, "0")+':'+String(date.getMinutes()).padStart(2, "0");
                $('#tanggal').val(newDate);
                localImage = '';
                $('#name').val(item.name);
                $('#deskripsi').val(item.description);
                $('#room_id').val(item.room_id);
                $('#password_moderator').val(item.password_moderator);
                $('#password_attendee').val(item.password_attendee);
                 
             
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
        url: '<?php echo base_url('Dapur/'); ?>discuss/showdata', 
        dataType : "JSON",
        data:{
            page:page,
            aktif:$('#aktif').find(':selected').val(),
            jenis:$('#jenis').find(':selected').val(),
            q:$('#search').val()
        },
        beforeSend: function(){
            $("#loading").css('display', 'flex');

        },
        success: function(data){ 
            html = "";
            $.each(data.data, function(i, item) {
            html += '    <tr>';
            html += '        <td>'+item.id_discussion+'</td>';
            html += '       <td>'+item.name+'</td>';
            html += '         <td>'+item.course_name+'</td>';
            html += '         <td> '+item.teacher_name+'</td>';

            if (item.is_aktif == 1) {
                status = '<span class="badge badge-info">Aktif</span>';
            } else if(item.is_aktif == 2) {
                status = '<span class="badge badge-secondary">Tidak Aktif</span>';
            } else if(item.is_aktif == 3) {
                status = '<span class="badge badge-danger">Selesai</span>';
            } else {
                status = "-";
            }
             
            html += '         <td> <img src="<?php echo $this->CI->config->item('bisaUrl')."course/media/";?>'+item.photo+'" style="width:50px"></td>';
            html += '         <td>'+status+'</td>'; 
            html += '         <td> ';
            if (item.is_aktif == 1) {
                html += '<a class="btn btn-sm btn-danger btnDelete" data-id="'+item.id_discussion+'" data-aktif="2" title="Ubah ke tidak aktif" > <i class="fa fa-trash" aria-hidden="true"></i></a>';
                html += ' <a class="btn btn-sm btn-secondary btnDelete" data-id="'+item.id_discussion+'" data-aktif="3" title="Ubah ke pending"> <i class="fas fa-exclamation-triangle"></i></a>';
            } else if(item.is_aktif == 2) {
                html += '<a class="btn btn-sm btn-success btnDelete" data-id="'+item.id_discussion+'" data-aktif="1" title="Ubah ke aktif"> <i class="fa fa-check" aria-hidden="true"></i></a>';
            } else {
                html += '<a class="btn btn-sm btn-success btnDelete" data-id="'+item.id_discussion+'" data-aktif="1" title="Ubah ke aktif"> <i class="fa fa-check" aria-hidden="true"></i></a>';
            } 
            html += ' <a data-id="'+item.id_discussion+'" data-name="wkwkland" class="btn btn-sm btn-primary btnEdit" ><i class="fa fa-pencil-alt" aria-hidden="true"></i></a> </td>';
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
 


