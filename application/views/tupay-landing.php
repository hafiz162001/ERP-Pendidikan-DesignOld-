<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/styles.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/OwlCarousel/owl.carousel.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/OwlCarousel/owl.theme.default.min.css') ?>" type="text/css">
    <link href="<?= base_url('assets/img/icon/bisaai.png') ?>" rel="icon">
    <title>TuPAY - Landing Page</title>
    <style>
        html, body {
            max-width: 100%;
            overflow-x: hidden;
        }
        .owl-carousel .owl-nav{
            overflow: hidden;
            height: 0px;
        }   

        .owl-theme .owl-dots .owl-dot.active span, 
        .owl-theme .owl-dots .owl-dot:hover span {
            background: #2caae1;
        }

        .owl-carousel .item {
            text-align: center;
        }

        .owl-carousel .nav-btn{
            height: 47px;
            position: absolute;
            width: 26px;
            cursor: pointer;
            top: 100px !important;
        }

        .owl-carousel .owl-prev.disabled,
        .owl-carousel .owl-next.disabled{
            pointer-events: none;
            opacity: 0.2;
        }

        .owl-carousel .prev-slide{
            background: url(nav-icon.png) no-repeat scroll 0 0;
            left: -33px;
        }
        .owl-carousel .next-slide{
            background: url(nav-icon.png) no-repeat scroll -24px 0px;
            right: -33px;
        }
        .owl-carousel .prev-slide:hover{
            background-position: 0px -53px;
        }
        .owl-carousel .next-slide:hover{
            background-position: -24px -53px;
        }

        span.img-text {
            text-decoration: none;
            outline: none;
            transition: all 0.4s ease;
            -webkit-transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            -o-transition: all 0.4s ease;
            cursor: pointer;
            width: 100%;
            font-size: 23px;
            display: block;
            text-transform: capitalize;
        }
        span.img-text:hover {
            color: #2caae1;
        }
    </style>
</head>

<body>
<?php
   $this->load->view('Templates/Navbar'); ?>
?>

<section class=" bg-light pb-5">
        <div class="container pl-5">
            <div class="row">
                <!-- TEXT -->
                <div class="col-lg-7 pt-5">
                    <br /><br /><br /><br />
                    <h2 style="z-index:2" class="position-absolute nsans-700 text-hitam-custom text-shadow-2">TuPAY</h2>
<br /><br />

                <div class="mt-4 nsans-400 letter-spacing text-size-3 text-muted text-shadow-2"
                    style="line-height:1.7; opacity: 0.7; text-align: justify;">
                    TuPAY adalah penyedia layanan Point of Sale (POS) untuk para pebisnis, enterpreneur dan khususnya pelaku UMKM. Dengan tanpa adanya pemungutan biaya, proses penjualan, inventaris dan manajemen lainnya dapat dilakukan dengan mudah dan praktis!
                </div>
                <br><br>
                <div class="container">
                    <div class="row">
                        <div class="sm-2 pb-3 mr-2">
                            <a href="https://tupay.co.id" style="text-decoration: none" target="_blank">
                                <button class="box-shadow text-light poppins-500 text-size-1 btn rounded-pill bg-hitam-custom px-4">
                                    <i class="fa fa-globe"></i>&nbsp; Website</button>
                            </a>
                        </div>
                        <div class="sm-2 pb-3 mr-2">
                            <a href="https://play.google.com/store/apps/details?id=com.pos.tupayposnew" target="_blank">  
                                <button class="btn text-light rounded-pill text-size-1 poppins-500 bg-hitam-custom px-4 "><i
                                class="fab fa-google-play "></i>&nbsp; Google Play</button>
                        </a> 
                        </div>
                        <!--<div class="sm-2 pb-3 mr-2">-->
                        <!--    <a href="https://apps.apple.com/id/app/bisa-ai-academy/id1525123512" target="_blank">    -->
                        <!--    <button class="btn text-light rounded-pill text-size-1 poppins-500 bg-hitam-custom px-4 "><i-->
                        <!--    class="fab fa-app-store"></i>&nbsp; Download App</button>-->
                        <!--</a>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
            <!--/TEXT-->

            <!-- IMAGE -->
            <div class="col-lg-5  pt-5 d-none d-lg-block d-xl-block">
                <br /><br />
                <img class="mx-auto d-block img-fluid" src="<?= base_url() ?>assets/img/hero/tupay.png">

            </div>
            </div>
        </div>
        <br><br><br><br>
    </section>
    <!-- /BANNER -->

    <!-- VIDEO / SANDBOX-->
    <div class="container">
        <br /><br />
        <div class="row my-5">
            <div class="col text-center text-hitam-custom">
                <h2 class="poppins-600 text-shadow">Video</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
            <iframe width="560" class="w-100 rounded-pill-2 box-shadow" height="315"
                src="https://www.youtube.com/embed/Blg4bFyzKpo" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <p class="poppins-400 text-size-3 mt-5 text-muted text-shadow text-justify" style="line-height: 1.8;">
                    Dengan wajah baru kini TuPAY hadir kembali membawakan berbagai fitur-fitur menarik.<br><br>
                Masih kebingungan mengenai apa itu TuPAY dan apa bedanya dari yang sebelumnya? Coba tonton video singkat
                di samping mengenai TuPAY dan fitur-fiturnya!
                </p>
            </div>
        </div>
    </div>
    <!-- /VIDEO / SANDBOX-->
