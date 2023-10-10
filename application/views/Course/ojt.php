<?php
$this->load->view('Templates/Link-css');
$this->load->view('Templates/Navbar'); ?>
<section class="container mt-5 py-5">
    <?php if (!empty($collections)) { ?>
        <h4 class="nsans-700 text-hitam-custom text-shadow-2 text-center pb-3">Master Class OJT</h4>
        <?= $pagination ?>
        <div class="row pt-3 pb-3 justify-content-center">
            <?php foreach ($collections as $list) {
                if (!empty($list['photo'])) {
                    $foto = "<img src='" . $this->mylibrary->UrlMedia('course', $list['photo']) . "'height='250' class='bg-course-dark card-img-top' style='border-radius: 2rem;'/>";
                }
                if (strlen($list['description']) > 75) {
                    $des = html_entity_decode(substr($list['description'], 0, 75)) . "...";
                } else {
                    $des = html_entity_decode($list['description']);
                }
                if ($list['price'] != 0) {
                    $harga = "<b>Rp. " . number_format((int)$list['price']) . "</b>";
                } else {
                    $harga = "<b class='text-success'>FREE</b>";
                }
            ?>
                <div class="col-md-3 mb-3">
                    <div class="card h-100" style="border-top-left-radius: 2rem;border-top-right-radius: 2rem;">
                        <?= $foto ?>
                        <div class="card-body pt-2 pb-2 text-center" style="flex:none;">
                            <div class="text-size-3 montserrat-600 mb-1 card-title">
                                <a href="<?= base_url('course/detail/'.base64_encode($list['id_course']))?>/3" target="_blank"><b><?= $list['name'] ?></b></a>
                            </div>
                            <div class="text-muted montserrat-400 card-text" style="font-size: 13px;"><?= $des ?></div>
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <?= $list['syllabus'] ?> Modules
                                </div>
                                <div class="col-md-6 text-center">
                                    <i class="fas fa-user" title="peserta course"></i> <?= $list['peserta'] ?>
                                </div>
                            </div>
                            <div class="text-center">
                                <?= $harga ?>
                            </div>
                        </div>
                        <div class="card-footer text-muted py-3 montserrat-400 text-size-1" style="position: relative;bottom:0px;width:100%;background:transparent;border-top:none;">
                            <div class="text-center mt-3">
                                <a href="<?= base_url('course/detail/'.base64_encode($list['id_course']))?>/3" class="btn btn-primary" >Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <?= $pagination ?>
    <?php } else {
        echo "<h2 class='nsans-700 text-hitam-custom text-shadow-2 text-center pb-3' style='line-height: 1.6;'>Mohon maaf, sepertinya<br>Master Class + OJT Masih belum ada.<br>Sambil menunggu info selanjutnya silahkan cek<br>
        <a class='badge badge-pill badge-success' href='" . base_url('course') . "'>Free Course</a> atau <a class='badge badge-pill badge-warning' href='" . base_url('course/master') . "'>Master Class</a></h2>";
    } ?>
</section>
<?php
$this->load->view('Templates/Footer');
$this->load->view('Templates/Link-js'); ?>