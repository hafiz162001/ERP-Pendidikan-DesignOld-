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
        <select class="form-control" id="jenis">
            <option value="">Semua Jenis Course</option>
            <option value="1"> FREE </option>
            <option value="2"> Master Class</option>
            <option value="3"> OJT</option>
            <option value="4"> Live Academy</option>
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
      <th scope="col" style="width: 20%;">Nama Course</th>
      <th scope="col">Price</th>
      <th scope="col">Arranged by</th>
      <th scope="col">Kelas</th>
      <th scope="col" style="width: 20px;">Images</th>
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
            <a class="nav-link" id="priceTab-tab" data-toggle="tab" href="#priceTab" role="tab" aria-controls="profile" aria-selected="false">Price</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="task-tab" data-toggle="tab" href="#task" role="tab" aria-controls="task" aria-selected="false">Task</a>
        </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                <div class="row">
                    <!-- bagian kiri -->
                    <div class="col-md-6 col-sm-12 p-3">
                        <input type="hidden" class="form-control" id="id_course">
                        
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Course</label>
                            <input type="text" class="form-control" id="name" placeholder="Nama course">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Arranged by</label>
                            <input type="text" class="form-control" id="arranged_by" placeholder="Arranged by">
                        </div>
                    
                        <div class="form-group">
                            <img class="rounded" id="imgprev" src="" style="width: 100%; max-width: 100px">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Foto</label>
                            <input type='file' class='ubahFoto form-control-file' accept=".png, .jpg, .jpeg, .PNG, .JPG, .JPEG" />
                        </div>

                    </div>
                    <!-- end kiri -->
                    <!-- bagian kanan -->
                    <div class="col-md-6 col-sm-12 p-3">
                        <div class="form-group">
                            <label for="">Pilih Clients</label>
                            <select class="form-control" id="clients" style="width: 100%;">
                                <option value="">Pilih Data</option>
                            </select> 
                        </div>

                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <select class="form-control" id="kelas">
                                <option value="1">Pemula</option>
                                <option value="2">Medium</option>
                                <option value="3">Mahir</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="ojt">Apakah OJT?</label>
                            <select class="form-control" id="ojt">
                                <option value="1">OJT</option>
                                <option value="2">Tidak OJT</option>
                                <option value="3">Live Academy</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Master Sertifikat</label>
                            <select class="form-control" id="sertifikat" style="width: 100%;">
                                <option value="">Pilih Data</option>
                            </select>
                        </div>

                    </div>
                    <!-- end kanan -->
                    <!-- Bawah -->
                    
                    <div class="col-md-12 col-sm-12">

                        <div class="form-group">
                        <label for="exampleFormControlInput1">Info</label>
                            <!-- <input type="text" class="form-control" id="info" placeholder="info"> -->
                            <div class="centered" style="padding: 0px 15px;">
                                <div class="row">
                                    <div class="document-editor__toolbar2"></div>
                                </div>
                                <div class="row row-editor">
                                    <div class="editor-container">
                                        <div class="editor_info" style="border: 1px solid #757575;">
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="exampleFormControlInput1">Deskripsi</label>
                            <div class="centered p-3" >
                                <div class="row">
                                    <div class="document-editor__toolbar"></div>
                                </div>
                                <div class="row row-editor">
                                    <div class="editor-container">
                                        <div class="editor" style="border: 1px solid #757575;">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End bawah -->
                </div>
            </div>
            <div class="tab-pane fade" id="priceTab" role="tabpanel" aria-labelledby="price-tab">
                <div class="row">
                    <!-- bagian kiri -->
                    <div class="col-md-6 col-sm-12 p-3">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Price</label>
                            <input type="number" class="form-control" id="price" placeholder="price" value="0">
                        </div>

                    </div>

                    <div class="col-md-6 col-sm-12 p-3">
                        <div class="form-group">
                            <label for="exampleFormControlInput1"> Price Bisa Ai</label>
                            <input type="number" class="form-control" id="price_bisaai" placeholder="Price BISA AI" value="0">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 p-3">
                        <div class="form-group">
                            <label for="exampleFormControlInput1"> Harga Diskon</label>
                            <input type="number" class="form-control" id="price_disc" placeholder="Price Diskon" value="0">
                        </div>
                    </div>

                     
                    <!-- end kiri -->
                    <!-- bagian kanan -->
                    <div class="col-md-6 col-sm-12 p-3">
                        <div class="form-group">
                            <label for="is_disc">Diskon</label>
                            <select class="form-control" id="is_disc">
                                <option value="2">Tidak</option>
                                <option value="1">Ya</option>
                            </select>
                        </div>

                    </div>
                    <!-- end kanan -->
                </div>
            </div>
            <div class="tab-pane fade" id="task" role="tabpanel" aria-labelledby="task-tab">
                <div class="row">
                    <!-- bagian kiri -->
                    <div class="col-md-6 col-sm-12 p-3">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Task Description</label>
                            <textarea class="form-control" name="" id="taskDesk" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Task time</label>
                            <input type="number" class="form-control" id="task_time" placeholder="Task time" value="0">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Task punishment</label>
                            <input type="number" class="form-control" id="task_punish" placeholder="Task punishment" value="0">
                        </div>
                    </div>
                    <!-- end kiri -->
                    <!-- bagian kanan -->
                    <div class="col-md-6 col-sm-12 p-3">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Points</label>
                            <input type="number" class="form-control" id="points" placeholder="Point" value="0">
                        </div>
                    </div>
                    <!-- end kanan -->
                </div>
            </div>
        </div>

