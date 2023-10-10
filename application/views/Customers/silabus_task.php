<?php
$this->load->view('Templates/Link-css');
$this->load->view('Templates/Navbar'); 
$this->CI = &get_instance();
?>
<style>
    .pertanyaan{
        font-weight: bold;
    }
    .jawaban{
        margin-left: 1rem;
    }

    #overlay{
        z-index: 9999 !important;
        position: fixed;
        top:0;
        left:0;
        width:100%;
        height:100%;
        background: rgba(0,0,0,0.8) none 50% / contain no-repeat;
        cursor: pointer;
        transition: 0.3s;
        
        visibility: hidden;
        opacity: 0;
    }
    #overlay.open {
        visibility: visible;
        opacity: 1;
    }

    #overlay:after { /* X button icon */
        content: "\2715";
        position: absolute;
        color:#fff;
        top: 10px;
        right:20px;
        font-size: 2em;
    }

    img:hover{
        cursor: zoom-in;
    }
</style>

<div class="alert notice" role="alert" style="display: none; max-width: 300px; width: 100%; position : fixed; top: 50%; left:50%;transform: translate(-50%, -50%); z-index: 9999; opacity: 1 ">
  <span id="msg" style="font-weight: bold;">  </span>
</div>

<div id="overlay"></div>

<section class="container_in">
    <div class="container">
        <div class="row mt-7" >
            <div class="col">
                <div class="card text-justify">
                <div class="card-header">
                    <h3><?=$data['name_course'];?> : <?=$data['name'];?></h3>
                </div>
                <div class="card-body">
                <!-- <iframe style="width: 100%; height: 400px;" class="mt-2" src="https://www.youtube.com/embed/<?=$data['video'];?>?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  -->
                    <h5 class="card-title">Teori</h5>
                    <hr>
                    <?=$data['theory'];?>
                    <h5 class="card-title">Intruksi khusus</h5>
                    <?=$data['task'];?>
                    <p class="card-text">
                        <strong> Batas Pengerjaan: </strong> <?=date("D, d M Y , H:i" , strtotime($data_cus['end_time_task']));?> WIB
                    </p>
                    <?php //echo "<pre> ",print_r($data_cus)."</pre>";?>
                    <?php if ($data_cus['task_file'] != null) {
                        echo "Jawaban sudah disubmit.";
                        echo "<br>"; 
                        echo " Filename: ".$data_cus['task_file'];
                        echo "<br> Submit time: ".date("D, d M Y , H:i" , strtotime($data_cus['submit_time_task'])). " WIB";
                        echo "<br> Score: ".$data_cus['score_task'];
                    } else {?>

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
                    <?php } ?>
                    <a id="" class="btn btn-lg btn-block btn-success" href="<?=base_url()?>my_course/detail/<?=$tipe;?>/<?=$id_course;?>">Kembali</a>
                     
                </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

 


<?php
$this->load->view('Templates/Footer');
$this->load->view('Templates/Link-js'); ?>
<script>
$(document).ready(function(){

    var currentCode = 0;

    var localImage = "";

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

    getToken();
    File.prototype.convertToBase64 = function(callback){
            var reader = new FileReader();
            reader.onloadend = function (e) {
                callback(e.target.result, e.target.error);
            };   
            reader.readAsDataURL(this);
    };

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

    function nextChar() {
        var character = String.fromCharCode(64 + currentCode);
        currentCode++;
        return character;
    }

    function shuffle(arr) {
        for(var j, x, i = arr.length; i; j = parseInt(Math.random() * i), x = arr[--i], arr[i] = arr[j], arr[j] = x);
        return arr;
    }

    $('img').on('click', function() {

    $('#overlay')
        .css({backgroundImage: `url(${this.src})`})
        .addClass('open')
        .one('click', function() { $(this).removeClass('open'); });
        console.log("zoomm");
    });


    $( "#btnSaveTA" ).click(function() {
        $(this).prop('disabled', 'true');
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>my_course/submit_tugas_silabus', 
            dataType : "JSON",
            data: {
                [tokenName]: tokenHash,
                id_customer_syllabus: <?=$data_cus['id_customer_syllabus']?>,
                task_description: $('#deskripsi').val(),
                file_name: $('#filename').val(),
                task_final: localImage
            },
            success: function(data){ 

                getToken();
                $("#msg").text("Tugas Berhasil di submit");
               
                $(".notice").addClass('alert-info');
                $(".notice").fadeIn( 1000 );     
                setTimeout(() => {
                    $( ".notice" ).fadeOut( 3000 );    
                }, 2000);

                setTimeout(() => {
                    location.reload();    
                }, 1000);

                $(this).prop('disabled', 'false');

            },
            error: function(data){
                
                getToken();
                $("#msg").text(data.responseJSON.description);
                $(".notice").addClass('alert-danger');
                $(".notice").fadeIn( 1000 );     
                setTimeout(() => {
                    $( ".notice" ).fadeOut( 3000 );    
                }, 2000);

                $('#modelId').modal('hide');
                $(this).prop('disabled', 'false');
                
            }
        });
    });

});
</script>