    <!-- EVENT-->
    <section class="padding-section bg-gradient-grey" id="partner">
        <h1 class="text-center poppins-700 text-dark-vcon">Event terkini</h1>
        <div class="container mt-5">
            <div class="row">
                <?php 
                $counter = 1;
                $linkEvent = base_url('event'); 
                foreach ($collections_event as $list) : 
                    if($counter == 4) break;
                        $EncodeStr = $this->mylibrary->Encode($list['id_event'], 3) . 'QVFZUYRIJ';
                        $link = base_url() . "event/detail/" . $EncodeStr;
                        $tampung = strip_tags($list['deskripsi']);
                        $tampungJudul = strip_tags($list['judul']);
                        
                        if (strlen($tampung) > 100)
                            $tampung = substr($tampung,0,100). " ... <a href='" . $link . "' class='montserrat-600' style='text-decoration:none'>selengkapnya</a>";
                        if (strlen($tampungJudul) > 50)
                            $tampungJudul = substr($tampungJudul,0, 50). ' ...';

                        if ($list['status'] == 1)
                            $status = "<small class='badge bg-blue-vcon text-white px-2 py-1 '>belum mulai</small>";
                        elseif ($list['status'] == 2)
                            $status = "<small class='badge bg-success text-white px-2 py-1 '>sudah berakhir</small>";
                        else
                            $status = "<small class='badge bg-danger text-white px-2 py-1 '>tidak diketahui</small>";

                        // di pecah menjadi array
                        $ExplodeTgl = explode(' ', $list['tanggal_mulai']);

                        // convert Hari ke indo
                        $GetDay = strtolower($this->mylibrary->GetDay($ExplodeTgl[0]) . ', ');

                        // ambil tanggal
                        $GetDate = $ExplodeTgl[1];

                        // convert Bulan ke indo
                        $GetMonth = $this->mylibrary->GetMonth($ExplodeTgl[2]);

                        $GetMonthNow = $this->mylibrary->GetMonth(date('M'));

                        // get Year
                        $GetYear = $ExplodeTgl[3];

                        // ambil waktu
                        $GetTime = ' jam ' . $ExplodeTgl[4];

                        // kombinasi waktu (hari, tanggal bulan tahun jam)
                        $KombinasiTglMulai = $GetDay . $GetDate . ' ' . $GetMonth . ' ' . $GetYear . ' ' . $list['waktu_mulai'];
                        $ikut = $list['yg_ikut'] != null ? "&nbsp; <i class='fas fa-user'></i> " . $list['yg_ikut'].' Orang' : '';
                     
                        if ($list['tipe_event'] == 1 && $list['status'] == 1)
                            $status_event = " <div class='ribbon-wrapper'><div class='ribbon bg-gradient-vcon montserrat-400'><b>GRATIS</b></div></div>";
                        elseif ($list['tipe_event'] == 2 && $list['status'] == 1)
                            $status_event = " <div class='ribbon-wrapper'><div class='ribbon bg-success montserrat-400 ' style='padding: 5px 0; font-size:11px;'><b>GRATIS <div style='line-height:5px;font-size:10px'>E-Sertifikat</div></b></div></div>";
                        elseif ($list['tipe_event'] == 3 && $list['status'] == 1){
                            $status_event = " <div class='ribbon-wrapper'><div class='ribbon bg-gradient-red montserrat-400'><b>GRATIS</b></div></div>";
                            $status += "<small class='ml-2 badge bg-gradient-red text-white px-2 py-1 '>E-Sertifikat berbayar</small>";    
                        }
?>
                <div class="col-lg-4">
                    <div class='card h-100' style='border-radius:20px'>
                    <?=$status_event?>
                        <img style='height:190px; width:100%; object-fit:cover; margin:0; width:100%;  border-top-left-radius:20px; border-top-right-radius:20px'
                            class='card-img-top'
                            src='https://gate.bisaai.id/bisa_ai_vcon/event/media/<?=$list['banner']?>'
                            alt='Gambar Event '>
                        <div class=" ard-body">
                            <a href='<?=$link?>' class='link' title="<?=$list['judul']?>">
                                <h6 class='card-title text-blue-vcon  montserrat-600'><?=$tampungJudul?> </h6>
                            </a>
                            <h6 class='card-subtitle mb-2 text-muted montserrat-400' style='font-size:12px'>
                                <?=$status?>
                            </h6>
                            <span class='text-size-2 text-muted'>
                                <i class='fas fa-calendar-alt'></i> <?=$KombinasiTglMulai.$ikut?>
                            </span>
                        </div>
                    </div>
                </div>
                <?php $counter++; endforeach; ?>
                <div class="col-lg-12 text-center mt-4">
                    <a href="https://play.google.com/store/apps/details?id=com.pos.bisatampil" class='btn btn-hover color-4'><i class="fas fa-calendar-alt"></i> Lihat
                        semua event</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /EVENT-->