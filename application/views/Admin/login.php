<!doctype html>
<html lang="en">
   <head>
      <title>Login Dapur BISAAI</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="<?=base_url('assets/custom.css')?>">
   </head>
   <body>
      <section class="ftco-section">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-6 text-center mb-5">
                  <h2 class="heading-section">Login Admin</h2>
               </div>
            </div>
            <div class="row justify-content-center">
               <div class="col-md-6 col-lg-5">
                  <div class="login-wrap p-4 p-md-5">
                     <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-user-o"></span>
                     </div>
                     
                     <form action="#" class="login-form">
                        <input type="hidden" class="csrf" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                        <div class="form-group">
                           <input type="text" class="form-control rounded-left" id="email" placeholder="Email" required>
                        </div>
                        <div class="form-group d-flex">
                           <input type="password" class="form-control rounded-left" id="password" placeholder="Password" required>
                        </div>
                        <div class="form-group d-flex">
                            <button type="button" name="" id="btnLogin" class="btn btn-primary btn-lg btn-block rounded">Login</button>
                        </div>
                         
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
       
   </body>
    <div class="alert notice" role="alert" style="display: none; max-width: 300px; width: 100%; float: right; position : fixed; top: 2rem; right: 1rem; z-index: 9999; opacity: 0.7 ">
    <span id="msg"> Login Successfully, Redirecting... </span>
    </div>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

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
        url: '<?php echo base_url(); ?>Dapur/login/auth', 
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