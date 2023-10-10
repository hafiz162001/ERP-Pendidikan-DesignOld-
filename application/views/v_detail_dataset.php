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
					<h1>Bisa Ai Dataset</h1>
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
	            <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Status</th>
                            <th>Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data_set as $key => $value) : ?>
                        <tr>
                            
                            <td><?php echo $value->nama; ?></td>
                            <td><?php echo html_entity_decode(htmlspecialchars_decode($value->deskripsi)); ?></td>
                            <td> <center><?php if (($value->status) == 1) : ?>
                                                                <div class="label label-table label-success">Gratis</div>
                                                            <?php else : ?>
                                                                <div class="label label-table label-success">Berbayar</div>
                                                            <?php endif ?></center></td>
                            <td><a href="<?php echo $value->dataset;?>"><center><button class="btn btn-info">Download</button></center></a></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Status</th>
                            <th>Download</th>
                        </tr>
                    </tfoot>
                </table>
	        </div>
	        <div class="row">
	            <form><input type="button" onClick="javascript:history.go(-1)">
	            <p><a href="javascript:history.go(-1)" title="Kembali"><i class="fa fa-angle-double-left" style="font-size:18px"></i> Kembali Ke List</a></p></form>
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