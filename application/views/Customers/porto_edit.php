<?php
$this->load->view('Templates/Link-css');
$this->load->view('Templates/Navbar'); 
$this->CI = &get_instance();
?>

<style>
    
.editor__editable,
/* Classic build. */
main .ck-editor[role='application'] .ck.ck-content,
/* Decoupled document build. */
.ck.editor__editable[role='textbox'],
.ck.ck-editor__editable[role='textbox'],
/* Inline & Balloon build. */
.ck.editor[role='textbox'] {
	width: 100%;
	background: #fff;
	font-size: 1em;
	line-height: 1.6em;
	min-height: var(--ck-sample-editor-min-height);
	padding: 1.5em 2em;
}

main .ck-editor[role='application'] {
	overflow: auto;
}

.ck.ck-editor__editable {
	background: #fff;
	border: 1px solid hsl(0, 0%, 70%);
	width: 100%;
}

/* Because of sidebar `position: relative`, Edge is overriding the outline of a focused editor. */
.ck.ck-editor__editable {
	position: relative;
	z-index: var(--ck-sample-editor-z-index);
}

.editor-container {
	display: flex;
	flex-direction: row;
    flex-wrap: nowrap;
    position: relative;
	width: 100%;
	justify-content: center;
}

.document-editor__toolbar{
    width: 100%;
}
.modal.modal-full .modal-dialog {
  width: 100%;
  /* height: 100vh; */
  margin: 0;
  padding: 0;
  max-width: none; 
  padding: 20px;
}

.modal.modal-full .modal-content {
  margin-top: 20px;
  height: auto;
  /* height: 100vh; */
  border-radius: 0;
  border: none; 
}

.modal.modal-full .modal-body {
  overflow-y: auto; 
}
.ck.ck-balloon-panel.ck-balloon-panel_visible {
    z-index: 9999!important;
}
</style>

<section class="bg-light mt-5 py-5">
    <div class="container mt-2">
        <div class="row d-flex">
            <div class="col-sm-12 col-md-12">
                <a class="btn btn-primary d-block d-md-inline-block mt-3 mb-4" href="<?=base_url()?>portofolioku"
                    role="button"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali </a>

                <!-- <a class="btn btn-warning d-block d-md-inline-block mt-3 mb-4" href="<?=base_url()?>portofolioku/edit"
                    role="button"> <i class="fa fa-pencil-alt" aria-hidden="true"></i> Edit </a> -->
                <h1> Edit <?=$data['nama_portofolio']?> </h1>
                <p class="mt-4">
                    <!-- <img src="<?=base_url()?>assets/img/2022/logo 1.jpg" alt="Second slide" style="height:100px">
                    <img src="<?=base_url()?>assets/img/2022/Screen Shot 2022-03-27 at 09.09.14.png" alt="Second slide" style="height:100px">
                    <img src="<?=base_url()?>assets/img/2022/plus.png" alt="Add" style="height:50px; border: 2px solid grey; border-radius: 50%; cursor: pointer"> -->

                    <!-- <div class="form-group mt-3">
                        <label for="file">Tambah Foto Portofolio</label>
                        <input type="file" class="ubahFoto form-control-file" accept=".png, .jpg, .jpeg, .PNG, .JPG, .JPEG">
                    </div> -->
                    <div class="row">
                        <div class="col">
                            <div id="" style="margin: auto; width:100%; max-width: 200px">
                                <img class="rounded" id="imgprev1" src="<?php $foto = ($data['carousel1'] == "" || $data['carousel1'] == null) ? base_url()."assets/images/blankdoc.jpg" : $this->CI->config->item('bisaUrl')."portofolio/media/carousel_portofolio/".$data['carousel1']; echo $foto;?>" style="width: 100%;"> 
                            </div>

                            <div class="form-group mt-3">
                                <label for="file">Ubah Foto Project (max 2Mb)</label>
                                <input type='file' class='ubahFoto1 form-control-file' accept=".png, .jpg, .jpeg, .PNG, .JPG, .JPEG" />
                            </div>
                        </div>

                        <div class="col">
                            <div id="" style="margin: auto; width:100%; max-width: 200px">
                                <img class="rounded" id="imgprev2" src="<?php $foto = ($data['carousel2'] == "" || $data['carousel2'] == null) ? base_url()."assets/images/blankdoc.jpg" : $this->CI->config->item('bisaUrl')."portofolio/media/carousel_portofolio/".$data['carousel1']; echo $foto;?>" alt="" style="width: 100%;"> 
                            </div>


                            <div class="form-group mt-3">
                                <label for="file">Ubah Foto Project (max 2Mb)</label>
                                <input type='file' class='ubahFoto2 form-control-file' accept=".png, .jpg, .jpeg, .PNG, .JPG, .JPEG" />
                            </div>
                        </div>

                        <div class="col">
                            <div id="" style="margin: auto; width:100%; max-width: 200px">
                                <img class="rounded" id="imgprev3" src="<?php $foto = ($data['carousel3'] == "" || $data['carousel3'] == null) ? base_url()."assets/images/blankdoc.jpg" : $this->CI->config->item('bisaUrl')."portofolio/media/carousel_portofolio/".$data['carousel3']; echo $foto;?>" alt="" style="width: 100%;"> 
                            </div>


                            <div class="form-group mt-3">
                                <label for="file">Ubah Foto Project (max 2Mb)</label>
                                <input type='file' class='ubahFoto3 form-control-file' accept=".png, .jpg, .jpeg, .PNG, .JPG, .JPEG" />
                            </div>
                        </div>


                    </div>
                </p>
            </div>

        </div>

    </div>