<br><br><br><br><br>

<!-- FITUR -->
<section class="bg-light pb-5">
        <div class="container pl-5">
            <div class="row">
                <!-- TEXT -->
                <div class="col-lg-4 pt-5  pt-5 d-none d-lg-block d-xl-block" id="Customer">
                    <br /><br />
                    <img style="width: 250px" class="d-block img-fluid" src="<?= base_url() ?>assets/img/Bussiness.png">
                </div>
                <!--/TEXT-->

                <!-- IMAGE -->
                <div class="col-lg-8 ">

                    <br /><br /><br /><br />
                        <h2 class="nsans-700 text-hitam-custom text-shadow-2">For Bussiness Owner</h2>
                    <div class="mt-4 nsans-400 letter-spacing text-size-3 text-muted text-shadow-2"
                        style="line-height:1.7; opacity:0.7">
                        Permudah urusan bisnis setiap harinya dengan fitur POS (Point-of-sale), manajemen kasir, inventori, karyawan hingga toko!
                    </div>

                </div>
                <!-- /IMAGE -->
            </div>
        </div>
    </section>
    <section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <img class="img-fluid" src="<?= base_url() ?>assets/img/tupay/tupay1.png" alt="">
                <h3 class="mt-4 poppins-600 letter-spacing">Aplikasi Point of Sales untuk segala jenis bisnis<br /> dan
                    urusan
                    kasir</h3>
                <p class='mt-5 text-muted poppins-400 letter-spacing text-size-5'>
                    Kelola bisnis Anda secara efisien dari mana saja melalui aplikasi yang sudah dirancang
                    <br />untuk
                    mempermudah urusan bisnis setiap harinya
                </p>
            </div>
        </div>
        <br><br>
    </div>
    </section>
    <!-- SUBFITUR -->
    <!--<section class="mb-4 d-none d-lg-block d-xl-block bg-light pb-5">-->
    <!--    <div class="container-fluid bg-light">-->
    <!--        <br /><br /><br />-->
    <!--        <div class="owl-carousel owl-theme">-->
    <!--            <div class="item py-5">-->
    <!--                <div class="card card-custom h-100 mx-3">-->
    <!--                    <div class="card-body">-->
    <!--                        <img src="<?= base_url() ?>assets/img/tupay/fitur1.png" style='width:80px; height:60px;'-->
    <!--                            class='card-img-top mx-auto pt-3 px-3'>-->
    <!--                        <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Manajemen Inventori<br></h5>-->
    <!--                        <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">-->
    <!--                            Kelola stok, menu, dan bahan-bahan toko anda secara lengkap setiap saat<br><br><br>-->
    <!--                        </p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class=" item py-5">-->
    <!--                <div class="card card-custom h-100 mx-3">-->
    <!--                    <div class="card-body">-->
    <!--                        <img src="<?= base_url() ?>assets/img/tupay/fitur2.png" style='width:80px; height:60px;'-->
    <!--                            class='card-img-top mx-auto pt-3 px-3'>-->
    <!--                        <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Toko Terdekat</h5>-->
    <!--                        <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">-->
    <!--                            Dengan TuPAY POS, otomatis tokomu akan lebih mudah ditemukan pelanggan, ini tentunya akan meningkatkan omset usaha!<br><br>-->
    <!--                        </p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="item py-5">-->
    <!--                <div class="card card-custom h-100 mx-3">-->
    <!--                    <div class="card-body">-->
    <!--                        <img src="<?= base_url() ?>assets/img/tupay/fitur4.png" style='width:80px; height:60px;'-->
    <!--                            class='card-img-top mx-auto pt-3 px-3'>-->
    <!--                        <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Wireless Printing</h5>-->
    <!--                        <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">-->
    <!--                        Cetak semua laporan transaksi dengan mudah lewat printer bluetooth pilihan<br><br><br>-->
    <!--                        </p>-->

    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
