<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="facebook-domain-verification" content="1qqvlkloue4v51tcyjxnh2u1wzj5m1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/styles.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/OwlCarousel/owl.carousel.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/OwlCarousel/owl.theme.default.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/aos/aos.css') ?>">
    <link href="<?= base_url('assets/flat-ui/images/Logotype (main).png') ?>" rel="icon">
    <title>BISA AI - AI For Everyone</title>
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

            /* .full-menu.show::before {
                position: absolute;
                top: -17px;
                left: calc(21%);
                display: inline-block;
                border-right: 17px solid transparent;
                border-bottom: 18px solid #CCC;
                border-left: 17px solid transparent;
                border-bottom-color: rgba(0, 0, 0, 0.2);
                content: '';
            }
                
            .full-menu.show::after {
                position: absolute;
                top: -16px;
                left: calc(21% + 1px);
                display: inline-block;
                border-right: 16px solid transparent;
                border-bottom: 17px solid white;
                border-left: 16px solid transparent;
                content: '';
            } */
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

<body>