</section>

<section class="mt-3 mb-5">
    <div class="container">
        <h3 class="nsans-700 text-hitam-custom text-shadow-2 text-left pb-3">Detail Portofolio</h3>
        <div class="card shadow box-shadow">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Nama Portofolio</label>
                    <input type="text" class="form-control" name="" value="<?=$data['nama_portofolio']?>" id="nama" aria-describedby="helpId" placeholder="Portofolio" maxlength="50">
                    <small id="helpId" class="form-text text-muted">Nama Portofolio, Maksimal 50 Karakter</small>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Deskripsi Singkat</label>
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
                  <label for="">Pilih course yang sudah berhasil / lulus</label>
                  <select class="form-control" name="" id="id_course">
                      <?php foreach ($course['data'] as $key => $val) {
                          
                          if ($data['id_customer_course'] == $val['id_customer_course']) {
                            $sel = "selected";
                          } else {
                            $sel = "";
                          }

                          echo "<option ".$sel." value='".$val['id_customer_course']."'>".$val['nama_course']."</option>";
                      }?>
                    
                  </select>
                </div>

                <div class="">
                    <div id="" style="margin: auto; width:100%; max-width: 200px">
                        <img class="rounded" id="imgprev4" src="<?php $foto = ($data['foto_portofolio'] == "" || $data['foto_portofolio'] == null) ? base_url()."assets/images/blankdoc.jpg" : $this->CI->config->item('bisaUrl')."portofolio/media/foto_portofolio/".$data['foto_portofolio']; echo $foto;?>" alt="" style="width: 100%;"> 
                    </div>


                    <div class="form-group mt-3">
                        <label for="file">Foto portofolio (max 2Mb)</label>
                        <input type='file' id="fotoku" class='ubahFoto4 form-control-file' accept=".png, .jpg, .jpeg, .PNG, .JPG, .JPEG" />
                    </div>
                </div>


                <div class="form-group">
                  <label for="">Pilih Kategori</label>
                  <select class="form-control" name="" id="kategori">
                    <?php foreach ($kategori['data'] as $key => $val) {
                        if ($data['id_kategori_portofolio'] == $val['id_kategori_portofolio']) {
                            $sel = "selected";
                          } else {
                            $sel = "";
                          }

                          echo "<option ".$sel." value='".$val['id_kategori_portofolio']."'>".$val['nama_kategori_portofolio']."</option>";
                      }?>
                  </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Deskripsi Lengkap</label>
                    <div class="centered p-3">
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

                <div class="save text-center saveloading" id="saveloading" style="display: none;">
                    <div class="lds-facebook"><div></div><div></div><div></div></div>
                    <div>Proses mengunggah data</div>
                </div>

                <div class="saveErr alert alert-danger text-center" id="saveErr" style="display: none; border: 1px solid red; border-radius: 3px; font-weight: bold">
                    Error data
                </div>


                <a name="" id="btnSave" class="btn btn-primary" href="#" role="button">Save</a>
            </div>
        </div>
    </div>