<!-- /SUBFITUR -->


<!-- SUBFITUR MOBILE -->
    <!--<section class="mb-4 d-xs-block d-sm-block d-md-block d-lg-none d-xl-none bg-light pb-5">-->
    <!--    <div class="container">-->
    <!--        <br /><br /><br />-->
    <!--                <div class="card card-custom h-100 mx-3 mt-2">-->
    <!--                    <div class="card-body">-->
    <!--                        <img src="<?= base_url() ?>assets/img/talent.png" style='width:180px; height:200px;'-->
    <!--                        class='card-img-top mx-auto d-block'>-->
    <!--                        <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Program “Talent”<br></h5>-->
    <!--                        <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">-->
    <!--                        Bekerjasama dengan industri dan institusi, BISA AI Academy dan para partner membuka lowongan magang dan pekerjaan setiap waktunya.-->
    <!--                        </p>-->

    <!--                    </div>-->
    <!--                </div>-->

    <!--                <div class="card card-custom h-100 mx-3 mt-2">-->
    <!--                    <div class="card-body">-->
    <!--                        <img src="<?= base_url() ?>assets/img/kompetisi.png" style='width:180px; height:200px;'-->
    <!--                        class='card-img-top mx-auto d-block'>-->
    <!--                        <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Kompetisi</h5>-->
    <!--                        <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">-->
    <!--                        Mulai dari kompetisi AI, Data Science, IoT hingga berbagai kategori lainnya, Kompetisi yang diadakan sudah tersertifikasi dan tentunya berhadiah.-->
    <!--                        </p>-->
    <!--                    </div>-->
    <!--                </div>-->

    <!--                <div class="card card-custom h-100 mx-3 mt-2">-->
    <!--                    <div class="card-body">-->
    <!--                        <img src="<?= base_url() ?>assets/img/event.png" style='width:180px; height:200px;'-->
    <!--                            class='card-img-top mx-auto d-block'>-->
    <!--                        <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Event</h5>-->
    <!--                        <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">-->
    <!--                        Berkolaborasi dengan berbagai macam pihak, BISA AI Academy berkesempatan untuk mengadakan Webinar ataupun Workshop gratis dan bersertifikat setiap minggunya.-->
    <!--                        </p>-->

    <!--                    </div>-->
    <!--                </div>-->
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
    <br><br><br><br>
