<section class="container">
    <div class="row">
        <div class="col-md-6 text-center">
            <h3>Free Course Paling Populer</h3>
            <div class="row">
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
                    <div class="col-md-6 mb-3">
                        <div class="card h-100" style="border-top-left-radius: 2rem;border-top-right-radius: 2rem;">
                            <?= $foto ?>
                            <div class="card-body pt-2 pb-2 text-center" style="flex:none;">
                                <div class="text-size-3 montserrat-600 mb-1 card-title">
                                    <a href="https://play.google.com/store/apps/details?id=com.pos.bisaaiacademy" target="_blank"><b><?= $list['name'] ?></b></a>
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
                                    <a href="<?= base_url('course/detail/'.base64_encode($list['id_course']))?>" class="btn btn-primary" target="_blank" >Daftar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="col-md-6 text-center">
            <h3>Master Class Terbaru</h3>
            <div class="row">
                <?php foreach ($pay as $list) {
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
                    <div class="col-md-6 mb-3">
                        <div class="card h-100" style="border-top-left-radius: 2rem;border-top-right-radius: 2rem;">
                            <?= $foto ?>
                            <div class="card-body pt-2 pb-2 text-center" style="flex:none;">
                                <div class="text-size-3 montserrat-600 mb-1 card-title">
                                    <a href="https://play.google.com/store/apps/details?id=com.pos.bisaaiacademy" target="_blank"><b><?= $list['name'] ?></b></a>
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
                                <a href="<?= base_url('course/detail/'.base64_encode($list['id_course']))?>" class="btn btn-primary" target="_blank" >Daftar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>