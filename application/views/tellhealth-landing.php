<?php 
   $this->load->view('Templates/Link-css');
   $this->load->view('Templates/Navbar'); ?>

<!-- TAMPIL -->
<section class=" bg-light pb-5">
    <br /><br /><br />
    <div class="container pl-5">
        <div class="row">
            <!-- TEXT -->
            <div class="col-lg-7 pt-5">
                <br /><br />
                <h2 style="z-index:2" class="position-absolute nsans-700 text-hitam-custom text-shadow-2">Tellhealth AI</h2>
                <br /><br />

                <div class="mt-4 nsans-400 letter-spacing text-size-3 text-muted text-shadow-2"
                    style="line-height:1.7; opacity: 0.7;">
                    Tellhealth menyediakan berbagai layanan healthcare berbasis Artificial Intelligence. 
                    Layanan ditawarkan B2B kepada Setiap Rumah Sakit atau Instansi Medis agar dapat menggunakan layanan tellhealth guna membantu petugas medis dalam mendeteksi hasil radiologi, 
                    cek lab dan deteksi penyakit dengan bantuan AI.
                </div>
                <br><br>
                <a href="https://tellhealth.ai/" style="text-decoration: none" target="_blank">
                    <button class="box-shadow text-light poppins-500 text-size-1 btn rounded-pill bg-hitam-custom px-4">Website</button>
                </a>&nbsp;&nbsp;  
                <a href="https://play.google.com/store/apps/details?id=com.pos.bisatampil" target="_blank">  
                    <button class="btn text-light rounded-pill text-size-1 poppins-500 bg-hitam-custom px-4 "><i
                            class="fab fa-google-play "></i>&nbsp; Download
                        App</button>
                </a>
            </div>
            <!--/TEXT-->

            <!-- IMAGE -->
            <div class="col-lg-5  pt-5 d-none d-lg-block d-xl-block">
                <br /><br />
                <img class="mx-auto d-block img-fluid" src="<?= base_url('assets/img/tampil.png') ?>" width="250px">
            </div>
            <!-- /IMAGE -->
        </div>
    </div>
</section><br><br><br>
<!-- /TAMPIL -->

<!-- VIDEO / SANDBOX-->
    <!--<div class="container">-->
    <!--    <br /><br />-->
    <!--    <div class="row my-5">-->
    <!--        <div class="col text-center text-hitam-custom">-->
    <!--            <h2 class="poppins-600 text-shadow">Video</h2>-->

    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="row">-->
    <!--        <div class="col pr-5">-->
    <!--        <iframe width="560" height="315" class="w-100 rounded-pill-2 box-shadow" src="https://www.youtube.com/embed/P00hg6sfXa0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
    <!--        </div>-->
    <!--        <div class="col pl-4">-->
    <!--            <p class="poppins-400 text-size-3 mt-5 text-muted text-shadow text-justify" style="line-height: 1.8;">-->
    <!--                BISA Tampil-->
    <!--            </p>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
<!-- /VIDEO / SANDBOX-->
 
<!-- FITUR -->
<section class="pt-3">
    <div class="container "><br><br><br><br><br><br><br>
        <div class="row " id='fitur'>
        <div class="col-lg-12">
                    <h2 class='poppins-600 text-hitam-custom text-center' id="Produk">Fitur-Fitur</h2>
                </div><br><br><br><br>
        </div>

        <section class=" pb-5">
            <div class="container pl-5">
                <div class="row">
                    <!-- IMAGE -->
                    <div class="col-lg-5  pt-5 d-none d-lg-block d-xl-block">
                        <img class="mx-auto d-block img-fluid" src="<?= base_url('') ?>assets/img/herotampil.png" width="300px">
                    </div>
                    <!-- /IMAGE -->

                    <!-- TEXT -->
                    <div class="col-lg-7">
                        <br /><br />
                        <h2 style="z-index:2;" class="position-absolute nsans-700 text-hitam-custom text-shadow-2">Video Conference for Everyone
                        </h2><br><br>

                        <div class="mt-5 nsans-400 letter-spacing text-size-3 text-muted text-shadow-2"
                            style="line-height:1.7; opacity: 0.7;">
                            Dapatkan kemudahan berdiskusi dan bertatap muka secara daring melalui aplikasi dan web BISA Tampil.
                        </div>

                    </div>
                    <!--/TEXT-->

                </div>
            </div>
            <br /><br />
        </section>

    </div>
</section>
<!-- /FITUR -->



