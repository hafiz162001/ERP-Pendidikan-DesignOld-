<html>

<!-- Load Assets -->
<?php $this->load->view('v_head'); ?>
<!-- End Load Assets -->

<!-- Load Header -->
<?php $this->load->view('v_header'); ?>
<!-- end Load Header -->

<!-- body -->

<Body>
    
    <!--judul-->
    <div class="container">
        <hr class="solid" style="margin-top: 0px; margin-bottom: 30px;">
        <div class="row">
            <div class="col-md-12">
                <div class="page-heading">
                    <h1><?php echo $title?> Bisa Ai </h1>
                </div>
            </div>
        </div>
        <hr class="solid" style="margin-top: 15px;">
    </div>
    <!--end judul-->
    
    <!--Start Content-->
    <div class="blog-sec pt-100">
        <div class="container">
            <div class="row">
                <?php 
                    
                foreach ($detail_berita as $key => $value) : ?>
                <div class="col-md-8">
                    <div class="media">
                        <div class="single-post">
                            <div class="single-post-thumb">
                                <img src="https://gate.bisaai.id/server_lab/berita/media/<?php echo $value->foto; ?>" alt="">
                            </div>
                            <div class="post-info">
                                <div class="post-meta">
                                    <ul>
                                        <li><span>posted On</span><?php echo date("D,d M Y", strtotime($value->tanggal)); ?></li>
                                        <li><span>posted By</span>Admin </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-post-text">
                                <h2><?php echo $value->judul; ?></h2>
                                <p><?php echo htmlspecialchars_decode($value->isi); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="widget-two">
							<h1>Berita Lainnya</h1>
							<div class="all_r_pst">
								<div class="media">	
                                    <?php 
                                    $i = 1;
                                    foreach ($list_berita as $key => $value2 ) :
                                    if ($i <= 6 && $value2->id_berita != $value->id_berita){?>									
									<div class="relative-post">								
										<div class="relative-post-thumb">
                                        <img src="https://gate.bisaai.id/server_lab/berita/media/<?php echo $value2->foto; ?>" alt="" style="width:32;height:32">
                                        </div>
										<div class="media-body">
											<div class="single_r_dec">
                                            <h3><a href="https://bisa.ai/dashboard/Detail_berita?id=<?= $value2->id_berita; ?>"><?php echo $value2->judul; ?></a></h3>
												<ul>
													<li><i class="fa fa-user"></i> Admin</li>
													<li><i class="fa fa-clock-o"></i><?php echo  date("d M Y", strtotime($value2->tanggal)); ?></li>
												</ul>
											</div>
										</div>
                                    </div>
                                    <?php }
                                    $i++;
                                    endforeach ?>				
								</div>																	
							</div>															
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end Content-->

</Body>
<!-- End Body -->


<!-- Load Footer -->
<?php $this->load->view('v_footer'); ?>
<!-- End Footer -->


<!-- Script -->
<?php $this->load->view('script'); ?>
<!-- Script End -->

</html>