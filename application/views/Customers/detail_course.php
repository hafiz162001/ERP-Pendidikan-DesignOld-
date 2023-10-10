<?php
$this->load->view('Templates/Link-css');
$this->load->view('Templates/Navbar'); 
$this->CI = &get_instance();
?>


<section class="container_in">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mb-3" style="width: 100%;">
                <div class="card-header">
                    <h4><?=$data['course_name']?></h4>
                </div>
                    <div class="card-body d-flex">
                        <div class="row">
                            <div class="col-sm-4 col-md-4">
                                <img src="<?php echo $this->CI->config->item('bisaUrl')."course/media/".$data['photo_course'];?>" alt="" class="rounded" style="max-width: 300px; width:100%">
                            </div>
                            <div class="col-sm-8 col-md-8">
                                <p class="card-text">
                                    <h4>Penyusun</h4>
                                    <p><?=$data['arranged_by']?></p>
                                    
                                    <h4>Level</h4>
                                    <p><?php if ($data['class'] == 1) { echo "Pemula"; } 
                                        else if ($data['class'] == 2) {
                                            echo "Menengah";
                                        }  else { echo "Mahir"; }  ?>
                                        </p>
                                    <p class="align-self-end" id="mydesk"  style="color: orange; font-weight: bold;margin-top: auto;"> <i class="fa fa-copyright" aria-hidden="true"></i> <?=$data['points']?> Pts / <?php 
                                        if ($data['rating'] == null) {
                                            $data['rating'] = 0;
                                        }
                                        for ($i=0; $i < 5 ; $i++) { 
                                            if ($i < $data['rating']) {
                                                echo '<i class="fa fa-star" aria-hidden="true" style="color:gold"></i> ';
                                            } else {
                                                echo '<i class="fa fa-star" aria-hidden="true" ></i> ';
                                            }
                                        }
                                    ?> </p>
                                                                       
                                    <?php if($data['foto_sertifikat'] != null ){ ?> 
                                        <?php if($testi) { ?>
                                            <a href="<?php echo base_url();?>my_course/download/<?=$data['id_course'];?>/<?=$data['foto_sertifikat']?>" class="btn btn-primary btn-sm" target="_blank"> <i class="fa fa-download" aria-hidden="true"></i> Unduh Sertifikat </a>
                                        <?php } else { ?>
                                            <a href="#" id="setreview" data-toggle="modal" data-target="#staticBackdrop" > Tambahkan review untuk mengunduh sertifikat </a> 
                                        <?php } ?>

                                    <?php } ?>

                                </p>
                            </div>
                        </div>
                        
                    </div>
                </div> 
            </div>
        </div>

        <div class="row mt-7" >
            <div class="col">
                <div class="card text-justify">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-x nav-link active" id="btnInfo" href="#mydesk">Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-x nav-link " id="btnSil" href="#mydesk">Silabus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-x nav-link" id="btnTA" href="#mydesk">Tugas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-x nav-link" id="btnDis" href="#mydesk">Diskusi</a>
                    </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div id="showInfo">
                        <h5 class="card-title">Deskripsi</h5>
                        <hr>
                        <p class="card-text">
                            <?=$data['description_course'];?>
                        </p>
                        <h5 class="card-title">Informasi Umum</h5>
                        <hr>
                        <p class="card-text"><?=$data['info_course'];?></p>       
                        
                        <div class="review">
                            <h5>Review Saya</h5>
                            <?php if($testi) { ?>            
                            <div class="card" style="width:100%;">
                              <div class="card-body">
                                <h5 class="card-title"> 
                                    <?php 
                                        if ($testi['rating'] == null) {
                                            $testi['rating'] = 0;
                                        }
                                        for ($i=0; $i < 5 ; $i++) { 
                                            if ($i < $testi['rating']) {
                                                echo '<i class="fa fa-star" aria-hidden="true" style="color:gold"></i> ';
                                            } else {
                                                echo '<i class="fa fa-star" aria-hidden="true" ></i> ';
                                            }
                                        } 
                                        echo " - ". $testi['rating'] . " bintang"
                                    ?>
                                </h5>
                                                
                                <h6 class="card-subtitle mb-2 text-muted "><?=$testi['nama_user']?></h6>
                                <p class="card-text"><?=$testi['testimonial']?></p>
                                <small class="card-text text-muted text-italic" id="jam"><?=$testi['waktu_input']?></small>

                              </div>
                            </div>

                            <?php } else { ?>

                                <div class="card" style="width:100%;">
                                   
                                  <div class="card-body text-center">
                                    <h6 class="card-subtitle mb-2 text-muted">Belum ada review</h6>
                                    <p class="card-text"> <a href="#" id="setreview" data-toggle="modal" data-target="#staticBackdrop" > klik disini untuk memberikan review </a> </p>
                                  </div>
                                </div>

                                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Tulis Review</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                            <div class="form-group">
                                              <label for="">Rating </label>
                                              <select class="form-control" id="bintang">
                                                <option value="1"> 1 Bintang </option>
                                                <option value="2"> 2 Bintang </option>
                                                <option value="3"> 3 Bintang </option>
                                                <option value="4"> 4 Bintang </option>
                                                <option value="5"> 5 Bintang </option>
                                              </select>
                                            </div>

                                            <div class="form-group">
                                              <label for="">Testimoni</label>
                                              <textarea class="form-control" name="" id="testi" rows="4"></textarea>
                                            </div>
                                            <button type="button" id="saveReview" class="btn btn-primary btn-lg btn-block d-block">Submit</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                
                            <?php } ?>
                        </div>
                    </div>
                    <div id="showSilabus" style="display: none;">
                        <h5 class="card-title">Silabus</h5>
                        <hr>
                        <div id="silabusData"></div>                
                    </div>
                    <div id="showTA" style="display: none;">
                        <h5 class="card-title">Tugas Akhir</h5>
                        <hr>
                        <?=$data['task_description_course'];?>    
                        <br>
                            <hr>
                        <br>
                        <?php if ($data['score_syllabus'] == 0) {
                        ?>
                        <div class="alert alert-primary" role="alert">
                            Tugas Akhir akan tersedia bila Anda sudah menyelesaikan seluruh silabus yang tersedia. 
                        </div>
                        <?php   
                         } else {
                        ?>

                            <?php if($data['task_time_submit'] != null)  { ?>
                                Filename: <a href="<?php echo $this->CI->config->item('bisaUrl');?>academy/media/task/<?=$data['task_final']?>" > <?=$data['task_final']?> </a> 
                                <br>
                                Waktu Submit: <?=date("D, d/m/Y h:i", strtotime($data['task_time_submit']));?>
                                <hr>
                                 
                            <?php } ?>
                            
                            <?php if( $data['status'] == 2 || $data['status'] == 1) { ?>
                                <button class="btn btn-primary btn-lg btn-block" id="taModal">
                                    Submit Tugas Akhir
                                </button>
                            <?php } ?>

                        <?php } ?>

                        
                        
                            
                    </div>
                    <div id="showDiskusi" style="display: none;">
                        <h5 class="card-title">Diskusi</h5>
                        <hr>      
                        <div id="diskusi"></div>     
                    </div>
                    
                </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Upload TA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <!-- Tugas -->
                <div class="row">
                            <div class="col">
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi singkat tugas anda..">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">File Tugas</label>
                                <input type='file' class='taUpload form-control-file' />
                            </div>

                            <div class="form-group">
                                <label for="filename">Nama File Tugas</label>
                                <input type="text" class="form-control" id="filename" placeholder="Secara default menyesuaikan dengan nama file yang anda upload, dapat dicustom. ">
                            </div>

                            <button class="btn btn-block btn-primary" id="btnSaveTA">
                                Submit Tugas
                            </button>                            
                            </div>
                        </div>   
                        <!-- END tugas -->
            </div>
        </div>
    </div>