</section>
<?php
$this->load->view('Templates/Footer');
$this->load->view('Templates/Link-js'); ?>
<script src="<?=base_url('assets/ckeditor/build/')?>ckeditor.js"></script>

<script>

var editor2;
DecoupledDocumentEditor
    .create( document.querySelector( '.editor_info' ), {
    removePlugins: ['Image', 'ImageToolbar', 'ImageStyle', 'ImageUpload', 'ImageCaption', 'ImageInsert', 'requiredBy'], 
    
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
            '|',
            'undo',
            'redo'
        ]
    },
    language: 'en',
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


function goto(url) {
    window.open(url, "_self");
}


var img_car1 = "";
var img_car2 = "";
var img_car3 = "";
var img_porto = "";


var tokenName = "";
var tokenHash = "";
File.prototype.convertToBase64 = function(callback){
        var reader = new FileReader();
        reader.onloadend = function (e) {
            callback(e.target.result, e.target.error);
        };   
        reader.readAsDataURL(this);
};

// getToken();

$(".ubahFoto1").on('change',function(){
    x = validate_files("ubahFoto1");
    if (!x) {
        return false;
    }
    var selectedFile = this.files[0];
    selectedFile.convertToBase64(function(base64){
        var findLeng = base64.split(';base64,')[0].length + 8;
        var cleanbase = base64.substring(findLeng);
        img_car1 = cleanbase;
        $('#imgprev1').attr('src', base64);
        // console.log(localImage);
    }) 
});

$(".ubahFoto2").on('change',function(){
    x = validate_files("ubahFoto2");
    if (!x) {
        return false;
    }
    var selectedFile = this.files[0];
    selectedFile.convertToBase64(function(base64){
        var findLeng = base64.split(';base64,')[0].length + 8;
        var cleanbase = base64.substring(findLeng);
        img_car2 = cleanbase;
        $('#imgprev2').attr('src', base64);
        // console.log(localImage);
    }) 
});

$(".ubahFoto3").on('change',function(){
    x = validate_files("ubahFoto3");
    if (!x) {
        return false;
    }
    var selectedFile = this.files[0];
    selectedFile.convertToBase64(function(base64){
        var findLeng = base64.split(';base64,')[0].length + 8;
        var cleanbase = base64.substring(findLeng);
        img_car3 = cleanbase;
        $('#imgprev3').attr('src', base64);
        // console.log(localImage);
    }) 
});

$(".ubahFoto4").on('change',function(){
    x = validate_files("ubahFoto4");
    if (!x) {
        return false;
    }
    var selectedFile = this.files[0];
    selectedFile.convertToBase64(function(base64){
        var findLeng = base64.split(';base64,')[0].length + 8;
        var cleanbase = base64.substring(findLeng);
        img_porto = cleanbase;
        $('#imgprev4').attr('src', base64);
        // console.log(localImage);
    }) 
});

