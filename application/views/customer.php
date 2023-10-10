<?php
require_once 'Templates/Link-css.php';
require_once 'Templates/Navbar.php';
?>

<!-- FOR BUSSINESS -->
<section class=" bg-light pb-5">
    <br /><br /><br />
    <div class="container pl-5">
        <div class="row">
            <!-- TEXT -->
            <div class="col-lg-7 pt-5">
                <br /><br />
                <h2 style="z-index:2" class="position-absolute nsans-700 text-oren-custom text-shadow-2">TuPAY For
                    Customer</h2>
                <br /><br />
                <img src="<?= $base_url . 'assets/img/blob2.svg' ?>" style="left:6%; top:8%" class="position-absolute"
                    width=400>

                <div class="mt-4 nsans-400 letter-spacing text-size-3 text-muted text-shadow-2"
                    style="line-height:1.7; opacity: 0.7;">
                    Tidak hanya untuk pelaku bisnis, TuPAY juga membantu para pelanggan melalui gampangnya akses dan
                    transaksi di berbagai toko, beserta fitur-fitur menarik lainnya.
                </div>

            </div>
            <!--/TEXT-->

            <!-- IMAGE -->
            <div class="col-lg-5  pt-5 d-none d-lg-block d-xl-block">
                <br /><br />
                <img class="mx-auto d-block img-fluid" src="assets/img/undraw_accept_tasks_po1c.png">

            </div>
            <!-- /IMAGE -->
        </div>

    </div>
</section>
<!-- /FOR BUSSINESS -->


<!-- FITUR -->
<section class="bg-light">
    <div class="container ">
        <div class="row " id='fitur'>
            <div class="col text-center">
                <br /><br /><br /><br />
                <h2 class="nsans-700 text-hitam-custom text-shadow position-absolute">Fitur-Fitur</h2>
                <br /><br />
            </div>
        </div>

        <section class=" bg-light">
            <div class="container pl-5">
                <div class="row">
                    <!-- IMAGE -->
                    <div class="col-lg-5  pt-5 d-none d-lg-block d-xl-block">
                        <img class="mx-auto d-block img-fluid" src="assets/img/undraw_accept_tasks_po1c.png">

                    </div>
                    <!-- /IMAGE -->

                    <!-- TEXT -->
                    <div class="col-lg-7 pt-2 position-relative">
                        <br /><br />
                        <h2 style="z-index:2;" class="position-absolute nsans-700 text-oren-custom text-shadow-2">TuPAY
                            Mudahnya Berbelanja
                        </h2><br /><br />
                        <img src="<?= $base_url . 'assets/img/blob.svg' ?>" style="left:6%; top:0"
                            class="position-absolute" width=400>

                        <div class="mt-4 nsans-400 letter-spacing text-size-3 text-muted text-shadow-2"
                            style="line-height:1.7; opacity: 0.7;">
                            Bersama mitra-mitra TuPAY yang sudah hadir di dalam aplikasi, kini berbelanja dapat
                            dilakukan dari mana saja, dan tidak lupa juga transaksi terjamin aman dan berkualitas.

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



<!-- TESTIMONI -->
<section class="mb-4 bg-light">
    <div class="container-fluid bg-light">
        <div class="owl-carousel owl-theme bg-light">
            <div class="item py-5">
                <div class="card card-custom h-100 mx-3">
                    <div class="card-body">
                        <img src="assets/img/empty.png" style='width:150px; height:150px; object-fit:cover;'
                            class='rounded-circle box-shadow mx-auto d-block'>
                        <h5 class='text-center mt-3 poppins-500 text-hitam-custom '>Temukan Toko</h5>
                        <p class="card-text nsans-400 text-muted letter-spacing mt-3 text-center">
                            Kini masalah seperti kekurangan stok atau bahan dapat diminimalisir
                            dengan catatan yang sudah langsung terintegrasi ke dalam aplikasi TuPAY
                        </p>

                    </div>
                </div>
            </div>

            <div class="item py-5">
                <div class="card card-custom h-100 mx-3">
                    <div class="card-body">
                        <img src="assets/img/empty.png" style='width:150px; height:150px; object-fit:cover;'
                            class='rounded-circle box-shadow mx-auto d-block'>
                        <h5 class='text-center mt-3 poppins-500 text-hitam-custom'>Pembayaran Fleksibel
                        </h5>
                        <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">
                            Mendukung pembayaran melalui transfer dan tunai, pelanggan tidak perlu ribet lagi memikirkan
                            mana yang cocok.
                        </p>

                    </div>
                </div>
            </div>

            <div class=" item py-5">
                <div class="card card-custom h-100 mx-3">
                    <div class="card-body">
                        <img src="assets/img/empty.png" style='width:150px; height:150px; object-fit:cover;'
                            class='rounded-circle box-shadow mx-auto d-block'>
                        <h5 class='text-center mt-3 poppins-500 text-hitam-custom '>Courier Delivery</h5>
                        <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3">
                            Nantinya, bekerja sama dengan toko dan pihak ketiga, makanan ataupun barang dapat langsung
                            datang ke tangan anda secepatnya!

                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- /TESTIMONI -->
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