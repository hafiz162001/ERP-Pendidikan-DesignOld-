<header>
	<div class="header-top">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-8">
					<div class="header-left">
						<ul>
							<li><i class="fa fa-envelope-o" style="color:white;"></i>info@bisa.ai</li>
							<li><i class="fa fa-phone" style="color:white;"></i>+622172794969</li>
						</ul>
					</div>
				</div>
				<div class="col-md-5 col-sm-4">
					<div class="header-right-div">
						<div class="social-profile">
							
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Header Start -->
	<div class="nav-style">
		<div class="container">
			<div class="row">
				<div class="col-md-2 logo-base">
					<div class="logo">
						<a href="https://bisa.ai/"><img src="https://bisa.ai/assets/img/logo.png" alt="" width="100" /></a>
					</div>
				</div>
				<div class="col-md-10 no-padding-left no-padding-right">
					<div class="menu">
						<nav id="main-menu" class="main-menu">
							<ul>
							    <li><a href="https://bisa.ai/">Home</a></li>
							    <!--<li><a href="https://bisa.ai/event/" target="_blank"><b>HACKATHON 2020</b></a></li>-->
							    <!--<li><a href="https://bisa.ai/kompetisi/" target="_blank"><b>Lomba Data Engineering</b></a></li>-->
							     
							     <li>
							        <div class="dropdown ">
                                  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   Event
                                  </a>
                                
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                      <a class="dropdown-item" href="https://bisa.ai/karyatulis_ilmiah/" target="_blank" style="padding-top:0px;padding-bottom:0px;"><b>Karya Tulis Ilmiah</b></a>
                                      <a class="dropdown-item" href="https://bisa.ai/Covid-19/" target="_blank" style="padding-top:0px;padding-bottom:0px;"><b>Covid-19</b></a>
                                    <a class="dropdown-item" href="https://bisa.ai/event/" target="_blank" style="padding-top:0px;padding-bottom:0px;"><b>HACKATHON 2020</b></a>
                                    <a class="dropdown-item" href="https://bisa.ai/kompetisi/" target="_blank" style="padding-top:0px;padding-bottom:0px;"><b>Lomba Data Engineering</b></a>
							    </li>
							     
							    <li>
							        <div class="dropdown ">
                                  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Produk dan Layanan
                                  </a>
                                
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <?php foreach ($feature as $key => $value) :
                                        if ($value->id_fitur == 5): ?>
                                    <a class="dropdown-item" href="https://bisa.ai/dashboard/Service" style="padding-top:0px;padding-bottom:0px;"><?php echo $value->judul?></a>
                                    <?php else: ?>
                                    <a class="dropdown-item" href="https://bisa.ai/dashboard/List_fitur?id=<?= $value->id_fitur?>" style="padding-top:0px;padding-bottom:0px;"><?php echo $value->judul?></a>
                                     <?php endif ?>
                                    <?php endforeach ?>
                                  </div>
                                
							    </li>
								<!--<li><a href="https://bisa.ai/Dashboard/Service">Lab Service</a></li>-->
							    
								<li><a href="https://bisa.ai/Dashboard/dataset">Dataset</a></li>
									<li><a href="https://elearning.bisaai.id/" target="_blank">E-Learning</a></li>
									 <li><a href="https://bisa.ai/tampil/" target="_blank">Video Conference</a></li>
									 <li><a href="https://jurnal.5gecosystems.org" target="_blank">Jurnal</a></li>
								<!--<li><a href="#agenda">Agenda</a></li>-->
								<!--<li><a target="_blank" href="http://docs.bisa.ai">Dokumentasi API</a></li>-->
								<!--<li><a href="https://bisa.ai/Login/">Login</a></li>-->
								
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Header End -->
</header>