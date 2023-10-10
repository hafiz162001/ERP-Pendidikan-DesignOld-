<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bisa Design Academy - Tentang Kami</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/images/mascot.png">
    <!-- <link rel="stylesheet" href="<?= base_url('assets/newtemplates/') ?>css/vendor/bootstrap.min.css">
 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url('assets/newtemplates/') ?>css/vendor/font-awesome.css">
    <!-- <link rel="stylesheet" href="<?= base_url('assets/styles.css') ?>" type="text/css"> -->

    <link rel="stylesheet" href="<?= base_url('assets/newtemplates/') ?>css/vendor/slick.css">
    <link rel="stylesheet" href="<?= base_url('assets/newtemplates/') ?>css/vendor/slick-theme.css">
    <link rel="stylesheet" href="<?= base_url('assets/newtemplates/') ?>css/vendor/sal.css">
    <link rel="stylesheet" href="<?= base_url('assets/newtemplates/') ?>css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url('assets/newtemplates/') ?>css/vendor/green-audio-player.min.css">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="<?= base_url('assets/newtemplates/') ?>css/app.css">
    

    <style>
        html,
        body {
            max-width: 100%;
            overflow-x: hidden;
        }

        .owl-carousel .owl-nav {
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

        .owl-carousel .nav-btn {
            height: 47px;
            position: absolute;
            width: 26px;
            cursor: pointer;
            top: 100px !important;
        }

        .owl-carousel .owl-prev.disabled,
        .owl-carousel .owl-next.disabled {
            pointer-events: none;
            opacity: 0.2;
        }

        .owl-carousel .prev-slide {
            background: url(nav-icon.png) no-repeat scroll 0 0;
            left: -33px;
        }

        .owl-carousel .next-slide {
            background: url(nav-icon.png) no-repeat scroll -24px 0px;
            right: -33px;
        }

        .owl-carousel .prev-slide:hover {
            background-position: 0px -53px;
        }

        .owl-carousel .next-slide:hover {
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

        unselect {
            -webkit-user-select: none;
            /* Safari */
            -moz-user-select: none;
            /* Firefox */
            -ms-user-select: none;
            /* IE10+/Edge */
            user-select: none;
            /* Standard */
        }

        .shadow:hover {
            box-shadow: 0 0 11px rgba(33, 33, 33, .2);
        }

        .shadow::after {
            transition: opacity 0.3s ease-in-out;
        }

        .btn-hover-whatsapp {
            font-size: 16px;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
            padding: 12px 40px;
            text-align: center;
            border: none;
            background-size: 300% 100%;
            background-image: linear-gradient(to right, #0ba360, #3cba92, #30dd8a, #2bb673);
            box-shadow: 0 4px 15px 0 rgba(23, 168, 108, 0.75);

            border-radius: 50px;
            moz-transition: all .4s ease-in-out;
            -o-transition: all .4s ease-in-out;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }

        .btn-hover-whatsapp:hover {
            background-position: 100% 0;
            moz-transition: all .4s ease-in-out;
            -o-transition: all .4s ease-in-out;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }

        .btn-hover-email {
            font-size: 16px;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
            padding: 12px 40px;
            text-align: center;
            border: none;
            background-size: 300% 100%;
            background-image: linear-gradient(to right, #eb3941, #f15e64, #e14e53, #e2373f);
            box-shadow: 0 5px 15px rgba(242, 97, 103, .4);

            border-radius: 50px;
            moz-transition: all .4s ease-in-out;
            -o-transition: all .4s ease-in-out;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }

        .btn-hover-email:hover {
            background-position: 100% 0;
            moz-transition: all .4s ease-in-out;
            -o-transition: all .4s ease-in-out;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }

        .btn-hover:focus {
            outline: none;
        }

        #innerTab{
            margin-top: 23px ;
            margin-bottom: 10px;
        }

        .card-trx{
            border-left:3px solid blue ;
        }

        .container_in {
            margin-top: 8rem;
            margin-bottom: 3rem;
        }

        .hovering, .nav-x{
            transition: 0.3s;
        }

        .hovering:hover{
            background-color: #e0e0e0;
        }

        #imgHuawei{
            transition: transform .2s;
        }
        #imgHuawei:hover { 
            transform: scale(2);        
        }   
        .subtitle{
            color: #2caae1;
            font-weight: bold;
            font-size: 1.2rem;
        }
        .yellow{
            color: yellow;
        }

        .pointer{
            cursor: pointer;
        }

        section img {
            max-width: 100%;
        }

        .nav-link.active{
            color: #fff !important;
            background-color: #007bff !important;
            border-color: #dee2e6 #dee2e6 #fff;
            border-radius: 15px 15px 0px 0px;
            font-weight: bold;
        }

        .hoverImage{
            transition: transform .2s;
        }
        .hoverImage:hover { 
            transform: scale(2);    
            z-index: 99999 !important;      

        } 

        .subtitle-nav{
            margin-top: -28px;
            margin-bottom: 1rem;
            color: grey;
            font-size: 0.9rem;
        }
        h5.title-nav{
            font-size: 1rem;
            font-weight: bold;
            color: #2caae1;
            text-decoration: none;
            cursor: pointer;
        }
        h5.title-nav:hover{
            color: #007bff;
            text-decoration: none;
        }

        .text-hitam-custom {
            margin-bottom: auto;
        }
        @media (min-width: 992px) {
            .full-menu.show {
                display: block;
                width: 100%;
                max-width: 1050px;
                flex-wrap: wrap;
                border-radius: 1rem;
                /* margin-left: -100px; */
                margin-top: 0.5rem;
                margin: 5% auto; /* Will not center vertically and won't work in IE6/7. */
                left: 0;
                right: 0;
            }

            .dropdown-x {
                position: static !important;
            }
            
            .dropdown-menu-x {
                box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15)!important;
                margin-top: 0px !important;
                width: 100% !important;
            }

            #judul1{
                font-size: 3.4rem;
            }
        }

        @media (max-width: 992px) {
            .img-navbar {
                display: none;
            }
            .nav-judul {
                display: none;
            }
            .non-mobile{
                display: none;
            }
            .dropdown-menu-x {
                margin-left: -12px;
            }
            .navbar-collapse.collapse.show {
                max-height: 90vh;
                overflow-y: auto;
            }
            #judul1{
                font-size: 2.4rem;
            }
        }

        select.form-control:not([size]):not([multiple]) {
            height: calc(3.25rem + 2px);
        }

        input[type="radio"] {
            height: 13px;
        }
        input[type="radio"], .form-control {
            border: var(--border-lighter);
            border-radius: 16px;
            background-color: transparent;
            color: var(--color-text-dark);
            padding: 15px 20px;
            width: auto;
        }
        
        
    </style>
    <link rel="stylesheet" href="<?= base_url('assets/OwlCarousel/owl.carousel.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/OwlCarousel/owl.theme.default.min.css') ?>" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .txt-ungu {
            color: purple;
        }

        .txt-biru {
            color: #0c75f2;
        }

        .txt-merah {
            color: red;
        }

        .melengkung {
            border-radius: 10px;
        }

        #owl-demo .item .gambar {
            display: block;
            width: 100%;
            height: auto;
        }

        .owl-carousel .owl-item figure {
            direction: ltr;
            margin: 0;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 68%;
        }
    </style>

