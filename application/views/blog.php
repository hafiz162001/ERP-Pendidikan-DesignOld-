<?php $this->load->view('Templates/Link-css');
$this->load->view('Templates/Navbar'); ?>

<section>
    <div class="container">
        <!-- CARD -->
        <br /><br />

        <div class="row mt-5">
            <div class="col-lg-12">
                <h4 class="poppins-600 text-hitam-custom text-center">Blog</h4>
            </div>
            <!-- ITEM -->
            <div id="data" class="row text-center justify-content-center"></div>
            <?php
            if (!empty($collections)) {
                foreach ($collections as $data) {
            ?>
                    <div class="col-lg-4  mt-5 ">
                        <div class="card  card-custom h-100 mx-3">
                            <?php if (empty($data['foto'])) {
                                $foto = 'assets/img/bisaai.png';
                            } else {
                                $foto = 'https://gate.bisaai.id/bisa_ai_vcon/berita/media/' . $data['foto'];
                            }
                            ?>
                            <img class="card-img-top" src="<?= $foto ?>" alt="Card image cap">
                            <div class="card-body pb-0">
                                <h5 class="poppins-600 text-dark"><?= $data['judul'] ?></h5>
                                <p class="poppins-400 text-size-1 text-muted text-justify" style="opacity:0.8"><?= substr(htmlspecialchars_decode($data['isi']), 0, 100) ?> ...</p>
                            </div>
                            <div class="card-footer bg-white text-right mb-2" style='border-top: 1px solid transparent;'>
                                <form action="<?= base_url('berita/detail') ?>" method="GET">
                                    <input type="hidden" name="id" value="<?= base64_encode($data['id_berita']) ?>">
                                    <button class="btn btn-primary btn-sm" formtarget="_blank">Lihat Semua <i class=" fas fa-chevron-right"></i></button>
                                </form>

                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
            <!-- ITEM -->


        </div><br>
        <?php if (!empty($pagination)) {
            echo ($pagination);
        }  ?>
        <br /><br />
    </div>
</section>
<!-- /SUBFITUR -->


<!-- SUBFITUR MOBILE -->
<section class="mb-4 d-xs-block d-sm-block d-md-block d-lg-none d-xl-none bg-light pb-5">
    <div class="container">
        <br /><br /><br />
        <?php if (!empty($collections)) {
            foreach ($collections as $data) { ?>
                <div class="card card-custom h-100 mx-3 mt-2">
                    <div class="card-body">
                        <?php if (empty($data['foto'])) {
                            $foto = 'assets/img/bisaai.png';
                        } else {
                            $foto = 'http://ehosdev.javafirst.id/server_lab/berita/media/' . $data['foto'];
                        } ?>
                        <img src="<?= $foto ?>" style='width:200px; height:150px;' class='card-img-top mx-auto d-block'>
                        <h5 class='text-center mt-3 poppins-500 text-hitam-custom'><?= $data['judul'] ?><br></h5>
                        <p class="card-text nsans-400 text-muted  text-center letter-spacing mt-3"><?= substr(htmlspecialchars_decode($data['isi']), 0, 100) ?> ...</p>

                    </div>
                </div>
        <?php }
        } ?>
    </div>
    <?php if (!empty($pagination)) {
        echo ($pagination);
    }  ?>
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

    fetch('https://v1.nocodeapi.com/bisaai/medium/cgKmHcYqDBPVFoVl', {
            headers: {
                "Content-Type": "application/json"
            }
        })
        .then((res) => res.json())
        .then((data) => {
            console.log(data)
            let html = "";
            if (data === null) {
                alert('mohon maaf nampak nya server kita sedang ada gangguan');
                window.location("<?= base_url ?>");
            } else {
                data.forEach(data => {
                    // console.log(data["content:encoded"])
                    let textArea = document.createElement('textarea');
                    textArea.innerHTML = data["content:encoded"];
                    let des = textArea.value.substring(0, 109);

                    html += "<div class='col-lg-12  mt-5'>";
                    html += "<div class='card  card-custom h-100 mx-3'>";
                    // html += "<img class='card-img-top' src='" + data.thumbnail + "' alt='Card image cap' style='width:315px;height:315px'>";
                    html += "<div class='card-body pb-0'>";
                    html += "<a href='" + data.link + "' class='poppins-600 text-dark' style='font-size:19px'>" + data.title + "</a>";
                    html += "<p class='poppins-400 text-size-1 text-muted text-justify' style='opacity:0.8'>" + des + " ...</p>"
                    html += "</div>";
                    html += "</div></div>";
                });
                $('#data').html(html)
            }
        })
</script>