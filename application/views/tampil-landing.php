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
    <title>TAMPIL - Landing Page</title>
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

        .video {
            flex: 1;
        }
        .btn-hover-whatsapp {
        font-size: 16px;
        font-weight: 600;
        color: #fff;
        cursor: pointer;
        padding:12px 40px;
        text-align:center;
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

    .btn-hover:focus {
        outline: none;
    }
    .timeline {
  border-left: 3px solid #727cf5;
  border-bottom-right-radius: 4px;
  border-top-right-radius: 4px;
  background: rgba(114, 124, 245, 0.09);
  margin: 0 auto;
  letter-spacing: 0.2px;
  position: relative;
  line-height: 1.4em;
  font-size: 1.14em;
  padding: 50px;
  list-style: none;
  text-align: left;
  max-width: 40%;
}

@media (max-width: 767px) {
  .timeline {
    max-width: 98%;
    padding: 25px;
  }
}

.timeline h1 {
  font-weight: 300;
  font-size: 1.4em;
}

.timeline h2,
.timeline h3 {
  font-weight: 600;
  font-size: 1rem;
  margin-bottom: 10px;
}

.timeline .event {
  border-bottom: 1px dashed #e8ebf1;
  padding-bottom: 25px;
  margin-bottom: 25px;
  position: relative;
}

@media (max-width: 767px) {
  .timeline .event {
    padding-top: 30px;
  }
}

.timeline .event:last-of-type {
  padding-bottom: 0;
  margin-bottom: 0;
  border: none;
}

.timeline .event:before,
.timeline .event:after {
  position: absolute;
  display: block;
  top: 0;
}

.timeline .event:before {
  left: -207px;
  content: attr(data-date);
  text-align: right;
  font-weight: 100;
  font-size: 0.9em;
  min-width: 120px;
}

@media (max-width: 767px) {
  .timeline .event:before {
    left: 0px;
    text-align: left;
  }
}

.timeline .event:after {
  -webkit-box-shadow: 0 0 0 3px #727cf5;
  box-shadow: 0 0 0 3px #727cf5;
  left: -55.8px;
  background: #fff;
  border-radius: 50%;
  height: 9px;
  width: 9px;
  content: "";
  top: 5px;
}

@media (max-width: 767px) {
  .timeline .event:after {
    left: -31.8px;
  }
}

.rtl .timeline {
  border-left: 0;
  text-align: right;
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
  border-bottom-left-radius: 4px;
  border-top-left-radius: 4px;
  border-right: 3px solid #727cf5;
}

.rtl .timeline .event::before {
  left: 0;
  right: -170px;
}

.rtl .timeline .event::after {
  left: 0;
  right: -55.8px;
}
    </style>
</head>

<body>
    <?php
    $this->load->view('Templates/Navbar'); ?>

    <section class=" bg-light pb-5">
        <div class="container pl-5">
            <div class="row">
                <!-- TEXT -->
                <div class="col-lg-7 pt-5">
                    <br /><br /><br /><br />
                    <h2 style="z-index:2" class="position-absolute poppins-600 text-hitam-custom text-shadow-2">TAMPIL</h2>
                    <br /><br />
                    <div class="mt-4 poppins-400 letter-spacing text-size-3 text-muted text-shadow-2" style="line-height:1.7; opacity: 0.7; text-align: justify;">
                        TAMPIL merupakan platform penyelenggara webinar atau event untuk komunitas dan partner menggunakan layanan video conference TAMPIL yang aman dan mudah digunakan. Anda dapat bergabung didalam event Tampil sebagai peserta atau kolaborator. Sebagai peserta, anda dapat memilih event yang sesuai minat anda. Sebagai Kolaborator, anda dapat menyelenggarakan event berkolaborasi dengan BISA AI
                    </div>
                    <br><br>
                    <div class="container">
                        <div class="row">
                            <div class="sm-2 pb-3 mr-2">
                                <a href="https://tampil.id" style="text-decoration: none" target="_blank">
                                    <button class="box-shadow text-light poppins-500 text-size-1 btn rounded-pill bg-hitam-custom px-4">
                                        <i class="fa fa-globe"></i>&nbsp; Website</button>
                                </a>
                            </div>
                            <div class="sm-2 pb-3 mr-2">
                                <a href="https://play.google.com/store/apps/details?id=com.pos.bisatampil" target="_blank">
                                    <button class="btn text-light rounded-pill text-size-1 poppins-500 bg-hitam-custom px-4 "><i class="fab fa-google-play"></i>&nbsp; Google Play</button>
                                </a>
                            </div>
                            <div class="sm-2 pb-3 mr-2">
                                <a href="https://apps.apple.com/id/app/bisa-tampil/id1514160107" target="_blank">
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
                    <img class="mx-auto d-block img-fluid" src="<?= base_url() ?>assets/img/hp-tampil.png" width="269px">
                </div>
            </div>
        </div>
        <br><br><br><br>
    </section>
    <!-- /BANNER -->
    <br><br><br>
    <section class="my-5">
    <div class="container">
        <div class="row mt-5 text-center">
            <div class="col">
                <h3 class="letter-spacing poppins-600">TAMPIL lebih dari sekedar platform konferensi video online di Indonesia</h3>
                <p class="text-muted poppins-400" style="line-height:1.9">
                    Kami merupakan community-based conference yang siap meramaikan dan membantu pelaksanaan kegiatan daring kalian
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-lg-6">
                <div class="card mt-3">
                    <div class="card-body text-center py-3" style="background-color: royalblue;border-radius:10px;">
                        <h2 class="poppins-600 letter-spacing" style="color:white;">
                            Fakta TAMPIL
                        </h2>
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <div class="poppins-400 letter-spacing text-center card" style="text-align: left; font-size: 18px; list-style: none;">
                                    <h4 class="my-2 poppins-400">+80.000 Jam tayang</h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-6">
                                <div class="card poppins-400 letter-spacing text-center" style="text-align: left; font-size: 18px; list-style: none;">
                                    <h4 class="my-2 poppins-400">+55.000 Total pengguna</h4>
                                </div><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <div class="card poppins-400 letter-spacing text-center" style="text-align: left; font-size: 18px; list-style: none;">
                                    <h4 class="my-2 poppins-400">+25.000 Pengguna aktif</h4>
                                </div><br>
                            </div>
                            <div class="col-md-6 col-6">
                                <div class="card poppins-400 letter-spacing text-center" style="text-align: left; font-size: 18px; list-style: none;">
                                    <h4 class="my-2 poppins-400">+700 Paket meeting terjual</h4>
                                </div><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="card poppins-400 letter-spacing text-center" style="text-align: left; font-size: 18px; list-style: none;">
                                    <h4 class="poppins-400 my-4">+200 Kegiatan yang sukses dilaksanakan</h4>
                                </div><br>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="card poppins-400 letter-spacing text-center" style="text-align: left; font-size: 18px; list-style: none;">
                                    <h4 class="my-3 poppins-400">+10 Perusahaan yang bekerja sama dengan TAMPIL</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-2 col-2"></div>
            <div class="col-lg-8 col-8">
                <div class="card mt-3">
                    <div class="card-body">
                        <h2 class="poppins-600 letter-spacing text-hitam-custom text-center card-title">Timeline</h2>
                        <div id="content" class="text-center">
                            <ul class="timeline" style="padding-top: 25px;padding-right: 10px;padding-bottom:10px;">
                                <li class="event poppins-500" data-date="Maret 2020">
                                    <h3>TAMPIL hadir</h3>
                                </li>
                                <li class="event poppins-500" data-date="April 2020">
                                    <h3>Mencapai 1000 pengguna</h3>
                                </li>
                                <li class="event poppins-500" data-date="Mei 2020">
                                    <h3>Menjalin kerjasama dengan 5 perusahaan</h3>
                                </li>
                                <li class="event poppins-500" data-date="Juni 2020">
                                    <h3>Mencapai +15.000 pengguna</h3>
                                </li>
                                <li class="event poppins-500" data-date="Agustus 2020">
                                    <h3>Kolaborasi Dengan +10 Universitas</h3>
                                </li>
                                <li class="event poppins-500" data-date="September 2020">
                                    <h3>Mencapai +30.000 Pengguna</h3>
                                </li>
                                <li class="event poppins-500" data-date="Oktober 2020">
                                    <h3>Mencapai +40.000 Pengguna</h3>
                                </li>
                                <li class="event poppins-500" data-date="November 2020">
                                    <h3>Kolaborasi Dengan +50 Universitas</h3>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <h5 class="poppins-400 letter-spacing text-hitam-custom" style="text-align: center;">
        Sebagian besar Pengguna, terhubung ke TAMPIL<br>melalui Web <a href="https://tampil.id" target="_blank" style="text-decoration: none;">https://tampil.id</a>
    </h5>

</section>
    <br><br>
    <!-- VIDEO / SANDBOX-->
    <div class="container">
        <br /><br />
        <div class="row my-5">
            <div class="col text-center text-hitam-custom">
                <h2 class="poppins-600 text-shadow">Cara Penggunaan TAMPIL</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <iframe width="560" height="315" class="w-100 rounded-pill-2 box-shadow video" src="https://www.youtube.com/embed/P00hg6sfXa0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <p class="poppins-400 text-size-3 mt-5 text-muted text-shadow text-justify" style="line-height: 1.8;">
                    Anda dapat menggunakan layanan TAMPIL untuk mengikuti berbagai event menarik seputar Artificial Intelligence dan Teknologi Informasi baik melalui Android, iOS maupun web https://tampil.id.
                    <br><br>Simak cara penggunaan TAMPIL pada video disamping
                </p>
            </div>
        </div>
    </div>
    <!-- /VIDEO / SANDBOX-->
    <br><br> <br><br> <br><br> <br><br>
    <!-- FITUR -->
    <section class="bg-light pb-5">
        <div class="container pl-1">
            <br><br>
            <div class="row">
                <!-- IMAGE -->
                <div class="col-lg-5 d-none d-lg-block d-xl-block mt-5">
                    <img style="width: 250px" class="mx-auto d-block img-fluid" src="<?= base_url() ?>assets/img/hero/herotampil-fix.png">
                </div>
                <!-- /IMAGE -->

                <!-- TEXT -->
                <div class="col-lg-7 pt-2" id="Tampil">
                    <h2 class="poppins-600 text-hitam-custom text-shadow-2">Event Community and Webinar Platform</h2>
                    <div class="mt-4 poppins-400 letter-spacing text-size-3 text-muted text-shadow-2 text-justify" style="line-height:1.7; opacity: 0.7;">
                        Dengan lebih dari 50.000 member aktif yang tersebar dari berbagai komunitas di Indonesia, TAMPIL secara rutin mengadakan event dan webinar setiap hari-nya. Didukung oleh berbagai Asosiasi, Universitas dan Komunitas yang aktif berkolaborasi menyelenggarakan webinar, sebanyak lebih dari 600 webinar telah dilaksanakan melalui platform TAMPIL.
                        <br>
                        Sudah siapkah berkolaborasi dengan TAMPIL untuk mengadakan webinar dan Online Event Community? Hubungi Kontak TAMPIL untuk informasi lebih lanjut
                    </div><br>
                    <a href="https://api.whatsapp.com/send?phone=+6282116654087&" target="_blank" class="btn btn-hover-whatsapp poppins-600"><i class="fab fa-whatsapp fa-lg mr-1"></i> Hubungi Kami</a>
                </div>
                <!--/TEXT-->


            </div>
        </div>
    </section>
    <br><br>
    <section class="my-auto">
        <!--Title-->
        <div class="container pl-5">
            <div class="row">
                <!-- IMAGE -->
                <div class="col-lg-8 ">

                    <br /><br /><br /><br />
                    <h2 class="poppins-600 text-hitam-custom text-shadow-2">Cari Event Menarik</h2>
                    <div class="mt-4 poppins-400 letter-spacing text-size-3 text-muted text-shadow-2 text-justify" style="line-height:1.7; opacity:0.7">
                        Cari event dan webinar sesuai minat kamu melalui aplikasi Android, iOS atau Web (<a target="_blank" style="text-decoration:none" href="https://tampil.id">https://tampil.id</a>) pada bidang Artificial Intelligence (AI), Teknologi Informasi (IT), dan bidang terkait lainnya. Event dan Webinar tersedia GRATIS dan dapatkan e-certificate bagi event tertentu. Melalui event juga kamu akan bertemu dengan pakar - pakar terkait bidang IT, AI dan bidang lainnya.
                    </div>

                </div>
                <!-- /IMAGE -->

                <!-- TEXT -->
                <div class="col-lg-4 pt-5  pt-5 d-none d-lg-block d-xl-block" id="Customer">
                    <br /><br />
                    <img style="width: 250px" class="d-block img-fluid" src="<?= base_url() ?>assets/img/herotampil1.png">
                </div>
                <!--/TEXT-->


            </div>
        </div>
    </section>

    <!-- /FITUR -->

    <br><br><br><br>

    <!-- SUBFITUR -->
    <?php $this->load->view("subfitur-tampil"); ?>
    <!-- /SUBFITUR -->

    <!-- SUBFITUR MOBILE -->
    <section class="mb-4 d-xs-block d-sm-block d-md-block d-lg-none d-xl-none bg-light pb-5">
        <div class="container">
            <br /><br /><br />
            <div class="card card-custom h-100 mx-3 mt-2">
                <div class="card-body">
                    <img src="https://bisa.ai/assets/img/tampil/fiturtampil2.png" style='width:190px; height:150px;' class='card-img-top mx-auto d-block'>
                    <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Bagi Pencari Event<br></h5>
                    <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">
                        TAMPIL menghadirkan berbagai jenis kegiatan daring setiap minggunya yang berasal dari kolaborasi bersama partner, instansi, hingga komunitas.<br><br><br>
                    </p><br><br>
                        <!--<div class="text-right poppins-400"><button type="button" id="cari" data-toggle="modal" class="btn text-white bg-hitam-custom" data-target="#pencari"><b>Selengkapnya </b><i class="fas fa-arrow-right"></i></button></div>-->

                </div>
            </div>

            <div class="card card-custom h-100 mx-3 mt-2">
                <div class="card-body">
                    <img src="<?= base_url() ?>assets/img/tampil/fiturtampil1.png" style='width:190px; height:150px;' class='card-img-top mx-auto d-block'>
                    <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Bagi Penyelenggara Event</h5>
                    <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">
                        Kolaborasi dan ramaikan kegiatan kamu bersama BISA AI dan TAMPIL. TAMPIL sebagai penyelenggara kegiatan komunitas dan webinar siap membantu segala kebutuhan kamu.
                    </p><br>
                        <!--<div class="text-right poppins-400"><button type="button" id="selenggara" data-toggle="modal" class="btn text-white bg-hitam-custom" data-target="#penyelenggara"><b>Selengkapnya </b><i class="fas fa-arrow-right"></i></button></div>-->
                </div>
            </div>

            
        </div>
    </section>
    <!-- /SUBFITUR MOBILE -->
    <?php $this->load->view("faq-tampil"); ?>
    <?php
    $this->load->view('Templates/Footer');
    $this->load->view('Templates/Link-js'); ?>
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