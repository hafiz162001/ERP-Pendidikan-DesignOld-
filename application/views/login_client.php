<?php
$this->load->view('Templates/Link-css');
$this->load->view('Templates/Navbar'); ?>
<div class="alert notice" role="alert" style="display: none; max-width: 300px; width: 100%; float: right; position : fixed; top: 2rem; right: 1rem; z-index: 9999; opacity: 0.7 ">
  <span id="msg"> Login Successfully, Redirecting... </span>
</div>
<!-- BANNER -->
<section class=" bg-light pb-5">
    <div class="container">
        <div class="row">
            <!-- TEXT -->
            <div class="col-lg-8 pt-5">
                <br /><br /><br /><br />
                <h1 class="nsans-700 text-hitam-custom text-shadow-2">Login Area</h1>
                <form id="login" class="form-signin" autocomplete="off" method="post" accept-charset="utf-8">
                <div class="form-group">
                    <label> Email</label>
                    <input type="hidden" class="csrf" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                    <input type="email" class="form-control" name="email" id="email" required="" placeholder="Ex: username@bisaacademy.id" style="border-style: solid; border-width: 1px;">
                    <small class="font-italic text-muted">masukan email anda dengan format yang benar</small>
                </div>

                <div class="form-group">
                    <label> Password</label>
                    <input type="password" class="form-control" name="password" id="password" required="" placeholder="***********" style="border-style: solid; border-width: 1px;">
                    <small class="font-italic text-muted">masukan password anda dengan benar</small>

                </div>
                <div class="col-lg-12 text-left text-size-2 mb-3 p-0">
                    Anda belum punya akun? <a href="<?=base_url('register')?>">Daftar Sekarang</a> atau
                    <a href="<?=base_url('lupa_password')?>">lupa password?</a>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        
                    </div>
                    <div class="col-lg-6 text-right">
                        <div class="form-group">
                            <button type="button" name="masuk" id="btnLogin" class="btn btn-primary poppins-700">
                                Masuk
                            </button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <!--/TEXT-->

            <!-- IMAGE -->
            <div class="col-lg-4 pt-5 d-none d-lg-block d-xl-block">
                 
                <img class="d-block mt--100" style="z-index:1" src="<?= base_url() ?>assets/images/draw2.webp" width="400">

            </div>
            <!-- /IMAGE -->
        </div>       
    </div>
    <br>
</section>
<!-- /BANNER -->



<?php
$this->load->view('Templates/Footer');
$this->load->view('Templates/Link-js'); ?>

<script>
$(document).ready(function(){
    $('#email').focus();
    $(document).keydown(function (event) {
        if (event.keyCode == 13) { 
            $("#btnLogin").trigger('click');
        } 
    });
  $("#btnLogin").click(function(){

    if ($("#email").val() == "" || $("#password").val() == "") {
        $("#msg").text("email atau password tidak boleh kosong");
        $(".notice").addClass('alert-danger');
        $(".notice").fadeIn( 100 );     
        setTimeout(() => {
            $( ".notice" ).fadeOut( 3000 );    
        }, 2000);

        $("#email").css('boder', 'red');
        $("#password").css('boder', 'red');
    }
    var csrfName = $('.csrf').attr('name');  
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>login_customer/auth', 
        dataType : "JSON",
        data:{
            email:$('#email').val(),
            password:$('#password').val(),
            [csrfName]: '<?=$csrf['hash'];?>'
        },
        beforeSend: function(){
            $("#btnLogin").attr("disabled", "disabled");
            $("#btnLogin").text("Tunggu sebentar..");
        },
        success: function(data){ 
            $("#msg").text("Login berhasil, Tunggu sebentar..");
            $(".notice").addClass('alert-success');
            $(".notice").fadeIn( 100 );     
            setTimeout(() => {
                $( ".notice" ).fadeOut( 3000 );    
            }, 2000); 
            setTimeout(() => {
                location.reload();    
            }, 1000);
        },
        complete:function(data){
        
        },
        error: function(){
            $("#msg").text("Gagal login, periksa username dan kata sandi anda.");
            $(".notice").addClass('alert-danger');
            $(".notice").fadeIn( 100 );     
            setTimeout(() => {
                $( ".notice" ).fadeOut( 3000 );    
            }, 2000);
            
            setTimeout(() => {
                location.reload();    
            }, 1000);
            
        }
    });  
  });
});
</script>
