<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php $this->load->view('v_head'); ?>

<body>
	<!-- Preloader Start -->
	<!-- <div id="preloader">
		<div id="preloader-status"></div>
	</div> -->

	<!-- Header Start -->
	<?php $this->load->view('v_header'); ?>
	<!-- Header End -->

	<!-- Page Heading Section Start -->
	<div class="container">
		<hr class="solid" style="margin-top: 0px; margin-bottom: 30px;">
		<div class="row">
			<div class="col-md-12">
				<div class="page-heading">
					<h1>Bisa Ai <?= $title?></h1>
				</div>
			</div>
		</div>
		<hr class="solid" style="margin-top: 15px;">
	</div>

	<!-- Page Heading Section End -->
<div class="blog-sec pt-100 pb-70">
    <div class="container">
        <div class="row">
            <?php
            $i = 1;
            foreach ($berita as $key => $value) : 
             if ($i <= 4) {?>
                <div class="col-md-6 col-sm-6">
                    <div class="media">
                        <div class="single-post">
                            <div class="single-post-thumb">
                                <img src="https://gate.bisaai.id/server_lab/berita/media/<?php echo $value->foto; ?>" alt="" />
                            </div>
                            <div class="post-info">
                                <div class="post-meta">
                                    <ul>
                                        <li><span>By</span>Admin</li>
                                        <li><span>posted On</span><?php echo date("d M,Y", strtotime($value->tanggal)); ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-post-text">
                                <h2><a href="https://bisa.ai/dashboard/Detail_berita?id=<?= $value->id_berita; ?>"><?php echo $value->judul; ?></a></h2>
                                <p><?php echo htmlspecialchars_decode(substr($value->isi, 0, 320)); ?>...</p>
                                <a href="https://bisa.ai/dashboard/Detail_berita?id=<?= $value->id_berita; ?>" class="blog-readmore">Read More</a>
                            </div>
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
	<!-- Service Section End -->

	<!-- Footer Section Start -->
	<?php $this->load->view('v_footer'); ?>

	<!-- Script -->
	<?php $this->load->view('script'); ?>

	<!-- Scripts Js End -->
</body>

</html>