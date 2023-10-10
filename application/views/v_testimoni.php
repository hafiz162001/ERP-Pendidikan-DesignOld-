<div id="client" class="testimonial-sec pt-30 pb-50">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="sec-title">
						<h1>Testimoni dan Feedback</h1>
					</div>
				</div>
			</div>		
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="all-testimonial">
					
						<?php foreach ($testimoni as $key => $value): ?>
							<?php if ($value->is_aktif == 1) { ?>
							<div class="single-testimonial">					
								<div class="client-comment">
									<div class="client-thumb">
										<img src="https://gate.bisaai.id/server_lab/testimoni/media/<?php echo $value->foto ;?>"/>
									</div>							
									<h2><?php echo $value->nama;?></h2>
									<p><?php echo $value->testimoni;?></p>							
								</div>													
							</div>	
							<?php } ?>
						<?php endforeach ?>
					</div>			
				</div>
			</div>
		</div>
	</div>