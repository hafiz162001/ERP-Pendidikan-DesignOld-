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
    <title>Case Study - Event Sosial</title>
</head>

<body>
    <?php $this->load->view('Templates/Navbar'); ?>

    <section class="mt-5">


        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src="<?= base_url() ?>assets/images/case/HeroImage.png" style="filter:blur(4px) brightness(70%); object-fit:cover; height:620px; width:100%;">
                    <div class="carousel-caption  position-absolute text-light" style="margin-bottom:180px !important;">
                        <h2 class="poppins-600 letter-spacing">Platform Bootcamp Online dan On Job Training Intensif</h2>
                        <p class="text-size-5 poppins-400 letter-spacing">Hadir untuk mengenalkan dan membimbing langsung dengan standar industri</p>
                        <!-- <button class="btn btn-primary rounded-pill-2 px-4 text-size-3 nsans-600">Mulai sekarang</button> -->
                    </div>
                </div>
            </div>
    </section>
    <!-- BANNER -->

    <!-- SECTION 2-->
    <section>
        <div class="container">
            <div class="row mt-5 text-center">
                <div class="col">
                    <h3 class="letter-spacing montserrat-600">Platform Untuk Pembelajaran Berstandar Industri</h3>
                    <p class="text-muted poppins-400" style="line-height:1.9">
                        Hadiri pembelajaran daring hingga On Job Training ke industri bersama BISA AI
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
                    <img src="<?= base_url('assets/images/case/BelajarSatuBulanPenuh-Tinggi.png') ?>" alt="" class="mx-auto d-block img-fluid" style="width:75%; height:526px; object-fit:cover; filter:brightness(80%);">
                </div>
                <div class="col-lg-6">
                    <img src="<?= base_url('assets/images/case/BelajarSatuBulanPenuh-Lebar.png') ?>" alt="" class="my-3 mx-auto d-block img-fluid" style="width:517px; height:290px; object-fit:cover; filter:brightness(80%)" class="float-left mb-3">
                    <h3 class="poppins-600 letter-spacing text-hitam-custom pl-3">
                        Belajar Satu Bulan Penuh Secara Intensif
                    </h3>
                    <p class="montserrat-400 mt-3 letter-spacing pl-3">
                        Selama dua minggu pertama kamu akan belajar secara daring dari materi yang diberikan lewat aplikasi BISA AI Academy. Kemudian di dua minggu selanjutnya, kamu dapat hadir ke kantor BISA AI atau partner untuk melakukan On Job Training bersama instruktur.
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
                <img src="<?= base_url() ?>assets/images/case/SistemdanProjekBerstandarIndustri-Lebar.png" style="width:475px; height:283px; object-fit:cover; filter:brightness(70%)">
            </div>
            <div class="col-lg-6">
                <h3 class="poppins-600 letter-spacing text-hitam-custom">
                    Sistem dan Projek Berstandar Industri
                </h3>
                <p class="montserrat-400 mt-3 letter-spacing">
                    Saat melakukan On Job Training kamu akan mulai dilatih secara langsung menggunakan sistem ‘Scrum Team’. Hingga akhirnya projek yang kamu kerjakan selama ini akan dinilai oleh startup founder dan juga startup digital mitra BISA AI.
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
                                <h6 class="card-title mt-3 montserrat-600 letter-spacing">Materi Yang Terpandu dan Terpusat</h6>
                                <p class="card-text poppins-400 text-muted">
                                    Pembelajaran daring kamu tidak akan bosan karena setiap hari kamu bisa belajar silabus baru di aplikasi BISA AI Academy
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
                                <img src="<?= base_url() ?>assets/img/icon/rupiah kecil.png" alt="">
                                <h6 class="card-title mt-3 montserrat-600 letter-spacing">Sertifikasi dari BISA AI
                                </h6>
                                <p class="card-text poppins-400 text-muted">
                                    Di akhir kegiatan kamu akan mendapatkan sertifikasi hasil dan kompetensi selama melaksanakan kegiatan ini.
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
                                <h6 class="card-title mt-3 montserrat-600 letter-spacing">Diskusi Dengan Pakar</h6>
                                <p class="card-text poppins-400 text-muted">
                                    Mudahkan proses pembelajaran kamu dengan berdiskusi dengan pakar dari BISA AI baik secara online maupun offline
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

    <br><br><br><br><br>
    <!-- MULAI BISNIS -->
    <section>
        <div class="container">
            <div class="row mb-5 mt-5">
                <div class="col-lg-12 text-center">
                    <h2 class="montserrat-600 letter-spacing">Mulai Belajar Hingga Menjadi Ahli Bersama BISA AI</h2>
                    <!-- <p class="montserrat-400 mt-3">
                    Video conference bisa di mana saja dan kapan saja.</p> -->
                    <br>
                    <a target="_blank" href="https://play.google.com/store/apps/details?id=com.pos.bisaaiacademy" class="ml-2 btn rounded-pill text-light text-size-2 poppins-500 bg-blue-custom px-4 py-2"><i class="fab fa-google-play "></i> Google Play</a>
                    <!-- <a target="_blank" href="https://apps.apple.com/id/app/bisa-ai-academy/id1525123512" class="ml-2 btn rounded-pill text-light text-size-2 poppins-500 bg-blue-custom px-4 py-2"><i class="fab fa-apple"></i> App Store</a> -->
                </div>
            </div>
        </div>
    </section>
    <!-- /MULAI BISNIS -->

    <?php
    $this->load->view('Templates/Footer');
    $this->load->view('Templates/js-case'); ?>