<!-- 
            <div class="row">
                <div class="col-md-6 col-sm-12 p-3">
    
                    
                    
                    
                </div>
                <div class="col-md-6 col-sm-12 p-3">
                    
                    
                    

                    
                </div>
                
            </div>
         -->
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

var editor2;
DecoupledDocumentEditor
    .create( document.querySelector( '.editor_info' ), {
        
    toolbar: {
        items: [
            'heading',
            '|',
            'fontSize',
            'fontFamily',
            '|',
            'fontColor',
            'fontBackgroundColor',
            '|',
            'bold',
            'italic',
            'underline',
            'strikethrough',
            '|',
            'alignment',
            '|',
            'numberedList',
            'bulletedList',
            '|',
            'outdent',
            'indent',
            '|',
            'todoList',
            'link',
            'blockQuote',
            'insertTable',
            'mediaEmbed',
            '|',
            'undo',
            'redo',
            'imageUpload'
        ]
    },
    language: 'en',
    image: {
        toolbar: [
            'imageTextAlternative',
            'imageStyle:inline',
            'imageStyle:block',
            'imageStyle:side'
        ]
    },
    table: {
        contentToolbar: [
            'tableColumn',
            'tableRow',
            'mergeTableCells',
            'tableCellProperties',
            'tableProperties'
        ]
    },
        licenseKey: '',
    })
    .then( editor2 => {
        window.editor2 = editor2;
        editor2 = editor2;
        // Set a custom container for the toolbar.
        document.querySelector( '.document-editor__toolbar2' ).appendChild( editor2.ui.view.toolbar.element );
        document.querySelector( '.ck-toolbar' ).classList.add( 'ck-reset_all' );
    } )
    .catch( error => {
        console.error( error );
} );
$(document).ready(function(){

// $( '#modalAdd' ).modal( {
//     focus: false
// } );
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
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url('Dapur/'); ?>course/savecourse', 
        dataType : "JSON",
        data:{
            id_client: $('#clients').find(":selected").val(),
            name: $('#name').val(),
            description: editor.getData(),
            price: $('#price').val(),
            info: editor2.getData(),
            arranged_by:$('#arranged_by').val(), 
            kelas:$('#kelas').val(), 
            task_description: $('#taskDesk').val(),
            task_time: $('#task_time').val(),
            task_punishment: $('#task_punish').val(),
            id_master_sertifikat:$('#sertifikat').find(":selected").val(),
            photo : localImage,
            point: $('#points').val(),
            is_ojt: $('#ojt').val(),
            id_course: $('#id_course').val(),
            price_bisaai: $('#price_bisaai').val(),
            price_disc: $('#price_disc').val(),
            is_disc: $('#is_disk').find(':selected').val(),
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
    $('#name').val('');
    editor.setData('');
    $('#price').val(0);
    editor2.setData('');
    $('#arranged_by').val('');
    $('#kelas').val(1).change(); 
    $('#taskDesk').val('');
    $('#task_time').val(0);
    $('#task_punish').val(0);
    $('#sertifikat').val('');            
    $('#points').val(0);
    $('#ojt').val(1).change();
    $('#price_bisaai').val(0);
    $('#price_disc').val(0);
    $('#is_disk').val(2).change();
}

$("#datatable").on("click", ".btnDelete", function(){
    id = $(this).data('id');
    aktif = $(this).data('aktif');
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url('Dapur/'); ?>course/course_flag', 
        dataType : "JSON",
        data:{
            is_aktif: aktif,
            id_course: id,
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

// $('#clients').select2({
//   ajax: {
//     placeholder: 'Pilih data clients',
//     delay: 1000,
//     minimumInputLength: 3,  
//     url: '<?=base_url('Dapur/course/')?>showclient',
//     processResults: function (data) {
//       return {
//         results: data
//       };
//     }
//   }
// });

$("#clients").select2({
    ajax: {
        placeholder: 'pilih data clients',
        url: "<?=base_url('Dapur/course/')?>showclient",
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

$("#sertifikat").select2({
    ajax: {
        url: "<?=base_url('Dapur/course/')?>showmastercert",
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


$('#search').keyup(delay(function (e) {
    showTransaksi(1);
    statusPage = 1;
}, 1000));

$( "#jenis" ).change(function() {
    showTransaksi(1);
    statusPage = 1;

});

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
        url: '<?php echo base_url('Dapur/'); ?>course/showdata', 
        dataType : "JSON",
        data:{
            id: id
        },
        success: function(data){ 
            $.each(data.data, function(i, item) {
                // $('#clients').select2('data', {id: '123', text: 'Coba saja'});
                // $('#clients').val(item.id_client).trigger('change');
                // $("#clients").select2("trigger", "select", {
                //     data: { id: item.id_client }
                // });
                var dataSelect = $('#clients');
                $.ajax({
                    type: 'GET',
                    url: "<?=base_url('Dapur/course/')?>showclient?id="+item.id_client,
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
                var dataSelect2 = $('#sertifikat');
                $.ajax({
                    type: 'GET',
                    url: "<?=base_url('Dapur/course/')?>showmastercert?id="+item.id_master_sertifikat,
                }).then(function (data) {
                    // create the option and append to Select2
                    data = JSON.parse(data);
                    // console.log(data[0].text);
                    var option = new Option(data[0].text, data[0].id, true, true);
                    dataSelect2.append(option).trigger('change');
                    
                    dataSelect2.trigger({
                        type: 'select2:select',
                        params: {
                            data: data[0]
                        }
                    });
                });
             
            $('#name').val(item.name)
            editor.setData(item.description);
            $('#price').val(item.price);
            editor2.setData(item.info);
            $('#arranged_by').val(item.arranged_by); 
            $('#kelas').val(item.class).change();
            $('#taskDesk').val(item.task_description);
            $('#task_time').val(item.task_time);
            $('#task_punish').val(item.task_punishment);
            $('#points').val(item.point);
            $('#id_course').val(item.id_course);
            $('#ojt').val(item.is_ojt).change();
            $('#price_bisaai').val(item.price_bisaai);
            $('#price_disc').val(item.price_discount);
            $('#is_disk').val(item.is_discount).change();    
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
        url: '<?php echo base_url('Dapur/'); ?>course/showdata', 
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
            html += '        <td>'+item.id_course+'</td>';
            html += '       <td>'+item.name+'</td>';
            html += '         <td>Rp '+item.price.toLocaleString();+'</td>';
            html += '         <td>'+item.arranged_by+'</td>';
            if (item.class == 1) {
                kelas = '<span class="badge badge-primary">Pemula</span>';
            } else if (item.class ==2) {
                kelas = '<span class="badge badge-success">Menengah</span>';
            } else {
                kelas = '<span class="badge badge-danger">Mahir</span>';
            }

            if (item.is_aktif == 1) {
                status = '<span class="badge badge-info">Aktif</span>';
            } else if(item.is_aktif == 2) {
                status = '<span class="badge badge-secondary">Tidak Aktif</span>';
            } else if(item.is_aktif == 3) {
                status = '<span class="badge badge-danger">Pending</span>';
            } else {
                status = "-";
            }

            html += '        <td>'+kelas+'</td>';
            html += '         <td><img src="<?php echo $this->CI->config->item('bisaUrl')."course/media/";?>'+item.photo+'" style="width:50px"></td>';
            html += '         <td>'+status+'</td>';
            html += '         <td> ';
            if (item.is_aktif == 1) {
                html += '<a class="btn btn-sm btn-danger btnDelete" data-id="'+item.id_course+'" data-aktif="2" title="Ubah ke tidak aktif" > <i class="fa fa-trash" aria-hidden="true"></i></a>';
                html += ' <a class="btn btn-sm btn-secondary btnDelete" data-id="'+item.id_course+'" data-aktif="3" title="Ubah ke pending"> <i class="fas fa-exclamation-triangle"></i></a>';
            } else if(item.is_aktif == 2) {
                html += '<a class="btn btn-sm btn-success btnDelete" data-id="'+item.id_course+'" data-aktif="1" title="Ubah ke aktif"> <i class="fa fa-check" aria-hidden="true"></i></a>';
            } else {
                html += '<a class="btn btn-sm btn-success btnDelete" data-id="'+item.id_course+'" data-aktif="1" title="Ubah ke aktif" > <i class="fa fa-check" aria-hidden="true"></i></a>';   
            }
            html += ' <a data-id="'+item.id_course+'" data-name="wkwkland" class="btn btn-sm btn-primary btnEdit" ><i class="fa fa-pencil-alt" aria-hidden="true"></i></a>  ';
            html += ' <a data-id="'+item.id_course+'" href="<?=base_url()?>Dapur/course/testi/'+item.id_course+'" target="_blank" class="btn btn-sm btn-warning" ><i class="fa fa-star" aria-hidden="true"></i></a> </td>';
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
 


