<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php $this->load->view('v_head'); ?>

<body>
    <!-- Preloader Start -->
    <!-- <div id="preloader">
		<div id="preloader-status"></div>
	</div> -->
    <!-- Preloader End -->
    <!-- Header Start -->
    <?php $this->load->view('v_header_service'); ?>
    <!-- Header End -->

    <!-- Page Heading Section Start -->
    <div class="container">
        <hr class="solid" style="margin-top: 0px; margin-bottom: 30px;">
        <div class="row">
            <div class="col-md-12">
                <div class="page-heading">
                    <h1>Bisa Ai Big Data Lab Service</h1>
                </div>
            </div>
        </div>
        <hr class="solid" style="margin-top: 15px;">
    </div>
    <!-- Page Heading Section End -->
    <!-- Product  Section Start -->
    <div class="product-sec pt-100">
        <div class="container">
            <div class="row">
                <?php foreach ($server as $key => $value) : ?>
                    <?php if ($value->jenis_server == 4) { ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="product-item">
                                <div class="product-item-img">
                                    <a href="DateBig"><img src="<?php echo base_url() ?>assets/img/jenis_server.png" /></a>
                                </div>
                                <div class="product-item-text">
                                    <h2><?php
                                        echo "<h2>" . $value->nama . "</h2>";
                                        ?></h2>
                                    <span class="product-author"><?php
                                        echo  $value->deskripsi ;
                                        ?></span>
                                    <ul>
                                        <li><a>Rp. <?php
                                        echo  $value->harga ;
                                        ?>,- / Jam</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <!-- Product Section End -->
    <!-- Call To Action Section Start -->
   
    <!-- Call To Action Section Start -->
    <!-- Footer Section Start -->
    <<?php $this->load->view('v_footer'); ?>
    <!-- Footer Section End -->
    <!-- Scripts Js Start -->
    <<?php $this->load->view('script'); ?>
    <!-- Scripts Js End -->
</body>

</html>