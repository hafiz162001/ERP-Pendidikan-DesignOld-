<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('v_head'); ?>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/styleAdmin.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/componentsAdmin.css">

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
                    <h1>Bisa Ai Service</h1>
                </div>
            </div>
        </div>
        <hr class="solid" style="margin-top: 15px;">
    </div>
    <!-- Page H eading Section End -->


    <div class="product-sec pt-100">
        <div class="container">
            <div class="col-md-4"></div>
                <div class="col-md-4">
                    
                    <div class="card card-primary">
                        <div class="card-header">
                        <h4>Booking Service</h4>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="<?php echo base_url('Register/regis'); ?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="no_telepon">ID Server</label>
                                <input id="no_telepon" type="no_telepon" class="form-control" name="no_telepon" readonly>
                                <div class="invalid-feedback">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat">ID User</label>
                                <input id="alamat" type="alamat" class="form-control" name="alamat" readonly>
                                <div class="invalid-feedback">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Tanggal Mulai</label>
                                <input id="tanggalmulai" type="date" class="form-control" name="date">

                            </div>
                            <div class="form-group">
                                <label for="alamat">Tanggal Selesai</label>
                                <input id="tanggalselesai" type="date" class="form-control" name="date">

                            </div>
                           
                            <center><a class="btn btn-info " href="https://bisa.ai/Maintenance">Checkout      <div class="       fa fa-arrow-right"></div></a></center>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
     </div>
</div>
</div>

    <!-- Product Section End -->
    <!-- Call To Action Section Start -->

    <!-- Call To Action Section Start -->
    <!-- Footer Section Start -->
    <?php $this->load->view('v_footer'); ?>
    <!-- Footer Section End -->
    <!-- Scripts Js Start -->
    <?php $this->load->view('script'); ?>
    <!-- Scripts Js End -->


    <!-- Template JS File -->
    <script src="<?php echo base_url() ?>assets/js/scriptsAdmin.js"></script>
    <script src="<?php echo base_url() ?>assets/js/custom.js"></script>

    <!-- Page Specific JS File -->

</body>

</html>