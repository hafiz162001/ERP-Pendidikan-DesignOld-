<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bisa Design Academy - Ambassador</title>
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
    <?php
    $this->load->view('Templates/Navbar'); ?>
    <section class="container-fluid my-5 py-5">
        <div class="row my-5 mx-4">
            <div class="col-lg-7 col-12 text-lg-left text-center">
                <img src="<?= base_url() ?>assets/img/portrait-students-looking-front-campus-yard.png" style="filter:brightness(100%);width:100%;" class="img-fluid rounded-pill d-block d-xl-none d-lg-none my-4">
                <h3 class="poppins-600 letter-spacing text-hitam-custom">
                    Selamat Datang di BISA DESIGN Academy Ambassador!
                </h3>
                <p class="montserrat-400 mt-3 letter-spacing">
                    BISA DESIGN Ambassador merupakan program bagi mahasiswa/i yang berantusias mencari kesempatan dan pengalaman dalam mengembangkan komunitas secara strategis sekaligus memperkenalkan berbagai program BISA DESIGN Academy di lingkungan kampus.<br><br>
                    Banyak program dari BISA DESIGN Academy yang dapat bermanfaat untuk kebutuhan dan lingkungan kampus, mulai dari pembelajaran online, bootcamp, kompetisi hingga diskusi privat yang tidak hanya dapat digunakan mahasiswa namun juga para pengajar.
                </p>
            </div>
            <div class="col-lg-5 d-none d-lg-block">
                <img src="<?= base_url() ?>assets/img/portrait-students-looking-front-campus-yard.png" style="filter:brightness(100%);width:100%;" class="img-fluid rounded-pill">
            </div>
        </div>
        <div class="row mb-3 mt-2 mx-4">
            <div class="col-lg-5 d-none d-lg-block">
                <img src="<?= base_url() ?>assets/img/student-discussing-together-using-laptop.png" style="filter:brightness(90%);width:100%;" class="img-fluid rounded-pill">
            </div>
            <div class="col-lg-7 col-12 text-lg-left text-center">
                <img src="<?= base_url() ?>assets/img/student-discussing-together-using-laptop.png" style="filter:brightness(90%);width:100%;" class="img-fluid rounded-pill d-block d-xl-none d-lg-none my-4">
                <h3 class="poppins-600 letter-spacing text-hitam-custom">
                    Peran Ambassador
                </h3>
                <p class="montserrat-400 mt-3 letter-spacing">
                    <b>Pemasaran Brand</b><br>
                    Berkesempatan untuk belajar meningkatkan kesadaran teman-teman mahasiswa pada kampus masing - masing terhadap produk BISA DESIGN<br>
                    <b class="mt-2">Pengembangan Strategi dan Komunitas</b><br>
                    Berkontribusi dalam merancang strategi pengembangan BISA DESIGN di kampus berdasarkan pengamatan dan analisa kebutuhan maupun kendala teman mahasiswa.<br>
                    <b class="mt-2">Pengembangan Strategi dan Komunitas</b><br>
                    Berkontribusi dalam merancang strategi pengembangan BISA DESIGN di kampus berdasarkan pengamatan dan analisa kebutuhan maupun kendala teman mahasiswa.<br>
                    <b class="mt-2">Share</b><br>
                    Berbagi informasi dengan teman – teman mahasiswa terkait kegiatan BISA DESIGN seperti webinar dan master class.<br>
                    <b class="mt-2">Fasilitator</b><br>
                    Menjadi fasilitator mahasiswa agar mahasiswa dapat belajar mengenai Artificial Intelligence dengan aktif<br>
                </p>
            </div>
        </div>
    </section>
    <!-- BENEFIT -->
    <section class="container my-5">
        <h2 class="text-center poppins-600 text-hitam-custom text-shadow-2">Benefits</h2>
        <div class="row my-5">
            <div class="col-12 col-md-6">
                <div class="card mb-3 text-white" style="background-color: #005894;border-radius:1rem!important;">
                    <div class="row card-body">
                        <div class="col-lg-3 d-none d-lg-block">
                            <img src="<?= base_url() ?>assets/img/1@2x.png" class="img-fluid mx-auto">
                        </div>
                        <div class="col-12 d-block d-lg-none d-xl-none card-title">
                            <img src="<?= base_url() ?>assets/img/1@2x.png" class="img-fluid mx-auto">
                        </div>
                        <div class="col-lg-9 col-12 card-text">
                            <p class="montserrat-400 letter-spacing">
                                <b>Experience</b><br>
                                Mendapatkan pengalaman kerja di lingkungan start up yang bisa ditambahkan ke dalam CV (resume).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card mb-3 text-white" style="background-color: #005894;border-radius:1rem!important;">
                    <div class="row card-body">
                        <div class="col-lg-3 d-none d-lg-block">
                            <img src="<?= base_url() ?>assets/img/2@2x.png" class="img-fluid mx-auto">
                        </div>
                        <div class="col-12 d-block d-lg-none d-xl-none card-title">
                            <img src="<?= base_url() ?>assets/img/2@2x.png" class="img-fluid mx-auto">
                        </div>
                        <div class="col-lg-9 col-12 card-text">
                            <p class="montserrat-400 letter-spacing">
                                <b>Program Eksklusif</b><br>
                                Mendapatkan akses untuk mengikuti Master Class secara gratis dan tak terbatas serta mendapatkan program pelatihan untuk meningkatkan soft skill.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card mb-3 text-white" style="background-color: #005894;border-radius:1rem!important;">
                    <div class="row card-body">
                        <div class="col-lg-3 d-none d-lg-block">
                            <img src="<?= base_url() ?>assets/img/3@2x.png" class="img-fluid mx-auto">
                        </div>
                        <div class="col-12 d-block d-lg-none d-xl-none card-title">
                            <img src="<?= base_url() ?>assets/img/3@2x.png" class="img-fluid mx-auto">
                        </div>
                        <div class="col-lg-9 col-12 card-text">
                            <p class="montserrat-400 letter-spacing">
                                <b>Extra Income</b><br>
                                Belajar lebih mandiri dengan penghasilan tambahan yang didapat dari setiap pembelian produk oleh masing-masing konsumen Ambassador.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card mb-3 text-white" style="background-color: #005894;border-radius:1rem!important;">
                    <div class="row card-body">
                        <div class="col-lg-3 d-none d-lg-block">
                            <img src="<?= base_url() ?>assets/img/4@2x.png" class="img-fluid mx-auto">
                        </div>
                        <div class="col-12 d-block d-lg-none d-xl-none card-title">
                            <img src="<?= base_url() ?>assets/img/4@2x.png" class="img-fluid mx-auto">
                        </div>
                        <div class="col-lg-9 col-12 card-text">
                            <p class="montserrat-400 letter-spacing">
                                <b>Networking</b><br>
                                Jaringan yang luas dan kesempatan untuk bertemu orang yang baru, mulai dari teman mahasiswa dari berbagai jurusan dan angkatan, sampai teman sesama Ambassador serta keluarga BISA DESIGN.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /BENEFIT -->
    <!-- TESTIMONI -->
    <!-- <section class="my-5 d-none d-lg-block d-xl-block pb-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <h2 class='poppins-600 text-hitam-custom text-center'>Testimoni Ambassador</h2>
                </div>
            </div>
            <div class="testimoni owl-carousel owl-theme">
                <div class="item py-5">
                    <div class="card card-custom h-100 mx-3">
                        <div class="card-body">
                            <img src="<?= base_url() ?>assets/img/testimoni/dewa.png" style='width:150px; height:150px; object-fit:cover;' class='rounded-circle box-shadow mx-auto d-block'>
                            <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Dewangga Ardian Pratama</h5>
                            <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">
                                <q class='font-italic'>Pemateri kompeten di bidangnya dan materi mudah dipahami, studi kasus yang diangkat sangat relevan dengan isu saat ini. Dulu saya selalu mengikuti workshop-workshop dari BISA DESIGN</q>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <br><br><br><br><br>
                            </p>

                        </div>
                    </div>
                </div>
                <div class=" item py-5">
                    <div class="card card-custom h-100 mx-3">
                        <div class="card-body">
                            <img src="<?= base_url() ?>assets/img/testimoni/armand.png" style='width:150px; height:150px; object-fit:cover;' class='rounded-circle box-shadow mx-auto d-block'>
                            <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Armand Paudu</h5>
                            <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">
                                <q class='font-italic'>Untuk workshop yang tergolong singkat, materinya sudah cukup baik, ditambah pemateri yang menguasai topik dan mampu menjelaskan dengan bahasa yang mudah dipahami kepada peserta yang masih awam. Biayanya pun terjangkau. Maju terus BISA DESIGN, ditunggu workshop selanjutnya!</q><br> <br />
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item py-5">
                    <div class="card card-custom h-100 mx-3">
                        <div class="card-body">
                            <img src="<?= base_url() ?>assets/img/testimoni/fata.png" style='width:150px; height:150px; object-fit:cover;' class='rounded-circle box-shadow mx-auto d-block'>
                            <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Fata Hasan Ihromy</h5>
                            <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">
                                <q class='font-italic'>Materinya sangat komprehensif dan benar-benar fullstack. Belajar dari dasar Python, Backend, Frontend, pembuatan model Machine learning hingga mengintegrasikan model Machine learning ke dalam apps. Recommended banget ikut workshopnya buat yang ingin belajar cara pembuatan teknologi-teknologi berbasis AI.</q><br />
                            </p>

                        </div>
                    </div>
                </div>
                <div class="item py-5">
                    <div class="card card-custom h-100 mx-3">
                        <div class="card-body">
                            <img src="<?= base_url() ?>assets/img/testimoni/Salim.png" style='width:150px; height:150px; object-fit:cover;' class='rounded-circle box-shadow mx-auto d-block'>
                            <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Salim Satriajati</h5>
                            <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">
                                <q class='font-italic'>Sangat tertarik dan terbantu karena kelas yang ditawarkan memadukan antara tugas dan kuis online di aplikasi dengan live diskusi, sehingga para peserta dapat mendiskusikan kesulitan selama mengikuti bootcamp ini.</q><br /><br /><br /><br />
                            </p>

                        </div>
                    </div>
                </div>
                <div class="item py-5">
                    <div class="card card-custom h-100 mx-3">
                        <div class="card-body">
                            <img src="<?= base_url() ?>assets/img/testimoni/Firma.png" style='width:150px; height:150px; object-fit:cover;' class='rounded-circle box-shadow mx-auto d-block'>
                            <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Firma Sekar Septiana</h5>
                            <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">
                                <q class='font-italic'>Kesan mengikuti Bootcamp Microsoft Excel for Analytics and Optimization (Batch 2), yaitu acaranya menarik, gratis dan full materi. Pesannya untuk durasi dan waktu bootcampnya bisa ditambah dan kemudahan untuk menghubungi researcher.</q><br /><br /><br />
                            </p>

                        </div>
                    </div>
                </div>
                <div class="item py-5">
                    <div class="card card-custom h-100 mx-3">
                        <div class="card-body">
                            <img src="<?= base_url() ?>assets/img/testimoni/Naufal.png" style='width:150px; height:150px; object-fit:cover;' class='rounded-circle box-shadow mx-auto d-block'>
                            <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Naufal Muhammad Hirzi</h5>
                            <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">
                                <q class='font-italic'>Serunya ikut BOOTCAMP CNN, kami dapat belajar secara mandiri dengan aplikasi BISA DESIGN ACADEMY dan juga Kelas Online bersama tim" pengajar yang ahli di bidangnya serta adanya tugas akhir untuk mengasah kemampuan kami dari BOOTCAMP CNN yang telah dilalui.</q><br /><br /><br />
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- /TESTIMONI -->


    <!-- TESTIMONI MOBILE-->
    <!-- <section class="my-5 d-xs-block d-sm-block d-md-block d-lg-none d-xl-none pb-5">
        <div class="container">
            <br /><br /><br />
            <div class="row mt-5 ">
                <div class="col-lg-12">
                    <h2 class='poppins-600 text-hitam-custom text-center'>Testimoni Ambassador</h2>
                </div>
            </div>
            <div class="owl-carousel owl-theme testi-hp">
                <div class="card card-custom h-100 mx-3 item">
                    <div class="card-body">
                        <img src="<?= base_url() ?>assets/img/testimoni/dewa.png" style='width:150px; height:150px; object-fit:cover;' class='rounded-circle box-shadow mx-auto d-block'>
                        <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Dewangga Ardian Pratama<br>
                            <p class="text-muted text-size-1">(Mahasiswa S2 ITB)</p>
                        </h5>
                        <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3" style="font-size:14px">
                            <q class='font-italic'>Pemateri kompeten di bidangnya dan materi mudah dipahami, studi kasus yang diangkat sangat relevan dengan isu saat ini. Dulu saya selalu mengikuti workshop-workshop dari BISA DESIGN, sekarang saya menjabat sebagai Manajer product di BISA DESIGN</q>
                        </p>

                    </div>
                </div>

                <div class="card card-custom h-100 mx-3 item">
                    <div class="card-body">
                        <img src="<?= base_url() ?>assets/img/testimoni/armand.png" style='width:150px; height:150px; object-fit:cover;' class='rounded-circle box-shadow mx-auto d-block'>
                        <h5 class='text-center mt-3 poppins-500 text-hitam-custom '>Armand Paudu</h5>
                        <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3" style="font-size:14px">
                            <q class='font-italic'>Untuk workshop yang tergolong singkat, materinya sudah cukup baik, ditambah pemateri yang menguasai topik dan mampu menjelaskan dengan bahasa yang mudah dipahami kepada peserta yang masih awam. Biayanya pun terjangkau. Maju terus BISA DESIGN, ditunggu workshop selanjutnya!</q>
                        </p>
                    </div>
                </div>

                <div class="card card-custom h-100 mx-3 item">
                    <div class="card-body">
                        <img src="<?= base_url() ?>assets/img/testimoni/fata.png" style='width:150px; height:150px; object-fit:cover;' class='rounded-circle box-shadow mx-auto d-block'>
                        <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Fata Hasan Ihromy</h5>
                        <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3" style="font-size:14px">
                            <q class='font-italic'>Materinya sangat komprehensif dan benar-benar fullstack. Belajar dari dasar Python, Backend, Frontend, pembuatan model Machine learning hingga mengintegrasikan model Machine learning ke dalam apps. Recommended banget ikut workshopnya buat yang ingin belajar cara pembuatan teknologi-teknologi berbasis AI.</q>
                        </p>

                    </div>
                </div>

                <div class="card card-custom h-100 mx-3 item">
                    <div class="card-body">
                        <img src="<?= base_url() ?>assets/img/testimoni/Salim.png" style='width:150px; height:150px; object-fit:cover;' class='rounded-circle box-shadow mx-auto d-block'>
                        <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Salim Satriajati</h5>
                        <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">
                            <q class='font-italic'>Sangat tertarik dan terbantu karena kelas yang ditawarkan memadukan antara tugas dan kuis online di aplikasi dengan live diskusi, sehingga para peserta dapat mendiskusikan kesulitan selama mengikuti bootcamp ini.</q>
                        </p>

                    </div>
                </div>

                <div class="card card-custom h-100 mx-3 item">
                    <div class="card-body">
                        <img src="<?= base_url() ?>assets/img/testimoni/Firma.png" style='width:150px; height:150px; object-fit:cover;' class='rounded-circle box-shadow mx-auto d-block'>
                        <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Firma Sekar Septiana</h5>
                        <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">
                            <q class='font-italic'>Kesan mengikuti Bootcamp Microsoft Excel for Analytics and Optimization (Batch 2), yaitu acaranya menarik, gratis dan full materi. Pesannya untuk durasi dan waktu bootcampnya bisa ditambah dan kemudahan untuk menghubungi researcher.</q>
                        </p>

                    </div>
                </div>

                <div class="card card-custom h-100 mx-3 item">
                    <div class="card-body">
                        <img src="<?= base_url() ?>assets/img/testimoni/Naufal.png" style='width:150px; height:150px; object-fit:cover;' class='rounded-circle box-shadow mx-auto d-block'>
                        <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Naufal Muhammad Hirzi</h5>
                        <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3" style="font-size:15px">
                            <q class='font-italic'>Serunya ikut BOOTCAMP CNN, kami dapat belajar secara mandiri dengan aplikasi BISA DESIGN ACADEMY dan juga Kelas Online bersama tim" pengajar yang ahli di bidangnya serta adanya tugas akhir untuk mengasah kemampuan kami dari BOOTCAMP CNN yang telah dilalui.</q>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- /TESTIMONI MOBILE -->
    <!-- SYARAT -->
    <section class="container my-5">
        <div class="row my-4">
            <div class="col-lg-6 d-none d-lg-block d-xl-block">
                <img src="<?= base_url() ?>assets/img/employer-interviewing-ask-male-applicant-recruitment-talking-office.png" style="filter:brightness(85%)" class="img-fluid rounded-pill">
            </div>
            <div class="col-lg-6 col-12">
                <img src="<?= base_url() ?>assets/img/employer-interviewing-ask-male-applicant-recruitment-talking-office.png" style="filter:brightness(85%);width:100%;" class="img-fluid rounded-pill d-block d-lg-none d-xl-none">
                <h3 class="poppins-600 text-hitam-custom text-shadow-2 text-sm-center text-lg-left">Persyaratan Menjadi Ambassador</h3>
                <p class="montserrat-600 mt-3 letter-spacing">
                <ul style="padding-inline-start:20px;font-size:1.2rem;">
                    <li>Mahasiswa aktif</li>
                    <li>Memiliki semangat dan tekad untuk belajar</li>
                    <li>Tertarik untuk bekerja di lingkungan start up</li>
                    <li>Senang menjalin relasi bersama orang baru</li>
                    <li>Memiliki kemampuan komunikasi yang baik</li>
                    <li>Menyanggupi menjadi Ambassador BISA DESIGN minimal selama 6 bulan</li>
                </ul>
                </p>
            </div>
        </div>
    </section>
    <!-- /SYARAT -->
    <section class="container my-5">
        <div class="card rounded-pill text-center" style="background-color: #005894;">
            <h4 class="poppins-600 text-white text-shadow-2 mt-5 mb-4">Ingin menjadi ambassador kampusmu?</h4>
            <div class="row mb-5">
                <div class="col-md-3 d-none d-md-block d-lg-block d-xl-block"></div>
                <div class="col-md-3 col-12 mb-2">
                    <a href="mailto:info@bisa.ai" target="_blank" class="btn btn-hover-email poppins-600"><i class="fas fa-envelope fa-lg mr-1"></i> Hubungi Kami</a>
                </div>
                <div class="col-md-3 col-12 mb-2">
                    <a href="https://api.whatsapp.com/send?phone=+6282116654087&" target="_blank" class="btn btn-hover-whatsapp poppins-600"><i class="fab fa-whatsapp fa-lg mr-1"></i> Hubungi Kami</a>
                </div>
            </div>
        </div>
    </section>
</body>
<?php
$this->load->view('Templates/Footer');
$this->load->view('Templates/Link-js'); ?>
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