<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/case.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/OwlCarousel/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/OwlCarousel/owl.theme.default.min.css') ?>">
    <link href="<?= base_url('assets/img/icon/bisaai.png') ?>" rel="icon">
    <title>Case Study - Cafe</title>
</head>

<body>
<?php
   $this->load->view('Templates/Navbar'); ?>

<!-- BANNER -->
<section class="mt-5">


    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid" src="<?= base_url() ?>assets/img/tupay/hero.jpg"
                    style="filter:blur(4px) brightness(70%); object-fit:cover; height:620px; width:100%;">
                <div class="carousel-caption  position-absolute d-none d-md-block text-light"
                    style="margin-bottom:180px !important;">
                    <h2 class="nsans-700 letter-spacing">Aplikasi Kasir untuk Kafe</h2>
                    <p class="text-size-5 poppins-400 letter-spacing">Aplikasi Point of Sales simpel sekaligus
                        praktis untuk langkah awal kafe yang sukses</p>
                    <!-- <button class="btn btn-primary rounded-pill-2 px-4 text-size-3 nsans-600">Mulai sekarang</button> -->
                </div>
            </div>
        </div>
</section>
<!-- BANNER -->
<br>
<!-- SECTION 2-->
<section>
    <div class="container">
        <div class="row mt-5 text-center">
            <div class="col">
                <h3 class="letter-spacing montserrat-600">Aplikasi Point of Sales Kafe</h3>
                <p class="text-muted poppins-400" style="line-height:1.9">
                    Berikan pelanggan anda layanan dan pengalaman berbisnis terbaik melalui aplikasi TuPAY.
                </p>

            </div>
        </div>
    </div>
</section>
<!-- SECTION 2-->

<!-- SECTION 3 -->
<br /><br />
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="<?= base_url() ?>assets/img/tupay/caffe2.png"
                    style="width:475px; height:526px; object-fit:cover; filter:brightness(80%)" class="mx-auto d-block img-fluid">
            </div>
            <div class="col-lg-6 pl-0">
                <img src="<?= base_url() ?>assets/img/tupay/transaksi.png"
                    style="width:517px; height:290px; object-fit:cover; filter:brightness(80%)" class="float-left mb-3 img-fluid">
                <h3 class="poppins-600 letter-spacing text-hitam-custom">
                    Manajemen dan Transaksi yang Mudah
                </h3>
                <p class="montserrat-400 mt-3 letter-spacing">
                    Hanya dengan menggunakan smartphone, semua urusan jual beli, laporan dan karyawan dapat dengan mudah
                    terlaksana
                </p>
            </div>
        </div>
    </div>
</section>
<!-- SECTION 3 -->
<br /><br />
<div class="container my-5">
    <hr />
</div>
<br /><br /><br />
<!-- SECTION 4 -->
<div class="container">
    <div class="row mb-5">
        <div class="col-lg-6 text-center">
            <img src="<?= base_url() ?>assets/img/tupay/bahan-kopi.png"
                style="width:475px; height:283px; object-fit:cover; filter:brightness(70%)" class="img-fluid">
        </div>
        <div class="col-lg-6">
            <h3 class="poppins-600 letter-spacing text-hitam-custom">
                Manajemen Inventori Yang Praktis
            </h3>
            <p class="montserrat-400 mt-3 letter-spacing">
                Dengan laporan dan inventori yang sudah diperbarui setiap harinya, manajamen dan analisa inventori dapat
                dilakukan oleh siapa saja. Ini dapat meminimalisir adanya kerugian atau kehilangan bahan baku.

            </p>
        </div>
    </div>
</div>
<!-- SECTION 4 -->

