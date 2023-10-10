<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/case.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/OwlCarousel/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/OwlCarousel/owl.theme.default.min.css') ?>">
    <link href="<?= base_url('assets/flat-ui/images/Logotype (main).png') ?>" rel="icon">
    <title>Case Study - Diskusi Private</title>
</head>

<body>
    <?php $this->load->view('Templates/Navbar'); ?>

    <section class="mt-5">


        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src="<?= base_url() ?>assets/img/case/diskusi1.jpg" style="filter:blur(4px) brightness(70%); object-fit:cover; height:620px; width:100%;">
                    <div class="carousel-caption  position-absolute  text-light" style="margin-bottom:180px !important;">
                        <h2 class="poppins-600 letter-spacing">Diskusikan Pertanyaan dan Masalahmu Tanpa Ragu</h2>
                        <p class="text-size-5 poppins-400 letter-spacing">Hadir untuk menjawab pertanyaan-pertanyaan langsung dari kamu</p>
                        <!-- <button class="btn btn-primary rounded-pill-2 px-4 text-size-3 nsans-600">Mulai sekarang</button> -->
                    </div>
                </div>
            </div>
    </section>
    <!-- BANNER -->
    <br>
    <!-- SECTION 2-->
    <section class="mt-5">
        <div class="container">
            <div class="row mt-5 text-center">
                <div class="col">
                    <h3 class="letter-spacing poppins-600">Platform Diskusi Bersama Profesional</h3>
                    <p class="text-muted poppins-400" style="line-height:1.9">
                        Jangan ragu untuk terus bertanya
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
                    <img src="<?= base_url('assets/img/case/diskusi2.jpg') ?>" alt="" class="mx-auto d-block img-fluid" style="width:475px; height:526px; object-fit:cover; filter:brightness(80%);">
                </div>
                <div class="col-lg-6">
                    <img src="<?= base_url('assets/img/case/diskusi3.jpg') ?>" alt="" class="my-3 mx-auto d-block img-fluid" style="width:517px; height:290px; object-fit:cover; filter:brightness(80%)" class="float-left mb-3">
                    <h3 class="poppins-600 letter-spacing text-hitam-custom pl-3">
                        Diskusi Rutin Setiap Minggu
                    </h3>
                    <p class="montserrat-400 mt-3 letter-spacing pl-3">
                        Bersama tim BISA AI atau partner kalian bisa memilih jadwal diskusi sesuka kalian setiap minggunya
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
                <img src="<?= base_url() ?>assets/img/case/diskusi4.jpg" style="width:475px; height:283px; object-fit:cover; filter:brightness(70%)">
            </div>
            <div class="col-lg-6">
                <h3 class="poppins-600 letter-spacing text-hitam-custom">
                    Berbagai Macam Topik Diskusi
                </h3>
                <p class="poppins-400 mt-3 letter-spacing">
                    Mulai dari AI, IoT, Programming, Matematika hingga Bisnis semuanya dapat kalian diskusikan secara langsung
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
                                <img src="https://d9hhrg4mnvzow.cloudfront.net/www.mokapos.com/business_type/coffee_shop/1a3622b8-dashboard-logo.svg" alt="">
                                <h6 class="card-title mt-3 poppins-600 letter-spacing">Pilih Jadwal Sesukamu</h6>
                                <p class="card-text poppins-400 text-muted">
                                    Dengan diadakan setiap minggunya secara rutin, jadwal diskusi privat akan terus terbuka selama slot masih tersedia
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
                                <img src="https://d9hhrg4mnvzow.cloudfront.net/www.mokapos.com/business_type/coffee_shop/299c9399-ingredient-inv-logo.svg" alt="">
                                <h6 class="card-title mt-3 poppins-600 letter-spacing">Hadiri dari mana saja</h6>
                                <p class="card-text poppins-400 text-muted">
                                    Menggunakan BISA Tampil, kamu dapat menghadiri diskusi privat ini dari mana saja, asal jangan sampai terlewat!
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
                                <img src="https://d9hhrg4mnvzow.cloudfront.net/www.mokapos.com/business_type/coffee_shop/661b264d-promo-logo.svg" alt="">
                                <h6 class="card-title mt-3 poppins-600 letter-spacing">Tanpa Batas Pertanyaan
                                </h6>
                                <p class="card-text poppins-400 text-muted">
                                    Pastikan kamu sudah menyiapkan pertanyaan dengan baik, karena di diskusi privat ini kamu bebas bertanya.
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
    <!-- <section class="mt-5">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid" src="<?= base_url() ?>assets/img/hero5.png"
                    style="filter:blur(3px) brightness(16%); object-fit:cover; height:780px; width:100%;">
                    <br><br><br><br>
                <div class="carousel-caption  position-absolute d-none d-md-block text-light">
                	<br><br>
                    <h2 class="poppins-600 letter-spacing">Aplikasi Video Conference yang Memudahkan Segala Kebutuhan Anda
                    </h2>
                    <img class="mt-5" src="#"
                        style="width:168px; height:168px; object-fit:cover; border-radius:50%;" alt="">
                    <p class="text-size-5 poppins-400 letter-spacing mt-3">
                        <q>Sekarang kan ada e-commerce, e-government segala macam. Dengan Artificial Intelligence, yang namanya 'e-' tadi itu akan berubah menjadi 'smart', misalnya smart city</q></p>
                    <p class="text-size-9 mt-5 montserrat-600 ">
                        Onno W. Purbo, Ph.D
                    </p> -->

    <!-- PENGGUNA TUPAY LAINNYA -->
    <!-- <div class="row mt-5">
                        <div class="col">
                            <hr class="bg-light" style="border:0.8px solid #fff" />
                        </div>
                        <div class="col">
                            <p class="text-size-8 montserrat-600 letter-spacing">Pengguna BISA Tampil Lainnya</p>
                        </div>
                        <div class="col">
                            <hr class="bg-light" style="border:0.8px solid #fff" />
                        </div>
                    </div> -->
    <!-- PENGGUNA TUPAY LAINNYA -->

    <!-- LOGO PENGGUNA -->
    <!-- <div class="text-center">
                        <img src="<?= base_url() ?>assets/img/oudpro.png" width="168">
                        <img src="<?= base_url() ?>assets/img/client/sekolahanid.png" width="168">

                    </div> -->
    <!-- LOGO PENGGUNA -->
    <!-- <br><br>
                </div>
            </div>
        </div>
</section> -->
    <!-- BANNER -->
    <br><br><br><br><br>
    <!-- MULAI BISNIS -->
    <section>
        <div class="container">
            <div class="row mb-5 mt-5">
                <div class="col-lg-12 text-center">
                    <h2 class="montserrat-600 letter-spacing">Diskusikan pertanyaan lebih mudah dengan BISA AI Academy</h2>
                    <!-- <p class="montserrat-400 mt-3">
                    Video conference bisa di mana saja dan kapan saja.</p> -->
                    <br>
                    <a target="_blank" href="https://play.google.com/store/apps/details?id=com.pos.bisaaiacademy" class="ml-2 btn rounded-pill text-light text-size-2 poppins-500 bg-blue-custom px-4 py-2"><i class="fab fa-google-play "></i> Google Play</a>
                    <a target="_blank" href="https://apps.apple.com/id/app/bisa-ai-academy/id1525123512" class="ml-2 btn rounded-pill text-light text-size-2 poppins-500 bg-blue-custom px-4 py-2"><i class="fab fa-apple"></i> App Store</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /MULAI BISNIS -->

    <?php
    $this->load->view('Templates/Footer');
    $this->load->view('Templates/js-case'); ?>