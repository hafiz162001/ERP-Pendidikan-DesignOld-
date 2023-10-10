<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php $this->load->view('v_head'); ?>

<body>
	<!-- Preloader Start -->
	<!-- <div id="preloader">
		<div id="preloader-status"></div>
	</div> -->

	<!-- Header Start -->
	<?php $this->load->view('v_header_service'); ?>
	<!-- Header End -->

	<!-- Page Heading Section Start -->
	<div class="container">
		<hr class="solid" style="margin-top: 0px; margin-bottom: 30px;">
		<div class="row">
			<div class="col-md-12">
				<div class="page-heading">
					<h1>Bisa Ai Lab Service</h1>
				</div>
			</div>
		</div>
		<hr class="solid" style="margin-top: 15px;">
	</div>

	<!-- Page Heading Section End -->
	<!-- Service Section Start -->
	<hr>
	<hr>
	<div class="service pt-50 pb-70">
		<div class="container">
			<div class="row">
			 <?php foreach ($jenis_server as $key => $value) : ?>
    				<div class="col-md-3 col-sm-6">
    					<div class="inner service-padding">
    						<div class="media">
    							<div class="service-thumb">
    								<img src="<?php echo $this->config->item("server")?>jenis_server/media/<?php echo $value->foto; ?>" />
    								<div class="service-icon">
    									<a href="DetailService<?php echo trim($value->url) ?>"><i class="fa fa-angle-double-right"></i></a>
    								</div>
    							</div>
    							<div class="service-content">
    								<h2><center><?php echo $value->nama ?></center></h2>
    								<p><?php echo $value->deskripsi ?></p>
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