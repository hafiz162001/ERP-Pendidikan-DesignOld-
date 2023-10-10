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
            <option value="">Semua Jenis Certificate</option>
            <option value="1"> Profesional </option>
            <option value="2"> Industry </option>
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
      <th scope="col">Partner</th>
      <th scope="col">Tipe</th>
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
  
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                <div class="row">
                    <!-- bagian kiri -->
                    <div class="col-md-6 col-sm-12 p-3">
                        <input type="hidden" class="form-control" id="id_certificate">
                        
                        <div class="form-group">
                            <label for="">Nama Certficate</label>
                            <input type="text" class="form-control" id="name" placeholder="Nama Sertifikat">
                        </div>

                        <div class="form-group" style="display: none;">
                            <label for="">Passing Grade</label>
                            <input type="number" value="0" class="form-control" id="grade" placeholder="Passing grade batas kelulusan">
                        </div>
                    
                        <div class="form-group">
                            <img class="rounded" id="imgprev" src="" style="width: 100%; max-width: 100px">
                        </div>

                        <div class="form-group">
                            <label for="">Foto Certificate</label>
                            <input type='file' class='ubahFoto form-control-file' accept=".png, .jpg, .jpeg, .PNG, .JPG, .JPEG" />
                        </div>

                        <div class="form-group">
                            <img class="rounded" id="imgprev2" src="" style="width: 100%; max-width: 100px">
                        </div>

                        <div class="form-group">
                            <label for="">Logo / Lambang Certificate</label>
                            <input type='file' class='ubahFoto2 form-control-file' accept=".png, .jpg, .jpeg, .PNG, .JPG, .JPEG" />
                        </div>

                    </div>
                    <!-- end kiri -->
                    <!-- bagian kanan -->
                    <div class="col-md-6 col-sm-12 p-3">
                        <div class="form-group">
                            <label for="kelas">Jenis</label>
                            <select class="form-control" id="jenis_cert">
                                <option value="1">Profesional</option>
                                <option value="2">Industry</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Kategori</label>
                            <select class="form-control" id="kategori" style="width: 100%;">
                                <option value="">Pilih Data</option>
                            </select> 
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Partner</label>
                            <select class="form-control" id="partner" style="width: 100%;">
                                <option value="">Pilih Data</option>
                            </select>
                        </div>

                    </div>
                    <!-- end kanan -->
                    <!-- Bawah -->
                    
                    <div class="col-md-12 col-sm-12">

                        <div class="form-group">
                        <label for="exampleFormControlInput1">Info Singkat</label>
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
                        <label for="exampleFormControlInput1">Deskripsi Lengkap</label>
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
                            <input type="number" class="form-control" id="price" placeholder="Harga normal" value="0">
                        </div>
                    </div>
                     
                    <!-- end kiri -->
                    <!-- bagian kanan -->
                    <div class="col-md-6 col-sm-12 p-3">
                        <div class="form-group">
                            <label for="kelas">Tentukan Harga Diskon ?</label>
                            <select class="form-control" id="is_diskon">
                                <option value="2">Tidak</option>
                                <option value="1">Diskon</option>
                            </select>
                        </div>

                        <div class="col-md-6 col-sm-12 p-3">
                            <div class="form-group">
                                <label for="exampleFormControlInput1"> Harga Diskon</label>
                                <input type="number" class="form-control" id="price_disc" placeholder="Price Diskon" value="0">
                            </div>
                        </div>

                    </div>
                    <!-- end kanan -->
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
var localImage2 = "";
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

$(".ubahFoto2").on('change',function(){
    var selectedFile = this.files[0];
    selectedFile.convertToBase64(function(base64){
        var findLeng = base64.split(';base64,')[0].length + 8;
        var cleanbase = base64.substring(findLeng);
        localImage2 = cleanbase;
        $('#imgprev2').attr('src', base64);
    }) 
});

