
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://www.tupay.co.id/assets/style.css">
    <link rel="stylesheet" href="https://www.tupay.co.id/assets/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="https://www.tupay.co.id/assets/OwlCarousel/owl.theme.default.min.css">
    <title>Tupay - Landing page </title>
</head>

<body><!-- NAVBAR --->
<nav class="navbar fixed-top navbar-expand-lg navbar-light  bg-white py-3">
    <div class="container">
        <a class="navbar-brand" href="https://www.tupay.co.id/">
            <img src="https://www.tupay.co.id/assets/img/logo.png" height="45" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active ml-4">
                    <a href="https://www.tupay.co.id/bussiness"
                        class="nav-link poppins-500 letter-spacing text-dark text-hitam-custom text-size-1">For
                        Business
                        Owner</a>
                </li>
                <li class="nav-item ml-4">
                    <a href="https://www.tupay.co.id/customer"
                        class="nav-link poppins-500 letter-spacing text-dark text-hitam-custom text-size-1">
                        For
                        Customer</a>
                </li>
                <li class="nav-item ml-4">
                    <a href='#Kontak'
                        class="nav-link poppins-500 letter-spacing text-dark text-hitam-custom text-size-1">
                        Kontak</a>
                </li>
                <li class="nav-item ml-4">
                    <a href="https://www.tupay.co.id/berita" target="_blank"
                        class="nav-link poppins-500 letter-spacing text-dark text-hitam-custom text-size-1">
                        Berita</a>
                </li>
                <!-- <li class="nav-item ml-4">
                    <a href="?= base_url('owner/login') ?>" target="_blank"
                        class="nav-link poppins-500 letter-spacing text-dark text-hitam-custom text-size-1">
                        Case study</a>
                </li> -->

                <li class="nav-item dropdown ml-4">
                    <a class="nav-link dropdown-toggle poppins-500 text-size-1 text-dark text-hitam-custom" href="#"
                        id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Case study <i class="text-size-1 fas fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-size-1 nsans-400" href="https://www.tupay.co.id/caffee">Kafe</a>
                        <a class="dropdown-item text-size-1 nsans-400" href="https://www.tupay.co.id/catering">Katering</a>
                    </div>
                </li>


                <!-- <a href="#" class="navbar-brand font-weight-bold d-block d-lg-none">MegaMenu</a>
                <button type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbars"
                    aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbarContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav mx-auto">
                        
                        <li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"
                                class="nav-link dropdown-toggle font-weight-bold text-uppercase">Mega Menu</a>
                            <div aria-labelledby="megamneu" class="dropdown-menu border-0 p-0 m-0">
                                <div class="container">
                                    <div class="row bg-white rounded-0 m-0 shadow-sm">
                                        <div class="col-lg-7 col-xl-8">
                                            <div class="p-4">
                                                <div class="row">
                                                    <div class="col-lg-6 mb-4">
                                                        <h6 class="font-weight-bold text-uppercase">MegaMenu heading
                                                        </h6>
                                                        <ul class="list-unstyled">
                                                            <li class="nav-item"><a href=""
                                                                    class="nav-link text-small pb-0">Unique Features</a>
                                                            </li>
                                                            <li class="nav-item"><a href=""
                                                                    class="nav-link text-small pb-0 ">Image
                                                                    Responsive</a></li>
                                                            <li class="nav-item"><a href=""
                                                                    class="nav-link text-small pb-0 ">Auto Carousel</a>
                                                            </li>
                                                            <li class="nav-item"><a href=""
                                                                    class="nav-link text-small pb-0 ">Newsletter
                                                                    Form</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6 mb-4">
                                                        <h6 class="font-weight-bold text-uppercase">MegaMenu heading
                                                        </h6>
                                                        <ul class="list-unstyled">
                                                            <li class="nav-item"><a href=""
                                                                    class="nav-link text-small pb-0 ">Unique
                                                                    Features</a></li>
                                                            <li class="nav-item"><a href=""
                                                                    class="nav-link text-small pb-0 ">Image
                                                                    Responsive</a></li>
                                                            <li class="nav-item"><a href=""
                                                                    class="nav-link text-small pb-0 ">Auto Carousel</a>
                                                            </li>
                                                            <li class="nav-item"><a href=""
                                                                    class="nav-link text-small pb-0 ">Newsletter
                                                                    Form</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6 mb-4">
                                                        <h6 class="font-weight-bold text-uppercase">MegaMenu heading
                                                        </h6>
                                                        <ul class="list-unstyled">
                                                            <li class="nav-item"><a href=""
                                                                    class="nav-link text-small pb-0 ">Unique
                                                                    Features</a></li>
                                                            <li class="nav-item"><a href=""
                                                                    class="nav-link text-small pb-0 ">Image
                                                                    Responsive</a></li>
                                                            <li class="nav-item"><a href=""
                                                                    class="nav-link text-small pb-0 ">Auto Carousel</a>
                                                            </li>
                                                            <li class="nav-item"><a href=""
                                                                    class="nav-link text-small pb-0 ">Newsletter
                                                                    Form</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6 mb-4">
                                                        <h6 class="font-weight-bold text-uppercase">MegaMenu heading
                                                        </h6>
                                                        <ul class="list-unstyled">
                                                            <li class="nav-item"><a href=""
                                                                    class="nav-link text-small pb-0 ">Unique
                                                                    Features</a></li>
                                                            <li class="nav-item"><a href=""
                                                                    class="nav-link text-small pb-0 ">Image
                                                                    Responsive</a></li>
                                                            <li class="nav-item"><a href=""
                                                                    class="nav-link text-small pb-0 ">Auto Carousel</a>
                                                            </li>
                                                            <li class="nav-item"><a href=""
                                                                    class="nav-link text-small pb-0 ">Newsletter
                                                                    Form</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> -->
            </ul>
            <!-- <ul class="navbar-nav">
                <li class="nav-item ml-4 ">
                    <button
                        class="box-shadow text-oren-custom poppins-500 text-size-1 btn rounded-pill bg-light border-oren-custom px-4">Daftar</button>
                    <button class="btn text-light rounded-pill text-size-1 poppins-500 bg-oren-custom px-4 "><i
                            class="fab fa-google-play "></i> Download
                        App</button>
                </li>
            </ul> -->
        </div>
    </div>
