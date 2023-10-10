<div id="client" class="project-gallery-sec2 pt-30 pb-50">	
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="sec-title">
						<h1>Client Kami</h1>
						<p>Berikut merupakan client yang menggunakan jasa BISA.AI</p>
					</div>
				</div>
			</div>		
			<div class="row">		
				<div class="col-md-12">		
					<div class="gallery-area">	
						<div class="navbarsort">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarfiltr" aria-expanded="false">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>							
							</button>
							<div class="shorttitle">
								<h2>Sort Gallery</h2>
							</div>
						</div>												
					
						<div class="project-galllery-style2 gallery-container">
							<?php 
								foreach ($client as $key => $valueb): 
									$string = str_replace(' ', '', $valueb->nama);
							?>
							    <?php if ($valueb->is_aktif == 1) { ?>
								<div class="col-xs-6 col-sm-6 col-md-3 ">
									<div class="gallery-item">
										<img src="<?php echo $this->config->item("server")?>client/media/<?php echo $valueb->foto;?>" alt="<?php echo $valueb->foto;?>"/>
										<div class="gallery-overlay">
											<div class="project-gallery-overlay-text">
												<h2><a href="#"><?php echo $valueb->nama;?></a></h2>
											</div>
										</div>
									</div>					
								</div>	
								<?php } ?>
							<?php endforeach ?>					
															
						</div>					
					</div>			
				</div>
			</div>
		</div>
	</div>