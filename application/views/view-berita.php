<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/styles.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/OwlCarousel/owl.carousel.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/OwlCarousel/owl.theme.default.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/aos/aos.css') ?>">
    <link href="<?= base_url('assets/img/icon/bisaai.png') ?>" rel="icon">
    <title>Berita - <?= $ubah['judul'] ?></title>
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

<section class="pt-5">
    <div class="container">
        <div class="row mb-5 mt-5">
            <div class="col-lg-12">
                <div class="card box-shadow">
                    <h3 class="card-title poppins-500 text-center mt-4 mb-3"><?= $ubah['judul'] ?></h3>
                    <?php if (empty($ubah['foto'])) {
                                $foto = 'assets/img/bisaai.png';
                    }else{
                                $foto = 'https://gate.bisaai.id/bisa_ai_vcon/berita/media/'.$ubah['foto'];
                    } ?>
                    <img class="card-img-top mx-auto d-block img-fluid" style="height:470px; width:500px; border-radius:15px" src="<?= $foto ?>">
                    <!--<p><?= $ubah['tanggal'] ?></p>-->
                    <div class="card-body mt-4">
                        <p style="line-height:1.8" class="card-text montserrat-400 letter-spacing text-justify px-4"><?= htmlspecialchars_decode($ubah['isi']) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
require_once 'Templates/Footer.php';
require_once 'Templates/Link-js.php'; ?>
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