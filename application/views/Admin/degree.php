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
      <th scope="col" style="width: 20%;">Nama Pendidikan</th>
      <th scope="col">Universitas</th>
      <th scope="col">Prodi / Jenjang</th>
      <th scope="col" style="width: 20px;">Images</th>
      <th scope="col">Jenis</th>
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
            <a class="nav-link" id="priceTab-tab" data-toggle="tab" href="#priceTab" role="tab" aria-controls="profile" aria-selected="false">Deskripsi</a>
        </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                <div class="row">
                    <!-- bagian kiri -->
                    <div class="col-md-6 col-sm-12 p-3">
                        <input type="hidden" class="form-control" id="id">
                        
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Pendidikan</label>
                            <input type="text" class="form-control" id="name_degree" placeholder="Nama pendidikan">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Harga Pendaftaran</label>
                            <input type="text" class="form-control" id="harga_pendaftaran" placeholder="Harga pendaftaran">
                        </div>

                        <div class="form-group">
                            <label for="">Univeristas</label>
                            <select class="form-control" id="id_dgr_university" style="width: 100%;">
                                <option value="">Pilih Data</option>
                            </select> 
                        </div>

                        <div class="form-group">
                            <label for="">Tipe Pendidikan</label>
                            <select class="form-control" id="tipe_pendidikan" style="width: 100%;">
                                <option value="1">Pendidikan Jarak jauh</option>
                                <option value="2">Profesional pendidikan</option>
                            </select> 
                        </div>
                         
                    </div>
                    <!-- end kiri -->
                    <!-- bagian kanan -->
                    <div class="col-md-6 col-sm-12 p-3">
                        <div class="form-group">
                            <label for="">Program Studi</label>
                            <select class="form-control" id="id_dgr_program_studi" style="width: 100%;">
                                <option value="">Pilih Data</option>
                            </select> 
                        </div>

                        <div class="form-group">
                            <label for="">Jenjang Pendidikan</label>
                            <select class="form-control" id="id_dgr_jenjang_pendidikan" style="width: 100%;">
                                <option value="">Pilih Data</option>
                            </select> 
                        </div>


                    </div>
                    <!-- end kanan -->
                </div>
            </div>

            <div class="tab-pane fade" id="priceTab" role="tabpanel" aria-labelledby="price-tab">
                <div class="row">
                    <!-- bagian kiri -->
                    <div class="col-md-12 col-sm-12 p-3">
                        
                        <div class="form-group">
                        <label for="">Deskripsi Pendidikan</label>
                            <div class="centered p-3" >
                                <div class="row">
                                    <div class="document-editor__toolbar_1"></div>
                                </div>
                                <div class="row row-editor">
                                    <div class="editor-container">
                                        <div class="editor editor_1" style="border: 1px solid #757575;">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="">Silabus Degree</label>
                            <div class="centered p-3" >
                                <div class="row">
                                    <div class="document-editor__toolbar_2"></div>
                                </div>
                                <div class="row row-editor">
                                    <div class="editor-container">
                                        <div class="editor editor_2" style="border: 1px solid #757575;">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="">Cara Pendaftaran</label>
                            <div class="centered p-3" >
                                <div class="row">
                                    <div class="document-editor__toolbar_3"></div>
                                </div>
                                <div class="row row-editor">
                                    <div class="editor-container">
                                        <div class="editor editor_3" style="border: 1px solid #757575;">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="">Akademik</label>
                            <div class="centered p-3" >
                                <div class="row">
                                    <div class="document-editor__toolbar_4"></div>
                                </div>
                                <div class="row row-editor">
                                    <div class="editor-container">
                                        <div class="editor editor_4" style="border: 1px solid #757575;">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="">Biaya</label>
                            <div class="centered p-3" >
                                <div class="row">
                                    <div class="document-editor__toolbar_5"></div>
                                </div>
                                <div class="row row-editor">
                                    <div class="editor-container">
                                        <div class="editor editor_5" style="border: 1px solid #757575;">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="">Pembelajaran</label>
                            <div class="centered p-3" >
                                <div class="row">
                                    <div class="document-editor__toolbar_6"></div>
                                </div>
                                <div class="row row-editor">
                                    <div class="editor-container">
                                        <div class="editor editor_6" style="border: 1px solid #757575;">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="">Karir</label>
                            <div class="centered p-3" >
                                <div class="row">
                                    <div class="document-editor__toolbar_7"></div>
                                </div>
                                <div class="row row-editor">
                                    <div class="editor-container">
                                        <div class="editor editor_7" style="border: 1px solid #757575;">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
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

