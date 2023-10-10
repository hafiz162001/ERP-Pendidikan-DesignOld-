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
	
	<hr>
	<hr>
	<div class="blog-sec pt-100 pb-70">
		<div class="container">		
			<div class="row">	
                <?php foreach ($list_agenda as $key => $value): ?>							
				<div class="col-md-6 col-sm-6">	
					<div class="media">	
						<div class="single-post">	
							<div class="single-post-thumb">	
                            <img src="https://gate.bisaai.id/server_lab/agenda/media/<?php echo $value->header_gambar; ?>" alt="" style="width:270;height:100">	
							</div>	
							<div class="post-info">
								<div class="post-meta">
									<ul>
                                    <li><span>posted On</span><?php echo date("d M,Y", strtotime($value->tanggal_mulai));?></li>
										<li><span>posted By</span><a href="#">Admin </a></li>
									</ul>									
								</div>																			
							</div>								
							<div class="single-post-text">						
                            <h2><a href="https://bisa.ai/dashboard/Detail_Agenda?id=<?= $value->id_agenda; ?>"><?php echo $value->judul; ?></a></h2>
                            <p><?php echo substr($value->deskripsi, 0, 320); ?>...</p>
                            <a href="https://bisa.ai/dashboard/Detail_Agenda?id=<?= $value->id_agenda; ?>" class="blog-readmore">continue reading</a>
							</div>
						</div>				
					</div>				
				</div>				
				<?php endforeach ?>			
			
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