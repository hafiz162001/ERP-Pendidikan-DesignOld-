<?php
$this->load->view('Templates/Link-css');
$this->load->view('Templates/Navbar'); 
$this->CI = &get_instance();
?>
<section class="container-fluid my-5 py-5" style="background:#3457D5; color: white; height: auto"> 
    <div class="container p-4">
        <div class="row">
            <div class="col-md-7 col-sm-12">
                <h2><?=$cert['data'][0]['nama_sertifikasi']?></h2>
                <div style="color: white;">
                    Waktu daftar: <?= date("D, d M Y H:i" , strtotime($cert['data'][0]['waktu_daftar']));?>
                </div>
                
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
                        <a class="nav-x nav-link active" href="#showData" id="btnCourse">Section</a>
                    </li>
                    <?php if($cert['data'][0]['status_certification'] == "3" || $cert['data'][0]['status_certification'] == "4") { ?>

                        <li class="nav-item">
                            <a class="nav-x nav-link" href="#showData" id="btnCert">Certificate</a>
                        </li>

                    <?php } ?>
        
                    <!-- <li class="nav-item">
                        <a class="nav-x nav-link" href="#showData" id="btnFaq">FAQ</a>
                    </li> -->
                    </ul>
                </div>
                <div class="card-body" >
                    
                    <div id="course" >
   
                    </div>
                    
                    <div id="cert" style="display: none;">
                        <p class="mt-2">
                            <h5> <i class="fa fa-certificate" aria-hidden="true"></i> Data sertifikat: </h5>
                                <br>
                                Waktu Daftar: <strong><?= date("D, d M Y H:i" , strtotime($cert['data'][0]['waktu_daftar']));?></strong>
                                <br>
                                Waktu Selesai: <strong><?=($cert['data'][0]['waktu_selesai'] == null ) ? "-": date("D, d M Y H:i" , strtotime($cert['data'][0]['waktu_selesai'])); ?></strong>
                                <br>
                                Nilai Akhir: <strong> <?=$cert['data'][0]['nilai_akhir']?> </strong>
                                <br> 
                                Keterangan: <strong> <?=($cert['data'][0]['status_certification'] == "3" ) ? "LULUS": "GAGAL"; ?> </strong>
                        </p>
                        <p class="mt-3">
                            <?php if($cert['data'][0]['status_certification'] == "3") { ?>
                                <img src="<?=base_url()?>exam_certification/download_cert/<?=$cert['data'][0]['foto_sertifikat']?>" alt="" style="width: 200px" class="img-thumbnail" >
                                <br>
                                <a id="downloadCert" href="#" onclick="goto('<?=base_url()?>exam_certification/download_cert/<?=$cert['data'][0]['foto_sertifikat']?>')" class="btn btn-primary mt-2" > <i class="fa fa-download" aria-hidden="true" download="my_certifcate.jpg"></i> Unduh sertifikat </a>   
                            <?php } ?> 
                        </p>
                    </div>     
                </div>

                <div class="card-footer">
                    Nilai Anda: <strong> <?=($cert['data'][0]['nilai_akhir'])?> </strong>
                </div>
            </div>

        </div>
    </div>
</section>
<?php
// var_dump($cert);
// echo "<pre>";
// print_r($cert);
$this->load->view('Templates/Footer');
$this->load->view('Templates/Link-js'); ?>

<script>
function goto(url){
        window.location = url;
    }

$(document).ready(function(){
    page = 1;
    no = 1;
    
    $( "#btnDesc" ).click(function() {
        $('.nav-x').removeClass('active');
        $(this).addClass('active');
        $('#desc').fadeIn('slow');
        $('#course').css('display','none');
        $('#faq').css('display','none');   
    });

    $( "#btnCourse" ).click(function() {
        $('.nav-x').removeClass('active');
        $(this).addClass('active');
        $('#desc').css('display','none');
        $('#course').fadeIn('slow');
        $('#cert').css('display','none');   
    });

    $( "#btnCert" ).click(function() {
        $('.nav-x').removeClass('active');
        $(this).addClass('active');
        $('#desc').css('display','none');
        $('#course').css('display','none');
        $('#cert').fadeIn('slow'); 
    });

    show_section();
    function show_section(){
        var tipe = $("#jenis").find(":selected").val();
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>exam_certification/show_section', 
            dataType : "JSON",
            data:{
                page: page,
                id: <?=$id?>
            },
            beforeSend: function(){
                
            },
            success: function(data){ 
                if (page==1) {
                    no = 1;
                }
                html = "";
                $.each(data.data, function(i, item) {
                    if(item.status == 1){
                        link = 'onclick=goto("<?php echo base_url('exam_certification/section/'); ?>'+item.id_customer_certification+'/'+item.id_certification_exam+'")';
                        bg = ""
                    } else {
                        link = "";

                        if(item.nilai>= item.passing_grade){
                            bg = 'bg-success text-white';
                        } else {
                            bg = 'bg-danger text-white';
                        }

                    }
                    html += '<div class="card mt-2 box-shadow hovering '+bg+' " style="width: 100%; cursor: pointer" '+link+' >';
                    html += '    <div class="card-body">   ';
                    html += '        <h5 class="card-title">Section '+no+' # '+item.nama+'</h5>';
                    if (item.nilai == null) {
                        nilai = " - ";
                    } else {
                        nilai = item.nilai;
                    }
                    html += '        <p class="card-text"> Nilai Minimum Lulus: '+item.passing_grade+' <br> Nilai Anda: '+ nilai +' ' ;
                    html += '        </p>';
                    html += '    </div>';
                    html += '</div>';
                    no++;
                });

                jumlah = Math.ceil( data.row_count / data.offset);

                if(page==1){
                    $("#course").html(html);     
                } else {
                    $("#course").append(html);
                }
                
                if( jumlah == 0 || jumlah == page) {
                    // 
                    page = 1;
                } else {
                    page++;
                    show_section();
                }
                
            },
            complete:function(data){
                // $("#loading").html("");
            },
            error: function(){
                $("#msg").text("Opps.. gagal mengambil data.");
                $(".notice").addClass('alert-danger');
                $(".notice").fadeIn( 1000 );     
                setTimeout(() => {
                    $( ".notice" ).fadeOut( 3000 );    
                }, 2000);
                
            }
        });  
    }
});

</script>