<!-- SUBFITUR -->
<section class="mb-4 d-none d-lg-block d-xl-block pb-5">
        <div class="container-fluid">
            <br /><br /><br />
            <div class="owl-carousel owl-theme">
                <div class="item py-5">
                    <div class="card card-custom h-100 mx-3">
                        <div class="card-body mx-1 my-3">
                            <img src="<?= base_url() ?>assets/img/fiturtampil2.png" style='width:200px; height:150px;'
                                class='card-img-top mx-auto pt-3 px-3'>
                            <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Banyak Pilihan Paket<br></h5>
                            <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">
                            Cari dan pilih paket sesuai keinginanmu dengan tepat! Mulai kebutuhan untuk pribadi hingga perusahaan besar, semuanya tersedia di BISA Tampil.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" item py-5">
                    <div class="card card-custom h-100 mx-3">
                        <div class="card-body mx-1 my-3">
                            <img src="<?= base_url() ?>assets/img/fiturtampil1.png" style='width:200px; height:150px;'
                                class='card-img-top mx-auto pt-3 px-3'>
                            <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Buat Room Dengan Mudah</h5>
                            <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">
                            Hanya dengan membeli paket, dengan otomatis room kalian sudah dapat digunakan! Jangan lupa juga untuk membagikan informasi room secara instan lewat tombol yang sudah tersedia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item py-5">
                    <div class="card card-custom h-100 mx-3">
                        <div class="card-body mx-1 my-3">
                            <img src="<?= base_url() ?>assets/img/fitur3.png" style='width:200px; height:150px;'
                                class='card-img-top mx-auto pt-3 px-3'>
                            <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Berbagi File dan Layar</h5>
                            <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">
                            Dengan kapasitas room up-to 500 peserta, berbagi file dan layar dapat dilaksanakan langsung di dalam roomnya sendiri. Fitur attachment dan screen sharing ini pun terjamin aman.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- /SUBFITUR -->


<!-- SUBFITUR MOBILE -->
    <section class="mb-4 d-xs-block d-sm-block d-md-block d-lg-none d-xl-none bg-light pb-5">
        <div class="container">
            <br /><br /><br />
                    <div class="card card-custom h-100 mx-3 mt-2">
                        <div class="card-body">
                            <img src="<?= base_url() ?>assets/img/fiturtampil2.png" style='width:200px; height:150px;'
                            class='card-img-top mx-auto d-block'>
                            <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Banyak Pilihan Paket<br></h5>
                            <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">
                            Cari dan pilih paket sesuai keinginanmu dengan tepat! Mulai kebutuhan untuk pribadi hingga perusahaan besar, semuanya tersedia di BISA Tampil.
                            </p>

                        </div>
                    </div>

                    <div class="card card-custom h-100 mx-3 mt-2">
                        <div class="card-body">
                            <img src="<?= base_url() ?>assets/img/fiturtampil1.png" style='width:200px; height:150px;'
                            class='card-img-top mx-auto d-block'>
                            <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Buat Room Dengan Mudah</h5>
                            <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">
                            Hanya dengan membeli paket, dengan otomatis room kalian sudah dapat digunakan! Jangan lupa juga untuk membagikan informasi room secara instan lewat tombol yang sudah tersedia.
                            </p>
                        </div>
                    </div>

                    <div class="card card-custom h-100 mx-3 mt-2">
                        <div class="card-body">
                            <img src="<?= base_url() ?>assets/img/fitur3.png" style='width:200px; height:150px;'
                                class='card-img-top mx-auto d-block'>
                            <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Berbagi File dan Layar</h5>
                            <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">
                            Dengan kapasitas room up-to 500 peserta, berbagi file dan layar dapat dilaksanakan langsung di dalam roomnya sendiri. Fitur attachment dan screen sharing ini pun terjamin aman.
                            </p>

                        </div>
                    </div>
                <!-- <div class="item py-5">
                    <div class="card card-custom h-100 mx-3">
                        <div class="card-body">
                            <img src="assets/img/empty.png" style='width:150px; height:150px; object-fit:cover;'
                                class='rounded-circle box-shadow mx-auto d-block'>
                            <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Person 4</h5>
                            <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">

                                <q class='font-italic'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem
                                    rerum officia
                                    corrupti
                                    libero enim! Voluptates soluta rerum unde nobis? Asperiores facilis est delectus
                                    sequi?
                                    Itaque ipsam et voluptas asperiores temporibus,</q>
                            </p>

                        </div>
                    </div>
                </div> -->
            </div>
    </section>
<!-- /SUBFITUR MOBILE -->

<?php
$this->load->view('Templates/Footer');
$this->load->view('Templates/Link-js');?>
<script>
setInterval(function() {
    $(".bounce").effect("bounce", {
        times: 1
    }, 1100);
}, 1100)



$('.owl-carousel').owlCarousel({
    center: true,
    items: 3,
    loop: true,
})
</script>