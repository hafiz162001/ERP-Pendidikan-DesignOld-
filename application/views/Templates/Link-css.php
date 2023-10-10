<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/images/mascot.png">

    <!-- META -->
    <?php $this->load->view('Templates/Meta');?>

    <link rel="stylesheet" href="<?= base_url('assets/newtemplates/') ?>css/vendor/bootstrap.min.css">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="<?= base_url('assets/newtemplates/') ?>css/vendor/font-awesome.css">
    <!-- <link rel="stylesheet" href="<?= base_url('assets/styles.css') ?>" type="text/css"> -->

    <link rel="stylesheet" href="<?= base_url('assets/newtemplates/') ?>css/vendor/slick.css">
    <link rel="stylesheet" href="<?= base_url('assets/newtemplates/') ?>css/vendor/slick-theme.css">
    <link rel="stylesheet" href="<?= base_url('assets/newtemplates/') ?>css/vendor/sal.css">
    <link rel="stylesheet" href="<?= base_url('assets/newtemplates/') ?>css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url('assets/newtemplates/') ?>css/vendor/green-audio-player.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/OwlCarousel/owl.carousel.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/OwlCarousel/owl.theme.default.min.css') ?>" type="text/css">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="<?= base_url('assets/newtemplates/') ?>css/app.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/custom.min.css">

    <style>
        .lds-facebook {
        display: inline-block;
        position: relative;
        width: 80px;
        height: 80px;
        }
        .lds-facebook div {
        display: inline-block;
        position: absolute;
        left: 8px;
        width: 16px;
        background: #1e266d;
        animation: lds-facebook 1.2s cubic-bezier(0, 0.5, 0.5, 1) infinite;
        }
        .lds-facebook div:nth-child(1) {
        left: 8px;
        animation-delay: -0.24s;
        }
        .lds-facebook div:nth-child(2) {
        left: 32px;
        animation-delay: -0.12s;
        }
        .lds-facebook div:nth-child(3) {
        left: 56px;
        animation-delay: 0;
        }
        @keyframes lds-facebook {
        0% {
            top: 8px;
            height: 64px;
        }
        50%, 100% {
            top: 24px;
            height: 32px;
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

    <!-- Preloader End Here
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
     Preloader End Here -->


