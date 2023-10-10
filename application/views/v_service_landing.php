<div id="pricing" class="pricing-sec pb-70">
		<div class="container">	
			<div class="row">
				<div class="col-md-12">
					<div class="sec-title">
						<h1>Ketersediaan Layanan</h1>
						<p>Berikut merupakan ketersediaan layanan yang ditawarkan oleh BISA.AI. Saat ini beberapa fitur telah dapat digunakan</p>
					</div>
				</div>
			</div>		
			<div class="row">
				<?php foreach ($layanan as $key => $value): 
					$temp = $value->id_layanan;	
				?>
					
					<div class="col-md-4">
						<div class="pricing-inner">
							<div class="pricing-title">
								<h1><?php echo $value->nama;?></h1>
							</div>
							<div class="pricing-list-text">
								<ul>
									<?php 
										foreach ($des_layanan as $key => $valuepd):
											if ($valuepd->id_layanan == $temp) {
												if ($valuepd->status == 1) {
													echo "<li>".$valuepd->deskripsi."<span><i class='fa fa-check'></i></span></li>";
												} else if ($valuepd->status == 2) {
													echo "<li>".$valuepd->deskripsi."<span><i class='fa fa-close'></i></span></li>";
												}
                                            }
                                         
										endforeach
									?>
								</ul>
								<div class="pricing-button">
									<a target="_blank" href="http://client.bisa.ai">Daftar Sekarang</a>
								</div>
							</div>
						</div>
					</div>	
					
				<?php endforeach ?>
			</div>		
		</div>		
	</div>	