<!-- SECTION 5 CARD -->
<section>
    <div class="container">
        <br /><br />
        <div class="row mx-5">
            <!-- CARD 1 -->
            <div class="col-lg-4 ">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="https://d9hhrg4mnvzow.cloudfront.net/www.mokapos.com/business_type/coffee_shop/1a3622b8-dashboard-logo.svg"
                                alt="">
                            <h6 class="card-title mt-3 montserrat-600 letter-spacing">Analisa Keuntungan Lengkap</h6>
                            <p class="card-text poppins-400 text-muted">
                                Dari laporan yang sudah tersedia, semua data-data tersebut secara otomatis dapat
                                disortir dan dianalisa secara lengkap
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /CARD 1 -->


            <!-- CARD 2 -->
            <div class="col-lg-4 ">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="https://d9hhrg4mnvzow.cloudfront.net/www.mokapos.com/business_type/coffee_shop/299c9399-ingredient-inv-logo.svg"
                                alt="">
                            <h6 class="card-title mt-3 montserrat-600 letter-spacing">Promo Untuk Semua</h6>
                            <p class="card-text poppins-400 text-muted">
                                Ajak terus para pelanggan untuk berbelanja setiap harinya melalui promo dan hadiah
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /CARD 2 -->

            <!-- CARD 2 -->
            <div class="col-lg-4 ">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="https://d9hhrg4mnvzow.cloudfront.net/www.mokapos.com/business_type/coffee_shop/661b264d-promo-logo.svg"
                                alt="">
                            <h6 class="card-title mt-3 montserrat-600 letter-spacing">Kelola Bahan Baku secara Praktis
                            </h6>
                            <p class="card-text poppins-400 text-muted">
                                Tanpa harus lagi menghitung manual. Kelola dan pantau terus bahan-bahan dari mana saja
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /CARD 2 -->
        </div>
    </div>
</section>
<!-- SECTION 5 CARD -->


<!-- BANNER -->
<section class="mt-5">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid" src="<?= base_url() ?>assets/img/tupay/caffe6.jpg"
                    style="filter:blur(3px) brightness(16%); object-fit:cover; height:780px; width:100%;">
                <div class="carousel-caption  position-absolute d-none d-md-block text-light">
                    <h2 class="poppins-600 letter-spacing">Aplikasi POS yang memberdayakan UMKM lewat aplikasi
                        GRATIS
                    </h2>
                    <img class="mt-5" src="<?= base_url() ?>assets/img/tupay/testimoni.jpg"
                        style="width:168px; height:168px; object-fit:cover; border-radius:50%;" alt="">
                    <p class="text-size-5 poppins-400 letter-spacing mt-3">
                        <q>Buat resep kopi dan minuman lain serta monitor
                            ketersediaan semua<br /> bahan mentahnya dengan lebih mudah.</q></p>
                    <p class="text-size-9 mt-5 montserrat-600 ">
                        M Octaviano Pratama
                    </p>

                    <!-- PENGGUNA TUPAY LAINNYA -->
                    <div class="row mt-5">
                        <div class="col">
                            <hr class="bg-light" style="border:0.8px solid #fff" />
                        </div>
                        <div class="col">
                            <p class="text-size-8 montserrat-600 letter-spacing">Pengguna TuPAY Lainnya</p>
                        </div>
                        <div class="col">
                            <hr class="bg-light" style="border:0.8px solid #fff" />
                        </div>
                    </div>
                    <!-- PENGGUNA TUPAY LAINNYA -->

                    <!-- LOGO PENGGUNA -->
                    <div class="text-center">
                        <img src="<?= base_url() ?>assets/img/tupay/logo-tandus.png" width="168">
                        <img src="<?= base_url() ?>assets/img/tupay/logo-kava.png" width="168">

                    </div>
                    <!-- LOGO PENGGUNA -->
                </div>
            </div>
        </div>
</section>
<!-- BANNER -->

<!-- MULAI BISNIS -->
<section>
    <div class="container">
        <div class="row mb-5 mt-5">
            <div class="col-lg-12 text-center">
                <h2 class="montserrat-600 letter-spacing">Sukses dan berkembang bersama TuPAY</h2>
                <p class="montserrat-400 mt-3">
                    Memberdayakan bisnis, khususnya UMKM secara gratis dan praktis.</p>

                <a target="_blank" href="https://play.google.com/store/apps/details?id=com.pos.tupayposnew"
                    class="ml-2 btn rounded-pill text-light text-size-2 poppins-500 bg-blue-custom px-4 py-2"><i
                        class="fab fa-google-play "></i> Download
                    App</a>
            </div>
        </div>
    </div>
</section>
<!-- /MULAI BISNIS -->

<?php
$this->load->view('Templates/Footer');
$this->load->view('Templates/js-case');?>