<section class="my-auto">
    <!--Title-->
        <div class="container pl-5">
            <br>
            <div class="row">
                <!-- TEXT -->
                <div class="col-lg-7 pt-2" id="Tampil">
                        <h2 class="nsans-700 text-hitam-custom text-shadow-2">For Customer</h2>
                    <div class="mt-4 nsans-400 letter-spacing text-size-3 text-muted text-shadow-2"
                        style="line-height:1.7; opacity: 0.7;">
                        Eksplore dan berbelanja di berbagai toko mitra TuPAY!
                        Dan jangan khawatir karena transaksimu terjamin aman dan gampang.
                    </div>
                </div>
                <!--/TEXT-->

                <!-- IMAGE -->
                <div class="col-lg-5 d-none d-lg-block d-xl-block">
                    <br>
                    <img style="width: 250px" class="mx-auto d-block img-fluid" src="<?= base_url() ?>assets/img/Customer.png">
                </div>
                <!-- /IMAGE -->
            </div>
        </div>
    <section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <img class="img-fluid" src="<?= base_url() ?>assets/img/tupay/tupay1.png" alt="">
                <h3 class="mt-4 poppins-600 letter-spacing">Berbelanja di aplikasi dan mitra-mitra terbaik TuPAY</h3>
                <p class='mt-5 text-muted poppins-400 letter-spacing text-size-5'>
                    Bersama aplikasi TuPAY dan mitra-mitra terbaik TuPAY, dijamin<br>
                    pengalaman berbelanja Anda menjadi mudah dan cepat
                </p>
            </div>
        </div>
    </div>
    </section>
    <!-- SUBFITUR -->
    <!--<section class="mb-4 d-none d-lg-block d-xl-block pb-5">-->
    <!--    <div class="container-fluid">-->
    <!--        <br /><br /><br />-->
    <!--        <div class="customer owl-carousel owl-theme">-->
    <!--            <div class="item py-5">-->
    <!--                <div class="card card-custom h-100 mx-3">-->
    <!--                    <div class="card-body">-->
    <!--                        <img src="<?= base_url() ?>assets/img/tupay/fitur1.png" style='width:80px; height:60px;'-->
    <!--                            class='card-img-top mx-auto pt-3 px-3'>-->
    <!--                        <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Kartu Member<br></h5>-->
    <!--                        <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">-->
    <!--                            Kelola stok, menu, dan bahan-bahan toko anda secara lengkap setiap saat<br><br><br>-->
    <!--                        </p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class=" item py-5">-->
    <!--                <div class="card card-custom h-100 mx-3">-->
    <!--                    <div class="card-body">-->
    <!--                        <img src="<?= base_url() ?>assets/img/tupay/fitur4.png" style='width:80px; height:60px;'-->
    <!--                            class='card-img-top mx-auto pt-3 px-3'>-->
    <!--                        <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Poin</h5>-->
    <!--                        <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">-->
    <!--                            Kumpulkan dan tukar poin terhadap beragam voucher dan hadiah menarik dari mitra-mitra TuPAY<br><br>-->
    <!--                        </p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
<!-- /SUBFITUR -->


<!-- SUBFITUR MOBILE -->
    <!--<section class="mb-4 d-xs-block d-sm-block d-md-block d-lg-none d-xl-none bg-light pb-5">-->
    <!--    <div class="container">-->
    <!--        <br /><br /><br />-->
    <!--                <div class="card card-custom h-100 mx-3 mt-2">-->
    <!--                    <div class="card-body">-->
    <!--                        <img src="<?= base_url() ?>assets/img/talent.png" style='width:180px; height:200px;'-->
    <!--                        class='card-img-top mx-auto d-block'>-->
    <!--                        <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Program “Talent”<br></h5>-->
    <!--                        <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">-->
    <!--                        Bekerjasama dengan industri dan institusi, BISA AI Academy dan para partner membuka lowongan magang dan pekerjaan setiap waktunya.-->
    <!--                        </p>-->

    <!--                    </div>-->
    <!--                </div>-->

    <!--                <div class="card card-custom h-100 mx-3 mt-2">-->
    <!--                    <div class="card-body">-->
    <!--                        <img src="<?= base_url() ?>assets/img/kompetisi.png" style='width:180px; height:200px;'-->
    <!--                        class='card-img-top mx-auto d-block'>-->
    <!--                        <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Kompetisi</h5>-->
    <!--                        <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">-->
    <!--                        Mulai dari kompetisi AI, Data Science, IoT hingga berbagai kategori lainnya, Kompetisi yang diadakan sudah tersertifikasi dan tentunya berhadiah.-->
    <!--                        </p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--        </div>-->
    <!--</section>-->
<!-- /SUBFITUR MOBILE -->
        <br /><br />
    </section>
<!-- /FITUR -->





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
$('.customer').owlCarousel({
    center: true,
    items: 2,
    loop: false,
})
</script>