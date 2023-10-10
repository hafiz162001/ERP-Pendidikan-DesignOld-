<div id="case" class="faq-free-consult-sec pt-100 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="faq-style1-sec">
						<div class="sec-title">
							<h1>Studi Kasus AI</h1>					
						</div>						
						<div class="panel-group" id="accordion" role="tablist">
							<?php 
								$i = 1;
								$j = "";
								foreach ($aicase as $key => $value): 
									if ($i == 1) {
										$j = "One";
									} elseif ($i == 2) {
										$j = "Two";
									} elseif ($i == 3) {
										$j = "Three";
									} elseif ($i == 4) {
										$j = "Four";
									} elseif ($i == 5) {
										$j = "Five";
									} elseif ($i == 6) {
										$j = "Six";
									} elseif ($i == 7) {
										$j = "Seven";
									}
							?>
								<div class="panel">
									<div class="panel-heading" role="tab" id="titleOne">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $j;?>" aria-expanded="true" aria-controls="collapse<?php echo $j;?>">
											   <?php echo $value->title;?></a>
										</h4>
									</div>
									<div id="collapse<?php echo $j;?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="title<?php echo $j;?>">
										<div class="panel-content">
											<?php echo $value->description;?>		
										</div>
									</div>
								</div>
							<?php
								$i++; 
								endforeach 
							?>											
						</div>					
					</div>
				</div>	
				
			</div>	
		</div>	
	</div>