</head>

<body class="sticky-header">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->
    <a href="#main-wrapper" id="backto-top" class="back-to-top">
        <i class="far fa-angle-double-up"></i>
    </a>

    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->

    <!-- <div class="my_switcher d-none d-lg-block">
        <ul>
            <li title="Light Mode">
                <a href="javascript:void(0)" class="setColor light" data-theme="light">
                    <i class="fal fa-lightbulb-on"></i>
                </a>
            </li>
            <li title="Dark Mode">
                <a href="javascript:void(0)" class="setColor dark" data-theme="dark">
                    <i class="fas fa-moon"></i>
                </a>
            </li>
        </ul>
    </div> -->
    <?php $this->load->view('Templates/Navbar'); ?>
     

    <!-- <section class="pb-5 bg-light">
<br /><br /><br /><br />
    <div class="container">
        
      <h2 class="poppins-600 text-center">Tentang Kami</h2>
      <hr width="30%">
            <div class="row mt-5 mb-5">
                <img style="width: 100px" class="mx-auto d-block img-fluid" src="<?= base_url() ?>assets/img/tampil.png" title="BISA Tampil">
                <img style="width: 145px" class="mx-auto d-block img-fluid" src="<?= base_url() ?>assets/img/about/logoo.png" alt="" title="BISA DESIGN " >    
                <img style="width: 100px" class="mx-auto d-block img-fluid" src="<?= base_url() ?>assets/img/academy.png" title="BISA DESIGN  Academy">
            </div>
    </div>