</nav>
<!-- /NAVBAR ---><!-- BANNER -->
<section class="mt-5">


    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid" src="https://www.tupay.co.id/assets/img/caffe/hero.jpg"
                    style="filter:blur(4px) brightness(70%); object-fit:cover; height:550px; width:100%;">
                <div class="carousel-caption  position-absolute d-none d-md-block text-light"
                    style="margin-bottom:180px !important;">
                    <h2 class="nsans-700 letter-spacing">Aplikasi Kasir untuk Kafe</h2>
                    <p class="text-size-5 poppins-400 letter-spacing">Aplikasi Point of Sales simpel sekaligus
                        praktis untuk langkah awal kafe yang sukses</p>
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
                <h3 class="letter-spacing montserrat-600">Aplikasi Point of Sales Kafe</h3>
                <p class="text-muted poppins-400" style="line-height:1.9">
                    Berikan pelanggan anda layanan dan pengalaman berbisnis terbaik melalui aplikasi TuPAY.
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
                <img src="https://www.tupay.co.id/assets/img/caffe/caffe2.jpeg"
                    style="width:475px; height:526px; object-fit:cover; filter:brightness(80%)" class="mx-auto d-block">
            </div>
            <div class="col-lg-6 pl-0">
                <img src="https://www.tupay.co.id/assets/img/caffe/transaksi.jpg"
                    style="width:517px; height:290px; object-fit:cover; filter:brightness(80%)" class="float-left mb-3">
                <h3 class="poppins-600 letter-spacing text-oren-custom">
                    Manajemen dan Transaksi yang Mudah
                </h3>
                <p class="montserrat-400 mt-3 letter-spacing">
                    Hanya dengan menggunakan smartphone, semua urusan jual beli, laporan dan karyawan dapat dengan mudah
                    terlaksana
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
            <img src="https://www.tupay.co.id/assets/img/caffe/bahan-kopi.jpg"
                style="width:475px; height:283px; object-fit:cover; filter:brightness(70%)">
        </div>
        <div class="col-lg-6">
            <h3 class="poppins-600 letter-spacing text-oren-custom">
                Manajemen Inventori Yang Praktis
            </h3>
            <p class="montserrat-400 mt-3 letter-spacing">
                Dengan laporan dan inventori yang sudah diperbarui setiap harinya, manajamen dan analisa inventori dapat
                dilakukan oleh siapa saja. Ini dapat meminimalisir adanya kerugian atau kehilangan bahan baku.

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
                            <img src="https://d9hhrg4mnvzow.cloudfront.net/www.mokapos.com/business_type/coffee_shop/1a3622b8-dashboard-logo.svg"
                                alt="">
                            <h6 class="card-title mt-3 montserrat-600 letter-spacing">Analisa Keuntungan Lengkap</h6>
                            <p class="card-text poppins-400 text-muted">
                                Dari laporan yang sudah tersedia, semua data-data tersebut secara otomatis dapat
                                disortir dan dianalisa secara lengkap
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
                            <img src="https://d9hhrg4mnvzow.cloudfront.net/www.mokapos.com/business_type/coffee_shop/299c9399-ingredient-inv-logo.svg"
                                alt="">
                            <h6 class="card-title mt-3 montserrat-600 letter-spacing">Promo Untuk Semua</h6>
                            <p class="card-text poppins-400 text-muted">
                                Ajak terus para pelanggan untuk berbelanja setiap harinya melalui promo dan hadiah
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
                            <img src="https://d9hhrg4mnvzow.cloudfront.net/www.mokapos.com/business_type/coffee_shop/661b264d-promo-logo.svg"
                                alt="">
                            <h6 class="card-title mt-3 montserrat-600 letter-spacing">Kelola Bahan Baku secara Praktis
                            </h6>
                            <p class="card-text poppins-400 text-muted">
                                Tanpa harus lagi menghitung manual. Kelola dan pantau terus bahan-bahan dari mana saja
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
<section class="mt-5">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid" src="https://www.tupay.co.id/assets/img/caffe/caffe6.jpeg"
                    style="filter:blur(3px) brightness(16%); object-fit:cover; height:780px; width:100%;">
                <div class="carousel-caption  position-absolute d-none d-md-block text-light">
                    <h2 class="poppins-600 letter-spacing">Aplikasi POS yang memberdayakan UMKM lewat aplikasi
                        GRATIS
                    </h2>
                    <img class="mt-5" src="https://www.tupay.co.id/assets/img/testimoni.jpeg"
                        style="width:168px; height:168px; object-fit:cover; border-radius:50%;" alt="">
                    <p class="text-size-5 poppins-400 letter-spacing mt-3">
                        <q>Buat resep kopi dan minuman lain serta monitor
                            ketersediaan semua<br /> bahan mentahnya dengan lebih mudah.</q></p>
                    <p class="text-size-9 mt-5 montserrat-600 ">
                        M Octaviano Pratama
                    </p>

                    <!-- PENGGUNA TUPAY LAINNYA -->
                    <div class="row mt-5">
                        <div class="col">
                            <hr class="bg-light" style="border:0.8px solid #fff" />
                        </div>
                        <div class="col">
                            <p class="text-size-8 montserrat-600 letter-spacing">Pengguna TuPAY Lainnya</p>
                        </div>
                        <div class="col">
                            <hr class="bg-light" style="border:0.8px solid #fff" />
                        </div>
                    </div>
                    <!-- PENGGUNA TUPAY LAINNYA -->

                    <!-- LOGO PENGGUNA -->
                    <div class="text-center">
                        <img src="https://www.tupay.co.id/assets/img/logo-tandus.png" width="168">
                        <img src="https://www.tupay.co.id/assets/img/logo-kava.png" width="168">

                    </div>
                    <!-- LOGO PENGGUNA -->
                </div>
            </div>
        </div>
