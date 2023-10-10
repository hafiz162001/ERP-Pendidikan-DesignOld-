<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bisa Design Academy</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/images/logo_bisadesign.png">
    <link rel="stylesheet" href="<?= base_url('assets/newtemplates/') ?>css/vendor/bootstrap.min.css">
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
            color: grey;
            font-size: 0.7rem;
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

    <div class="my_switcher d-none d-lg-block">
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
    </div>

    <div id="main-wrapper" class="main-wrapper">

        <!--=====================================-->
        <!--=        Header Area Start       	=-->
        <!--=====================================-->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light  bg-white">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>">
            <img src="<?= base_url() ?>assets/images/logo_bisadesign.png" style="height: 50px !important;" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown dropdown-x ml-4">
                    <a class="nav-link dropdown-toggle poppins-500 text-size-1 text-dark text-hitam-custom" href="#" id="Course" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Course Academy &nbsp;</i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-x full-menu box-shadow w-100" aria-labelledby="Course">
                        <div class="row p-4">
                            <div class="col-md-4 col-sm-12 nav-judul">
                                <h3 class="nsans-700 text-hitam-custom text-shadow-2">Course Academy</h3>
                                <p>Pembelajaran Online atau Offline melalui platform BISA DESIGN Academy dengan Materi Pilihan, Instruktur Profesional dan Learning Path Belajar yang menarik</p>
                            </div>    
                            <div class="col-md-4 col-sm-12"> 
                                <div class="row">
                                    <div class="col-md-2 col-sm-12"> <img src="<?= base_url('assets/images/icons/2.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-10 col-sm-12"> 
                                        <a class="" href="<?= base_url('course/all_course/1') ?>" target="_blank"> <h5 class="title-nav"> Free Course </h5> </a> 
                                        <p class="subtitle-nav">+50 Course GRATIS untuk kamu memulai belajar <br class="non-mobile"><br class="non-mobile" ></p>    
                                    </div>
                                </div>
                                <hr class="non-mobile">
                                <div class="row">
                                    <div class="col-md-2 col-sm-12"> <img src="<?= base_url('assets/images/icons/5.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-10 col-sm-12"> 
                                        <a class="" href="<?= base_url('course/all_course/3') ?>" target="_blank"> <h5 class="title-nav"> Master Class </h5> </a> 
                                        <p class="subtitle-nav">+10 Master Class berupa workshop atau mini bootcamp setiap bulan-nya <br class="non-mobile"> <br class="non-mobile"> </p>    
                                    </div>
                                </div>
                                <hr class="non-mobile">
                                <div class="row">
                                    <div class="col-md-2 col-sm-12"> <img src="<?= base_url('assets/images/icons/4.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-10 col-sm-12"> 
                                        <a class="" href="<?= base_url('course/all_course/5') ?>" target="_blank"> <h5 class="title-nav"> Master Class + OJT </h5> </a> 
                                        <p class="subtitle-nav">+10 Master Class on Job Training selama 15 hari belajar melalui module dan silabus serta 15 hari on Job Training di BISA DESIGN Academy</p>    
                                    </div>
                                </div>
                            </div>    
                            <div class="col-md-4 col-sm-12">
                                <div class="row">
                                    <div class="col-md-2 col-sm-12"> <img src="<?= base_url('assets/images/icons/3.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-10 col-sm-12"> 
                                        <a class="" href="<?= base_url('learncation') ?>" target="_blank"> <h5 class="title-nav"> Learncation </h5> </a> 
                                        <p class="subtitle-nav">Kombinasi pelatihan dengan vacation / liburan yang membuat kamu bisa belajar sambil liburan</p>    
                                    </div>
                                </div>
                                <hr class="non-mobile">
                                <div class="row">
                                    <div class="col-md-2 col-sm-12"> <img src="<?= base_url('assets/images/icons/3.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-10 col-sm-12"> 
                                        <a class="" href="<?= base_url('course/all_course/4') ?>" target="_blank"> <h5 class="title-nav"> Live Academy</h5> </a> 
                                        <p class="subtitle-nav">Pelatihan secara tatap muka langsung dengan instruktur dibantu dengan modul pembelajaran yang lengkap</p>    
                                    </div>
                                </div>
                                <hr class="non-mobile">
                                <div class="row">
                                    <div class="col-md-2 col-sm-12"> <img src="<?= base_url('assets/images/icons/9.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-10 col-sm-12"> 
                                        <a class="" href="https://tampil.id/event" target="_blank"> <h5 class="title-nav"> Webinar</h5> </a> 
                                        <p class="subtitle-nav">Ikuti webinar terkait Artificial Intelligence melalui platform TAMPIL</p>    
                                    </div>
                                </div>                                
                            </div>    
                        </div>

                    </div>
                </li>
                <li class="nav-item dropdown dropdown-x ml-4">
                    <a class="nav-link dropdown-toggle poppins-500 text-size-1 text-dark text-hitam-custom" href="#" id="Course" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Certificate &nbsp;</i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-x full-menu box-shadow" aria-labelledby="Course">
                        <div class="row p-4">
                            <div class="col-md-4 col-sm-12 nav-judul">
                                <h3 class="nsans-700 text-hitam-custom text-shadow-2">Certificate</h3>
                                <p>Raih sertifikat untuk meningkatkan skill dan kompetensi kamu</p>
                            </div>    
                            <div class="col-md-4 col-sm-12"> 
                                <div class="row">
                                    <div class="col-md-2 col-sm-12"> <img src="<?= base_url('assets/images/icons/6.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-10 col-sm-12"> 
                                        <a class="" href="<?= base_url('certification') ?>" target="_blank"> <h5 class="title-nav"> Profesional</h5> </a> 
                                        <p class="subtitle-nav">Tingkatkan Karir Profesional kamu dengan profesional certificate pada bidang Artificial Intelligence dan bidang lainnya. Program ini biasanya diselesaikan dalam waktu 1 - 4 minggu<br class="non-mobile"></p>    
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="row">
                                    <div class="col-md-2 col-sm-12"> <img src="<?= base_url('assets/images/icons/7.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-10 col-sm-12"> 
                                        <a class="" href="<?= base_url('certification/industry') ?>" target="_blank"> <h5 class="title-nav"> Industry </h5> </a> 
                                        <p class="subtitle-nav">Raih sertifikat Industri sebagai pengakuan kompetensi kamu dari industri. program ini berjalan umumnya 2 - 6 minggu. Dapatkan Sertifikasi Industri LSP (Lembaga Sertifikasi Profesi) pada bidang Kecerdasan Artifisial dan lainnya.</p>    
                                    </div>
                                </div>                            
                            </div>    
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown dropdown-x ml-4">
                    <a class="nav-link dropdown-toggle poppins-500 text-size-1 text-dark text-hitam-custom" href="#" id="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Solusi &nbsp;</i>
                    </a>

                    <div class="dropdown-menu dropdown-menu-x full-menu box-shadow" aria-labelledby="">
                        <div class="row p-4">
                            <div class="col-md-4 col-sm-12 nav-judul">
                                <h3 class="nsans-700 text-hitam-custom text-shadow-2">Solusi</h3>
                                <p>Solusi yang ditawarkan BISA DESIGN Academy di bidang pendidikan dan Kecerdasan Artifisial</p>
                            </div>    
                            <div class="col-md-4 col-sm-12"> 
                                <div class="row">
                                    <div class="col-md-2 col-sm-12"> <img src="<?= base_url('assets/images/icons/1.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-10 col-sm-12"> 
                                        <a class="" href="<?=base_url('cloud')?>" target="_blank"> <h5 class="title-nav"> Educloud </h5> </a> 
                                        <p class="subtitle-nav">Cloud Computing untuk pendidikan dan program bisa.ai academy</p>    
                                    </div>
                                </div>  
                                <hr class="non-mobile">
                                <div class="row">
                                    <div class="col-md-2 col-sm-12"> <img src="<?= base_url('assets/images/icons/17.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-10 col-sm-12"> 
                                        <a class="" href="<?= base_url('info/erp') ?>" target="_blank"> <h5 class="title-nav"> ERP Pendidikan </h5> </a> 
                                        <p class="subtitle-nav">Bangun sistem Enterprise Resource Planning (ERP) untuk sekolah, Universitas, Politeknik dan lainnya. dapatkan kemudahan dalam mengelola seluruh sistem pendidikan dalam satu ERP</p>    
                                    </div>
                                </div> 
                                
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="row">
                                    <div class="col-md-2 col-sm-12"> <img src="<?= base_url('assets/images/icons/24.jpg') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-10 col-sm-12"> 
                                        <a class="" href="<?= base_url('info') ?>" target="_blank"> <h5 class="title-nav"> IT Solution </h5> </a> 
                                        <p class="subtitle-nav">Solusi  untuk pengembangan aplikasi dan teknologi informasi di dunia pendidikan.</p>    
                                    </div>
                                </div>
                                <hr class="non-mobile">
                                <div class="row">
                                    <div class="col-md-2 col-sm-12"> <img src="<?= base_url('assets/images/icons/25.jpg') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-10 col-sm-12"> 
                                        <a class="" href="<?= base_url('info/ai_solution') ?>" target="_blank"> <h5 class="title-nav"> AI Solution </h5> </a> 
                                        <p class="subtitle-nav">Solusi  untuk pengembangan aplikasi dan Kecerdasan Artifisial di dunia pendidikan.</p>    
                                    </div>
                                </div>                             
                            </div>    
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown dropdown-x ml-4">
                    <a class="nav-link dropdown-toggle poppins-500 text-size-1 text-dark text-hitam-custom" href="#" id="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Informasi &nbsp;</i>
                    </a>
    
                    <div class="dropdown-menu dropdown-menu-x full-menu box-shadow" aria-labelledby="Course">
                        <div class="row p-4">
                            <div class="col-md-4 col-sm-12"> 
                                <div class="row">
                                    <div class="col-md-2 col-sm-12"> <img src="<?= base_url('assets/images/icons/9.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-10 col-sm-12"> 
                                        <a class="" href="<?= base_url('kolaborator') ?>" target="_blank"> <h5 class="title-nav"> Kolaborasi Webinar </h5> </a> 
                                        <p class="subtitle-nav">Kolaborasi penyelenggaraan webinar bersama bisa.ai academy<br></p>    
                                    </div>
                                </div>
                                <hr class="non-mobile">
                                <div class="row">
                                    <div class="col-md-2 col-sm-12"> <img src="<?= base_url('assets/images/icons/10.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-10 col-sm-12"> 
                                        <a class="" href="<?= base_url('kolaborator/academy') ?>" target="_blank" > <h5 class="title-nav"> Kolaborasi Academy </h5> </a> 
                                        <p class="subtitle-nav">Kolaborasi penyelenggaraan academy bersama bisa.ai academy</p>    
                                    </div>
                                </div>
                                <hr class="non-mobile">
                                <div class="row">
                                    <div class="col-md-2 col-sm-12"> <img src="<?= base_url('assets/images/icons/12.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-10 col-sm-12"> 
                                        <a class="" href="<?= base_url('kontak-kami') ?>" target="_blank" > <h5 class="title-nav"> Kontak </h5> </a> 
                                        <p class="subtitle-nav">Kontak</p>    
                                    </div>
                                </div>

                            </div>   
                            <div class="col-md-4 col-sm-12"> 
                                <div class="row">
                                    <div class="col-md-2 col-sm-12"> <img src="<?= base_url('assets/images/icons/11.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-10 col-sm-12"> 
                                        <a class="" href="<?= base_url('berita') ?>" target="_blank"> <h5 class="title-nav"> Berita</h5> </a> 
                                        <p class="subtitle-nav">Berita terkait kegiatan bisa.ai academy<br class="non-mobile"><br class="non-mobile"></p>    
                                    </div>
                                </div>
                                <hr class="non-mobile">
                                <div class="row">
                                    <div class="col-md-2 col-sm-12"> <img src="<?= base_url('assets/images/icons/12.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-10 col-sm-12"> 
                                        <a class="" href="<?= base_url('tentang-kami') ?>" target="_blank" > <h5 class="title-nav"> Tentang Kami </h5> </a> 
                                        <p class="subtitle-nav">Informasi mengenai bisa.ai academy</p>    
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="row">
                                    <div class="col-md-2 col-sm-12"> <img src="<?= base_url('assets/images/icons/15.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-10 col-sm-12"> 
                                        <a class="" href="<?= base_url('ambassador') ?>" target="_blank"> <h5 class="title-nav"> Ambassador </h5> </a> 
                                        <p class="subtitle-nav">Program Student Ambassador bisa.ai academy<br class="non-mobile"><br class="non-mobile"></p>    
                                    </div>
                                </div> 
                                <hr class="non-mobile">
                                <div class="row">
                                    <div class="col-md-2 col-sm-12"> <img src="<?= base_url('assets/images/icons/14.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-10 col-sm-12"> 
                                        <a class="" href="https://payment.bisa.ai/paymentsubscription/index.php/payment/index/academy" target="_blank"> <h5 class="title-nav"> Donasi </h5> </a> 
                                        <p class="subtitle-nav">Program donasi bisa.ai academy</p>    
                                    </div>
                                </div>                              
                            </div>    
                        </div>
                    </div>
                </li>
                
                <?php 
                    if($this->session->userdata('token') == ""){
                ?>
                <li class="nav-item ml-4">
                    <a class="nav-link poppins-500 text-size-1 text-dark text-hitam-custom" href="<?= base_url('login_customer') ?>">Login</a>
                </li>

                <?php } else { ?>
                    
                        <li class="nav-item dropdown dropdown-x ml-4">
                        <a class="nav-link dropdown-toggle poppins-500 text-size-1 text-dark text-hitam-custom" href="#" id="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hai ,<?php echo $this->session->userdata('nama'); ?> &nbsp;</i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-x full-menu box-shadow" aria-labelledby="">
                            <div class="row p-4">
                                <div class="col-md-4 col-sm-12">
                                    
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 text-center"> <img src="<?php $foto = ($this->session->userdata('photo') == "" || $this->session->userdata('photo') == null) ? base_url()."assets/images/blank.png" : $this->CI->config->item('bisaUrl')."users/media/".$this->session->userdata('photo'); echo $foto;?>" class="" srcset="" style="width:50%; border-radius: 10px"> </div>
                                        <div class="col-md-12 col-sm-12 text-center mt-2">
                                            <h3 class="nsans-700 text-hitam-custom text-shadow-2 text-center"> <?php echo $this->session->userdata('nama'); ?> </h3>
                                        </div>
                                        
                                        <div class="col-md-12 col-sm-12 text-center "> 
                                            <a class="" href="<?= base_url('myprofile') ?>"> <h5 class="title-nav"> <i class="fa fa-user" aria-hidden="true"></i> Akun Saya </h5> </a>     
                                        </div>
                                        
                                        <div class="col-md-12 col-sm-12 text-center"> 
                                            <a class="" href="<?= base_url('login_customer/logout') ?>"> <h5 class="title-nav"> <i class="fa fa-sign-out-alt" aria-hidden="true"></i> Logout </h5> </a>   
                                        </div>
                                        
                                    </div>
                                    <hr>
                                </div>    
                                <div class="col-md-4 col-sm-12"> 
                                    <div class="row">
                                        <div class="col-md-2 col-sm-12"> <img src="<?= base_url('assets/images/icons/19.jpg') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                        <div class="col-md-10 col-sm-12"> 
                                            <a class="" href="<?= base_url('transaction_history') ?>"> <h5 class="title-nav"> Riwayat Pembelian </h5> </a> 
                                            <p class="subtitle-nav">Riwayat pembelian course academy, certificate, pendidikan dan solusi</p>    
                                        </div>
                                    </div>  
                                    <hr class="non-mobile">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-12"> <img src="<?= base_url('assets/images/icons/20.jpg') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                        <div class="col-md-10 col-sm-12"> 
                                            <a class="" href="<?= base_url('my_course') ?>" > <h5 class="title-nav"> Course Academy Saya </h5> </a> 
                                            <p class="subtitle-nav">Course Academy seperti FREE Class, MASTER Class, MASTER Class on Job Training yang kamu ikuti</p>    
                                        </div>
                                    </div>
                                    <hr class="non-mobile">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-12"> <img src="<?= base_url('assets/images/icons/24.jpg') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                        <div class="col-md-10 col-sm-12"> 
                                            <a class="" href="<?= base_url('exam_certification') ?>" > <h5 class="title-nav"> Certificate Saya </h5> </a> 
                                            <p class="subtitle-nav">Program Profesional dan Industry Certificate yang kamu ikuti</p>    
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-12"> <img src="<?= base_url('assets/images/icons/22.jpg') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                        <div class="col-md-10 col-sm-12"> 
                                            <a class="" href="<?= base_url('my_degree') ?>" > <h5 class="title-nav"> Pendidikan Saya</h5> </a> 
                                            <p class="subtitle-nav">Program Pendidikan Jarak Jauh, Pendidikan Profesional yang kamu ikuti</p>    
                                        </div>
                                    </div> 
                                    <hr class="non-mobile">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-12"> <img src="<?= base_url('assets/images/icons/24.jpg') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                        <div class="col-md-10 col-sm-12"> 
                                            <a class="" href="<?= base_url('my_solusi') ?>"> <h5 class="title-nav"> Solusi Saya </h5> </a> 
                                            <p class="subtitle-nav"> Solution yang kamu ikuti seperti AI & IT Solution, Educloud dan ERP Pendidikan </p>    
                                        </div>
                                    </div> 
                                    <hr class="non-mobile">
                                     
                                </div>    
                            </div>
                        </div>
                    </li>

                <?php } ?>

            </ul>
        </div>
    </div>
