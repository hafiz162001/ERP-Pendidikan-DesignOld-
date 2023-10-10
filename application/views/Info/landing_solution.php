<?php
$this->load->view('Templates/Link-css');
$this->load->view('Templates/Navbar'); 
$this->CI = &get_instance();

?>
<section class="container-fluid my-5 py-5" style="<?=$background?> color: white; height: auto"> 
    <div class="container p-4">
        <div class="row">
            <div class="col-md-7 col-sm-12">
                <h2><?=$data['data'][0]['nama_solution'];?></h2>
                <div style="color: white;">
                <?=$data['data'][0]['informasi_singkat'];?>
                </div>
                <div class="mt-2">
                </div>
                
            </div>
            <div class="col-md-5 col-sm-12">
                <img class="mt-2"  src="<?php echo $this->CI->config->item('bisaUrl')."solution/media/solution/".$data['data'][0]['foto_solution'];?>" alt="" style="width: 200px;"> 
            </div>
        </div>
    </div>
</section>
<section class="container mt-2 " id="showData">
    <div class="container">
        <div class="row mb-4">
            
            <div class="card" style="width: 100%;">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-x nav-link active" href="#showData" id="btnOverview">Overview</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-x nav-link" href="#showData" id="btnAdmission">Recent Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-x nav-link" href="#showData" id="btnAcademic">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-x nav-link" href="#showData" id="btnFinance">Testimonial</a>
                    </li>
                     
                    </ul>
                </div>
                <div class="card-body" >
                    <div id="cOverview" class="containerData" style="text-align: justify;">
                      <?=$data['data'][0]['overview']?>
                    </div>
                    <div id="cAdmission" class="containerData" style="display: none;">
                      <?=$data['data'][0]['recent_work']?>
                    </div>
                    <div id="cAcademic" class="containerData" style="display: none;">
                      <?=$data['data'][0]['services']?>
                    </div>
                    <div id="cFinance" class="containerData" style="display: none;">
                      <?=$data['data'][0]['testimonial']?>
 
                      
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</section>




<div class="alert notice" role="alert" style="display: none; max-width: 300px; width: 100%; position : fixed; top: 50%; left:50%;transform: translate(-50%, -50%); z-index: 9999; opacity: 1 ">
  <span id="msg" style="font-weight: bold;">  </span>
</div>

<?php
// echo count($is_enrolled['data']);
// print_r($is_enrolled);
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

    


    $( "#btnOverview" ).click(function() {
        $('.nav-x').removeClass('active');
        $(this).addClass('active');
        $('.containerData').css('display','none');
        $('#cOverview').fadeIn('slow'); 
    });

    $( "#btnAdmission" ).click(function() {
        $('.nav-x').removeClass('active');
        $(this).addClass('active');
        $('.containerData').css('display','none');
        $('#cAdmission').fadeIn('slow'); 
    });

    $( "#btnAcademic" ).click(function() {
        $('.nav-x').removeClass('active');
        $(this).addClass('active');
        $('.containerData').css('display','none');
        $('#cAcademic').fadeIn('slow'); 
    });

    $( "#btnFinance" ).click(function() {
        $('.nav-x').removeClass('active');
        $(this).addClass('active');
        $('.containerData').css('display','none');
        $('#cFinance').fadeIn('slow'); 
    });

    $( "#btnExp" ).click(function() {
        $('.nav-x').removeClass('active');
        $(this).addClass('active');
        $('.containerData').css('display','none');
        $('#cExp').fadeIn('slow'); 
    });

    $( "#btnKarir" ).click(function() {
        $('.nav-x').removeClass('active');
        $(this).addClass('active');
        $('.containerData').css('display','none');
        $('#cKarir').fadeIn('slow'); 
    });

    $( "#btnAbout" ).click(function() {
        $('.nav-x').removeClass('active');
        $(this).addClass('active');
        $('.containerData').css('display','none');
        $('#cAbout').fadeIn('slow'); 
    });

    $( "#btnRegis" ).click(function() {
        $('.nav-x').removeClass('active');
        $(this).addClass('active');
        $('.containerData').css('display','none');
        $('#cRegis').fadeIn('slow'); 
    });

    $( "#btnDaftarYuk" ).click(function() {
        $('.nav-x').removeClass('active');
        $("#btnRegis").addClass('active');
        $('.containerData').css('display','none');
        $('#cRegis').fadeIn('slow'); 
    });

    

});

</script>