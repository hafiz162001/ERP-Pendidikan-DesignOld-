<?php
$this->load->view('Templates/Link-css');
$this->load->view('Templates/Navbar'); ?>

<!-- CLIENT -->
<section class="text-center bg-light mt-5 pt-2">
    <br><br><br>
    <div class="row">
        <div class="col-lg-12 pt">
            <!--<h2 class='poppins-600 text-hitam-custom text-center'>Kolaborator</h2>-->
            <h1 class="poppins-600 text-hitam-custom">Kolaborasi Program Academy</h1>
            <p class="poppins-500 text-center mt-3">Mau kolaborasi mengadakan program Academy yang diikuti ratusan peserta? hubungi melalui email atau WhatsApp BISA AI Academy</p>
            <a href="mailto:info@bisa.ai" target="_blank" class="btn btn-hover-email poppins-600"><i class="fas fa-envelope fa-lg mr-1"></i> Hubungi Kami</a>
            <a href="https://api.whatsapp.com/send?phone=+6282116654087&" target="_blank" class="btn btn-hover-whatsapp poppins-600"><i class="fab fa-whatsapp fa-lg mr-1"></i> Hubungi Kami</a>

            <br><br>
            <p class="poppins-500 text-center mt-3">Berikut Kolaborator yang telah bersama - sama dalam menyelenggarakan program academy</p>
        </div>
    </div>
    <!-- LOGO -->
    <div class="container mt-5">
        <div class="d-flex pb-4 justify-content-center flex-sm-row flex-wrap">
            <img class="ml-3 my-2" style="filter: grayscale(100%);" src="https://www.tampil.id/assets/flat-ui/images/partner/ID5G.png" width="100" height="90" title="ID5G Ecosystem">
            <img class="ml-3 my-2" style="filter: grayscale(100%);" src="https://www.tampil.id/assets/flat-ui/images/partner/trilogi.png" width="90" height="80" title="Universitas Trilogi">
            <img class="ml-3 my-2" style="filter: grayscale(100%);" src="https://www.tampil.id/assets/flat-ui/images/partner/ccit.png" width="100" title="CCIT FTUI">
            <img class="ml-3 mt-3" style="filter: grayscale(100%);" src="https://www.tampil.id/assets/flat-ui/images/partner/dispusipda.png" width="160" height="60" title="Dispusipda Jawa Barat">
            <img class="ml-3 my-2" style="filter: grayscale(100%);" src="https://www.tampil.id/assets/flat-ui/images/partner/shariabisa.png" width="120" height="80" title="Sharia BISA">
            <img class="ml-3 my-2" style="filter: grayscale(100%);" src="https://www.tampil.id/assets/flat-ui/images/partner/TBF.png" width="110" height="70" title="Tebar Bisa Foundation">
            <img class="ml-3 my-2" style="filter: grayscale(100%);" src="https://www.tampil.id/assets/flat-ui/images/partner/logine.png" width="90" height="80" title="Logine">
        </div>
    </div>
    <div class="container mt-5">
        <div class="d-flex pb-4 justify-content-center flex-sm-row flex-wrap">
            <img class="ml-3 my-2" style="filter: grayscale(100%);" src="https://www.tampil.id/assets/flat-ui/images/New Logo (Without BG).ico" width="85" height="85" title="TAMPIL">
            <img class="ml-3 my-2" style="filter: grayscale(100%);" src="<?= base_url('assets/flat-ui/images/tupay_logo_header_2.png') ?>" width="250" height="80" title="TuPAY">
            <img class="ml-3 my-2" style="filter: grayscale(100%);" src="<?= base_url('assets/flat-ui/images/tellhealth-baru.png') ?>" width="95" height="85" title="Tellhealth">
            <img class="ml-3 my-2" style="filter: grayscale(100%);" src="<?= base_url('assets/flat-ui/images/cropped-kava-trans-logo.png') ?>" width="85" height="85" title="Kava1">
        </div>
    </div>
    <br><br><br>
</section>

<?php
$this->load->view('Templates/Footer');
$this->load->view('Templates/Link-js'); ?>