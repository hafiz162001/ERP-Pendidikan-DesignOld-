<?php
$this->load->view('Templates/Link-css.php');
?>

<?php $this->load->view('Templates/Navbar'); ?>

<section>
    <div class="container">
    <br><br>
    <div class="row">
        <div class="col-lg-12 text-center mt-5 mb-5">
            <h1 style="font-size:180px; color:#ddd"><i class="fas fa-box-open"></i></h1>
            <h2 style="font-size:45px; color:#ccc" class="poppins-600">Data Tidak Ditemukan </h2>
        </div>
    </div>
</div>
</section>

<?php
$this->load->view('Templates/Footer.php');
$this->load->view('Templates/Link-js.php'); ?>
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