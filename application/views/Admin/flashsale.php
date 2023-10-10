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
        </select>
        
    </div>
    <div class="col-md-4">
        <select class="form-control" id="filterCourse" style="width: 100%;">
            <option value="">Semua Course</option>
        </select>
    </div>
    <!-- <div class="col-md-4">
        <input type="text" placeholder="Search" id="search" class="form-control">   
    </div> -->
</div>
 
<table class="table table-bordered table-striped">
  <thead class="bg-secondary text-white">
    <tr>
      <th scope="col">ID Flash Sale</th>
      <th scope="col">ID Course</th>
      <th scope="col">Current Quantity</th>
      <th scope="col">Quantity</th>
      <th scope="col">Expired Date</th>
      <th scope="col">Status</th>
      <!-- <th scope="col">Action</th> -->
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

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                <div class="row">
                    <!-- Bawah -->
                    <input type="hidden" class="form-control" id="id_syllabus" >
                    
                    <div class="col-md-12 col-sm-12 p-3">
                        <div class="form-group">
                            <label for="">Pilih Course</label>
                            <select class="form-control" id="id_course" style="width: 100%;">
                                <option value="">Pilih Data</option>
                            </select> 
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Date Expire</label>
                            <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                    <input type="text" id="tanggal" class="form-control datetimepicker-input" data-target="#datetimepicker1" readonly/>
                                    <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Diskon</label>
                            <input type="number" class="form-control" id="discount_amount" min="0" placeholder="Diskon (0-100)">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Kuantitas</label>
                            <input type="number" class="form-control" id="quantity" min="0" placeholder="Kuantitas Flash Sale">
                        </div>


                    </div>

                    
                    <!-- End bawah -->
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
$this->load->view('Admin/Templates/editor', FALSE);
?>

<script>

$('#datetimepicker1').datetimepicker({
    icons: {
        time: "far fa-clock",
        date: "fa fa-calendar",
        up: "fa fa-arrow-up",
        down: "fa fa-arrow-down"
    },
    format: 'YYYY-MM-DD HH:mm:ss'
});


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
    taskTime = ($('#task_time').val() == "") ? "0": $('#task_time').val();
    passing_grade = ($('#passing_grade').val() == "") ? "0": $('#passing_grade').val();
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url('Dapur/'); ?>flashsale/save', 
        dataType : "JSON",
        data:{
            id_course: $('#id_course').find(":selected").val(),
            expired_at: $('#tanggal').val(),
            discount_amount: $('#discount_amount').val(),
            quantity: $('#quantity').val(),
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
            $('#id_course').val('');
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
    editor.setData('');
    editor2.setData('');
    $('#order').val(1);
    $('#task_time').val(0);
    $('#video').val('');
    $('#name').val('');
    $('#id_syllabus').val('');     
    $('#passing_grade').val(0);     
}

$("#datatable").on("click", ".btnDelete", function(){
    id = $(this).data('id');
    aktif = $(this).data('aktif');
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url('Dapur/'); ?>flashsale/delete', 
        dataType : "JSON",
        data:{
            is_aktif: aktif,
            id_syllabus: id,
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

$( "#filterCourse" ).change(function() {
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


$("#filterCourse").select2({
    ajax: {
        url: "<?=base_url('Dapur/flashsale/')?>showcourse",
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
        url: "<?=base_url('Dapur/flashsale/')?>showcourse",
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
        url: '<?php echo base_url('Dapur/'); ?>flashsale/showdata', 
        dataType : "JSON",
        data:{
            id: id
        },
        success: function(data){ 
            $.each(data.data, function(i, item) {

                var dataSelect = $('#id_course');
                $.ajax({
                    type: 'GET',
                    url: "<?=base_url('Dapur/flashsale/')?>showcourse?id="+item.id_course,
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
                    
                $('#id_syllabus').val(item.id_syllabus);
                $('#order').val(item.no_order);
                $('#task_time').val(item.task_time);
                $('#video').val(item.video);
                $('#name').val(item.name);
                $('#passing_grade').val(item.passing_grade);
                  
                editor2.setData(item.theory);
                editor.setData(item.task);
                 
             
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
        url: '<?php echo base_url('Dapur/'); ?>flashsale/showdata', 
        dataType : "JSON",
        data:{
            page:page,
            aktif:$('#aktif').find(':selected').val(),
            course:$('#filterCourse').find(':selected').val(),
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
            html += '        <td>'+item.id_flashsale+'</td>';
            html += '       <td>'+item.id_course+'</td>';
            html += '         <td>'+item.current_quantity+'</td>';
            html += '         <td> '+item.quantity+'</td>';

            if (item.status == 1) {
                status = '<span class="badge badge-info">Aktif</span>';
            } else if(item.status == 2) {
                status = '<span class="badge badge-secondary">Tidak Aktif</span>';
            } else {
                status = "-";
            }
             
            html += '         <td>'+item.expired_at+'</td>';
            html += '         <td>'+status+'</td>'; 
            // html += '         <td> ';
            // if (item.is_aktif == 1) {
            //     html += '<a class="btn btn-sm btn-danger btnDelete" data-id="'+item.id_syllabus+'" data-aktif="2" title="Ubah ke tidak aktif" > <i class="fa fa-trash" aria-hidden="true"></i></a>';
            //     html += ' <a class="btn btn-sm btn-secondary btnDelete" data-id="'+item.id_syllabus+'" data-aktif="3" title="Ubah ke pending"> <i class="fas fa-exclamation-triangle"></i></a>';
            // } else if(item.is_aktif == 2) {
            //     html += '<a class="btn btn-sm btn-success btnDelete" data-id="'+item.id_syllabus+'" data-aktif="1" title="Ubah ke aktif"> <i class="fa fa-check" aria-hidden="true"></i></a>';
            // } else {
            //     html += '<a class="btn btn-sm btn-success btnDelete" data-id="'+item.id_syllabus+'" data-aktif="1" title="Ubah ke aktif"> <i class="fa fa-check" aria-hidden="true"></i></a>';
            // } 
            // html += ' <a data-id="'+item.id_syllabus+'"   class="btn btn-sm btn-primary btnEdit" ><i class="fa fa-pencil-alt" aria-hidden="true"></i></a>  ';
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
 


