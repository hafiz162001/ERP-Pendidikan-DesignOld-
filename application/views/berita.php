<?php $this->load->view('Templates/Link-css');
$this->load->view('Templates/Navbar'); ?>

<section>
    <div class="container">
        <!-- CARD -->
        <br /><br />

        <div class="row mt-5">
            <div class="col-lg-12">
                <h4 class="poppins-600 text-hitam-custom text-center">Berita</h4>
            </div>
            <!-- ITEM -->
            <?php
            if (!empty($collections)) {
                foreach (array_slice($collections,0,10) as $data) { ?>
            <div class="col-lg-4  mt-5 ">
                <div class="card  card-custom h-100 mx-3">
                    <?php if (empty($data['foto'])) {
                                $foto = 'assets/img/bisaai.png';
                    }else{
                                $foto = 'https://gate.bisaai.id/bisa_ai_vcon/berita/media/'.$data['foto'];
                    }
                     ?>
                    <img class="card-img-top" src="<?= $foto ?>" alt="Card image cap">
                    <div class="card-body pb-0">
                        <h5 class="poppins-600 text-dark"><?= $data['judul'] ?></h5>
                        <p class="poppins-400 text-size-1 text-muted text-justify" style="opacity:0.8"><?= substr(htmlspecialchars_decode($data['isi']),0,100) ?> ...</p>
                    </div>
                    <div class="card-footer bg-white text-right mb-2" style='border-top: 1px solid transparent;'>
                        <form action="<?= base_url('berita/detail') ?>" method="GET">
                            <input type="hidden" name="id" value="<?= base64_encode($data['id_berita']) ?>">
                            <button class="btn btn-primary btn-sm bg-hitam-custom" formtarget="_blank">Lihat Semua <i class=" fas fa-chevron-right"></i></button>
                        </form>
                        <!-- <a href='<?= base_url('berita/index') ?>' class="text-muted poppins-400 text-size-1 text-muted letter-spacing">Lihat semua
                        &nbsp;<i class=" fas fa-chevron-right"></i></a> -->

                    </div>
                </div>
            </div>
            <?php }
            } ?>
            <!-- ITEM -->
            
            
        </div><br>
        <!-- /CARD -->
        <!-- <i> data yang aktif berjumlah <?= number_format($count, 0, 2, '.') ?>
                                data</i> -->

                            <?php if (!empty($pagination)) {
                                echo($pagination);
                            }  ?>
        <br /><br />
    </div>
</section>
<!-- /SUBFITUR -->

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