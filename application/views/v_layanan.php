<div id="offer" class="why-us-sec">
		<div class="container-fluid why-us-container">
			<?php foreach ($layanan as $key => $value): ?>
			<?php if ($value->is_aktif == 1) { ?>
				<div class="col-md-3 col-sm-3 why-us-inner" style="background-size: cover; background-position: center center;">
					<div class="why-us-inner-text">
						<div class="why-us-inner-icon">
							<img src="<?php echo $this->config->item("server")?>layanan/media/<?php echo $value->foto; ?>"/>
						</div>
						<h2><a><?php echo $value->nama;?></a></h2>
						<p><?php echo $value->deskripsi;?></p>
					</div>
				</div>
				<?php } ?>
			<?php endforeach ?>
		</div>
</div>
