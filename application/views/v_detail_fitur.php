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

                    <h1>Bisa Ai <?php echo $judul ?></h1>
                </div>
            </div>
        </div>
        <hr class="solid" style="margin-top: 15px;">
    </div>

    <!-- Page Heading Section End -->
    <!-- Service Section Start -->
    <hr>
    <hr>
<div class="service-details-page pt-50 pb-30">
		<div class="container">	
			<div class="row">	

            <!-- Start Looping -->
            <?php foreach ($feature as $key => $value) : ?>
				<div class="col-md-8">
					<div class="service-details-vid">
                    <center><iframe width="720px" height="502px" src="https://www.youtube.com/embed/<?php echo $value->video; ?>?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
					</div>
					<div class="service-details">
					<h2><a><?php echo $value->judul; ?></a></h2>
						<p><?php echo $value->deskripsi; ?></p>
					</div>		
                </div>
                <?php endforeach ?>
                <!-- Rigth Navigation -->
				<div class="col-md-4">
					<div class="sidebar">
						<div class="widget-archive">
							<h1>our service</h1>
							<ul>
                            <?php foreach ($service as $key => $valueb) :
                             if ($valueb->id_fitur == 5): ?>
                                 <li><a href="https://bisa.ai/dashboard/Service"><i class="fa fa-angle-double-right"></i><?php echo $valueb->judul; ?></a></li>
							    <?php else:?>
							    <li><a href="https://bisa.ai/dashboard/List_fitur?id=<?= $valueb->id_fitur?>"><i class="fa fa-angle-double-right"></i><?php echo $valueb->judul; ?></a></li>
                              <?php endif ?>
                               <?php endforeach ?>
                            </ul>
						</div>		
						<!--<div class="support-widget">-->
						<!--	<img src="img/support.jpg" alt=""/>-->
						<!--	<div class="support-widget-overlay">-->
						<!--		<div class="support-widget-text">-->
						<!--			<h2>need your help</h2>-->
						<!--			<a href="#">contact us </a>-->
						<!--			<p>+ 008 - 1548478</p>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</div>						-->
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