<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/styles.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/OwlCarousel/owl.carousel.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/OwlCarousel/owl.theme.default.min.css') ?>" type="text/css">
    <link href="<?= base_url('assets/img/icon/bisaai.png') ?>" rel="icon">
    <title>BISA AI Academy - Landing Page</title>
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

        .btn-space {
            margin-right: 5px;
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
                    <h2 style="z-index:2" class="position-absolute poppins-600 text-hitam-custom text-shadow-2">BISA AI Academy</h2>
                    <br /><br />
                    <div class="mt-4 poppins-400 letter-spacing text-size-3 text-muted text-shadow-2" style="line-height:1.7; opacity: 0.7; text-align: justify;">
                        BISA AI Academy, Platform Aplikasi Pembelajaran melalui Android dan iOS yang dapat digunakan untuk belajar Teknologi Informasi dan Artificial Intelligence melalui program Course Academy, Bootcamp dan Intensive Class. Selain belajar, kamu juga dapat mengikuti Kompetisi, Challange melalui program Freelance hingga mencari pekerjaan melalui Job Talent.
                    </div>
                    <br><br>
                    <!--<a href="https://tupay.co.id" style="text-decoration: none" target="_blank">-->
                    <!--    <button class="box-shadow text-light poppins-500 text-size-1 btn rounded-pill bg-hitam-custom px-4">Website</button>-->
                    <!--</a>&nbsp;&nbsp;  -->
                    <div class="container">
                        <div class="row">
                            <!--<div class="sm-2 pb-3 mr-2">-->
                            <!--    <a href="https://tampil.id" style="text-decoration: none" target="_blank">-->
                            <!--        <button class="box-shadow text-light poppins-500 text-size-1 btn rounded-pill bg-hitam-custom px-4">Website</button>-->
                            <!--    </a>-->
                            <!--</div>-->
                            <div class="sm-2 pb-3 mr-2">
                                <a href="https://play.google.com/store/apps/details?id=com.pos.bisaaiacademy" target="_blank">
                                    <button class="btn text-light rounded-pill text-size-1 poppins-500 bg-hitam-custom px-4 "><i class="fab fa-google-play "></i>&nbsp; Google Play</button>
                                </a>
                            </div>
                            <div class="sm-2 pb-3 mr-2">
                                <a href="https://apps.apple.com/id/app/bisa-ai-academy/id1525123512" target="_blank">
                                    <button class="btn text-light rounded-pill text-size-1 poppins-500 bg-hitam-custom px-4 "><i class="fab fa-apple"></i>&nbsp; App Store</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/TEXT-->

                <!-- IMAGE -->
                <div class="col-lg-5  pt-5 d-none d-lg-block d-xl-block">
                    <br /><br />
                    <img class="mx-auto d-block img-fluid" src="<?= base_url() ?>assets/img/hp-academy.png" width="269">

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
                <iframe width="560" height="315" class="w-100 rounded-pill-2 box-shadow" src="https://www.youtube.com/embed/PTiGrlOfdbI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <p class="poppins-400 text-size-3 mt-5 text-muted text-shadow text-justify" style="line-height: 1.8;">
                    BISA AI Academy hadir sebagai solusi belajar online Anda. Tersedia banyak bidang pembelajaran. Sebelum memulai, simak terlebih dahulu video tutorial di samping!
                </p>
            </div>
        </div>
    </div>
    <!-- /VIDEO / SANDBOX-->
    <br><br><br><br><br>
    <!--LEARNING -->
    <section class="bg-light">
        <br>
        <div class="container mt-5">
            <div class="row">
                <br /><br /><br />
                <div class="col-lg-12">
                    <h2 class='text-center text-shadow poppins-600 text-hitam-custom'>Bidang Pembelajaran</h2>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-4 col-xs-3">
                    <div class="card mt-3">
                        <div class="card-body text-center py-3">
                            <img src="<?= base_url() ?>assets/img/icon/learning/AI.png" width=80>
                            <p class='poppins-500 text-muted letter-spacing mt-2'>Artificial Intelligence</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-3">
                    <div class="card mt-3">
                        <div class="card-body text-center py-3">
                            <img src="<?= base_url() ?>assets/img/icon/learning/IOT.png" width=80>
                            <p class='poppins-500 text-muted letter-spacing mt-2'>Internet Of Things</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-3">
                    <div class="card mt-3">
                        <div class="card-body text-center py-3">
                            <img src="<?= base_url() ?>assets/img/icon/learning/Deep-learning.png" width=80>
                            <p class='poppins-500 text-muted letter-spacing mt-2'>Deep Learning</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-3">
                    <div class="card mt-3">
                        <div class="card-body text-center py-3">
                            <img src="<?= base_url() ?>assets/img/icon/learning/Video-analytics.png" width=80>
                            <p class='poppins-500 text-muted letter-spacing mt-2'>Video Analytics</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-3">
                    <div class="card mt-3">
                        <div class="card-body text-center py-3">
                            <img src="<?= base_url() ?>assets/img/icon/learning/Statistika-logo.png" width=80>
                            <p class='poppins-500 text-muted letter-spacing mt-2'>Statistika</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-3">
                    <div class="card mt-3">
                        <div class="card-body text-center py-3">
                            <img src="<?= base_url() ?>assets/img/icon/learning/Python-retrieval.png" width=80>
                            <p class='poppins-500 text-muted letter-spacing mt-2'>Python Programming</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-3">
                    <div class="card mt-3">
                        <div class="card-body text-center py-3">
                            <img src="<?= base_url() ?>assets/img/icon/learning/excel.png" width=80>
                            <p class='poppins-500 text-muted letter-spacing mt-2'>Excel For Analytics</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-3">
                    <div class="card mt-3">
                        <div class="card-body text-center py-3">
                            <img src="<?= base_url() ?>assets/img/icon/learning/Robotik.png" width=80>
                            <p class='poppins-500 text-muted letter-spacing mt-2'>Robotik</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-3">
                    <div class="card mt-3">
                        <div class="card-body text-center py-3">
                            <img src="<?= base_url() ?>assets/img/icon/learning/android.png" width=80>
                            <p class='poppins-500 text-muted letter-spacing mt-2'>Android Programming</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-xs-3">
                    <div class="card mt-3">
                        <div class="card-body text-center py-3">
                            <img src="<?= base_url() ?>assets/img/icon/learning/Data mining (1).png" width=80>
                            <p class='poppins-500 text-muted letter-spacing mt-2'>Data Mining</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-xs-3">
                    <div class="card mt-3">
                        <div class="card-body text-center py-3">
                            <img src="<?= base_url() ?>assets/img/icon/learning/Text analytics (1).png" width=80>
                            <p class='poppins-500 text-muted letter-spacing mt-2'>Text Analytics</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-xs-3">
                    <div class="card mt-3">
                        <div class="card-body text-center py-3">
                            <img src="<?= base_url() ?>assets/img/icon/learning/Natural language processing (1).png" width=80>
                            <p class='poppins-500 text-muted letter-spacing mt-2'>Natural Language Processing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br>
    </section>
    <!--/LEARNING -->
    <br>
    <!-- FITUR -->
    <section>
        <br><br>
        <div class="container">
            <section class=" pb-5">
                <div class="container pl-5">
                    <div class="row">
                        <!-- IMAGE -->
                        <div class="col-lg-5  pt-5 d-none d-lg-block d-xl-block">
                            <img class="mx-auto d-block img-fluid" src="<?= base_url() ?>assets/img/icon/learning/academy1.png" width="300px">
                        </div>
                        <!-- /IMAGE -->

                        <!-- TEXT -->
                        <div class="col-lg-7 pt-5">
                            <br /><br />
                            <h2 style="z-index:2;" class="position-absolute poppins-600 text-hitam-custom text-shadow-2">Fitur-fitur daring yang membantu
                            </h2><br><br>

                            <div class="mt-5 poppins-400 letter-spacing text-size-3 text-muted text-shadow-2" style="line-height:1.7; opacity: 0.7;">
                                Mulai dari kebutuhan belajar, kompetisi hingga mencari pekerjaan semuanya dapat terbantu oleh fitur-fitur daring BISA AI Academy
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
    <section class="mb-4 d-none d-lg-block d-xl-block pb-5 pt-2">
        <div class="container">

            <div class="fitur owl-carousel owl-theme">
                <div class="item py-5">
                    <div class="card card-custom h-100 mx-3">
                        <div class="card-body">
                            <img src="<?= base_url() ?>assets/img/icon/learning/akademi.png" style='width:150px; height:150px; object-fit:cover;' class='mx-auto d-block'>
                            <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Academy</h5>
                            <p class="card-text poppins-400 text-muted  text-center letter-spacing mt-3">
                                Akses berbagai kelas gratis dan berbayar untuk belajar materi yang didukung oleh pengajar yang berpengalaman dan profesional.
                                <br><br>
                            </p>

                        </div>
                    </div>
                </div>
                <div class=" item py-5">
                    <div class="card card-custom h-100 mx-3">
                        <div class="card-body">
                            <img src="<?= base_url() ?>assets/img/icon/learning/kompetisi.png" style='width:150px; height:150px; object-fit:cover;' class='mx-auto d-block'>
                            <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Kompetisi</h5>
                            <p class="card-text poppins-400 text-muted  text-center letter-spacing mt-3">
                                Hadiri kompetisi-kompetisi AI, Data Science, IoT, hingga giveaway untuk mendapatkan sertifikat dan tentunya hadiah langsung!<br> <br />
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item py-5">
                    <div class="card card-custom h-100 mx-3">
                        <div class="card-body">
                            <img src="<?= base_url() ?>assets/img/icon/learning/Project.png" style='width:150px; height:150px; object-fit:cover;' class='mx-auto d-block'>
                            <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Freelance</h5>
                            <p class="card-text poppins-400 text-muted  text-center letter-spacing mt-3">
                                Buat atau kerjakan projek-projek Freelance di dalam aplikasi BISA AI Academy dengan mudah dan aman.<br /><br /><br />
                            </p>

                        </div>
                    </div>
                </div>

                <div class="item py-5">
                    <div class="card card-custom h-100 mx-3">
                        <div class="card-body">
                            <img src="<?= base_url() ?>assets/img/icon/learning/talent.png" style='width:150px; height:150px; object-fit:cover;' class='mx-auto d-block'>
                            <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Talent</h5>
                            <p class="card-text poppins-400 text-muted  text-center letter-spacing mt-3">
                                Dapatkan informasi lowongan magang ataupun fulltime secara langsung dari partner-partner BISA AI Academy<br /><br /><br />
                            </p>

                        </div>
                    </div>
                </div>

                <div class="item py-5">
                    <div class="card card-custom h-100 mx-3">
                        <div class="card-body">
                            <img src="<?= base_url() ?>assets/img/icon/learning/Diskusi (Transparent).png" style='width:150px; height:150px; object-fit:cover;' class='mx-auto d-block'>
                            <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Diskusi Privat</h5>
                            <p class="card-text poppins-400 text-muted  text-center letter-spacing mt-3">
                                Sesi diskusi privat secara langsung bersama pemateri seputar topik dan jadwal sesuai permintaan kamu.<br /><br /><br />
                            </p>

                        </div>
                    </div>
                </div>

                <div class="item py-5">
                    <div class="card card-custom h-100 mx-3">
                        <div class="card-body">
                            <img src="<?= base_url() ?>assets/img/icon/learning/event.png" style='width:150px; height:150px; object-fit:cover;' class='mx-auto d-block'>
                            <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Event</h5>
                            <p class="card-text poppins-400 text-muted  text-center letter-spacing mt-3">
                                Hadiri event-event seputar IT, Bisnis, dan topik lainnya untuk membantu kamu belajar secara daring.<br /><br /><br />
                            </p>

                        </div>
                    </div>
                </div>

                <div class="item py-5">
                    <div class="card card-custom h-100 mx-3">
                        <div class="card-body">
                            <img src="<?= base_url() ?>assets/img/icon/learning/AI Simulator (Transparent).png" style='width:150px; height:150px; object-fit:cover;' class='mx-auto d-block'>
                            <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Simulasi Artificial Intelligence</h5>
                            <p class="card-text poppins-400 text-muted  text-center letter-spacing mt-3">
                                Belajar dan coba langsung kasus-kasus Artificial Intelligence lewat simulasi dan materi yang dirancang khusus.<br /><br /><br />
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /SUBFITUR -->

    <!-- SUBFITUR MOBILE -->
    <section class="mb-4 d-xs-block d-sm-block d-md-block d-lg-none d-xl-none pb-5">
        <div class="container">
            <br /><br /><br />
            <div class="card card-custom h-100 mx-3 mt-2">
                <div class="card-body">
                    <img src="<?= base_url() ?>assets/img/icon/learning/akademi.png" style='width:150px; height:150px; object-fit:cover;' class='mx-auto d-block'>
                    <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Academy<br></h5>
                    <p class="card-text poppins-400 text-muted  text-center letter-spacing mt-3">
                        Akses berbagai kelas gratis dan berbayar untuk belajar materi yang didukung oleh pengajar yang berpengalaman dan profesional.
                    </p>
                </div>
            </div>

            <div class="card card-custom h-100 mx-3 mt-2">
                <div class="card-body">
                    <img src="<?= base_url() ?>assets/img/icon/learning/kompetisi.png" style='width:150px; height:150px; object-fit:cover;' class='mx-auto d-block'>
                    <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Kompetisi</h5>
                    <p class="card-text poppins-400 text-muted  text-center letter-spacing mt-3">
                        Hadiri kompetisi-kompetisi AI, Data Science, IoT, hingga giveaway untuk mendapatkan sertifikat dan tentunya hadiah langsung!<br><br>
                    </p><br>
                </div>
            </div>

            <div class="card card-custom h-100 mx-3 mt-2">
                <div class="card-body">
                    <img src="<?= base_url() ?>assets/img/icon/learning/Project.png" style='width:150px; height:150px; object-fit:cover;' class='mx-auto d-block'>
                    <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Freelance</h5>
                    <p class="card-text poppins-400 text-muted  text-center letter-spacing mt-3">
                        Buat atau kerjakan projek-projek Freelance di dalam aplikasi BISA AI Academy dengan mudah dan aman.<br><br>
                    </p>

                </div>
            </div>
            
            <div class="card card-custom h-100 mx-3 mt-2">
                <div class="card-body">
                    <img src="<?= base_url() ?>assets/img/icon/learning/talent.png" style='width:150px; height:150px; object-fit:cover;' class='mx-auto d-block'>
                    <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Talent</h5>
                    <p class="card-text poppins-400 text-muted  text-center letter-spacing mt-3">
                        Dapatkan informasi lowongan magang ataupun fulltime secara langsung dari partner-partner BISA AI Academy<br><br>
                    </p>

                </div>
            </div>
            
            <div class="card card-custom h-100 mx-3 mt-2">
                <div class="card-body">
                    <img src="<?= base_url() ?>assets/img/icon/learning/Diskusi (Transparent).png" style='width:150px; height:150px; object-fit:cover;' class='mx-auto d-block'>
                    <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Diskusi Private</h5>
                    <p class="card-text poppins-400 text-muted  text-center letter-spacing mt-3">
                        Sesi diskusi privat secara langsung bersama pemateri seputar topik dan jadwal sesuai permintaan kamu.<br><br>
                    </p>

                </div>
            </div>
            
            <div class="card card-custom h-100 mx-3 mt-2">
                <div class="card-body">
                    <img src="<?= base_url() ?>assets/img/icon/learning/event.png" style='width:150px; height:150px; object-fit:cover;' class='mx-auto d-block'>
                    <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Event</h5>
                    <p class="card-text poppins-400 text-muted  text-center letter-spacing mt-3">
                        Hadiri event-event seputar IT, Bisnis, dan topik lainnya untuk membantu kamu belajar secara daring.<br><br>
                    </p>

                </div>
            </div>

            <div class="card card-custom h-100 mx-3 mt-2">
                <div class="card-body">
                    <img src="<?= base_url() ?>assets/img/icon/learning/AI Simulator (Transparent).png" style='width:150px; height:150px; object-fit:cover;' class='mx-auto d-block'>
                    <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Simulasi Artificial Intelligence</h5>
                    <p class="card-text poppins-400 text-muted  text-center letter-spacing mt-3">
                        Belajar dan coba langsung kasus-kasus Artificial Intelligence lewat simulasi dan materi yang dirancang khusus.<br><br>
                    </p>

                </div>
            </div>

        </div>
    </section>
    <!-- /SUBFITUR MOBILE -->
    <?php $this->load->view("faq-academy"); ?>
    <?php
    $this->load->view('Templates/Footer');
    $this->load->view('Templates/Link-js'); ?>
    <script>
        setInterval(function() {
            $(".bounce").effect("bounce", {
                times: 1
            }, 1100);
        }, 1100)



        $('.fitur').owlCarousel({
            center: true,
            items: 3,
            loop: true,
            autoplay: true,
            autoplayTimeout: 1500,
            autoplayHoverPause: true
        })
    </script>