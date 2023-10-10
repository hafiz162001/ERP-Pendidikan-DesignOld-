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
					<h1>Bisa Ai <?= $kategori_title?></h1>
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
        	    <div class="col-md-3">
        	    </div>
        	    <div class="col-md-6">
	            <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Dataset Tersedia</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $i = 1;
                        foreach ($data_set as $key => $value) : 
                        if ($value->id_dataset == null ) { ?>
                        <tr>
                            <td><center><a href="https://bisa.ai/dashboard/Detail_dataset?id=<?= $value->id_dataset?>" id="<?php echo $i ?>">Data Tidak Ditemukan</a></center></td>
                        </tr> 
                        <?php } else {?>
                         <tr>
                            <td><center><a href="https://bisa.ai/dashboard/Detail_dataset?id=<?= $value->id_dataset?>" id="<?php echo $i ?>"><?php echo $value->nama ?></a></center></td>
                        </tr> 
                        <?php }?>
                        
                        <?php $i++; 
                        endforeach ?>
                    </tbody>
                </table>
	        </div>
	         <div class="col-md-3">
        	    </div>
        </div>
       <div class="row">
	            <form><input type="button" onClick="javascript:history.go(-1)">
	            <p><a href="javascript:history.go(-1)" title="Kembali"><i class="fa fa-angle-double-left" style="font-size:18px"></i> Kembali Ke Kategori</a></p></form>
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