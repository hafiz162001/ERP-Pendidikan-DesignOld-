<?php
$this->load->view('Templates/Link-css');
$this->load->view('Templates/Navbar'); ?>
<div class="alert notice" role="alert" style="display: none; max-width: 300px; width: 100%; position : fixed; top: 50%; left:50%;transform: translate(-50%, -50%); z-index: 9999; opacity: 1 ">
  <span id="msg" style="font-weight: bold;">  </span>
</div>
<!-- BANNER -->
<section class=" bg-light pb-5">
    <div class="container" id="regis_form">
        <div class="row">
            <!-- TEXT -->
            <div class="col-lg-8 pt-5">
                <br /><br /><br /><br />
                <h1 class="nsans-700 text-hitam-custom text-shadow-2">Daftar Akun</h1>
                <form id="login" class="form-signin" autocomplete="off" method="post" accept-charset="utf-8">
                <div class="form-group">
                    <label> Email</label>
                    <input type="hidden" class="csrf" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                    <input type="email" class="form-control" id="email" required >
                    <small class="font-italic text-muted">masukan email anda dengan format yang benar</small>
                </div>

                <div class="form-group">
                    <label> Password</label>
                    <input type="password" class="form-control form-login" name="password" id="password" required="">
                    <small class="font-italic text-muted">masukan password anda dengan benar, minimal 8 karakter</small>

                </div>

                <div class="form-group">
                    <label> Ulangi password</label>
                    <input type="password" class="form-control form-login" name="password" id="c_password" required="">
                    <small class="font-italic text-muted">ulangi password anda dengan benar</small>
                </div>

                <div class="form-group">
                    <label> Nama lengkap</label>
                    <input type="text" class="form-control" id="nama" required="">
                    <small class="font-italic text-muted">masukan nama anda</small>
                </div>

                <div class="row">
                    <div class="col-lg-12 text-right">
                        <div class="form-group">
                            <button type="button" name="masuk" id="btnRegis" class="btn btn-primary poppins-700">
                                Daftar
                            </button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <!--/TEXT-->

            <!-- IMAGE -->
            <div class="col-lg-4 pt-5 d-none d-lg-block d-xl-block align-middle">
                <div style="height:160px"></div>
                <img class="mt--100 d-block" style="z-index:1" src="<?= base_url() ?>assets/email_bisa_academy/Group_5.png" width="400">

            </div>
            <!-- /IMAGE -->
        </div>       
    </div>
    <br>
</section>
<!-- /BANNER -->

<div class="container" id="sukses" style="margin-top: 10rem;display:none;">
    <div class="jumbotron text-center">
        <h1 class="display-4">Selamat bergabung di bisaAI academy.</h1>
        <img src="<?=base_url('assets/flat-ui/images/Undraw/undraw_Mail_sent_qwwx.svg')?>" alt="" srcset="" style="width:100%; max-width: 300px;">
        <p class="lead">Masuk ke bisaAI Academy dengan menggunakan halaman login. </p>
        <p> <a href="<?=base_url('login_customer')?>"> Kembali ke halaman login </a> </p>
    </div>
</div> 


<?php
$this->load->view('Templates/Footer');
$this->load->view('Templates/Link-js'); ?>

<script>
$(document).ready(function(){

    function errMsg(text, tipe='alert-info'){
        $("#msg").text(text);
        $(".notice").addClass(tipe);
        $(".notice").fadeIn( 100 );     
        setTimeout(() => {
            $( ".notice" ).fadeOut( 3000 );    
        }, 2000);
    }

  $("#btnRegis").click(function(){
    if ($('#email').val() == ""){
        errMsg("Email harus diisi.", "alert-danger");
        return false;
    } else if ($('#nama').val() == ""){
        errMsg("Nama harus diisi.", "alert-danger");
        return false;
    } else if( $('#password').val() != $('#c_password').val() ) {
        errMsg("Password dan dan konformasi password tidak cocok.", "alert-danger");
        return false;
    } else if ($('#password').val().length < 8 ) {
        errMsg("Password kurang dari 8 karakter.", "alert-danger");
        return false;
    }

    var csrfName = $('.csrf').attr('name');  
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>login_customer/register', 
        dataType : "JSON",
        data:{
            email:$('#email').val(),
            password: $('#password').val(), 
            name: $('#nama').val() ,
            agree: 1,
            [csrfName]: '<?=$csrf['hash'];?>'
        },
        beforeSend: function(){
            $("#btnRegis").attr("disabled", "disabled");
            $("#btnRegis").text("Tunggu sebentar..");
        },
        success: function(data){ 
        if(data.status_code == 200){
            $("#sukses").css('display', 'block');
            $("#regis_form").css('display', 'none');
        } else {
            errMsg("Email sudah terdaftar", "alert-danger");
            setTimeout(() => {
                // location.reload();    
            }, 3000);
        }    
            
        },
        complete:function(data){
        
        },
        error: function(data){
            errMsg("Email sudah terdaftar", "alert-danger");

            setTimeout(() => {
                // location.reload();    
            }, 1000);
            
        }
    });  
  });
});
</script>