var editor;
DecoupledDocumentEditor
    .create(document.querySelector('.editor'), {
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
                '-',
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
                'imageInsert'
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
    .then(editor => {
        window.editor = editor;
        editor = editor;
        // Set a custom container for the toolbar.
        document.querySelector('.document-editor__toolbar').appendChild(editor.ui.view.toolbar.element);
        document.querySelector('.ck-toolbar').classList.add('ck-reset_all');
    })
    .catch(error => {
        console.error('Oops, something went wrong!');
        console.error(
            'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:'
        );
        console.warn('Build id: bzhj04v2o3op-v1jug7ttv0dp');
        console.error(error);
    });

$(document).ready(function() {
    editor.setData(`<?=str_replace("`", "'", $data['deskripsi_lengkap']); ?>`);
    editor2.setData(`<?=str_replace("`", "'", $data['deskripsi_singkat']); ?>`);
    var jumlah = 1;
    var allLoad = 0;
    var pageIni = 1;
    var no = 1;
    var id_porto = '<?=$data['id_portofolio']?>';

    var tokenName = "";
    var tokenHash = "";

    function delay(callback, ms) {
        var timer = 0;
        return function() {
            var context = this,
                args = arguments;
            clearTimeout(timer);
            timer = setTimeout(function() {
                callback.apply(context, args);
            }, ms || 0);
        };
    }

    function getToken(){
        $.ajax({
            type: 'GET',
            url: '<?php echo base_url(); ?>transaction_history/get_token', 
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

    getToken();

    $( "#btnSave" ).click(function() {
        saveData();
    });

    function saveData(){

        if($('#fotoku').val() == null ){
            $("#msg").text("Oppsss.. Masukkan foto terlebih dahulu ");
            $(".notice").addClass('alert-danger');
            $(".notice").fadeIn( 1000 );     
            setTimeout(() => {
                $( ".notice" ).fadeOut( 3000 );    
            }, 2000);

            $('#password').attr('style', 'border: 1px solid red');
            return false
        }

        if($('#fotoku').val() == null ){
            $("#msg").text("Oppsss.. Masukkan foto terlebih dahulu ");
            $(".notice").addClass('alert-danger');
            $(".notice").fadeIn( 1000 );     
            setTimeout(() => {
                $( ".notice" ).fadeOut( 3000 );    
            }, 2000);

            $('#password').attr('style', 'border: 1px solid red');
            return false
        }

        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>portofolioku/update', 
            dataType : "JSON",
            data: {
                id_kategori_portofolio:$('#kategori').val(),
                id_customer_course:$('#id_course').val(),
                nama_portofolio: $('#nama').val(),
                deskripsi_singkat:editor2.getData(),
                carousel1:img_car1,
                carousel2:img_car2,
                carousel3:img_car3,
                foto_portofolio:img_porto,
                id_portofolio:id_porto,
                deskripsi_lengkap:editor.getData(),
                [tokenName]: tokenHash
                
            }, 
            beforeSend: function(){
                $("#btnSave").attr("disabled", "disabled");
                $("#btnSave").text("Tunggu sebentar..");
                $("#saveloading").show();

            },
            success: function(data){ 
                if (data.status_code == 200) {
                    Msg("Berhasil mengubah portofolio", "alert-success");
                    $("#saveErr").hide();

                    setTimeout(() => {
                        window.location.href = "<?=base_url()?>portofolioku/detail/"+id_porto;  
                    }, 1000);
                } else {
                    Msg(data.description, "alert-danger");
                    $("#saveErr").text(data.description);
                    $("#saveErr").show();
                    // getToken(); 
                }
            },
            complete:function(data){
                getToken();
                $("#btnSave").attr("disabled", false);
                $("#btnSave").text("Save");
                $("#saveloading").hide();

            },
            error: function(data){
                $("#msg").text("Opps.. gagal menyimpan data.");
                $(".notice").addClass('alert-danger');
                $(".notice").fadeIn( 1000 );     
                setTimeout(() => {
                    $( ".notice" ).fadeOut( 3000 );    
                }, 2000);
                getToken();

                $("#saveErr").text("Opps..Kesalahan server, gagal menyimpan data.");
                $("#saveErr").show();
            }

        });
    }


});
</script>