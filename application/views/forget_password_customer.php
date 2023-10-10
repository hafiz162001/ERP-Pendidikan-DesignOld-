<?php
$this->load->view('Templates/Link-css');
$this->load->view('Templates/Navbar'); ?>
<div class="alert notice" role="alert" style="display: none; max-width: 300px; width: 100%; float: right; position : fixed; top: 2rem; right: 1rem; z-index: 9999; opacity: 1 ">
  <span id="msg"> Opps.. </span>
</div>
<!-- BANNER -->
<section class=" bg-light pb-5">

    <div class="container" id="sukses" style="margin-top: 10rem;display:none;">
        <div class="jumbotron text-center">
            <h1 class="display-4">Password berhasil direset.</h1>
            <img src="<?=base_url('assets/flat-ui/images/Undraw/undraw_Mail_sent_qwwx.svg')?>" alt="" srcset="" style="width:100%; max-width: 300px;">
            <p class="lead">Cek email anda untuk melihat password baru anda.</p>
            <p> <a href="<?=base_url('login_customer')?>"> Kembali ke halaman login </a> </p>
        </div>
    </div> 
    <div class="container" id="form_forgot">
        <div class="row">
            <!-- TEXT -->
            <div class="col-lg-8 pt-5">
                <br /><br /><br /><br />
                <h1 class="nsans-700 text-hitam-custom text-shadow-2">Lupa password</h1>
                <form id="login" class="form-signin" autocomplete="off" method="post" accept-charset="utf-8">
                <div class="form-group">
                    <label> Email</label>
                    <input type="hidden" class="csrf" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                    <input type="email" class="form-control form-login" name="email" id="email" required="" placeholder="Ex: yourmail@domain.com" >
                    <small class="font-italic text-muted">masukan email anda dengan format yang benar</small>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                            
                    </div>
                    <div class="col-lg-6 text-right">
                        <div class="form-group">
                            <button type="button" name="masuk" id="btnLogin" class="btn btn-primary poppins-700">
                                Reset Password
                            </button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <!--/TEXT-->

            <!-- IMAGE -->
            <div class="col-lg-4 pt-5 d-none d-lg-block d-xl-block align-middle" >
                <img class="mt--100 d-block" style="z-index:1" src="<?= base_url() ?>assets/email_bisa_academy/Group_5.png" width="400">

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
        var csrfName = $('.csrf').attr('name');  
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>login_customer/forget', 
            dataType : "JSON",
            data:{
                email:$('#email').val(), 
                [csrfName]: '<?=$csrf['hash'];?>'
            },
            beforeSend: function(){
                $("#btnLogin").attr("disabled", "disabled");
                $("#btnLogin").text("Tunggu sebentar..");
            },
            success: function(data){ 
                $("#sukses").css('display', 'block');
                $("#form_forgot").css('display', 'none');
            },
            error: function(data){
                $("#msg").text("Gagal mengirim pesan");
                $(".notice").addClass('alert-danger');
                $(".notice").fadeIn( 100 );     
                setTimeout(() => {
                    $( ".notice" ).fadeOut( 3000 );    
                }, 2000);            
            }
        });  
    });
});
</script>
