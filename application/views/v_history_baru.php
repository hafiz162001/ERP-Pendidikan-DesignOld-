<!DOCTYPE html>
<html dir="ltr" lang="en">
	
	<?php $this->load->view('v_head'); ?>
	
<body>
	
	<!-- Header Start -->
	<?php $this->load->view('v_header_service'); ?>
	<!-- Header End -->	
     
    <!-- Page Heading Section Start -->	
		<!-- <div class="container">
			<div class="row">
				<div class="sec-title">
					<h1>HISTORY</h1>
					<p>Catatan Pemesanan Anda</p>
				</div>				
			</div>
		</div> -->
	<!-- Page Heading Section End -->
	<!-- Cart Page Section Start -->
	<div class="cart-page-sec pt-100 pb-70">
		<div class="container">			
			<div class="row">																					
				<div class="cart-page">
				<div class="sec-title">
					<h1>HISTORY</h1>
					<p>Catatan Pemesanan Anda</p>
				</div>											
					<div class="table-text table-responsive">
						<div class="col-md-12">	
							<table class="table table-responsive">
								<thead>
									<tr>
										<th class="product-img">Nama Server</th>
										<th class="product-name">Jenis Server</th>
										<th class="product-quantity">Waktu Layanan</th>
										<th class="product-price">Waktu Mulai</th>
										<th class="product-total">Waktu Berakhir</th>
										<th class="product-delete">Total Harga</th>
										<th class="product-delete">Status Layanan</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="product-name">
											<a href="#">behaviora finace</a> 
										</td>
										<td class="product-name">
											<a href="#">behaviora finace</a> 
										</td>
										<td class="product-quantity">
											<input value="12" type="number">
										</td>
										<td class="product-price"><span class="amount">$20</span></td>
										<td class="product-total">$240</td>
										<td class="product-delete"><a href="#">×</a></td>
										<td class="product-delete"><a href="#">×</a></td>
									</tr>									
									<tr>
										<td class="product-img"><a href="#"><img src="img/cart_img_2.jpg" alt=""/></a></td>
										<td class="product-name">
											<a href="#">financlal fitness</a> 
										</td>
										<td class="product-quantity">
											<input value="05" type="number">
										</td>
										<td class="product-price"><span class="amount">$19</span></td>
										<td class="product-total">$95.00</td>
										<td class="product-delete"><a href="#">×</a></td>
									</tr>															
																	
								</tbody>
							</table>
						</div>											
					</div>											
				</div>
			</div>
		</div>
	</div>
	<!-- Cart Page Section End -->
    
    <!-- footer -->
        <?php $this->load->view('v_footer'); ?>
    <!-- end footer -->
	
</body>
</html>