</nav>
        <!--=====================================-->
        <!--=        Banner Area Start         =-->
        <!--=====================================-->
        <section class="banner banner-style-1">
            <div class="container">
                <div class="row align-items-end align-items-xl-start">
                    <div class="col-lg-6">
                        <div class="banner-content" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                            <h1 class="title">Build beautiful website & mobile apps.</h1>
                            <span class="subtitle">Create live segments and target the right people for messages based on their behaviors.</span>
                            <a href="contact.html" class="axil-btn btn-fill-primary btn-large">Get Started</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-thumbnail">
                            <div class="large-thumb" data-sal="zoom-in" data-sal-duration="800" data-sal-delay="300">
                                <img src="<?= base_url('assets/newtemplates/') ?>media/banner/window.png" alt="Laptop">
                            </div>
                            <div class="large-thumb-2" data-sal="slide-left" data-sal-duration="800" data-sal-delay="800">
                                <img src="<?= base_url('assets/newtemplates/') ?>media/banner/laptop-poses.png" alt="Laptop">
                            </div>
                            <ul class="list-unstyled shape-group">
                                <li class="shape shape-1" data-sal="slide-left" data-sal-duration="500" data-sal-delay="800">
                                    <img src="<?= base_url('assets/newtemplates/') ?>media/banner/chat-group.png" alt="chat">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-21">
                <li class="shape shape-1" data-sal="slide-down" data-sal-duration="500" data-sal-delay="100">
                    <img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-39.png" alt="Bubble">
                </li>
                <li class="shape shape-2" data-sal="zoom-in" data-sal-duration="800" data-sal-delay="500">
                    <img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-38.png" alt="Bubble">
                </li>
                <li class="shape shape-3" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                    <img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-14.png" alt="Bubble">
                </li>
                <li class="shape shape-4" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                    <img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-14.png" alt="Bubble">
                </li>
                <li class="shape shape-5" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                    <img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-14.png" alt="Bubble">
                </li>
                <li class="shape shape-6" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                    <img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-40.png" alt="Bubble">
                </li>
                <li class="shape shape-7" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                    <img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-41.png" alt="Bubble">
                </li>
            </ul>
        </section>




        <!--=====================================-->
        <!--=        Service Area Start         =-->
        <!--=====================================-->
        <section class="section section-padding-2 bg-color-dark">
            <div class="container">
                <div class="section-heading heading-light-left">
                    <span class="subtitle">What We Can Do For You</span>
                    <h2 class="title">Services we can help you with</h2>
                    <p class="opacity-50">Nulla facilisi. Nullam in magna id dolor
                        blandit rutrum eget vulputate augue sed eu imperdiet.</p>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="services-grid active">
                            <div class="thumbnail">
                                <img src="<?= base_url('assets/newtemplates/') ?>media/icon/icon-1.png" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="service-design.html">Design</a></h5>
                                <p>Simply drag and drop photos and videos into your workspace to automatically add them to your Collab Cloud library.</p>
                                <a href="service-design.html" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="services-grid">
                            <div class="thumbnail">
                                <img src="<?= base_url('assets/newtemplates/') ?>media/icon/icon-2.png" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="service-development.html">Development</a></h5>
                                <p>Simply drag and drop photos and videos into your workspace to automatically add them to your Collab Cloud library.</p>
                                <a href="service-development.html" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="services-grid">
                            <div class="thumbnail">
                                <img src="<?= base_url('assets/newtemplates/') ?>media/icon/icon-3.png" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="service-marketing.html">Online marketing</a></h5>
                                <p>Simply drag and drop photos and videos into your workspace to automatically add them to your Collab Cloud library.</p>
                                <a href="service-marketing.html" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="services-grid">
                            <div class="thumbnail">
                                <img src="<?= base_url('assets/newtemplates/') ?>media/icon/icon-4.png" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="service-business.html">Business</a></h5>
                                <p>Simply drag and drop photos and videos into your workspace to automatically add them to your Collab Cloud library.</p>
                                <a href="service-business.html" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="services-grid">
                            <div class="thumbnail">
                                <img src="<?= base_url('assets/newtemplates/') ?>media/icon/icon-5.png" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="service-technology.html">Technology</a></h5>
                                <p>Simply drag and drop photos and videos into your workspace to automatically add them to your Collab Cloud library.</p>
                                <a href="service-technology.html" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="services-grid">
                            <div class="thumbnail">
                                <img src="<?= base_url('assets/newtemplates/') ?>media/icon/icon-6.png" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="service-content-strategy.html">Content strategy</a></h5>
                                <p>Simply drag and drop photos and videos into your workspace to automatically add them to your Collab Cloud library.</p>
                                <a href="service-content-strategy.html" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-10">
                <li class="shape shape-1"><img src="<?= base_url('assets/newtemplates/') ?>media/others/line-9.png" alt="Circle"></li>
                <li class="shape shape-2"><img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-42.png" alt="Circle"></li>
                <li class="shape shape-3"><img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-43.png" alt="Circle"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=       Case Study Area Start       =-->
        <!--=====================================-->
        <section class="section section-padding-equal case-study-featured-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6" data-sal="slide-right" data-sal-duration="800">
                        <div class="slick-slider slick-dot-nav featured-content" data-slick='{"infinite": true,"arrows": false, "dots": true, "slidesToShow": 1, "asNavFor": ".featured-thumbnail"}'>
                            <div class="slick-slide">
                                <div class="case-study-featured">
                                    <div class="section-heading heading-left">
                                        <span class="subtitle">Featured Case Study</span>
                                        <h2 class="title">Logo, identity &amp; web design for Uber</h2>
                                        <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis.</p>
                                        <p>Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                                        <a href="single-case-study.html" class="axil-btn btn-fill-primary btn-large">Read Case Study</a>
                                    </div>
                                    <div class="case-study-counterup">
                                        <div class="single-counterup">
                                            <h2 class="count-number">
                                                <span class="number count">15</span>
                                                <span class="symbol">%</span>
                                            </h2>
                                            <span class="counter-title">ROI increase</span>
                                        </div>
                                        <div class="single-counterup">
                                            <h2 class="count-number">
                                                <span class="number count">60</span>
                                                <span class="symbol">k</span>
                                            </h2>
                                            <span class="counter-title">Monthly website visits</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide">
                                <div class="case-study-featured">
                                    <div class="section-heading heading-left">
                                        <span class="subtitle">Featured Case Study</span>
                                        <h2 class="title">Website and web Development, Design</h2>
                                        <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis.</p>
                                        <p>Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                                        <a href="single-case-study.html" class="axil-btn btn-fill-primary btn-large">Read Case Study</a>
                                    </div>
                                    <div class="case-study-counterup">
                                        <div class="single-counterup">
                                            <h2 class="count-number">
                                                <span class="number count">15</span>
                                                <span class="symbol">%</span>
                                            </h2>
                                            <span class="counter-title">ROI increase</span>
                                        </div>
                                        <div class="single-counterup">
                                            <h2 class="count-number">
                                                <span class="number count">60</span>
                                                <span class="symbol">k</span>
                                            </h2>
                                            <span class="counter-title">Monthly website visits</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide">
                                <div class="case-study-featured">
                                    <div class="section-heading heading-left">
                                        <span class="subtitle">Featured Case Study</span>
                                        <h2 class="title">Branding, website &amp; digital marketing for Apple</h2>
                                        <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis.</p>
                                        <p>Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                                        <a href="single-case-study.html" class="axil-btn btn-fill-primary btn-large">Read Case Study</a>
                                    </div>
                                    <div class="case-study-counterup">
                                        <div class="single-counterup">
                                            <h2 class="count-number">
                                                <span class="number count">15</span>
                                                <span class="symbol">%</span>
                                            </h2>
                                            <span class="counter-title">ROI increase</span>
                                        </div>
                                        <div class="single-counterup">
                                            <h2 class="count-number">
                                                <span class="number count">60</span>
                                                <span class="symbol">k</span>
                                            </h2>
                                            <span class="counter-title">Monthly website visits</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 d-none d-lg-block" data-sal="slide-left" data-sal-duration="800">
                        <div class="slick-slider slick-dot-nav featured-thumbnail" data-slick='{"infinite": true,"arrows": false, "dots": false, "fade": true, "slidesToShow": 1, "asNavFor": ".featured-content"}'>
                            <div class="slick-slide">
                                <div class="case-study-featured-thumb">
                                    <img src="<?= base_url('assets/newtemplates/') ?>media/others/case-study-4.png" alt="travel">
                                </div>
                            </div>
                            <div class="slick-slide">
                                <div class="case-study-featured-thumb">
                                    <img src="<?= base_url('assets/newtemplates/') ?>media/others/case-study-5.png" alt="travel">
                                </div>
                            </div>
                            <div class="slick-slide">
                                <div class="case-study-featured-thumb">
                                    <img src="<?= base_url('assets/newtemplates/') ?>media/others/case-study-6.png" alt="travel">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=        About Area Start         =-->
        <!--=====================================-->
        <section class="section section-padding-equal bg-color-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6" data-sal="slide-up" data-sal-duration="800">
                        <div class="about-us">
                            <div class="section-heading heading-left mb-0">
                                <span class="subtitle">About Us</span>
                                <h2 class="title mb--40">We do design, code & develop.</h2>
                                <p>Nulla et velit gravida, facilisis quam a, molestie ante. Mauris placerat suscipit dui, eget maximus tellus blandit a. Praesent non tellus sed ligula commodo blandit in et mauris. Quisque efficitur ipsum ut dolor molestie pellentesque. </p>
                                <p>Nulla pharetra hendrerit mi quis dapibus. Quisque luctus, tortor a venenatis fermentum, est lacus feugiat nisl, id pharetra odio enim eget libero. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 offset-xl-1" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="contact-form-box">
                            <h3 class="title">Get a free Keystroke quote now</h3>
                            <form method="POST" action="mail.php" class="axil-contact-form">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="contact-name" placeholder="John Smith">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="contact-email" placeholder="example@mail.com">
                                </div>
                                <div class="form-group mb--40">
                                    <label>Phone</label>
                                    <input type="tel" class="form-control" name="contact-company" placeholder="+123456789">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="axil-btn btn-fill-primary btn-fluid btn-primary" name="submit-btn">Get Free Quote</button>
                                </div>
                                <input type="hidden" class="form-control" name="contact-message" value="Null">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group-6 list-unstyled">
                <li class="shape shape-1"><img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-7.png" alt="Bubble"></li>
                <li class="shape shape-2"><img src="<?= base_url('assets/newtemplates/') ?>media/others/line-4.png" alt="line"></li>
                <li class="shape shape-3"><img src="<?= base_url('assets/newtemplates/') ?>media/others/line-5.png" alt="line"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=        Project Area Start         =-->
        <!--=====================================-->
        <section class="section section-padding-2">
            <div class="container">
                <div class="section-heading heading-left mb--40">
                    <span class="subtitle">Our Project</span>
                    <h2 class="title">Some of our <br> finest work.</h2>
                </div>
                <div class="axil-isotope-wrapper">
                    <div class="isotope-button isotope-project-btn">
                        <button data-filter="*" class="is-checked"><span class="filter-text">All Works</span></button>
                        <button data-filter=".branding"><span class="filter-text">Branding</span></button>
                        <button data-filter=".mobile"><span class="filter-text">Mobile</span></button>
                    </div>
                    <div class="row row-35 isotope-list">
                        <div class="col-md-6 project branding">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="<?= base_url('assets/newtemplates/') ?>media/project/project-1.png" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Creative Agency</a></h4>
                                    <span class="subtitle">Full Branding, Website, App</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project mobile">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="<?= base_url('assets/newtemplates/') ?>media/project/project-2.png" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Digital Marketing</a></h4>
                                    <span class="subtitle">Logo, Website & Mobile App</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project branding">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="<?= base_url('assets/newtemplates/') ?>media/project/project-3.png" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Digital Agency</a></h4>
                                    <span class="subtitle">Website, UI/UX</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project mobile">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="<?= base_url('assets/newtemplates/') ?>media/project/project-4.png" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Plan Management</a></h4>
                                    <span class="subtitle">Branding, Website, IOS App</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project branding">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="<?= base_url('assets/newtemplates/') ?>media/project/project-5.png" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Social Engagement</a></h4>
                                    <span class="subtitle">Design, Development</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project mobile">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="<?= base_url('assets/newtemplates/') ?>media/project/project-6.png" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Web Application</a></h4>
                                    <span class="subtitle">Logo, Webapp, App</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group-7 list-unstyled">
                <li class="shape shape-1"><img src="<?= base_url('assets/newtemplates/') ?>media/others/circle-2.png" alt="circle"></li>
                <li class="shape shape-2"><img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-2.png" alt="Line"></li>
                <li class="shape shape-3"><img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-1.png" alt="Line"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=        Counter Up Area Start      =-->
        <!--=====================================-->
        <section class="section section-padding bg-color-dark">
            <div class="container">
                <div class="section-heading heading-light">
                    <span class="subtitle">Featured Case Study</span>
                    <h2 class="title">Design startup movement</h2>
                    <p>In vel varius turpis, non dictum sem. Aenean in efficitur ipsum, in egestas ipsum. Mauris in mi ac tellus.</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="counterup-progress active">
                            <div class="icon">
                                <img src="<?= base_url('assets/newtemplates/') ?>media/icon/icon-7.png" alt="Apple">
                            </div>
                            <div class="count-number h2">
                                <span class="number count">15</span>
                                <span class="symbol">+</span>
                            </div>
                            <h6 class="title">Years of operation</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="counterup-progress">
                            <div class="icon">
                                <img src="<?= base_url('assets/newtemplates/') ?>media/icon/icon-8.png" alt="Apple">
                            </div>
                            <div class="count-number h2">
                                <span class="number count">360</span>
                                <span class="symbol">+</span>
                            </div>
                            <h6 class="title">Projects deliverd</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="counterup-progress">
                            <div class="icon">
                                <img src="<?= base_url('assets/newtemplates/') ?>media/icon/icon-9.png" alt="Apple">
                            </div>
                            <div class="count-number h2">
                                <span class="number count">600</span>
                                <span class="symbol">+</span>
                            </div>
                            <h6 class="title">Specialist</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                        <div class="counterup-progress">
                            <div class="icon">
                                <img src="<?= base_url('assets/newtemplates/') ?>media/icon/apple.png" alt="Apple">
                            </div>
                            <div class="count-number h2">
                                <span class="number count">64</span>
                                <span class="symbol">+</span>
                            </div>
                            <h6 class="title">Years of operation</h6>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-10">
                <!-- <li class="shape shape-1"><img src="<?= base_url('assets/newtemplates/') ?>media/others/line-9.png" alt="Circle"></li> -->
                <li class="shape shape-2"><img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-42.png" alt="Circle"></li>
                <li class="shape shape-3"><img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-43.png" alt="Circle"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=        Testimonial Area Start      =-->
        <!--=====================================-->
        <section class="section section-padding">
            <div class="container">
                <div class="section-heading heading-left">
                    <span class="subtitle">Testimonial</span>
                    <h2 class="title">From getting started</h2>
                    <p>Nulla facilisi. Nullam in magna id dolor blandit rutrum eget vulputate augue sed eu leo eget risus imperdiet.</p>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                        <div class="testimonial-grid active">
                            <span class="social-media"><img src="<?= base_url('assets/newtemplates/') ?>media/icon/yelp-2.png" alt="Yelp"></span>
                            <p>“ Donec metus lorem, vulputate
                                at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. ”</p>
                            <div class="author-info">
                                <div class="thumb">
                                    <img src="<?= base_url('assets/newtemplates/') ?>media/testimonial/testimonial-1.png" alt="Google Review">
                                </div>
                                <div class="content">
                                    <span class="name">Darrell Steward</span>
                                    <span class="designation">Executive Chairman</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="200">
                        <div class="testimonial-grid">
                            <span class="social-media"><img src="<?= base_url('assets/newtemplates/') ?>media/icon/google-2.png" alt="google"></span>
                            <p>“ Donec metus lorem, vulputate
                                at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. ”</p>
                            <div class="author-info">
                                <div class="thumb">
                                    <img src="<?= base_url('assets/newtemplates/') ?>media/testimonial/testimonial-2.png" alt="Google Review">
                                </div>
                                <div class="content">
                                    <span class="name">Savannah Nguyen</span>
                                    <span class="designation">Executive Chairman</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300">
                        <div class="testimonial-grid">
                            <span class="social-media"><img src="<?= base_url('assets/newtemplates/') ?>media/icon/fb-2.png" alt="Facebook"></span>
                            <p>“ Donec metus lorem, vulputate
                                at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. ”</p>
                            <div class="author-info">
                                <div class="thumb">
                                    <img src="<?= base_url('assets/newtemplates/') ?>media/testimonial/testimonial-3.png" alt="Google Review">
                                </div>
                                <div class="content">
                                    <span class="name">Floyd Miles</span>
                                    <span class="designation">Executive Chairman</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group-4 list-unstyled">
                <li class="shape-1"><img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-1.png" alt="Bubble"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=        Pricing Area Start       	=-->
        <!--=====================================-->
        <section class="section bg-color-light section-padding">
            <div class="container">
                <div class="section-heading mb-0">
                    <span class="subtitle">Pricing Plan</span>
                    <h2 class="title">Find the Right Plan.</h2>
                    <p>Flexible pricing options for freelancers <br> and design teams.</p>
                </div>
                <div class="pricing-billing-duration">
                    <ul>
                        <li class="nav-item">
                            <button class="nav-link active" id="yearly-plan-btn" type="button">Billed yearly</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="monthly-plan-btn" type="button">
                                Billed monthly</button>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="pricing-table active">
                            <div class="pricing-header">
                                <h3 class="title">Professional</h3>
                                <span class="subtitle">A beautiful, simple website</span>
                                <div class="price-wrap">
                                    <div class="yearly-pricing">
                                        <span class="amount">$119.99</span>
                                        <span class="duration">/yearly</span>
                                    </div>
                                    <div class="monthly-pricing">
                                        <span class="amount">$19.00</span>
                                        <span class="duration">/monthly</span>
                                    </div>
                                </div>
                                <div class="pricing-btn">
                                    <a href="#" class="axil-btn btn-large btn-borderd">Get Started Today</a>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-unstyled">
                                    <li>10 Pages Responsive Website</li>
                                    <li>5 PPC Campaigns</li>
                                    <li>10 SEO Keywords</li>
                                    <li>5 Facebook Camplaigns</li>
                                    <li>2 Video Camplaigns</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="pricing-table">
                            <div class="pricing-header">
                                <h3 class="title">Standard</h3>
                                <span class="subtitle">Small Team</span>
                                <div class="price-wrap">
                                    <div class="yearly-pricing">
                                        <span class="amount">$219.99</span>
                                        <span class="duration">/yearly</span>
                                    </div>
                                    <div class="monthly-pricing">
                                        <span class="amount">$29.00</span>
                                        <span class="duration">/monthly</span>
                                    </div>
                                </div>
                                <div class="pricing-btn">
                                    <a href="#" class="axil-btn btn-large btn-borderd">Get Started Today</a>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-unstyled">
                                    <li>50 Pages Responsive Website</li>
                                    <li>Unlimited PPC Campaigns</li>
                                    <li>Unlimited SEO Keywords</li>
                                    <li>Unlimited Facebook Camplaigns</li>
                                    <li>Unlimited Video Camplaigns</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="pricing-table">
                            <div class="pricing-header">
                                <h3 class="title">Ultimate</h3>
                                <span class="subtitle">Large Team</span>
                                <div class="price-wrap">
                                    <div class="yearly-pricing">
                                        <span class="amount">$559.99</span>
                                        <span class="duration">/yearly</span>
                                    </div>
                                    <div class="monthly-pricing">
                                        <span class="amount">$59.00</span>
                                        <span class="duration">/monthly</span>
                                    </div>
                                </div>
                                <div class="pricing-btn">
                                    <a href="#" class="axil-btn btn-large btn-borderd">Get Started Today</a>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-unstyled">
                                    <li>10 Pages Responsive Website</li>
                                    <li>5 PPC Campaigns</li>
                                    <li>10 SEO Keywords</li>
                                    <li>5 Facebook Camplaigns</li>
                                    <li>2 Video Camplaigns</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group-3 list-unstyled">
                <li class="shape shape-1"><img src="<?= base_url('assets/newtemplates/') ?>media/others/line-1.png" alt="shape"></li>
                <li class="shape shape-2"><img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-4.png" alt="shape"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=        Brand Area Start       	=-->
        <!--=====================================-->
        <section class="section section-padding bg-color-dark">
            <div class="container">
                <div class="section-heading heading-light-left">
                    <span class="subtitle">Top Clients</span>
                    <h2 class="title">We’ve built solutions for...</h2>
                    <p>Design anything from simple icons to fully featured websites and applications.</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500">
                        <div class="brand-grid active">
                            <img src="<?= base_url('assets/newtemplates/') ?>media/brand/brand-1.png" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100">
                        <div class="brand-grid">
                            <img src="<?= base_url('assets/newtemplates/') ?>media/brand/brand-2.png" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="200">
                        <div class="brand-grid">
                            <img src="<?= base_url('assets/newtemplates/') ?>media/brand/brand-3.png" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                        <div class="brand-grid">
                            <img src="<?= base_url('assets/newtemplates/') ?>media/brand/brand-4.png" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="400">
                        <div class="brand-grid">
                            <img src="<?= base_url('assets/newtemplates/') ?>media/brand/brand-5.png" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="500">
                        <div class="brand-grid">
                            <img src="<?= base_url('assets/newtemplates/') ?>media/brand/brand-6.png" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="600">
                        <div class="brand-grid">
                            <img src="<?= base_url('assets/newtemplates/') ?>media/brand/brand-7.png" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="700">
                        <div class="brand-grid">
                            <img src="<?= base_url('assets/newtemplates/') ?>media/brand/brand-8.png" alt="Brand">
                        </div>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-10">
                <li class="shape shape-1"><img src="<?= base_url('assets/newtemplates/') ?>media/others/line-9.png" alt="Circle"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=        Blog Area Start       	    =-->
        <!--=====================================-->
        <section class="section section-padding-equal">
            <div class="container">
                <div class="section-heading">
                    <span class="subtitle">What's Going On</span>
                    <h2 class="title">Latest stories</h2>
                    <p>News From Abstrak And Around The World Of Web Design And Complete Solution of Online Digital Marketing </p>
                </div>
                <div class="row g-0">
                    <div class="col-xl-6" data-sal="slide-right" data-sal-duration="800" data-sal-delay="100">
                        <div class="blog-list active">
                            <div class="post-thumbnail">
                                <a href="single-blog-2.html"><img src="<?= base_url('assets/newtemplates/') ?>media/blog/blog-1.png" alt="Blog Post"></a>
                            </div>
                            <div class="post-content">
                                <h5 class="title"><a href="single-blog-2.html">How To Use a Remarketing Strategy To Get More</a></h5>
                                <p>Demand generation is a constant struggle for any business. Each marketing strategy you employ has...</p>
                                <a href="single-blog-2.html" class="more-btn">Learn more<i class="far fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6" data-sal="slide-left" data-sal-duration="800" data-sal-delay="100">
                        <div class="blog-list border-start">
                            <div class="post-thumbnail">
                                <a href="single-blog-3.html"><img src="<?= base_url('assets/newtemplates/') ?>media/blog/blog-2.png" alt="Blog Post"></a>
                            </div>
                            <div class="post-content">
                                <h5 class="title"><a href="single-blog-3.html">SEO Statistics You Should Know in 2021</a></h5>
                                <p>Organic search has the potential to capture more than 40 percent of your gross revenue...</p>
                                <a href="single-blog-3.html" class="more-btn">Learn more<i class="far fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group-1 list-unstyled">
                <li class="shape shape-1"><img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-1.png" alt="bubble"></li>
                <li class="shape shape-2"><img src="<?= base_url('assets/newtemplates/') ?>media/others/line-1.png" alt="bubble"></li>
                <li class="shape shape-3"><img src="<?= base_url('assets/newtemplates/') ?>media/others/line-2.png" alt="bubble"></li>
                <li class="shape shape-4"><img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-2.png" alt="bubble"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=     Call To Action Area Start     =-->
        <!--=====================================-->
        <section class="section call-to-action-area">
            <div class="container">
                <div class="call-to-action">
                    <div class="section-heading heading-light">
                        <span class="subtitle">Let's Work Together</span>
                        <h2 class="title">Need a successful project?</h2>
                        <a href="contact.html" class="axil-btn btn-large btn-fill-white">Estimate Project</a>
                    </div>
                    <div class="thumbnail">
                        <div class="larg-thumb" data-sal="zoom-in" data-sal-duration="600" data-sal-delay="100">
                            <img class="paralax-image" src="<?= base_url('assets/newtemplates/') ?>media/others/chat-group.png" alt="Chat">
                        </div>
                        <ul class="list-unstyled small-thumb">
                            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="800" data-sal-delay="400">
                                <img class="paralax-image" src="<?= base_url('assets/newtemplates/') ?>media/others/laptop-poses.png" alt="Laptop">
                            </li>
                            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="800" data-sal-delay="300">
                                <img class="paralax-image" src="<?= base_url('assets/newtemplates/') ?>media/others/bill-pay.png" alt="Bill">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-9">
                <li class="shape shape-1"><img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-12.png" alt="Comments"></li>
                <li class="shape shape-2"><img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-16.png" alt="Comments"></li>
                <li class="shape shape-3"><img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-13.png" alt="Comments"></li>
                <li class="shape shape-4"><img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-14.png" alt="Comments"></li>
                <li class="shape shape-5"><img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-16.png" alt="Comments"></li>
                <li class="shape shape-6"><img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-15.png" alt="Comments"></li>
                <li class="shape shape-7"><img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-16.png" alt="Comments"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=        Footer Area Start       	=-->
        <!--=====================================-->
        <footer class="footer-area">
            <div class="container">
                <div class="footer-top">
                    <div class="footer-social-link">
                        <ul class="list-unstyled">
                            <li><a href="https://facebook.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="200"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.pinterest.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="https://www.linkedin.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="400"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://www.instagram.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="500"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://vimeo.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="600"><i class="fab fa-vimeo-v"></i></a></li>
                            <li><a href="https://dribbble.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="700"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="https://www.behance.net/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="800"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-main">
                    <div class="row">
                        <div class="col-xl-6 col-lg-5" data-sal="slide-right" data-sal-duration="800" data-sal-delay="100">
                            <div class="footer-widget border-end">
                                <div class="footer-newsletter">
                                    <h2 class="title">Get in touch!</h2>
                                    <p>Fusce varius, dolor tempor interdum tristique, dui urna bib
                                        endum magna, ut ullamcorper purus</p>
                                    <form>
                                        <div class="input-group">
                                            <input type="email" class="form-control" placeholder="Email address">
                                            <button class="subscribe-btn" type="submit">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7" data-sal="slide-left" data-sal-duration="800" data-sal-delay="100">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="footer-widget">
                                        <h6 class="widget-title">Services</h6>
                                        <div class="footer-menu-link">
                                            <ul class="list-unstyled">
                                                <li><a href="service-design.html">Logo &amp; Branding</a></li>
                                                <li><a href="service-development.html">Website Development</a></li>
                                                <li><a href="service-development.html">Mobile App Development</a></li>
                                                <li><a href="service-marketing.html">Search Engine Optimization</a></li>
                                                <li><a href="service-marketing.html">Pay-Per-Click</a></li>
                                                <li><a href="service-marketing.html">Social Media Marketing</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="footer-widget">
                                        <h6 class="widget-title">Resourses</h6>
                                        <div class="footer-menu-link">
                                            <ul class="list-unstyled">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="case-study.html">Case Studies</a></li>
                                                <li><a href="project.html">Portfolio</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="footer-widget">
                                        <h6 class="widget-title">Support</h6>
                                        <div class="footer-menu-link">
                                            <ul class="list-unstyled">
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                <li><a href="terms-of-use.html">Terms of Use</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-copyright">
                                <span class="copyright-text">© 2021. All rights reserved by <a href="https://axilthemes.com/">Axilthemes</a>.</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-bottom-link">
                                <ul class="list-unstyled">
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="terms-of-use.html">Terms of Use</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>




        <!--=====================================-->
        <!--=       Offcanvas Menu Area       	=-->
        <!--=====================================-->
        <div class="offcanvas offcanvas-end header-offcanvasmenu" tabindex="-1" id="offcanvasMenuRight">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form action="#" class="side-nav-search-form">
                    <div class="form-group">
                        <input type="text" class="search-field" name="search-field" placeholder="Search...">
                        <button class="side-nav-search-btn"><i class="fas fa-search"></i></button>
                    </div>
                </form>
                <div class="row ">
                    <div class="col-lg-5 col-xl-6">
                        <ul class="main-navigation list-unstyled">
                            <li><a href="index-1.html">Digital Agency</a></li>
                            <li><a href="index-2.html">Creative Agency</a></li>
                            <li><a href="index-3.html">Personal Portfolio</a></li>
                            <li><a href="index-4.html">Home Startup</a></li>
                            <li><a href="index-5.html">Corporate Agency</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-xl-6">
                        <div class="contact-info-wrap">
                            <div class="contact-inner">
                                <address class="address">
                                    <span class="title">Contact Information</span>
                                    <p>Theodore Lowe, Ap #867-859 <br> Sit Rd, Azusa New York</p>
                                </address>
                                <address class="address">
                                    <span class="title">We're Available 24/7. Call Now.</span>
                                    <a class="tel" href="tel:8884562790"><i class="fas fa-phone"></i>(888)
                                        456-2790</a>
                                    <a class="tel" href="tel:12125553333"><i class="fas fa-fax"></i>(121)
                                        255-53333</a>
                                </address>
                            </div>
                            <div class="contact-inner">
                                <h5 class="title">Find us here</h5>
                                <div class="contact-social-share">
                                    <ul class="social-share list-unstyled">
                                        <li><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.behance.net/"><i class="fab fa-behance"></i></a></li>
                                        <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery Js -->
    <!-- <script src="<?= base_url('assets/aos/aos.js') ?>"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
