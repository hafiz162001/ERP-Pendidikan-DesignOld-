<?php
$this->load->view('Templates/Link-css');
$this->load->view('Templates/Navbar'); 
$this->CI = &get_instance();
?>
<style>
    .flat{
        border-radius: 0px;
    }
     
</style>

<section class="container-fluid my-5 py-5" style="background: #0099ff; color: white; height: auto; margin-bottom: 0px !important"> 
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto ">
                    <h1 class="display-4">VPS Huawei Cloud</h1>
                    <p class="lead">
                        Virtual Private Server Kelas Dunia untuk Pendidikan Indonesia <br>
                        Pilihan Lokasi: Singapore, Hongkong, Brazil dan Meksiko</p>
                    <a type="button" class="btn btn-danger text-white mr-2" href="#beli"> Cloud Public</a>
                    
                    <a type="button" class="btn btn-success text-white" href="#beliP"> Cloud Pendidikan</a>
                </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <img src="<?=base_url('assets/images/cloud.png')?>" alt="" style="width: 400px;">
        </div>       
        
    </div>
    </div>
</section>


<section class="container py-5" id="beli">
    <div class="container" >
        <h1 class="display-4 text-center">Cloud Public</h1>
        <p class="mb-5 mt-3">Generasi Elastic Cloud Server terbaru dari Huawei Cloud untuk website / aplikasi berskala kecil dan menengah. Daftar Cloud yang dapat anda pesan:</p>
        <div class="row mb-3 text-center">
            <?php foreach ($data['data'] as $key) :
                 ?>
            <div class="card mb-4 col-lg-3 col-md-6 col-sm-12 flat">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal"><?=$key['nama_cloud_publik']?></h4>
            </div>
            <div class="card-body">
                <h4 class="card-title pricing-card-title">Rp <?=number_format($key['harga'])?> <small class="text-muted">/ Bulan</small></h4>
                <ul class="list-unstyled mt-3 mb-4">
                <li><?=$key['cpu']?> Core CPU</li>
                <li><?=$key['disk']?> Kapasitas penyimpanan</li>
                <li><?=$key['ram']?> Memori</li>
                <li><?=$key['speed_bandwidth']?> Kecepatan bandwidth</li>
                </ul>
                <button type="button" class="btn btn-block btn-success goto" data-id="<?=$key['id_cloud_publik']?>" >Beli Sekarang</button>
            </div>
            </div>
             <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="container py-5" id="beliP" >
    <div class="container">
        <h1 class="display-4 text-center">Cloud Pendidikan</h1>
        <p class="mb-5 mt-3">Paket Cloud dan Content Pendidikan untuk Universitas, Politeknik dan Tempat Kursus dengan dukungan dari Huawei Cloud. Daftar Paket Pendidikan yang tersedia:</p>
        <div class="row mb-3 mt-3 text-center">
            <?php foreach ($dataPendidikan['data'] as $key) :
                 ?>
            <div class="card mb-4 col-lg-4 col-md-6 col-sm-12 flat">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal"><?=$key['nama_paket_pendidikan']?></h4>
            </div>
            <div class="card-body text-left">
                 <?=$key['deskripsi_paket_pendidikan']?>                 
                <a class="btn btn-block btn-primary text-white" href="https://wa.me/6282116654087?text=Pembelian+<?=urlencode($key['nama_paket_pendidikan'])?>"><i class="fa fa-whatsapp" aria-hidden="true"></i> Contact Us</a>
            </div>
            </div>
             <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="container py-5">
    <div class="container">
        <h1 class="display-4 text-center">FAQ</h1>

        <div id="accordion">
        <?php foreach ($dataFAQ['data'] as $key) :
                 ?>
        <div class="card">
            <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?=$key['id_edu_faq']?>" aria-expanded="true" aria-controls="collapse<?=$key['id_edu_faq']?>">
                    <?=$key['pertanyaan']?>
                </button>
            </h5>
            </div>
            <div id="collapse<?=$key['id_edu_faq']?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <?=$key['jawaban']?>
            </div>
            </div>
        </div>
        <?php endforeach; ?>
         
        </div>
    </div>
</section>


<?php
$this->load->view('Templates/Footer');
$this->load->view('Templates/Link-js'); ?>

<script>
// function goto(url){
//     window.open(url, "_self");
// }

// $(document).ready(function(){
//     $('.goto').click(function(){
//         alert("hilih")
//         // onclick="goto('<?=base_url('cloud/beli/').$key['id_cloud_publik']?>')"
//     });
// });

</script>


<script>

function goto(url){
        window.location = url;
    }

$(document).ready(function(){
 
    $(".goto").click(function(){
        // alert("hilih");
        // console.log();
        // console.log($(this).data);
        goto("<?=base_url('cloud/detail/')?>"+$(this).data("id"));
    });
    $( "#loadmore" ).click(function() {
        alert('sdsdasdasdas');
    });
    
    
});
</script>
