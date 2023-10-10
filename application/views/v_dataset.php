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
    <?php $this->load->view('v_header'); ?>
    <!-- Header End -->

    <!-- Page Heading Section Start -->
    <div class="container">
        <hr class="solid" style="margin-top: 0px; margin-bottom: 30px;">
        <div class="row">
            <div class="col-md-12">
                <div class="page-heading">
                    <h1>Bisa Ai <?php echo $dataset_title ?></h1>
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
                <?php foreach ($data_set as $key => $value) : ?>
                        <div class="col-md-4">
                            <div class="produk-item">
                                <div class="produk-item-img">
                                    <a href="https://bisa.ai/dashboard/List_Dataset?id=<?= $value->id_dataset_kategori?>"><img src="https://gate.bisaai.id/server_lab/dataset/media/<?php echo $value->foto; ?>" /></a>
                                </div>
                                <div class="produk-item-text">
                                    <h2><a href="https://bisa.ai/dashboard/List_Dataset?id=<?= $value->id_dataset_kategori?>"><?php echo "<h2>" . htmlspecialchars_decode($value->nama) . "</h2>";
                                        ?></a></h2>
                                    <span class="produk-author"><?php echo htmlspecialchars_decode($value->deskripsi); ?></span>
                                </div>
                            </div>
                        </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <!-- produk Section End -->
    <!-- Call To Action Section Start -->
   
    <!-- Call To Action Section Start -->
    <!-- Footer Section Start -->
    <?php $this->load->view('v_footer'); ?>
    <!-- Footer Section End -->
    <!-- Scripts Js Start -->
    <?php $this->load->view('script'); ?>
    <!-- Scripts Js End -->
</body>

</html>