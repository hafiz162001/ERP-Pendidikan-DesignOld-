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
    <title>Case Study - Webinar</title>
    <style>
        #client-logos .item {
            margin: 1px;
        }

        .owl-carousel .owl-item img {
            padding: 5px;
            margin-left: 33px;
        }

        .cover-wrapper {
            padding: 75px;
        }

        .client-inners img {
            height: 100%;
            object-fit: contain;
        }

        .client-inners {
            height: 85px;
            text-align: center;
            padding: 8px;
        }

        .owl-nav img {
            width: 34px;
        }

        .owl-prev img {
            position: absolute;
            left: -38px;
            top: 50%;
            margin-top: -20px;
        }

        .owl-next img {
            position: absolute;
            right: -38px;
            top: 50%;
            margin-top: -20px;
        }
    </style>
</head>

<body>
    <?php
    $this->load->view('Templates/Navbar'); ?>

    <section class="mt-5">


        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src="<?= base_url() ?>assets/img/case/webinar1.png" style="filter:blur(4px) brightness(70%); object-fit:cover; height:620px; width:100%;">
                    <div class="carousel-caption  position-absolute text-light" style="margin-bottom:180px !important;">
                        <h2 class="poppins-600 letter-spacing">Platform Kolaborasi dan Penyelenggaran Webinar</h2>
                        <p class="text-size-5 poppins-400 letter-spacing">Buat atau ikuti berbagai webinar lewat platform TAMPIL</p>
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
                    <h3 class="letter-spacing montserrat-600">Platform untuk menggali ilmu pengetahuan</h3>
                    <p class="text-muted poppins-400" style="line-height:1.9">
                        Webinar gratis dan praktis hanya di TAMPIL
                    </p>

                </div>
            </div>
        </div>
    </section>
    <!-- SECTION 2-->

    <!-- SECTION 3 -->
    <!--<section class="my-5">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-6">-->
    <!--                <img src="<?= base_url() ?>assets/img/hero2.png"-->
    <!--                    style="width:475px; height:526px; object-fit:cover; filter:brightness(80%)" class="mx-auto d-block img-fluid">-->
    <!--            </div>-->
    <!--            <div class="col-lg-6 pl-0">-->
    <!--                <img src="<?= base_url() ?>assets/img/hero3.png"-->
    <!--                    style="width:517px; height:290px; object-fit:cover; filter:brightness(80%)" class="float-left mb-3 img-fluid">-->
    <!--                <h3 class="poppins-600 letter-spacing text-hitam-custom">-->
    <!--                    Kolaborasi webinar bersama BISA Tampil-->
    <!--                </h3>-->
    <!--                <p class="montserrat-400 mt-3 letter-spacing text-justify">-->
    <!--                    BISA Tampil memberi kesempatan bagi para instansi dan komunitas untuk berkolaborasi dalam pelaksanaan webinar di BISA Tampil. Sukses berkolaborasi dengan 500+ partner, BISA Tampil siap membantu dan meramaikan webinar kamu.-->
    <!--                </p>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- SECTION 3 -->

    <!-- SECTION 3 RESPONSIVE -->
    <br /><br />
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="<?= base_url('assets/img/hero2.png') ?>" alt="" class="mx-auto d-block img-fluid" style="width:475px; height:526px; object-fit:cover; filter:brightness(80%);">
                </div>
                <div class="col-lg-6">
                    <img src="<?= base_url('assets/img/hero3.png') ?>" alt="" class="my-3 mx-auto d-block img-fluid" style="width:517px; height:290px; object-fit:cover; filter:brightness(80%)" class="float-left mb-3">
                    <h3 class="poppins-600 letter-spacing text-hitam-custom pl-3">
                        Kolaborasi webinar bersama TAMPIL
                    </h3>
                    <p class="montserrat-400 mt-3 letter-spacing pl-3">
                        TAMPIL memberi kesempatan bagi para instansi dan komunitas untuk berkolaborasi dalam pelaksanaan webinar di TAMPIL. Sukses berkolaborasi dengan 500+ partner, TAMPIL siap membantu dan meramaikan webinar kamu.
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
                <img src="<?= base_url() ?>assets/img/hero4.png" style="width:475px; height:283px; object-fit:cover; filter:brightness(70%)" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <h3 class="poppins-600 letter-spacing text-hitam-custom">
                    Bermanfaat Untuk Semua
                </h3>
                <p class="montserrat-400 mt-3 letter-spacing text-justify">
                    Dengan berkolaborasi webinar bersama BISA Tampil, mulai dari pihak penyelenggara hingga peserta akan mendapatkan manfaat-manfaat seperti : resource, pengguna baru, sertifikat dan tentunya ilmu pengetahuan baru.
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
                <div class="col-lg-4 col-md-4 col-xs-3">
                    <div class="card h-100 mt-3">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="https://d9hhrg4mnvzow.cloudfront.net/www.mokapos.com/business_type/coffee_shop/1a3622b8-dashboard-logo.svg" alt="">
                                <h6 class="card-title mt-3 montserrat-600 letter-spacing">Webinar Bersertifikat</h6>
                                <p class="card-text poppins-400 text-muted">
                                    Semua webinar di BISA AI dijamin akan selalu mempunyai sertifikat resmi yang ditandatangani oleh tim BISA AI dan Partner
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /CARD 1 -->


                <!-- CARD 2 -->
                <div class="col-lg-4 col-md-4 col-xs-3">
                    <div class="card h-100 mt-3">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="https://d9hhrg4mnvzow.cloudfront.net/www.mokapos.com/business_type/coffee_shop/299c9399-ingredient-inv-logo.svg" alt="">
                                <h6 class="card-title mt-3 montserrat-600 letter-spacing">Bantuan Digital Marketing</h6>
                                <p class="card-text poppins-400 text-muted">
                                    Selain pelaksanaan webinar, BISA AI juga akan membantu proses pembuatan poster hingga promosi untuk memastikan acara berjalan dengan sukses
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /CARD 2 -->

                <!-- CARD 2 -->
                <div class="col-lg-4 col-md-4 col-xs-3">
                    <div class="card h-100 mt-3">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="https://d9hhrg4mnvzow.cloudfront.net/www.mokapos.com/business_type/coffee_shop/661b264d-promo-logo.svg" alt="">
                                <h6 class="card-title mt-3 montserrat-600 letter-spacing">Bantuan Narasumber dan Peserta
                                </h6>
                                <p class="card-text poppins-400 text-muted">
                                    BISA AI juga dapat membantu dalam urusan mencari narasumber hingga peserta, bersama komunitas dan kerjasama yang sudah BISA AI jalin, BISA AI siap membantu
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
    <!-- <section class="container py-3 mt-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
            </div>
        </div>
    </section> -->
    <!-- MULAI BISNIS -->
    <section>
        <div class="container">
            <div class="row mb-5 mt-5">
                <div class="col-lg-12 text-center">
                    <h2 class="montserrat-600 letter-spacing">Sukseskan webinarmu bersama TAMPIL</h2>
                    <!--<p class="montserrat-400 mt-3">-->
                    <!--    Video conference bisa di mana saja dan kapan saja.</p>-->
                    <br>
                    <a target="_blank" href="<?= base_url('webinar') ?>" class="ml-2 btn rounded-pill text-light text-size-2 poppins-500 bg-blue-custom px-4 py-2"><i class="fa fa-eye"></i> Lihat Semua Webinar</a>
                    <a target="_blank" href="https://tampil.id" class="ml-2 btn rounded-pill text-light text-size-2 poppins-500 bg-blue-custom px-4 py-2"><i class="fa fa-globe"></i> Website</a>
                    <a target="_blank" href="https://play.google.com/store/apps/details?id=com.pos.bisatampil" class="ml-2 btn rounded-pill text-light text-size-2 poppins-500 bg-blue-custom px-4 py-2"><i class="fab fa-google-play "></i> Google Play</a>
                    <a target="_blank" href="https://apps.apple.com/id/app/bisa-tampil/id1514160107" class="ml-2 btn rounded-pill text-light text-size-2 poppins-500 bg-blue-custom px-4 py-2"><i class="fab fa-apple"></i> App Store</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /MULAI BISNIS -->

    <?php
    $this->load->view('Templates/Footer'); ?>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/OwlCarousel/owl.carousel.min.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > 50) {
            document.getElementsByClassName("navbar")[0].style.top = "0";
            document.getElementsByClassName("navbar")[0].style.boxShadow = "0.3px 0.4px 5px #7f8fa6";

        } else {
            // alert(currentScrollPos + ' > ' + prevScrollpos)
            document.getElementsByClassName("navbar")[0].style.top = "0";
            document.getElementsByClassName("navbar")[0].style.boxShadow = "0px 0px 0px transparent";

        }
        prevScrollpos = currentScrollPos;

    }
    $('.brand-carousel').owlCarousel({
        center: true,
        loop: true,
        margin: 12,
        autoplay: true,
        responsive: {
            0: {
                items: 3
            },
            600: {
                items: 4
            },
            1000: {
                items: 5
            }
        }
    })
</script>