<?php for ($i=1; $i < 8; $i++) { ?>

var editor_<?=$i;?>;
    DecoupledDocumentEditor
    .create( document.querySelector( '.editor_<?=$i;?>' ), {
					
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
        .then( editor_<?=$i;?> => {
            window.editor_<?=$i;?> = editor_<?=$i;?>;
            editor_<?=$i;?> = editor_<?=$i;?>;
            // Set a custom container for the toolbar.
            document.querySelector( '.document-editor__toolbar_<?=$i;?>' ).appendChild( editor_<?=$i;?>.ui.view.toolbar.element );
            document.querySelector( '.ck-toolbar' ).classList.add( 'ck-reset_all' );
        } )
        .catch( error => {
            console.error( 'Oops, something went wrong!' );
            console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
            console.warn( 'Build id: bzhj04v2o3op-v1jug7ttv0dp' );
            console.error( error );
        } );

<?php } ?>

$(document).ready(function(){

// $( '#modalAdd' ).modal( {
//     focus: false
// } );
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
        url: '<?php echo base_url('Dapur/'); ?>degree/save', 
        dataType : "JSON",
        data:{
            tipe_pendidikan: $('#tipe_pendidikan').find(":selected").val(),
            id_dgr_university: $('#id_dgr_university').find(":selected").val(),
            id_dgr_jenjang_pendidikan: $('#id_dgr_jenjang_pendidikan').find(":selected").val(),
            id_dgr_program_studi: $('#id_dgr_program_studi').find(":selected").val(),
            nama_degree: $('#name_degree').val(),
            deskripsi_degree: editor_1.getData(),
            silabus_degree: editor_2.getData(),
            cara_pendaftaran: editor_3.getData(),
            academics: editor_4.getData(),
            biaya: editor_5.getData(),
            pembelajaran: editor_6.getData(),
            careers: editor_7.getData(),
            harga_pendaftaran: $('#harga_pendaftaran').val(),
            id_dgr_degree: $('#id').val(),
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
           
            showTransaksi(1);
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
    $('#id').val('');
    $('#name_degree').val('');
    editor_1.setData('');
    editor_2.setData('');
    editor_3.setData('');
    editor_4.setData('');
    editor_5.setData('');
    editor_6.setData('');
    editor_7.setData('');
    $('#harga_pendaftaran').val(0);
    $('#tipe_pendidikan').val(1).change();

    $('#tipe_pendidikan').val('');
    $('#id_dgr_university').val('')
    $('#id_dgr_jenjang_pendidikan').val('');
    $('#id_dgr_program_studi').val('');
 
}

$("#datatable").on("click", ".btnDelete", function(){
    id = $(this).data('id');
    jenis = $(this).data('jenis');
    aktif = $(this).data('aktif');
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url('Dapur/'); ?>degree/delete', 
        dataType : "JSON",
        data:{
            is_aktif: aktif,
            id_dgr_degree: id,
            tipe_pendidikan: jenis,
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
           
            showTransaksi(1);
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

$("#id_dgr_university").select2({
    ajax: {
        url: "<?=base_url('Dapur/degree/')?>univ",
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

$("#id_dgr_jenjang_pendidikan").select2({
    ajax: {
        url: "<?=base_url('Dapur/degree/')?>jenjang",
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

$("#id_dgr_program_studi").select2({
    ajax: {
        url: "<?=base_url('Dapur/degree/')?>prodi",
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
}, 1000));

$( "#jenis" ).change(function() {
    showTransaksi(1);
});

$( "#aktif" ).change(function() {
    showTransaksi(1);
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
        url: '<?php echo base_url('Dapur/'); ?>degree/showdata', 
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
                var dataSelect = $('#id_dgr_university');
                $.ajax({
                    type: 'GET',
                    url: "<?=base_url('Dapur/degree/')?>univ?id="+item.id_dgr_university,
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

                var dataSelect1 = $('#id_dgr_jenjang_pendidikan');
                $.ajax({
                    type: 'GET',
                    url: "<?=base_url('Dapur/degree/')?>jenjang?id="+item.id_dgr_jenjang_pendidikan,
                }).then(function (data) {
                    // create the option and append to Select2
                    data = JSON.parse(data);
                    // console.log(data[0].text);
                    var option = new Option(data[0].text, data[0].id, true, true);
                    dataSelect1.append(option).trigger('change');

                    dataSelect1.trigger({
                        type: 'select2:select',
                        params: {
                            data: data[0]
                        }
                    });
                });

                
                var dataSelect2 = $('#id_dgr_program_studi');
                $.ajax({
                    type: 'GET',
                    url: "<?=base_url('Dapur/degree/')?>prodi?id="+item.id_dgr_program_studi,
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
            // id_dgr_university: $('#id_dgr_university').find(":selected").val(),
            // id_dgr_jenjang_pendidikan: $('#id_dgr_jenjang_pendidikan').find(":selected").val(),
            // id_dgr_program_studi: $('#id_dgr_program_studi').find(":selected").val(),
 
            $('#id').val(item.id_dgr_degree);
            $('#name_degree').val(item.nama_degree);
            editor_1.setData(item.deskripsi_degree);
            editor_2.setData(item.silabus_degree);
            editor_3.setData(item.cara_pendaftaran);
            editor_4.setData(item.academics);
            editor_5.setData(item.biaya);
            editor_6.setData(item.pembelajaran);
            editor_7.setData(item.careers);
            $('#harga_pendaftaran').val(item.harga_pendaftaran);
            $('#tipe_pendidikan').val(item.tipe_pendidikan).change();
                
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
        url: '<?php echo base_url('Dapur/'); ?>degree/showdata', 
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
            html += '        <td>'+item.id_dgr_degree+'</td>';
            html += '       <td>'+item.nama_degree+'</td>';
            html += '         <td>'+item.nama_universitas+'</td>';
            html += '         <td>'+item.nama_program_studi+' <br> / '+item.nama_jenjang_pendidikan+' </td>';
            if (item.tipe_pendidikan == 1) {
                kelas = '<span class="badge badge-primary">Pendidikan jarak jauh</span>';
            } else if (item.tipe_pendidikan ==2) {
                kelas = '<span class="badge badge-success">Pendidikan profesional</span>';
            } else {
                kelas = '<span class="badge badge-danger">-</span>';
            }

            if (item.is_aktif == 1) {
                status = '<span class="badge badge-success">Aktif</span>';
            } else if(item.is_aktif == 2) {
                status = '<span class="badge badge-secondary">Tidak Aktif</span>';
            } else {
                status = "-";
            }

            html += '         <td><img src="<?php echo $this->CI->config->item('bisaUrl')."degree/media/foto_universitas/";?>'+item.foto_universitas+'" style="width:50px"></td>';
            html += '        <td>'+kelas+'</td>';
            html += '         <td>'+status+'</td>';
            html += '         <td> ';
            if (item.is_aktif == 1) {
                html += '<a class="btn btn-sm btn-danger btnDelete" data-id="'+item.id_dgr_degree+'" data-jenis="'+item.tipe_pendidikan+'" data-aktif="2" > <i class="fa fa-trash" aria-hidden="true"></i></a>';
            } else if(item.is_aktif == 2) {
                html += '<a class="btn btn-sm btn-success btnDelete" data-id="'+item.id_dgr_degree+'" data-jenis="'+item.tipe_pendidikan+'" data-aktif="1" > <i class="fa fa-check" aria-hidden="true"></i></a>';
            } else {
                html += '<a class="btn btn-sm btn-success btnDelete" data-id="'+item.id_dgr_degree+'" data-jenis="'+item.tipe_pendidikan+'" data-aktif="1" > <i class="fa fa-check" aria-hidden="true"></i></a>';   
            }
            html += ' <a data-id="'+item.id_dgr_degree+'" data-jenis="'+item.tipe_pendidikan+'" class="btn btn-sm btn-primary btnEdit" ><i class="fa fa-pencil-alt" aria-hidden="true"></i></a> </td>';
            html += '     </tr>';
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
 


