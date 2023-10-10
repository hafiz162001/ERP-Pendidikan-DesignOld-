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
         
    </div>
    <div class="col-md-4">
        <input type="text" placeholder="Search" id="search" class="form-control">   
    </div>
</div>
 
<table class="table table-bordered table-striped">
  <thead class="bg-secondary text-white">
    <tr>
      <th scope="col">ID</th>
      <th scope="col" style="width: 20%;">Soal</th>
      <th scope="col">Jawban</th>
      <th scope="col">Jawaban Benar</th>
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
            <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">Soal</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="priceTab-tab" data-toggle="tab" href="#priceTab" role="tab" aria-controls="profile" aria-selected="false">Jawaban Benar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="task-tab" data-toggle="tab" href="#task" role="tab" aria-controls="task" aria-selected="false">Jawaban Salah</a>
        </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                <div class="row">
                    <!-- Bawah -->
                    <input type="hidden" class="form-control" id="id_quiz" >

                    <div class="col-md-12 col-sm-12 p-3">
                        <div class="form-group">
                        <label for="exampleFormControlInput1">Pertanyaan </label>
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
                    <div class="col-md-12 col-sm-12 p-3">
                        
                        <div class="form-group">
                        <label for="exampleFormControlInput1">Jawaban Benar</label>
                            <!-- <input type="text" class="form-control" id="info" placeholder="info"> -->
                            <div class="centered" style="padding: 0px 15px;">
                                <div class="row">
                                    <div class="document-editor__toolbarbenar"></div>
                                </div>
                                <div class="row row-editor">
                                    <div class="editor-container">
                                        <div class="editor_benar" style="border: 1px solid #757575;">
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                     
                    <!-- end kiri -->

                </div>
            </div>
            <div class="tab-pane fade" id="task" role="tabpanel" aria-labelledby="task-tab">
                <div class="row">
                    <!-- bagian kiri -->
                    <div class="col-md-12 col-sm-12 p-3">
                        
                        <div class="form-group">
                        <label for="exampleFormControlInput1">Jawaban Salah 1</label>
                            <!-- <input type="text" class="form-control" id="info" placeholder="info"> -->
                            <div class="centered" style="padding: 0px 15px;">
                                <div class="row">
                                    <div class="document-editor__toolbar1"></div>
                                </div>
                                <div class="row row-editor">
                                    <div class="editor-container">
                                        <div class="editor_answer1" style="border: 1px solid #757575;">
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="exampleFormControlInput1">Jawaban Salah 2</label>
                            <!-- <input type="text" class="form-control" id="info" placeholder="info"> -->
                            <div class="centered" style="padding: 0px 15px;">
                                <div class="row">
                                    <div class="document-editor__toolbar2"></div>
                                </div>
                                <div class="row row-editor">
                                    <div class="editor-container">
                                        <div class="editor_answer2" style="border: 1px solid #757575;">
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="exampleFormControlInput1">Jawaban Salah 3</label>
                            <!-- <input type="text" class="form-control" id="info" placeholder="info"> -->
                            <div class="centered" style="padding: 0px 15px;">
                                <div class="row">
                                    <div class="document-editor__toolbar3"></div>
                                </div>
                                <div class="row row-editor">
                                    <div class="editor-container">
                                        <div class="editor_answer3" style="border: 1px solid #757575;">
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="exampleFormControlInput1">Jawaban Salah 4</label>
                            <!-- <input type="text" class="form-control" id="info" placeholder="info"> -->
                            <div class="centered" style="padding: 0px 15px;">
                                <div class="row">
                                    <div class="document-editor__toolbar4"></div>
                                </div>
                                <div class="row row-editor">
                                    <div class="editor-container">
                                        <div class="editor_answer4" style="border: 1px solid #757575;">
                                                
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
$this->load->view('Admin/Templates/editor', FALSE);
?>

<script>

