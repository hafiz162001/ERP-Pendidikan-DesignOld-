<?php
$this->load->view('Templates/Link-css');
$this->load->view('Templates/Navbar'); ?>
<section class="container mt-5 py-5">
    <h4 class="nsans-700 text-hitam-custom text-shadow-2 text-center pb-3">Webinar</h4>
    <?= $pagination ?>
    <div class="row pt-3 pb-3 justify-content-center">
        <?php foreach ($collections as $list) {
            if (!empty($list['banner'])) {
                $foto = "<img src='" . $this->mylibrary->Media('event', $list['banner']) . "' class='bg-course-dark card-img-top' style='height:190px; width:100%; object-fit:cover; margin:0; width:100%;border-top-left-radius: 2rem;border-top-right-radius: 2rem;'/>";
            }
            if (strlen($list['deskripsi']) > 80) {
                $des = html_entity_decode(substr($list['deskripsi'], 0, 75)) . "...";
            } else {
                $des = html_entity_decode($list['deskripsi']);
            }
            $tgl = date('d', strtotime(substr($list['tanggal_mulai'], 0, 22)));
            $hari = $this->mylibrary->GetDay(date('D,', strtotime(substr($list['tanggal_mulai'], 0, 22))));
            $bulan = $this->mylibrary->GetMonth(date('M', strtotime(substr($list['tanggal_mulai'], 0, 22))));
            $tahun = date('Y', strtotime(substr($list['tanggal_mulai'], 0, 22)));
            $kombinasi = $hari . ',' . $tgl . ' ' . $bulan . ' ' . $tahun . ' jam ' . $list['waktu_mulai'];
        ?>
            <div class="col-md-4 mb-3">
                <div class="card h-100" style="border-top-left-radius: 2rem;border-top-right-radius: 2rem;">
                    <?= $foto ?>
                    <div class="card-body pt-2 pb-5 text-center" style="flex:none;">
                        <div class="letter-spacing text-size-3 montserrat-600 mb-1">
                            <a href="https://www.tampil.id/event/detail/<?= $this->mylibrary->Encode($list['id_event'], 3); ?>" target="_blank" style="text-decoration:none;"><b><?= $list['judul'] ?></b></a>
                        </div>
                        <p class="card-text" style="font-family: 'Montserrat', sans-serif;font-weight:400;"><?= $des ?><a target="_blank" href="https://www.tampil.id/event/detail/<?= $this->mylibrary->Encode($list['id_event'], 3); ?>" style="text-decoration:none;font-family: 'Montserrat' , sans-serif;font-weight:400;">selengkapnya</a></p>
                    </div>
                    <div class="card-footer text-muted py-3 montserrat-400 text-size-1" style="position: relative;bottom:0px;width:100%;background:transparent;border-top:none;">
                        <i class="fas fa-calendar-alt"></i> <?= $kombinasi ?>&nbsp; <i class="fas fa-user"></i> <?= $list['pendaftar'] ?> Orang
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <?= $pagination ?>
</section>
<?php
$this->load->view('Templates/Footer');
$this->load->view('Templates/Link-js'); ?>