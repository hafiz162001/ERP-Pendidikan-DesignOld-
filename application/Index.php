<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="stylesheet" href="assets/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/OwlCarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/OwlCarousel/slider.css">
    <link href="assets/img/icon/logoo.png" rel="icon">
    <title>BISA AI - AI For Everyone</title>
    <style>
        html, body {
        	max-width: 100%;
        	overflow-x: hidden;
    	}
    	.owl-carousel .owl-nav{
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

  		.owl-carousel .nav-btn{
      		height: 47px;
      		position: absolute;
      		width: 26px;
      		cursor: pointer;
      		top: 100px !important;
  		}

  		.owl-carousel .owl-prev.disabled,
  		.owl-carousel .owl-next.disabled{
    		pointer-events: none;
    		opacity: 0.2;
  		}

  		.owl-carousel .prev-slide{
      		background: url(nav-icon.png) no-repeat scroll 0 0;
      		left: -33px;
  		}
  		.owl-carousel .next-slide{
      		background: url(nav-icon.png) no-repeat scroll -24px 0px;
      		right: -33px;
  		}
  		.owl-carousel .prev-slide:hover{
     		background-position: 0px -53px;
  		}
  		.owl-carousel .next-slide:hover{
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
    </style>
</head>

<body>
   <?php $this->load->view('Templates/Navbar'); ?>

    <!-- BANNER -->
    <section class=" bg-light pb-5">
        <div class="container pl-5">
            <div class="row">
                <!-- TEXT -->
                <div class="col-lg-7 pt-5">
                    <br /><br /><br /><br />
                    <h1 class="nsans-700 text-hitam-custom text-shadow-2">Deliver Artificial Intelligence to everyone through Academy and Webinar</h1>
                    <!-- <div class="mt-4 nsans-400 letter-spacing text-size-3 text-muted text-shadow-2"
                        style="line-height:1.7; opacity: 0.7;">
                        BISA AI merupakan platform Artificial Intelligence yang menyediakan Software As A Service untuk berbagai layanan seperti :<br>
                        - Pengenalan Gambar dan Text pada Dokumen (Image Recognition) <br>
                        - Analisis Konten Video (Video analytics)<br>
                        - Percakapan Bahasa Manusia dan Pengolahan Teks (Natural Language)<br>
                        - Analisa Data Perusahaan<br>
                        - Lab Service, Penyewaan Virtual Machine, CPU, GPU, dan resource - resource lainnya<br>

                        Selain layanan - layanan di atas kami juga melakukan :<br>
                        - Workshop<br>
                        - Research<br>
                        - Bootcamp<br>
                    </div> -->
                    <!-- button -->
                    <div class="mt-4">
                        <!-- <button
                            class="box-shadow text-hitam-custom poppins-400 text-size-1 btn rounded-pill bg-light border-oren-custom px-4 py-2">Get
                            Daftar</button> -->
                        <!-- <button
                            class="box-shadow ml-2 btn rounded-pill text-light text-size-2 poppins-500 bg-oren-custom px-4 py-2"><i
                                class="fab fa-google-play "></i> Download
                            App</button> -->

                    </div>
                    <!-- /button -->
                </div>
                <!--/TEXT-->

                <!-- IMAGE -->
                <div class="col-lg-5  pt-5 d-none d-lg-block d-xl-block">
                    <br /><br />
                    <img class="mx-auto d-block" style="z-index:1" src="assets/img/banner.png" width="210" height="400">

                </div>
                <!-- /IMAGE -->
            </div>
            <div class="row mt-5">
                <div class="col-lg-12 text-center">
                    <a class='btn bg-hitam-custom box-shadow rounded-circle pt-2 text-light bounce' href='#Produk'><i
                            class='fas fa-chevron-down'></i></a>
                </div>
            </div>
        </div>`
    </section>
    <!-- /BANNER -->

    <!-- PRODUK -->
    <!-- TAMPIL -->
    <section class="my-auto">
    <br><br><br><br>
    <!--Title-->
        <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12" id='Produk'>
                <h2 class='text-center text-shadow poppins-600 text-hitam-custom'>Produk Kami
                </h2>
            </div>
        </div>
        <!--/Title-->
        <div class="container pl-5">
            <div class="row">
                <!-- TEXT -->
                <div class="col-lg-7 pt-2" id="Tampil">
                    <br /><br /><br /><br />
                        <h1 class="nsans-700 text-hitam-custom text-shadow-2">BISA Tampil</h1>
                    <div class="mt-4 nsans-400 letter-spacing text-size-3 text-muted text-shadow-2"
                        style="line-height:1.7; opacity: 0.7;">
                        Bisa Tampil merupakan layanan video conference berbasis aplikasi dan web yang dikembangkan untuk memenuhi kebutuhan layanan video conference yang aman dan mudah digunakan.
                    </div>
                    <!-- button -->
                    <div class="mt-4">
                    <a href="tampil-landing.php" target="_blank">
                        <button
                            class="box-shadow ml-2 btn rounded-pill text-light text-size-2 poppins-500 bg-hitam-custom px-4 py-2">Lihat Selengkapnya &nbsp; <i class="fas fa-chevron-right"></i></button>
                    </a>
                    </div>
                    <!-- /button -->
                </div>
                <!--/TEXT-->

                <!-- IMAGE -->
                <div class="col-lg-5  pt-2 d-none d-lg-block d-xl-block">
                    <br /><br />
                    <img style="width: 250px" class="mx-auto d-block img-fluid" src="assets/img/tampil.png" title="BISA Tampil">

                </div>
                <!-- /IMAGE -->
            </div>
        </div>
    </section>
    <!-- /TAMPIL -->


    <!-- ACADEMY -->
    <section class="pb-4">
    <!--Title-->
        <div class="container pl-5">
            <div class="row">
                <!-- TEXT -->
                <div class="col-lg-7 pt-2" id="Tampil">
                    <br /><br /><br /><br />
                        <h1 class="nsans-700 text-hitam-custom text-shadow-2">BISA AI Academy</h1>
                    <div class="mt-4 nsans-400 letter-spacing text-size-3 text-muted text-shadow-2"
                        style="line-height:1.7; opacity: 0.7;">
                        BISA AI Academy merupakan platform pembelajaran daring yang menghadirkan para pengajar ahli yang akan membantumu belajar, mulai dari awal hingga memiliki keahlian yang mumpuni untuk berkarir.
                    </div>
                    <!-- button -->
                    <div class="mt-4">
                    <a href="academy-landing.php" target="_blank">
                        <button
                            class="box-shadow ml-2 btn rounded-pill text-light text-size-2 poppins-500 bg-hitam-custom px-4 py-2">Lihat Selengkapnya &nbsp; <i class="fas fa-chevron-right"></i></button>
                    </a>
                    </div>
                    <!-- /button -->
                </div>
                <!--/TEXT-->

                <!-- IMAGE -->
                <div class="col-lg-5  pt-5 d-none d-lg-block d-xl-block">
                    <br /><br />
                    <img style="width: 250px" class="mx-auto d-block img-fluid" src="assets/img/academy.png" title="BISA AI Academy">

                </div>
                <!-- /IMAGE -->
            </div>
        </div>
    </section>
    <!-- /ACADEMY -->

    <section class="my-auto">
    <!--Title-->
        <div class="container pl-5">
            <div class="row">
                <!-- TEXT -->
                <div class="col-lg-7 pt-2" id="Tampil">
                    <br /><br /><br /><br />
                        <h1 class="nsans-700 text-hitam-custom text-shadow-2">TuPAY</h1>
                    <div class="mt-4 nsans-400 letter-spacing text-size-3 text-muted text-shadow-2"
                        style="line-height:1.7; opacity: 0.7;">
                        TuPAY adalah penyedia layanan Point of Sale (POS) untuk para pebisnis, enterpreneur dan khususnya pelaku UMKM. Dengan tanpa adanya pemungutan biaya, proses penjualan, inventaris dan manajemen lainnya dapat dilakukan dengan mudah dan praktis!
                    </div>
                    <!-- button -->
                    <div class="mt-4">
                    <a href="tupay-landing.php" target="_blank">
                        <button
                            class="box-shadow ml-2 btn rounded-pill text-light text-size-2 poppins-500 bg-hitam-custom px-4 py-2">Lihat Selengkapnya &nbsp; <i class="fas fa-chevron-right"></i></button>
                    </a>
                    </div>
                    <!-- /button -->
                </div>
                <!--/TEXT-->

                <!-- IMAGE -->
                <div class="col-lg-5  pt-5 d-none d-lg-block d-xl-block">
                    <br /><br />
                    <img style="width: 250px" class="mx-auto d-block img-fluid" src="assets/img/tupay-logo.png" title="TuPAY">
                </div>
                <!-- /IMAGE -->
            </div>
        </div>
    </section>

    <!-- /PRODUK -->

    <!-- CLIENT -->
    <section class="text-center bg-light my-5 pb-3 pt-2">
    	<br><br><br><br>
            <div class="row">
                <div class="col-lg-12 pt">
                    <h2 class='poppins-600 text-hitam-custom text-center'>Client</h2>
                </div>
            </div>
            <br><br>
                <!-- LOGO -->
        <div class="container">
            <div class="d-flex justify-content-center pb-4">
                <img class="filter-grayscale" src="assets/img/client/ccit.png" width="100" title="CCIT FTUI">
                <img class="ml-5 filter-grayscale" src="assets/img/client/oudpro.png" width="90" height="80" title="OUDPRO">
                <img class="ml-5 filter-grayscale" src="assets/img/client/aptikom.png" width="90" height="80" title="Aptikom">
                <img class="ml-5 filter-grayscale" src="assets/img/client/hawagym.png" width="90" height="80" title="Hawa Gym">
                <img class="ml-5 filter-grayscale" src="assets/img/client/ID5G.png" width="90" height="80" title="ID5G Ecosystem">
                <img class="ml-5 filter-grayscale" src="assets/img/client/telkom-purwokerto.png" width="90" height="80" title="Institut Teknologi Telkom Purwokerto">
                <img class="ml-5 filter-grayscale" src="assets/img/client/sekolahanid.png" width="90" height="80" title="Sekolahan.ID">
            </div>
            <div class="d-flex justify-content-center pb-4">
                <img class="filter-grayscale" src="assets/img/client/tellhealth.png" width="120" height="45" title="Tellhealth AI">
                <img class="ml-5 filter-grayscale" src="assets/img/client/dispusipda.png" width="160" height="60" title="Dispusipda Jawa Barat">
                <img class="ml-5 filter-grayscale" src="assets/img/client/tupaybg.png" width="100" height="60" title="TuPAY">
                <img class="ml-5 filter-grayscale" src="assets/img/client/konsuldoklogo.png" width="100" height="80" title="Konsuldok">
                <img class="ml-5 filter-grayscale" src="assets/img/client/Liburania.png" width="90" height="80" title="Liburania">
                <img class="ml-5 filter-grayscale" src="assets/img/client/stemsel.png" width="90" height="80" title="Stemsel Foundation Australia">
                <img class="ml-5 filter-grayscale" src="assets/img/client/cbd.png" width="90" height="80" title="CBD Indonesia">
            </div>
        </div>
    </section>
    <!-- /LOGO -->
	<!-- <div class="cover-wrapper">
		<div id="client" class="owl-carousel text-center" style="filter: grayscale(100%);">
	    	<div class="item">
	    		<div class="client-inners">
		      		<img src="assets/img/ccit.png" alt="CCIT FTUI" title="CCIT FTUI" />
		    	</div>
	    	</div>
	    	<div class="item">
	    		<div class="client-inners">
		      		<img src="https://gate.bisaai.id/elearning/client/media/2020-07-10_195247_foto_client.png" alt="Hawa Gym" title="Hawa Gym" />
		    	</div>
	    	</div>
	    	<div class="item">
	    		<div class="client-inners">
		      		<img src="assets/img/tupaybg.png" alt="TuPAY" title="TuPAY" />
		    	</div>
	    	</div>
	    	<div class="item">
	    		<div class="client-inners">
		      		<img src="https://gate.bisaai.id/bisa_ai_vcon/client/media/2020-05-19_143429_client.png" alt="Dispusipda Jawa Barat"/ title="Dispusipda Jawa Barat">
		    	</div>
	    	</div>
	    	<div class="item">
	    		<div class="client-inners">
		      		<img src="assets/img/aptikom.png" alt="Aptikom" title="Aptikom" title="Aptikom" />
		    	</div>
	    	</div>
	    	<div class="item">
	    		<div class="client-inners">
		      		<img src="https://gate.bisaai.id/bisa_ai_vcon/client/media/2020-05-19_143925_client.png" alt="Tellhealth"/ title="Tellhealth AI">
		    	</div>
	    	</div>
	    	<div class="item">
	    		<div class="client-inners">
		      		<img src="assets/img/oudpro.png" alt="OUDPRO" title="OUDPRO">
		    	</div>
	    	</div>
		</div>
	</div> -->
    <!-- </section> -->
    <!-- /CLIENT -->


    <!-- VIDEO / SANDBOX-->
    <!-- <div class="container">
        <br /><br />
        <div class="row my-5">
            <div class="col text-center text-hitam-custom">
                <h2 class="poppins-600 text-shadow">Video</h2>
            </div>
        </div>
        <div class="row">
            <div class="col pr-5">
            <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/IQOFRXMoANw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col pl-4">
                <p class="poppins-400 text-size-3 mt-5 text-muted text-shadow text-justify" style="line-height: 1.8;">
                    Dengan wajah baru kini TuPAY hadir kembali membawakan berbagai fitur-fitur menarik.<br><br>
					Masih kebingungan mengenai apa itu TuPAY dan apa bedanya dari yang sebelumnya? Coba tonton video singkat di samping mengenai TuPAY dan fitur-fiturnya!
				</p>
            </div>
        </div>
    </div> -->
    <!-- /VIDEO / SANDBOX-->


    <!-- TESTIMONI -->
    <section class="mb-4 d-none d-lg-block d-xl-block pb-5">
        <div class="container">
            <br /><br /><br />
            <div class="row mt-5">
                <div class="col-lg-12">
                    <h2 class='poppins-600 text-hitam-custom text-center'>Testimonial</h2>
                </div>
            </div>
            <div class="testimoni owl-carousel owl-theme">
                <div class="item py-5">
                    <div class="card card-custom h-100 mx-3">
                        <div class="card-body">
                            <img src="https://gate.bisaai.id/elearning/general_graduate/media/2020-07-06_201552_foto_general_graduate.png" style='width:150px; height:150px; object-fit:cover;'
                                class='rounded-circle box-shadow mx-auto d-block'>
                            <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Dewangga Ardian Pratama<br><p class="text-muted text-size-1">(Mahasiswa S2 ITB)</p></h5>
                            <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">
                                <q class='font-italic'>Pemateri kompeten di bidangnya dan materi mudah dipahami, studi kasus yang diangkat sangat relevan dengan isu saat ini. Dulu saya selalu mengikuti workshop-workshop dari BISA AI, sekarang saya menjabat sebagai Manajer product di Bisa AI</q><br><br><br>
                            </p>

                        </div>
                    </div>
                </div>
                <div class=" item py-5">
                    <div class="card card-custom h-100 mx-3">
                        <div class="card-body">
                            <img src="https://gate.bisaai.id/elearning/general_graduate/media/2020-07-06_201920_foto_general_graduate.png" style='width:150px; height:150px; object-fit:cover;'
                                class='rounded-circle box-shadow mx-auto d-block'>
                            <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Armand Paudu</h5>
                            <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">
                                <q class='font-italic'>Untuk workshop yang tergolong singkat, materinya sudah cukup baik, ditambah pemateri yang menguasai topik dan mampu menjelaskan dengan bahasa yang mudah dipahami kepada peserta yang masih awam. Biayanya pun terjangkau. Maju terus BISA AI, ditunggu workshop selanjutnya!</q><br> <br/>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item py-5">
                    <div class="card card-custom h-100 mx-3">
                        <div class="card-body">
                            <img src="https://gate.bisaai.id/elearning/general_graduate/media/2020-07-06_200539_foto_general_graduate.png" style='width:150px; height:150px; object-fit:cover;'
                                class='rounded-circle box-shadow mx-auto d-block'>
                            <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Fata Hasan Ihromy</h5>
                            <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">
                                <q class='font-italic'>Materinya sangat komprehensif dan benar-benar fullstack. Belajar dari dasar Python, Backend, Frontend, pembuatan model Machine learning hingga mengintegrasikan model Machine learning ke dalam apps. Recommended banget ikut workshopnya buat yang ingin belajar cara pembuatan teknologi-teknologi berbasis AI.</q><br/>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /TESTIMONI -->


    <!-- TESTIMONI MOBILE-->
    <section class="mb-4 d-xs-block d-sm-block d-md-block d-lg-none d-xl-none pb-5">
        <div class="container">
            <br /><br /><br />
            <div class="row mt-5 ">
                <div class="col-lg-12">
                    <h2 class='poppins-600 text-hitam-custom text-center'>Testimonial</h2>
                </div>
            </div>
                    <div class="card card-custom h-100 mx-3 mt-2">
                        <div class="card-body">
                            <img src="https://gate.bisaai.id/elearning/general_graduate/media/2020-07-06_201552_foto_general_graduate.png" style='width:150px; height:150px; object-fit:cover;'
                                class='rounded-circle box-shadow mx-auto d-block'>
                            <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Dewangga Ardian Pratama<br><p class="text-muted text-size-1">(Mahasiswa S2 ITB)</p></h5>
                            <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">
                                <q class='font-italic'>Pemateri kompeten di bidangnya dan materi mudah dipahami, studi kasus yang diangkat sangat relevan dengan isu saat ini. Dulu saya selalu mengikuti workshop-workshop dari BISA AI, sekarang saya menjabat sebagai Manajer product di Bisa AI</q>
                            </p>

                        </div>
                    </div>

                    <div class="card card-custom h-100 mx-3 mt-2">
                        <div class="card-body">
                            <img src="https://gate.bisaai.id/elearning/general_graduate/media/2020-07-06_201920_foto_general_graduate.png" style='width:150px; height:150px; object-fit:cover;'
                                class='rounded-circle box-shadow mx-auto d-block'>
                            <h5 class='text-center mt-3 poppins-500 text-hitam-custom '>Armand Paudu</h5>
                            <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">
                                <q class='font-italic'>Untuk workshop yang tergolong singkat, materinya sudah cukup baik, ditambah pemateri yang menguasai topik dan mampu menjelaskan dengan bahasa yang mudah dipahami kepada peserta yang masih awam. Biayanya pun terjangkau. Maju terus BISA AI, ditunggu workshop selanjutnya!</q>
                            </p>
                        </div>
                    </div>

                    <div class="card card-custom h-100 mx-3 mt-2">
                        <div class="card-body">
                            <img src="https://gate.bisaai.id/elearning/general_graduate/media/2020-07-06_200539_foto_general_graduate.png" style='width:150px; height:150px; object-fit:cover;'
                                class='rounded-circle box-shadow mx-auto d-block'>
                            <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Fata Hasan Ihromy</h5>
                            <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">
                                <q class='font-italic'>Materinya sangat komprehensif dan benar-benar fullstack. Belajar dari dasar Python, Backend, Frontend, pembuatan model Machine learning hingga mengintegrasikan model Machine learning ke dalam apps. Recommended banget ikut workshopnya buat yang ingin belajar cara pembuatan teknologi-teknologi berbasis AI.</q>
                            </p>

                        </div>
                    </div>
                <!-- <div class="item py-5">
                    <div class="card card-custom h-100 mx-3">
                        <div class="card-body">
                            <img src="assets/img/empty.png" style='width:150px; height:150px; object-fit:cover;'
                                class='rounded-circle box-shadow mx-auto d-block'>
                            <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Person 4</h5>
                            <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">

                                <q class='font-italic'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem
                                    rerum officia
                                    corrupti
                                    libero enim! Voluptates soluta rerum unde nobis? Asperiores facilis est delectus
                                    sequi?
                                    Itaque ipsam et voluptas asperiores temporibus,</q>
                            </p>

                        </div>
                    </div>
                </div> -->
            </div>
    </section>
    <!-- /TESTIMONI MOBILE -->


    <!-- FOOTER -->
    <footer class="bg-dark">
        <div class="container">
            <div class="row">

                <!-- PRODUK & KONTAK -->
                <div class="col-2 mb-4 mt-5">
                    <img src="assets/img/logo_putih.png" class=" ml-3 mb-2">
                </div>


                <div class="col-lg-7 mb-4 mt-5">
                    <div class="row">
                        <!-- PRODUK -->
                        <div class="col-lg-4">
                            <ul class="list-unstyled text-light ">
                                <li class="nsans-700 letter-spacing">PRODUK</li>
                                <li>
                                    <hr class='m-0 mt-2 bg-light' />
                                </li>
                                <ul class=" list-unstyled mt-2 poppins-400 text-size-1">
                                    <li><a href="https://tampil.id" style="text-decoration:none; color:white;">BISA Tampil</a></li>
                                    <li><a href="https://expbig.bisaai.id/academy" style="text-decoration:none; color:white;">BISA AI Academy</a></li>
                                </ul>
                            </ul>
                        </div>
                        <!-- /PRODUK -->

                        <!-- KONTAK -->
                        <div class="col-lg-8">
                            <ul class="list-unstyled text-light" id="kontak">
                                <li class="nsans-700 letter-spacing">KONTAK</li>
                                <li>
                                    <hr class='m-0 mt-2 bg-light' />
                                </li>
                                <ul class="mt-2 poppins-300 list-unstyled text-white text-size-2">
                                    <li class="mb-2 poppins-400">
                                        <i class="fas fa-map-marker-alt text-blue-vcon"></i>&nbsp;
                                        Jln. Petogogan I No.41 Jakarta Selatan, Indonesia
                                    </li>
                                    <li class="mb-2 poppins-400">
                                        <i class="fas fa-phone text-blue-vcon"></i>&nbsp;
                                        +62-8211-6654-087
                                    </li>
                                    <li class="mb-2 poppins-400">
                                        <i class="far fa-envelope text-blue-vcon"></i>&nbsp;
                                        info@bisa.ai
                                    </li>
                                </ul>
                            </ul>
                        </div>
                        <!-- /KONTAK -->

                    </div>
                </div>
                <!-- /PRODUK & KONTAK -->

                <!-- UNDUH -->
                <!-- <div class="col-lg-1"></div>
                <div class="col-lg-4 mb-4 mt-5 text-center">
                    <h3 class=" text-white poppins-600">Unduh</h3>
                    <button
                        class="box-shadow mt-2 ml-2 btn rounded-pill text-light text-size-2 poppins-500 bg-oren-custom px-4 py-2"><i
                            class="fab fa-google-play "></i> Download
                        App</button>
                </div> -->
                <!-- /UNDUH -->

                <!-- SOSMED -->
                    <div class="col-lg-3 mt-5">
                    <h3 class="text-center text-white poppins-600">Follow Kami</h3>
                        <div class="text-center">
                        <a target="_blank" class="text-size-5 text-light mr-2"
                            href="https://www.instagram.com/bisa.ai/"><i class="fab fa-instagram"></i></a>
                        <a target="_blank" class="text-size-5 text-light mr-2"
                            href="https://www.linkedin.com/company/bisa-ai/"><i class="fab fa-linkedin"></i></a>
                        <a target="_blank" class="text-size-5 text-light mr-2"
                            href="https://www.youtube.com/channel/UCGOi_aO_pEkDYs8uSJduP6w"><i
                                class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                <!-- /SOSMED -->
            </div>
            

            <!-- COPYRIGHT -->
            <div class="row mt-4">
                <div class="col text-center text-white poppins-400">
                    &copy; 2020 Copyright BISA AI. ALL RIGHTS RESERVED.
                </div>
            </div>
            <!-- /COPYRIGHT -->

        </div>
        <br />
    </footer>
    <!-- /FOOTER -->
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="assets/OwlCarousel/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    setInterval(function () {
        $(".bounce").effect("bounce", {
            times: 1
        }, 1100);
    }, 1100)

    var prevScrollpos = window.pageYOffset;
    window.onscroll = function () {
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

    $('.testimoni').owlCarousel({
        center: true,
        items: 3,
        loop: true,
    })

      $(document).ready(function() {
    	$('#client').owlCarousel({
        loop:true,
        margin:15,
        autoplay:true,
        nav:true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:4
            },
            1000:{
                items:4
            }
        },
        navText: ["<img src='https://cdn4.iconfinder.com/data/icons/feather/24/arrow-left-512.png'/>",
        		  "<img src='https://cdn0.iconfinder.com/data/icons/feather/96/591276-arrow-right-512.png'/>"]
    });

  });
</script>

</html>