var editor2;
var editor_salah1;
var editor_salah2;
var editor_salah3;
var editor_salah4;
DecoupledDocumentEditor
    .create( document.querySelector( '.editor_benar' ), {
        
    toolbar: {
        items: [
            'heading',
            '|',
            'fontSize',
            '|',
            'bold',
            'italic',
            'underline',
            'strikethrough',
            '|',
            'alignment',
            '|',
            'link',
            'insertTable',
            '|',
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
        document.querySelector( '.document-editor__toolbarbenar' ).appendChild( editor2.ui.view.toolbar.element );
        document.querySelector( '.ck-toolbar' ).classList.add( 'ck-reset_all' );
    } )
    .catch( error => {
        console.error( error );
} );


<?php for ($i=1; $i < 5; $i++) { ?>
    
    DecoupledDocumentEditor
    .create( document.querySelector( '.editor_answer<?=$i?>' ), {
        
    toolbar: {
        items: [
            'heading',
            '|',
            'fontSize',
            '|',
            'bold',
            'italic',
            'underline',
            'strikethrough',
            '|',
            'alignment',
            '|',
            'link',
            'insertTable',
            '|',
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
    .then( editor_salah<?=$i?> => {
        window.editor_salah<?=$i?> = editor_salah<?=$i?>;
        editor_salah<?=$i?> = editor_salah<?=$i?>;
        // Set a custom container for the toolbar.
        document.querySelector( '.document-editor__toolbar<?=$i?>' ).appendChild( editor_salah<?=$i?>.ui.view.toolbar.element );
        document.querySelector( '.ck-toolbar' ).classList.add( 'ck-reset_all' );
    } )
    .catch( error => {
        console.error( error );
} );

<?php } ?>


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
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url('Dapur/'); ?>quiz/save', 
        dataType : "JSON",
        data:{
            id_quiz: $('#id_quiz').val(),
            quiz: editor.getData(),
            answer1: removePtag(editor2.getData()),
            answer2: removePtag(editor_salah1.getData()),
            answer3: removePtag(editor_salah2.getData()),
            answer4: removePtag(editor_salah3.getData()),
            answer5: removePtag(editor_salah4.getData()),
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
    $('#id_quiz').val('');
    editor.setData('');
    editor2.setData('');
    editor_salah1.setData('');
    editor_salah2.setData('');
    editor_salah3.setData('');
    editor_salah4.setData('');
}

$("#datatable").on("click", ".btnDelete", function(){
    id = $(this).data('id');
    aktif = $(this).data('aktif');
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url('Dapur/'); ?>quiz/delete', 
        dataType : "JSON",
        data:{
            is_aktif: aktif,
            id_quiz: id,
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


function getDataId(id){
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url('Dapur/'); ?>quiz/showdata', 
        dataType : "JSON",
        data:{
            id: id
        },
        success: function(data){ 
            $.each(data.data, function(i, item) {
                $('#id_quiz').val(item.id_quiz);        
                editor.setData(item.quiz);
                editor2.setData(item.answer1);
                editor_salah1.setData(item.answer2);
                editor_salah2.setData(item.answer3);
                editor_salah3.setData(item.answer4);
                editor_salah4.setData(item.answer5);
             
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
        url: '<?php echo base_url('Dapur/'); ?>quiz/showdata', 
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
            html += '        <td>'+item.id_quiz+'</td>';
            html += '       <td>'+item.quiz+'</td>';
            html += '         <td>A. '+item.answer1+' <br> B. '+item.answer2+' <br> C. '+item.answer3+' <br> D. '+item.answer4+' <br> E. '+item.answer5+'</td>';
            html += '         <td>A. '+item.answer1+'</td>';

            if (item.is_aktif == 1) {
                status = '<span class="badge badge-info">Aktif</span>';
            } else if(item.is_aktif == 2) {
                status = '<span class="badge badge-secondary">Tidak Aktif</span>';
            } else if(item.is_aktif == 3) {
                status = '<span class="badge badge-danger">Pending</span>';
            } else {
                status = "-";
            }

            html += '         <td>'+status+'</td>';
            html += '         <td> ';
            if (item.is_aktif == 1) {
                html += '<a class="btn btn-sm btn-danger btnDelete" data-id="'+item.id_quiz+'" data-aktif="2" title="Ubah ke tidak aktif" > <i class="fa fa-trash" aria-hidden="true"></i></a>';
                html += ' <a class="btn btn-sm btn-secondary btnDelete" data-id="'+item.id_quiz+'" data-aktif="3" title="Ubah ke pending"> <i class="fas fa-exclamation-triangle"></i></a>';
            } else if(item.is_aktif == 2) {
                html += '<a class="btn btn-sm btn-success btnDelete" data-id="'+item.id_quiz+'" data-aktif="1"  title="Ubah ke aktif"> <i class="fa fa-check" aria-hidden="true"></i></a>';
            }  else {
                html += '<a class="btn btn-sm btn-success btnDelete" data-id="'+item.id_quiz+'" data-aktif="1"  title="Ubah ke aktif"> <i class="fa fa-check" aria-hidden="true"></i></a>';

            }
            html += ' <a data-id="'+item.id_quiz+'" data-name="wkwkland" class="btn btn-sm btn-primary btnEdit" ><i class="fa fa-pencil-alt" aria-hidden="true"></i></a> </td>';
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
 