</section>
<!-- BANNER -->

<!-- MULAI BISNIS -->
<section>
    <div class="container">
        <div class="row mb-5 mt-5">
            <div class="col-lg-12 text-center">
                <h2 class="montserrat-600 letter-spacing">Sukses dan berkembang bersama TuPAY</h2>
                <p class="montserrat-400 mt-3">
                    Memberdayakan bisnis, khususnya UMKM secara gratis dan praktis.</p>

                <a target="_blank" href="https://play.google.com/store/apps/details?id=com.pos.tupayposnew"
                    class="ml-2 btn rounded-pill text-light text-size-2 poppins-500 bg-oren-custom px-4 py-2"><i
                        class="fab fa-google-play "></i> Download
                    App</a>
            </div>
        </div>
    </div>
</section>
<!-- /MULAI BISNIS -->
<!-- FOOTER -->
<footer class="bg-dark" id="Kontak">
    <div class="container">
        <div class="row">

            <!-- PRODUK & KONTAK -->
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
                                <li>Point of Sales</li>
                                <li>Customer</li>
                            </ul>
                        </ul>
                    </div>
                    <!-- /PRODUK -->

                    <!-- KONTAK -->
                    <div class="col-lg-8">
                        <ul class="list-unstyled text-light ">
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
                                    +62 838 8946 874
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
            <div class="col-lg-1"></div>
            <div class="col-lg-4 mb-4 mt-5 text-center">
                <h3 class=" text-white poppins-600">Unduh kami </h3>
                <a target="_blank" href="https://play.google.com/store/apps/details?id=com.pos.tupayposnew"
                    class="box-shadow mt-2 ml-2 btn rounded-pill text-light text-size-2 poppins-500 bg-oren-custom px-4 py-2"><i
                        class="fab fa-google-play "></i> Download
                    App</a>
            </div>
            <!-- /UNDUH -->
        </div>
        <div class="row">
            <div class="col-lg-12 mt-2">
                <h3 class="text-center text-white poppins-600">Follow kami</h3>
                <div class="text-center">
                    <a target="_blank" class="text-size-5 text-light mr-2" href="https://www.instagram.com/bisa.ai/"><i
                            class="fab fa-instagram"></i></a>
                    <a target="_blank" class="text-size-5 text-light mr-2"
                        href="https://www.linkedin.com/company/bisa-ai/"><i class="fab fa-linkedin"></i></a>
                    <a target="_blank" class="text-size-5 text-light mr-2"
                        href="https://www.youtube.com/channel/UCGOi_aO_pEkDYs8uSJduP6w"><i
                            class="fab fa-youtube"></i></a>
                </div>
            </div>
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
<!-- /FOOTER --></body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="assets/OwlCarousel/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
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
</script>