<div id="agenda" class="blog-sec pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sec-title">
                    <h1>Agenda BISA.AI </h1>
                    <p>Berikut merupakan agenda kegiatan BISA.AI yang akan datang</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php 
             $n = 1;
            foreach ($agenda as $key => $value) : 
                if ($n <= 3) : ?>
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="single-post">
                            <div class="single-post-thumb">
                            <img src="https://gate.bisaai.id/server_lab/agenda/media/<?php echo $value->header_gambar; ?>" alt="">
                            </div>
                            <div class="post-info">
                                <div class="post-meta">
                                    <ul>
                                    <li><span>By</span>Admin</li>		
                                    <li><span>posted On</span><?php echo date("M,d Y ", strtotime($value->tanggal_mulai)); ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-post-text">
                            <h2><a href="https://bisa.ai/dashboard/Detail_Agenda?id=<?= $value->id_agenda; ?>"><?php echo $value->judul; ?></a></h2>
                                    <p><?php echo substr($value->deskripsi, 0, 320); ?>...</p>
                                    <a  class="blog-readmore" href="https://bisa.ai/dashboard/Detail_Agenda?id=<?= $value->id_agenda; ?>">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; 
                    $n++;
                endforeach ?>
            
        </div>
        <div class="col-md-4"></div>
            <div class="col-md-4"><div class="single-post-text"><center><a href="https://bisa.ai/dashboard/List_agenda">Agenda Lainnya</a></center></div></div>
            <div class="col-md-4"> </div>
    </div>
</div>