</section> -->
    <!-- /LOGO -->

    <!-- MENGENAL -->
    <section style="margin-top: 100px;">
        <div class="container">
            <div class="card bg-light mt-5 melengkung">
                <h3 class="poppins-600 my-4 text-center">Mengenai BISA DESIGN  lebih jauh</h3>
                <hr style="width: 95%; margin-left: 2.4%; margin-top: 0%">
                <div class="card-body">
                    <p class="poppins-400 text-justify" style="font-size: 16px">BISA DESIGN  merupakan start up yang mengembangkan layanan dan produk seputar Komputer Design yang didirikan pada tahun 2019. </p>
                    <p class="poppins-400 mt-2 text-justify" style="font-size: 16px">Layanan-layanan yang pertama kali dikembangkan oleh BISA DESIGN  diantaranya: Image Recognition Service, Video Analytics Service, Natural Language Service, Data Analysis Service, Lab as a Service, e-learning, dan IoT Service. Sukses bekerja sama dengan banyak perusahaan dalam menyelesaikan masalah melalui Komputer Design, BISA DESIGN  bisa mulai berkembang lebih jauh lagi.</p>
                    <p class="poppins-400 mt-2 text-justify" style="font-size: 16px">Pada tahun 2020, BISA DESIGN  dapat fokus mengembangkan dua produk utamanya yaitu: BISA Tampil dan BISA DESIGN  Academy. Dua produk ini awalnya sederhana, dengan BISA Tampil sebagai platform video conference dan BISA DESIGN  Academy sebagai platform pembelajaran daring.</p>
                    <p class="poppins-400 mt-2 text-justify" style="font-size: 16px">Namun akhirnya BISA DESIGN  berkembang dan memanfaatkan kesempatan yang ada, ini menghasilkan diantaranya: BISA Tampil yang menjadi platform kolaborasi dan penyelenggaraan webinar, bootcamp dan event online dan BISA DESIGN  Academy yang selain menjadi platform pembelajaran daring, dapat menjadi platform pencarian kerja, freelance, diskusi dan masih banyak lagi yang lainnya.</p>
                    <p class="poppins-400 mt-2 text-justify" style="font-size: 16px">Perkembangan BISA DESIGN  ini menandakan bahwa dari setiap langkah dan kesempatan yang BISA DESIGN  raih dapat bermanfaat dan membantu masyarakat dalam mencari ilmu, menyelesaikan masalah hingga meraih kesuksesan di masa depan.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /MENGENAL -->

    <!-- KOMUNITAS -->
    <section>
        <div class="container">
            <h3 class="poppins-600 mt-5 text-center">BISA DESIGN  dan Komunitas</h3>
            <!-- <div class="container">
                <div class="row single-post mt-3 no-gutters">
                    <div class="col-md-12">
                        <div class="float-left pr-3" style="margin-left: -15px;">
                            <img src="<?= base_url() ?>assets/img/about/about1.jpg" style="width: 500px; border-radius: 10px" alt="">
                        </div>
                    <div class="single-post-content-wrapper p-3 poppins-400 text-justify" style="margin-top: 13%">
                            BISA DESIGN  saat menyelenggarakan dan presentasi di Hackathon UMKM Bandung 2020 dengan Dispusipda Jabar
                    </div>
                </div>
            </div>

    <div class="container">
     <div class="row single-post mt-5 no-gutters">
        <div class="col-md-12">
            <div class="float-left pr-3" style="margin-left: -30px">
                <img src="<?= base_url() ?>assets/img/about/about2.png" style="width: 500px; border-radius: 10px" alt="">
            </div>
            <div class="single-post-content-wrapper p-5 poppins-400 text-justify">
            Kumpulan finalis Hackathon UMKM berdiskusi bersama Founder dan Co Founder BISA DESIGN 
            </div>
        </div>
    </div> -->
            <!-- <div class="row mt-5">
                <div class="col-md-6" style="margin-left: -30px; margin-top: 9%">
                    <p class="poppins-400 text-justify">Kumpulan finalis Hackathon UMKM berdiskusi bersama Founder dan Co Founder BISA DESIGN </p>
                </div>
        
                <div class="col-md-6 float-right ml-2">
                    <img src="<?= base_url() ?>assets/img/about/about2.png" style="width: 500px; border-radius: 10px" alt="">
                </div>
            </div>
    </div>

    <div class="container">
        <div class="row single-post mt-5 no-gutters">
            <div class="col-md-12">
                <div class="float-left pr-3" style="margin-left: -30px">
                    <img src="<?= base_url() ?>assets/img/about/about3.jpg" style="width: 500px; border-radius: 10px" alt="">
                </div>
                <div class="single-post-content-wrapper poppins-400 text-justify" style="margin-top: 10%">
                    BISA DESIGN  saat presentasi di Indonesia 5G Ecosystem Conference 2020
                </div>
            </div>
        </div>
    </div> -->
            <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item px-3 py-3">
                    <figure>
                        <img style="border-radius: 10px; width: 83%; margin-left: auto; margin-right: auto;" class="gambar" src="<?= base_url() ?>assets/img/about/about1.jpg" alt="BISA DESIGN  dan Komunitas">
                        <figcaption class="poppins-400 text-center mt-2" style="font-size: 18px">BISA DESIGN  saat menyelenggarakan dan presentasi di Hackathon UMKM Bandung 2020 dengan Dispusipda Jabar</figcaption>
                    </figure>
                </div>
                <div class="item px-3 py-3" style="margin-top: 6.4%">
                    <figure>
                        <img style="border-radius: 10px" class="gambar" src="<?= base_url() ?>assets/img/about/about2.png" alt="BISA DESIGN  dan Komunitas">
                        <figcaption class="poppins-400 text-center mt-2" style="font-size: 18px">Kumpulan finalis Hackathon UMKM berdiskusi bersama Founder dan Co Founder BISA DESIGN </figcaption>
                    </figure>
                </div>
                <div class="item px-3 py-3" style="margin-top: 7.3%">
                    <figure>
                        <img style="border-radius: 10px" class="gambar" src="<?= base_url() ?>assets/img/about/about3.jpg" alt="BISA DESIGN  dan Komunitas">
                        <figcaption class="poppins-400 text-center mt-2" style="font-size: 18px">BISA DESIGN  saat presentasi di Indonesia 5G Ecosystem Conference 2020</figcaption>
                    </figure>
                </div>
                <div class="item px-3 py-3" style="margin-top: 4%">
                    <figure>
                        <img style="border-radius: 10px" class="gambar" src="<?= base_url() ?>assets/img/about/about4.png" alt="BISA DESIGN  dan Komunitas">
                        <figcaption class="poppins-400 text-center mt-2" style="font-size: 18px">Workshop Offline Komputer Design (Day 1), Kota Bandung, Januari 2020</figcaption>
                    </figure>
                </div>
                <div class="item px-3 py-3" style="margin-top: 4%">
                    <figure>
                        <img style="border-radius: 10px" class="gambar ml-3" src="<?= base_url() ?>assets/img/about/about5.jpg" alt="BISA DESIGN  dan Komunitas">
                        <figcaption class="poppins-400 text-center mt-2" style="font-size: 18px">Foto bersama pengajar dan peserta Workshop Offline Komputer Design, di kota Bandung, Januari 2020</figcaption>
                    </figure>
                </div>
                <div class="item px-3 py-3" style="margin-top: 10%">
                    <figure>
                        <img style="border-radius: 10px; width: 75%; margin-left: auto; margin-right: auto;" class="gambar" src="<?= base_url() ?>assets/img/about/about6.jpg" alt="BISA DESIGN  dan Komunitas">
                        <figcaption class="poppins-400 text-center mt-2" style="font-size: 18px">Kerjasama BISA DESIGN  dengan SMKN 2 dalam pelatihan dasar Komputer Design untuk siswa-siswi SMK</figcaption>
                    </figure>
                </div>
                <div class="item px-3 py-3" style="margin-top: 7.3%">
                    <figure>
                        <img style="border-radius: 10px; width: 65%; margin-left: auto; margin-right: auto;" class="gambar" src="<?= base_url() ?>assets/img/about/about7.jpg" alt="BISA DESIGN  dan Komunitas">
                        <figcaption class="poppins-400 text-center mt-2" style="font-size: 18px">Kumpulan narasumber dan juga peserta-peserta dalam acara webinar Inspirational Talk Oudpro x BISA DESIGN  pertama kali</figcaption>
                    </figure>
                </div>
                <div class="item px-3 py-3" style="margin-top: 1%">
                    <figure>
                        <img style="border-radius: 10px; width: 50%; margin-left: auto; margin-right: auto;" class="gambar" src="<?= base_url() ?>assets/img/about/about8.jpg" alt="BISA DESIGN  dan Komunitas">
                        <figcaption class="poppins-400 text-center mt-2" style="font-size: 18px">Roundtable Special Edition perdana bersama Bapak Onno W. Purbo</figcaption>
                    </figure>
                </div>
            </div>

        </div>
    </section><br><br><br>
    <!-- /KOMUNITAS -->

    <!-- SOSMED -->
    <section class="bg-light pb-5">
        <div class="container">
            <h4 class="poppins-600 text-center">Sosial Media Resmi Kami</h4>
            <div class="row mt-3">
                <div class="col-md-2"></div>
                <div class="col-6 col-md-4">
                    <p class="poppins-500 text-center" style="font-size: 20px">BISA DESIGN </p>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="poppins-400" style="font-size: 17px"><a href="https://instagram.com/bisa.ai" class="text-dark" style="text-decoration: none" target="_blank"><i class="fab fa-instagram fa-lg" style="margin-right: 10px"></i>Instagram</a></li>
                                <li class="poppins-400" style="font-size: 17px"><a href="https://linkedin.com/company/bisa-ai" class="text-dark" style="text-decoration: none" target="_blank"><i class="fab fa-linkedin fa-lg" style="margin-right: 10px;"></i>LinkedIn</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="poppins-400" style="font-size: 17px"><a href="https://medium.com/bisa-ai" class="text-dark" style="text-decoration: none" target="_blank"><i class="fab fa-medium fa-lg" style="margin-right: 10px"></i>Medium</a></li>
                                <li class="poppins-400" style="font-size: 17px"><a href="https://youtube.com/bisaai" class="text-dark" style="text-decoration: none" target="_blank"><i class="fab fa-youtube fa-lg" style="margin-left: -2px; margin-right: 7px"></i>Youtube</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4">
                    <ul class="list-unstyled">
                        <p class="poppins-500" style="font-size: 20px">BISA DESIGN  Academy</p>
                        <li class="poppins-400" style="font-size: 17px"><a href="https://play.google.com/store/apps/details?id=com.pos.bisaaiacademy" class="text-dark" style="text-decoration: none" target="_blank"><i class="fab fa-google-play fa-lg" style="margin-right: 7px"></i>Google Play</a></li>
                        <li class="poppins-400" style="font-size: 17px"><a href="https://apps.apple.com/id/app/bisa-ai-academy/id1525123512" class="text-dark" style="text-decoration: none" target="_blank"><i class="fab fa-app-store-ios fa-lg" style="margin-right: 10px"></i>App Store</a></li>
                    </ul>
                </div>
            </div><br><br><br>
        </div>
    </section>
    <!-- /SOSMED -->

    <?php
    $this->load->view('Templates/Footer');
    $this->load->view('Templates/Link-js'); ?>
    <script src="<?= base_url('assets/aos/aos.js') ?>"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
    <script src="<?= base_url() ?>assets/OwlCarousel/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {

            $("#owl-demo").owlCarousel({

                navigation: true,
                slideSpeed: 300,
                paginationSpeed: 400,
                items: 1,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                loop: true

            });

        });
    </script>