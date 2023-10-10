<?php
$this->load->view('Templates/Link-css');
$this->load->view('Templates/Navbar'); ?>

        <section class="banner banner-style-1 bg-light" >
            <div class="container">
                <div class="row align-items-end align-items-xl-start">
                    <div class="col-lg-7 col-sm-12 mt--100">
                        <div class="banner-content sal-animate" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                            <h3 class="title" id="judul1" >Bangun Portofolio Desain dan UI/UX di BISA Design Academy</h3>
                            <span class="color-white">Belajar Seru di BISA Design Academy untuk membangun portofolio pada bidang Desain, UI/UX dan Game</span>
                            <br>
                            <br>
                            <a href="<?=base_url()?>course" class="axil-btn btn-fill-primary btn-large">Lihat Kelas</a>
                            <br>
                            <a href="<?=base_url()?>portofolio" class="axil-btn btn-fill-primary btn-large"> Lihat Portofolio </a>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block d-xl-block">
                        <div class="banner-thumbnail p-2">
                            <div class="large-thumb sal-animate text-center" data-sal="slide-left" data-sal-duration="800" data-sal-delay="800">
                                <img src="<?= base_url('assets/img/2022/embak1.png') ?>" style="width:400px" alt="Girl">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <ul class="list-unstyled shape-group-21">
                <li class="shape shape-1 sal-animate" data-sal="slide-down" data-sal-duration="500" data-sal-delay="100">
                    <img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-39.png" alt="Bubble">
                </li>
                <li class="shape shape-2 sal-animate" data-sal="zoom-in" data-sal-duration="800" data-sal-delay="500">
                    <img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-38.png" alt="Bubble">
                </li>
                <li class="shape shape-3 sal-animate" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                    <img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-14.png" alt="Bubble">
                </li>
                <li class="shape shape-4 sal-animate" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                    <img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-14.png" alt="Bubble">
                </li>
                <li class="shape shape-5 sal-animate" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                    <img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-14.png" alt="Bubble">
                </li>
                <li class="shape shape-6 sal-animate" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                    <img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-40.png" alt="Bubble">
                </li>
                <li class="shape shape-7 sal-animate" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                    <img src="<?= base_url('assets/newtemplates/') ?>media/others/bubble-41.png" alt="Bubble">
                </li>
            </ul> -->
        </section>

        <?php $this->load->view('fitur-clients'); ?>

        <section class="section section-padding-2 bg-light">
            <div class="container">
                <div class="section-heading heading-light-left">
                    <span class="subtitle">What We Can Do For You</span>
                    <h2 class="title title-sub">Topik Pelatihan Bisa Desain Academy</h2>
                    <p class="color-white">Platform Edutech Pembelajaran Desain yang membantu kamu belajar Desain, UI/UX, Pengembangan Produk, Digital Marketing dan sebagainya seperti</p>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="services-grid">
                            <div class="thumbnail">
                                <img src="<?= base_url('assets/img/2022/grafis.png') ?>" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="#">Desain Grafis</a></h5>
                                <p>Belajar membuat desain grafis dengan tools seperti Ilustrator dan Photoshop</p>
                                <a href="#" class="more-btn">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="services-grid">
                            <div class="thumbnail">
                                <img src="<?= base_url('assets/img/2022/film.png') ?>" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="#">Desain Video</a></h5>
                                <p>Belajar membuat desain video dengan tools seperti Premier, After Effect dan tools lainnya</p>
                                <a href="#" class="more-btn">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="services-grid">
                            <div class="thumbnail">
                                <img src="<?= base_url('assets/img/2022/idea.png') ?>" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="#">Desain Produk</a></h5>
                                <p>Belajar membuat desain produk untuk case study F&B, IT, Fashion dan sebagainya</p>
                                <a href="#" class="more-btn">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="services-grid">
                            <div class="thumbnail">
                                <img src="<?= base_url('assets/img/2022/ux.png') ?>" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="#">UI/UX</a></h5>
                                <p>Belajar membuat UI dan UX untuk Journey pengguna dan Aplikasi Digital</p>
                                <a href="#" class="more-btn">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="services-grid">
                            <div class="thumbnail">
                                <img src="<?= base_url('assets/img/2022/applications.png') ?>" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="#">Desain Promosi</a></h5>
                                <p>Belajar membuat desain promosi melalui digital marketing untuk produk anda</p>
                                <a href="#" class="more-btn">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="services-grid">
                            <div class="thumbnail">
                                <img src="<?= base_url('assets/img/2022/shuttle.png') ?>" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="#">Desain Startup</a></h5>
                                <p>Belajar membuat desain startup digital</p>
                                <a href="#" class="more-btn">Lihat Selengkapnya</a>
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
 

        <!-- TESTIMONI -->
        <section class="mb-4 d-lg-block d-xl-block pb-5 section-padding-2 ">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <h2 class='poppins-600 text-hitam-custom text-center'>Portofolio Desain</h2>
                    </div>
                </div>
                <div class="carousel-wrapper">
                    <div class="testimoni owl-carousel owl-theme">
                        <div class="item py-5">
                            <div class="card card-custom h-100 mx-3">
                                <div class="card-body">
                                    <img src="<?= base_url('assets/img/2022/sc_pusca.png') ?>"  >
                                    <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Puska Ilkom Connect UPN Veteran Jakarta</h5>
                                </div>
                            </div>
                        </div>

                        <div class="item py-5">
                            <div class="card card-custom h-100 mx-3">
                                <div class="card-body">
                                    <img src="<?= base_url('assets/img/2022/sc_wajahid.png') ?>"  >
                                    <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Wajah ID</h5>
                                </div>
                            </div>
                        </div>

                        <div class="item py-5">
                            <div class="card card-custom h-100 mx-3">
                                <div class="card-body">
                                    <img src="<?= base_url('assets/img/2022/sc_kelaskoding.png') ?>"  >
                                    <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Kelas Koding</h5>
                                </div>
                            </div>
                        </div>

                        <div class="item py-5">
                            <div class="card card-custom h-100 mx-3">
                                <div class="card-body">
                                    <img src="<?= base_url('assets/img/2022/sc_lapanganid.png') ?>"  >
                                    <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Lapangan ID</h5>
                                </div>
                            </div>
                        </div>

                        <div class="item py-5">
                            <div class="card card-custom h-100 mx-3">
                                <div class="card-body">
                                    <img src="<?= base_url('assets/img/2022/sc_ai.png') ?>"  >
                                    <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>AI Creation</h5>
                                </div>
                            </div>
                        </div>

                        <div class="item py-5">
                            <div class="card card-custom h-100 mx-3">
                                <div class="card-body">
                                    <img src="<?= base_url('assets/img/2022/sc_akad.png') ?>"  >
                                    <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Siakad Bisa AI</h5>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </section>
        <!-- /TESTIMONI -->

                
        <!-- STATISTIK -->

        <section class="bg-light">
            <div class="container">
                <br><br>
                <h2 class="poppins-600 text-center title-sub">Statistik</h2>
                <div class="row mt-4 justify-content-center">
                    <div class="col-sm-3 flex-md-column mb-4">
                        <div class="card shadow" style="border-radius: 15px">
                            <p class="text-dark text-center poppins-600 h3 mt-3">+10 K</p>
                            <p class="text-dark text-center poppins-600">Pengguna Aktif <br> <br>  </p>
                        </div>
                    </div>
                    <div class="col-sm-3 flex-md-column mb-4">
                        <div class="card shadow" style="border-radius: 15px">
                            <p class="text-dark text-center poppins-600 h3 mt-3">+15</p>
                            <p class="text-dark text-center poppins-600">Course Academy </p>
                        </div>
                    </div>
                    <div class="col-sm-3 flex-md-column mb-4">
                        <div class="card shadow" style="border-radius: 15px">
                            <p class="text-dark text-center poppins-600 h3 mt-3">+15</p>
                            <p class="text-dark text-center poppins-600">Profesional <br> Sertifikasi</p>
                        </div>
                    </div>
                    <div class="col-sm-3 flex-md-column mb-4">
                        <div class="card shadow" style="border-radius: 15px">
                            <p class="text-dark text-center poppins-600 h3 mt-3">+5</p>
                            <p class="text-dark text-center poppins-600">Master Class on Job <br> Training / bulan</p>
                        </div>
                    </div>
                    
                </div>
                <br>
            </div><br>
        </section>

        <!-- List  -->
        
        <section class="section-padding-2 p-7">
            <div class="container">
                <h5 class="fs-1 fw-bold text-orange">Mengapa BISA Design Academy?</h5>
                <h5 class="fs-5 fw-bold text-hitam-custom">Platform Pembelajaran Desain dan UI/UX dengan kurikulum standard industri</h5>
                <div class="row mt-5">
                <div class="col-sm-6 col-lg-4">
                    <div class="card shadow platform-container" style="width:100%">
                    <div class="card-body">
                        <img src="<?=base_url()?>assets/images/Pembelajaran_berbasis_skkni.png" style="display:block;" class="p-4 img-circle" >
                        <h4 class="card-title">Pembelajaran berbasis SKKNI</h4>
                        <p class="card-text">Pembelajaran mengacu kepada Standar Kompetensi Kerja Nasional Indonesia (SKKNI) dilengkapi dengan silabus lengkap, quiz setiap silabus dan tugas setiap pertemuan</p>
                    </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card shadow platform-container" style="width:100%">

                    <div class="card-body">
                        <img src="<?=base_url()?>assets/images/Portofolio.png" style="display:block;" class="p-4 img-circle" >
                        <h4 class="card-title">Portfolio Industri</h4>
                        <p class="card-text">Setiap pembelajaran akan terdapat project industri dimana peserta akan mendapatkan portofolio industri untuk setiap pembelajaran</p>
                    </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card shadow platform-container" style="width:100%">

                    <div class="card-body">
                        <img src="<?=base_url()?>assets/images/certificate.png" style="display:block;" class="p-4 img-circle" >
                        <h4 class="card-title">Sertifikat dari Lembaga Kursus Pelatihan</h4>
                        <p class="card-text">Setiap peserta yang lulus pada program pelatihan Bisa Design akan mendapatkan Sertifikat dari Lembaga Kursus Pelatihan</p>
                    </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card shadow platform-container" style="width:100%">

                    <div class="card-body">
                        <img src="<?=base_url()?>assets/images/pembelajaran_bahasa_indonesia.png" style="display:block;" class="p-4 img-circle" >
                        <h4 class="card-title">Pembelajaran Bahasa Indonesia</h4>
                        <p class="card-text">Setiap pembelajaran dalam bahasa Indonesia terdiri atas silabus dan video pembelajaran</p>
                    </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card shadow platform-container" style="width:100%">

                    <div class="card-body">
                        <img src="<?=base_url()?>assets/images/pengajar_industri.png" style="display:block;" class="p-4 img-circle" >
                        <h4 class="card-title">Pengajar bersertifikasi industri</h4>
                        <p class="card-text">Pengajar yang mengajar baik pembelajaran asynchronous maupun synchronous merupakan pengajar yang telah memiliki sertifikasi internasional</p>
                    </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card shadow platform-container" style="width:100%">

                    <div class="card-body">
                        <img src="<?=base_url()?>assets/images/project_consultation.png" style="display:block;" class="p-4 img-circle" >
                        <h4 class="card-title">Konsultasi Proyek</h4>
                        <p class="card-text">Setiap proyek yang dikerjakan akan diberikan kesempatan untuk konsultasi proyek dengan pengajar</p>
                    </div>
                    </div>
                </div>
                </div>    
            </div> 
        </section>
        
        <!-- Download Silabus -->
        <section class="section-padding-2 pt-7 bg-light">
            <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-md-start text-center py-6">
                <h5 class="fs-6 fw-bold text-orange">Download Silabus</h5>
                <h5 class="fs-4 fw-bold title-sub">Unduh Silabus dan Handbook Pelatihan BISA Design Academy</h5>
                <p class="mb-6 color-white">Baru memulai belajar di BISA Design Academy? Unduh Silabus lengkap untuk setiap pembelajaran di BISA Design Academy</p>
                <div class="text-center text-md-start"><a class="axil-btn btn-fill-primary btn-large" href="https://bisa.design/s/download_silabus" role="button" target="_blank"> <i class="fa fa-download" aria-hidden="true"></i> Download </a> </div>
                </div>
                <div class="col-md-6 text-end"><img class="pt-7 pt-md-0 img-fluid" src="<?=base_url()?>assets/images/vector/panduan.png" alt="" /></div>
            </div>
            </div>
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
                                        <h2 class="title">Membuat Aplikasi Web dan Aplikasi Mobile</h2>
                                        <p>Melalui kelas yang tersedia berikut, kamu akan belajar Membuat Aplikasi Web dan Aplikasi Mobile dari sisi Desain Produk, Desain UI/UX dan Desain Aplikasi sehingga Web dan Aplikasi Mobile yang kamu buat menarik dan dapat digunakan.
                                        </p>
                                        <p>
                                            - <strong>Free Class</strong> :  Merancang Aplikasi Web dan Aplikasi Mobile </br>
                                            - <strong>MASTER Class</strong> : *A-Z Membangun Aplikasi Web dan Aplikasi Mobile</br>
                                            - <strong>Master Class on Job Training</strong> : Membangun Aplikasi Web dan Aplikasi Mobile untuk pemula
                                        </p>
                                            
                                        <a href="#" class="axil-btn btn-fill-primary btn-large">Read Case Study</a>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- <div class="slick-slide">
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
                            </div> -->
                            <div class="slick-slide">
                                <div class="case-study-featured">
                                    <div class="section-heading heading-left">
                                        <span class="subtitle">Featured Case Study</span>
                                        <h2 class="title">Membuat Startup Digital</h2>
                                        <p>Berdasarkan pengalaman BISA DESIGN dalam merancang program inkubasi startup AI-Creation (link: https://ai-creation.id), Membuat Startup Digital dapat dilakukan oleh siapapun asal dengan cara yang tepat. Ikuti kelas pelatihan yang berkaitan dengan Membangun Startup Digital sebagai berikut:</p>
                                        <a href="#" class="axil-btn btn-fill-primary btn-large">Read Case Study</a>

                                        <p>
                                            - <strong>Free Class</strong> :  Merancang Startup Digital </br>
                                            - <strong>MASTER Class</strong> : *A-Z Membangun Digital Startup</br>
                                            - <strong>Master Class on Job Training</strong> : Membangun Digital Startup untuk Pemula
                                        </p>
 
                                    </div>
                                    <!-- <div class="case-study-counterup">
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
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 d-none d-lg-block" data-sal="slide-left" data-sal-duration="800">
                        <div class="slick-slider slick-dot-nav featured-thumbnail" data-slick='{"infinite": true,"arrows": false, "dots": false, "fade": true, "slidesToShow": 1, "asNavFor": ".featured-content"}'>
                            <div class="slick-slide">
                                <div class="case-study-featured-thumb">
                                    <img src="<?= base_url('assets/') ?>images/digital-marketing.jpg" alt="travel">
                                </div>
                            </div>
                            <!-- <div class="slick-slide">
                                <div class="case-study-featured-thumb">
                                    <img src="<?= base_url('assets/newtemplates/') ?>media/others/case-study-5.png" alt="travel">
                                </div>
                            </div> -->
                            <div class="slick-slide">
                                <div class="case-study-featured-thumb">
                                    <img src="<?= base_url('assets/') ?>images/rocket.jpg" alt="travel">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         
           
        <?php
$this->load->view('Templates/Footer');
$this->load->view('Templates/Link-js'); ?>


<script>

    var digital = $('.digital'),
        aplikasi = $('.aplikasi'),
        uiux = $('.uiux'),
        priceaplikasi = $('#price-aplikasi'),
        pricedigital = $('#price-digital'),
        priceux = $('#price-ux');
        all = $('#price-all');

    $( priceux ).trigger( "click" );    

    $(priceux).on('click', function() {
        // buttonSlide.prop('checked', false);
        $(this).addClass('active').parent('.nav-item').siblings().children().removeClass('active');
        digital.css('display', 'none');
        aplikasi.css('display', 'none');
        uiux.css('display', 'flex');
    });

    $(pricedigital).on('click', function() {
        // buttonSlide.prop('checked', false);
        $(this).addClass('active').parent('.nav-item').siblings().children().removeClass('active');
        digital.css('display', 'flex');
        aplikasi.css('display', 'none');
        uiux.css('display', 'none');
    });

    $(priceaplikasi).on('click', function() {
        // buttonSlide.prop('checked', false);
        $(this).addClass('active').parent('.nav-item').siblings().children().removeClass('active');
        digital.css('display', 'none');
        aplikasi.css('display', 'flex');
        uiux.css('display', 'none');
    });


    $(all).on('click', function() {
        // buttonSlide.prop('checked', false);
        $(this).addClass('active').parent('.nav-item').siblings().children().removeClass('active');
        digital.css('display', 'flex');
        aplikasi.css('display', 'flex');
        uiux.css('display', 'flex');
    });


</script>