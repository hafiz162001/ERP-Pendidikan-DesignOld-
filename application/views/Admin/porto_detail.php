<?php
$this->load->view('Admin/Templates/Header');
$this->CI = &get_instance();

?>

<style>
    img {
        max-width:100%;
    }
</style>
<div class="container-fluid">
<section class="bg-light mt-5 py-5">
    <div class="container mt-2">
        <div class="row d-flex">
            <div class="col-sm-12 col-md-8">

                <h1> <?=$data['nama_portofolio']?> </h1>
                <p class="mt-4">
                    <?=$data['deskripsi_singkat']?>
                </p>
                <p>
                    <h5>Informasi User</h5>
                    Nama:  <?=$data['nama_user']?> <br>
                    Email:  <?=$data['enail']?> <br>
                    Phone:  <?=$data['phone']?> <br>
                </p>  

                <p class="card-text">
                <?=($data['status_portofolio'] == 1) ? '<span class="badge badge-secondary"> Menunggu Approval </span>':' <span class="badge badge-success"> Aktif </span>'; ?>
                 
                </p>
                
            </div>

            <div class="col-sm-12 col-md-4 align-content-middle p-sm-5 p-md-2">
                <img src="<?php $foto = ($data['foto_portofolio'] == "" || $data['foto_portofolio'] == null) ? base_url()."assets/images/blank.png" : $this->CI->config->item('bisaUrl')."portofolio/media/foto_portofolio/".$data['foto_portofolio']; echo $foto;?>" width="100%">
            </div>
        </div>

    </div>
</section>

<?php 
$carousel = array();
if ($data['carousel1'] != NULL || $data['carousel1'] != "" ) {
   array_push($carousel, $data['carousel1']);
}
if ($data['carousel2'] != NULL || $data['carousel2'] != "" ) {
    array_push($carousel, $data['carousel2']);
}
if ($data['carousel3'] != NULL || $data['carousel3'] != "" ) {
    array_push($carousel, $data['carousel3']);
}

// var_dump($carousel);

?>
<section class="mt-3 mb-5">
    <div class="container">
        <h3 class="nsans-700 text-hitam-custom text-shadow-2 text-left pb-3">Detail Portofolio</h3>
        <div class="card shadow box-shadow">
            <div class="card-body">
                <h5>Galery Project</h5>
                <p class="card-text">
                    <div id="carouselId" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php $no = 0;  foreach ($carousel as $s) : ?>
                                <li data-target="#carouselId" data-slide-to="<?=$no?>" class="<?=($no == 0) ? "active" : "";  ?>"></li>
                            <?php $no++; endforeach; ?>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <?php $no = 0;  foreach ($carousel as $s) : ?>
                                <div class="carousel-item <?=($no == 0) ? "active" : "";  ?>">
                                    <img src="<?=$this->CI->config->item('bisaUrl')."portofolio/media/carousel_portofolio/".$s?>" alt="First slide" style="width:100%">
                                </div>
                            <?php $no++; endforeach; ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </p>

                <h5>Deskripsi Project</h5>
                <p class="card-text">
                <?=$data['deskripsi_lengkap']?>
                </p>

                <h5>Course Terkait</h5>
                <p class="card-text">
                <?=$data['nama_course']?>
                </p>

                <h5>Kategori</h5>
                <p class="card-text" style="text-align:">
                <?=$data['nama_kategori_portofolio']?>
                <br>
                <?=$data['deskripsi_kategori_portofolio']?>
                </p>
 
                
            </div>
        </div>
    </div>
</section>

</div>
<?php
$this->load->view('Admin/Templates/Footer', FALSE);
?>

<script>
function goto(url) {
    window.open(url, "_self");
}

$(document).ready(function() {

    var jumlah = 1;
    var allLoad = 0;
    var pageIni = 1;
    var no = 1;

    function delay(callback, ms) {
        var timer = 0;
        return function() {
            var context = this,
                args = arguments;
            clearTimeout(timer);
            timer = setTimeout(function() {
                callback.apply(context, args);
            }, ms || 0);
        };
    }

});
</script>