<!-- <script src="<?= base_url() ?>assets/OwlCarousel/owl.carousel.min.js"></script> -->


<script src="<?= base_url('assets/newtemplates') ?>/js/vendor/jquery-3.6.0.min.js"></script>
<script src="<?= base_url('assets/newtemplates') ?>/js/vendor/bootstrap.min.js"></script>
<script src="<?= base_url('assets/newtemplates') ?>/js/vendor/isotope.pkgd.min.js"></script>
<script src="<?= base_url('assets/newtemplates') ?>/js/vendor/imagesloaded.pkgd.min.js"></script>
<script src="<?= base_url('assets/newtemplates') ?>/js/vendor/waypoints.min.js"></script>
<script src="<?= base_url('assets/newtemplates') ?>/js/vendor/counterup.js"></script>
<script src="<?= base_url('assets/newtemplates') ?>/js/vendor/slick.min.js"></script>
<script src="<?= base_url('assets/newtemplates') ?>/js/vendor/sal.js"></script>
<script src="<?= base_url('assets/newtemplates') ?>/js/vendor/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url('assets/newtemplates') ?>/js/vendor/js.cookie.js"></script>
<script src="<?= base_url('assets/newtemplates') ?>/js/vendor/jquery.style.switcher.js"></script>
<script src="<?= base_url('assets/newtemplates') ?>/js/vendor/jquery.countdown.min.js"></script>
<script src="<?= base_url('assets/newtemplates') ?>/js/vendor/tilt.js"></script>
<script src="<?= base_url('assets/newtemplates') ?>/js/vendor/green-audio-player.min.js"></script>
<script src="<?= base_url('assets/newtemplates') ?>/js/vendor/jquery.nav.js"></script>


<!-- Site Scripts -->
<script src="<?= base_url('assets/newtemplates') ?>/js/app.js"></script>

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
    setInterval(function() {
        $(".bounce").effect("bounce", {
            times: 1
        }, 1100);
    }, 1100)

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

    
    // disable copy paste, dan right click
    <?php if ( $this->CI->config->item('dev_mode') == "false") { ?>
    $('body').bind('cut copy', function (e) {
        return false;
    });
    $(document).bind('contextmenu', function (e) {
        return false;
    });
    $(document).keydown(function (event) {
        if (event.keyCode == 123) { 
            return false;
        } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {        
            return false;
        }
    });
    
    <?php } else { echo "console.log('DEV MODE'); "; } ?>
    
</script>
<script>
    function myFunction() {
        var x = document.getElementById("myframe");
        var y = (x.contentWindow || x.contentDocument);
        if (y.document) y = y.document;
        y.body.style.backgroundColor = "red";
    }
</script>
</body>
</html>