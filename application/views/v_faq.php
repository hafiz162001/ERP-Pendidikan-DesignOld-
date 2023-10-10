<div id="faq" class="faq-free-consult-sec pt-70 pb-50">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="faq-style1-sec">
						<div class="sec-title">
							<h1>Studi Kasus AI</h1>					
						</div>						
						<div class="panel-group" id="accordion" role="tablist">
						<?php 
								$n=1;
								$n_nilai = '';
								foreach ($faq as $key => $value): 
									// $numberToWord = new Numbers_Words();
									// $numberToWords->toWords($n);
								switch ($n){
									case 1 : $n_nilai='One'; break;
									case 2 : $n_nilai='Two'; break;
									case 3 : $n_nilai='Three'; break;
									case 4 : $n_nilai='Four'; break;
									case 5 : $n_nilai='Five'; break;
									case 6 : $n_nilai='Six'; break;
									case 7 : $n_nilai='Seven'; break;
									case 8 : $n_nilai='Eight'; break;
									case 9 : $n_nilai='Nine'; break;

								}
								$n=$n+1;
						?>
							<?php if ($value->is_aktif == 1) { ?>
							<div class="panel">
								<div class="panel-heading" role="tab" id="title<?= $n_nilai;?>">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $n_nilai;?>" aria-expanded="true" aria-controls="collapse<?= $n_nilai;?>"><?php echo $value->judul;?></a>
									</h4>
								</div>

								<div id="collapse<?= $n_nilai;?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="titleOne">
									<div class="panel-content"><?php echo $value->isi;?></div>
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