</div>


<!-- Modal Konfirmasi-->
<div class="modal fade" id="modalKonfirmasi" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi</h5>
            </div>
            <div class="modal-body">
                Apakah anda yakin ingin memulai mengerjakan tugas?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <a class="btn btn-success" id="lanjutkan" >Lanjutkan</a>
            </div>
        </div>
    </div>
</div>


<?php
$this->load->view('Templates/Footer');
$this->load->view('Templates/Link-js'); 
// var_dump($data);
?>

<script>

function goto(url){
    // window.location = url;
    window.open(url, "_blank");
}

$(document).ready(function(){
    var tipe = <?=$tipe;?>;
    var id = <?=$id;?>;

    var tokenName = "";
    var tokenHash = "";

    var localImage = "";

    var isOjt = <?=$data['is_ojt'];?>;
    getToken();
    File.prototype.convertToBase64 = function(callback){
            var reader = new FileReader();
            reader.onloadend = function (e) {
                callback(e.target.result, e.target.error);
            };   
            reader.readAsDataURL(this);
    };

    $(".taUpload").on('change',function(){
        var selectedFile = this.files[0];
        selectedFile.convertToBase64(function(base64){
            var findLeng = base64.split(';base64,')[0].length + 8;
            var cleanbase = base64.substring(findLeng);
            localImage = cleanbase;
            console.log(localImage);
        });
        
        var filename = $(this).val().replace(/.*(\/|\\)/, '');
        $('#filename').val(filename);

    });

    set = formatDate_indo($("#jam").text());
    $("#jam").html(set);

    $( "#taModal" ).click(function() {
        $('#modelId').modal('show');
        $(".taUpload").val(null);
        $("#deskripsi").val("");
        $("#filename").val("");
    });

    $( "#silabusData" ).on('click','.btnTugasSilabus',function() {
        $('#modalKonfirmasi').modal('show');
        url = $(this).data('url');
        $('#lanjutkan').attr('href', url );
    });

    $( "#saveReview" ).click(function() {

        if ( $('#testi').val() == "") {
            Msg("Mohon isi data testimoni terlebih dahulu", "alert-danger");
            $("#testi").css("border-color","#FF0000");
            return false; 
        }
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>my_course/submit_testi', 
            dataType : "JSON",
            data: {
                [tokenName]: tokenHash,
                id_customer_course: <?=$data['id_customer_course']?>,
                rating: $('#bintang').find(":selected").val(),
                testimonial: $('#testi').val()
            },
            beforeSend: function(){

            },
            success: function(data){ 
                getToken();
                if (data.status_code == 200) {
                    Msg("Terima kasih sudah memberikan review. <br> Semua masukan Anda sangat berarti untuk kemajuan kami", "alert-success");

                    setTimeout(() => {
                        location.reload();  
                    }, 1000);
                } else {
                    Msg(data.description, "alert-danger");
                }

            },
            error: function(data){
                
                getToken();
                Msg("Gagal menambahkan review testimoni", "alert-danger");

            }
        });
    });

    $( "#btnSaveTA" ).click(function() {
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>my_course/submitTa', 
            dataType : "JSON",
            data: {
                [tokenName]: tokenHash,
                id_customer_course: <?=$data['id_customer_course']?>,
                task_description: $('#deskripsi').val(),
                file_name: $('#filename').val(),
                task_final: localImage
            },
            beforeSend: function(){
                $('#btnSaveTA').text("Uploading....");
                $('#btnSaveTA').prop('disabled', true);
            },
            success: function(data){ 
                getToken();
                
                $("#msg").text('Berhasil mengirim tugas');
                $(".notice").addClass('alert-info');
                $(".notice").fadeIn( 1000 );     
                setTimeout(() => {
                    $( ".notice" ).fadeOut( 3000 );    
                }, 2000);
                
                setTimeout(() => {
                    location.reload();    
                }, 1000);
                $('#btnSaveTA').text("Submit Tugas");
                $('#btnSaveTA').prop('disabled', false);

            },
            error: function(data){
                
                getToken();
                $("#msg").text('mohon selesaikan semua silabus terlebih dahulu.');
                $(".notice").addClass('alert-danger');
                $(".notice").fadeIn( 1000 );     
                setTimeout(() => {
                    $( ".notice" ).fadeOut( 3000 );    
                }, 2000);

                $('#modelId').modal('hide');

                $('#btnSaveTA').text("Submit Tugas");
                $('#btnSaveTA').prop('disabled', false);

            }
        });
    });

    $( "#btnInfo" ).click(function() {
        
        $('.nav-x').removeClass('active');
        $(this).addClass('active');
        $('#showSilabus').css('display','none');
        $('#showInfo').css('display','block');
        $('#showTA').css('display','none');
        $('#showDiskusi').css('display','none');

    });

    $( "#btnSil" ).click(function() {
        $('.nav-x').removeClass('active');
        $(this).addClass('active');
        $('#showSilabus').css('display','block');
        $('#showInfo').css('display','none');
        $('#showTA').css('display','none');
        $('#showDiskusi').css('display','none');
        show_silabus();      
    });

    $( "#btnTA" ).click(function() {
        $('.nav-x').removeClass('active');
        $(this).addClass('active');
        $('#showSilabus').css('display','none');
        $('#showInfo').css('display','none');
        $('#showTA').css('display','block');
        $('#showDiskusi').css('display','none');

    });

    $( "#btnDis" ).click(function() {
        $('.nav-x').removeClass('active');
        $(this).addClass('active');
        $('#showSilabus').css('display','none');
        $('#showInfo').css('display','none');
        $('#showTA').css('display','none');
        $('#showDiskusi').css('display','block');
        showDiskusi();

    });
    
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
    
    // show_silabus();
    function show_silabus(){
        $.ajax({
            type: 'GET',
            url: '<?php echo base_url(); ?>my_course/get_silabus/'+id, 
            dataType : "JSON",
            data:{
                
            },
            beforeSend: function(){

            },
            success: function(data){ 
                html = "";
                addclass = "";
                $.each(data.data, function(i, item) {
                    if (item.status == 2) {
                        addClass = "bg-success text-white";
                    } else {
                        addClass = "bg-light";
                    }
                    html += '<div style="cursor: pointer; " class="col-md-12 col-sm-12 col-12 mb-2 ">  '; 
                    html +='<div class="card mt-2 box-shadow '+addClass+'" style="width: 100%;"  >';
                    html +='<div class="card-body box-shadow shadow" onclick=goto("<?php echo base_url(); ?>my_course/detail_silabus/'+tipe+'/'+id+'/'+item.id_syllabus+'/'+item.id_customer_syllabus+'")>';
                    html +='   <h5 class="card-title">'+item.name+'</h5>';
                    html +='    <p class="card-text"> Score Task: '+item.score+'</p>';
                    html +='</div>';
                    if (isOjt == 1 && item.status == 2) {
                        html += '       <div class="card-footer '+addClass+'" style="border: none;">';
                        html += '           <p class="align-self-end float-right" style="color: orange; font-weight: bold;margin-top: auto;"> ';
                        html += '           <a id="downloadCert" href="#"  onclick_=goto("<?php echo base_url(); ?>my_course/detail_task/'+tipe+'/'+id+'/'+item.id_syllabus+'/'+item.id_customer_syllabus+'") class="btn btn-warning mt-2 btnTugasSilabus" data-url="<?php echo base_url(); ?>my_course/detail_task/'+tipe+'/'+id+'/'+item.id_syllabus+'/'+item.id_customer_syllabus+'"> ';
                        html += '           Upload Tugas </a> </p></div>';  
                    }
            
                    html +='</div>';
                    html +='</div>';
                });
                $('#silabusData').html(html);
            },
            complete:function(data){

            },
            error: function(){
                               
            }
        });  
    }

    function bulan(bln){
        var month = new Array();
        month[0] = "Januari";
        month[1] = "Februari";
        month[2] = "Maret";
        month[3] = "April";
        month[4] = "Mei";
        month[5] = "Juni";
        month[6] = "Juli";
        month[7] = "Agustus";
        month[8] = "September";
        month[9] = "Oktober";
        month[10] = "November";
        month[11] = "Desember";
        return month[bln];
    }

    function showDiskusi(){
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>my_course/get_diskusi', 
            dataType : "JSON",
            data:{
               id : <?=$data['id_course']?>,
               page: 1 
            },
            beforeSend: function(){

            },
            success: function(data){ 
                html = "";
                $.each(data.data, function(i, item) {
                    var tgl = new Date(item.date.replace(" GMT", ""));
                    html += '<div style="cursor: pointer; " class="col-md-12 col-sm-12 col-12 mb-2 ">  '; 
                    html +='<div class="card mt-2 box-shadow" style="width: 100%;"  >';
                    html +='<div class="card-body box-shadow shadow">';
                    html +='   <h5 class="card-title">'+item.description+'</h5>';
                    html +='    <p class="card-text"> Room  ID: '+item.room_id+'</p>';
                    html +='    <p class="card-text"> Room  Password: '+ ( (item.password_attendee == null) ? '-': item.password_attendee )+'</p>';
                    html +='    <p class="card-text"> Teacher: '+item.teacher_name+'</p>';
                    html +='    <p class="card-text"> Tanggal: '+tgl.getDate()+' '+bulan(tgl.getMonth()) +' '+tgl.getFullYear()+', Jam: '+tgl.getHours()+':'+tgl.getMinutes()+' WIB</p>';
                    html += '   <p class="card-text"> <a href="https://tampil.id/" class="btn btn-primary" target="_blank" > Ke Halaman Bisa Tampil</a> ';
                    html +='</div>';
            
                    html +='</div>';
                    html +='</div>';
                });
                
                $('#diskusi').html(html);
            },
            complete:function(data){

            },
            error: function(){
                               
            }
        });  
    }
});

</script>