$(".ubahFoto").on('change',function(){
    var selectedFile = this.files[0];
    selectedFile.convertToBase64(function(base64){
        var findLeng = base64.split(';base64,')[0].length + 8;
        var cleanbase = base64.substring(findLeng);
        localImage = cleanbase;
        $('#imgprev').attr('src', base64);
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
        url: '<?php echo base_url('Dapur/'); ?>certificate/save', 
        dataType : "JSON",
        data:{
            id_certification_partner : $('#partner').find(":selected").val(),
            id_certification : $('#id_certificate').val(),
            id_certification_category : $('#kategori').find(":selected").val(),
            nama : $('#name').val(),
            info_singkat : editor2.getData(),
            deskripsi : editor.getData(),
            tipe : $('#jenis_cert').find(":selected").val(),
            harga : $('#price').val(),
            harga_diskon : $('#price_disc').val(),
            is_diskon : $('#is_diskon').find(":selected").val(),
            passing_grade : $('#grade').val(),
            foto : localImage2,
            foto_sertifikat : localImage,
            is_aktif : 1,
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
    $('#id_cetificate').val('');
    $('#partner').val('');
    $('#kategori').val(''),
    $('#name').val('');
    $('#jenis_cert').val(1);
    $('#price').val('0');
    $('#price_disc').val('0');
    $('#is_diskon').val(2);
    $('#grade').val('');
    localImage2 = "";
    localImage = "";
}

$("#datatable").on("click", ".btnDelete", function(){
    id = $(this).data('id');
    aktif = $(this).data('aktif');
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url('Dapur/'); ?>certificate/course_flag', 
        dataType : "JSON",
        data:{
            is_aktif: aktif,
            id_certification: id,
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

$("#kategori").select2({
    ajax: {
        placeholder: 'pilih data kategori',
        url: "<?=base_url('Dapur/certificate/')?>showkategori",
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

$("#partner").select2({
    ajax: {
        url: "<?=base_url('Dapur/certificate/')?>showpartner",
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
        url: '<?php echo base_url('Dapur/'); ?>certificate/showdata', 
        dataType : "JSON",
        data:{
            id: id
        },
        success: function(data){ 
            $.each(data.data, function(i, item) {
                
            var dataSelect = $('#kategori');
            $.ajax({
                type: 'GET',
                url: "<?=base_url('Dapur/certificate/')?>showkategori?id="+item.id_certification_category,
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
            var dataSelect2 = $('#partner');
            $.ajax({
                type: 'GET',
                url: "<?=base_url('Dapur/certificate/')?>showpartner?id="+item.id_certification_partner,
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

            editor.setData(item.deskripsi);
            editor2.setData(item.info_singkat);
            $('#id_certificate').val(item.id_certification);

            $('#name').val(item.nama);
            $('#jenis_cert').val(item.tipe);
            $('#price').val(item.harga);
            $('#price_disc').val(item.harga_diskon);
            $('#is_diskon').val(item.is_diskon);
            $('#grade').val(0); 
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
        url: '<?php echo base_url('Dapur/'); ?>certificate/showdata', 
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
            html += '        <td>'+item.id_certification+'</td>';
            html += '       <td>'+item.nama+'</td>';
            html += '         <td>Rp '+item.harga.toLocaleString();+'</td>';
            html += '         <td>'+item.nama_partner+'</td>';
            if (item.tipe == 1) {
                kelas = '<span class="badge badge-primary">Profesional</span>';
            } else if (item.tipe ==2) {
                kelas = '<span class="badge badge-success">Industri</span>';
            } else {
                kelas = '<span class="badge badge-danger">-</span>';
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
            html += '         <td><img src="<?php echo $this->CI->config->item('bisaUrl')."certification/media/foto_certification/";?>'+item.foto+'" style="width:50px"></td>';
            html += '         <td>'+status+'</td>';
            html += '         <td> ';
            if (item.is_aktif == 1) {
                html += '<a class="btn btn-sm btn-danger btnDelete" data-id="'+item.id_certification+'" data-aktif="2" title="Ubah ke tidak aktif" > <i class="fa fa-trash" aria-hidden="true"></i></a>';
                html += ' <a class="btn btn-sm btn-secondary btnDelete" data-id="'+item.id_certification+'" data-aktif="3" title="Ubah ke pending"> <i class="fas fa-exclamation-triangle"></i></a>';
            } else if(item.is_aktif == 2) {
                html += '<a class="btn btn-sm btn-success btnDelete" data-id="'+item.id_certification+'" data-aktif="1" title="Ubah ke aktif"> <i class="fa fa-check" aria-hidden="true"></i></a>';
            } else {
                html += '<a class="btn btn-sm btn-success btnDelete" data-id="'+item.id_certification+'" data-aktif="1" title="Ubah ke aktif" > <i class="fa fa-check" aria-hidden="true"></i></a>';   
            }
            html += ' <a data-id="'+item.id_certification+'" data-name="wkwkland" class="btn btn-sm btn-primary btnEdit" ><i class="fa fa-pencil-alt" aria-hidden="true"></i></a> </td>';
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
 


