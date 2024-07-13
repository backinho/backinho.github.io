<!doctype html>
<html lang="en">	
	<body>
		<!-- Llamada de Header -->	
		<?php include_once 'views/template/header-principal.php';?>

        <!-- Start Page Title Area -->
		<div class="page-title-area">
			<div class="container">
				<div class="page-title-content">
					<h2>Reserva</h2>
					<ul>
						<li>
							<a href="<?php echo RUTA_PRINCIPAL;?>">
								Inicio 
							</a>
						</li>
						<li>Reserva</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

        <!-- Start Checkout Area -->
		<section class="checkout-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="user-actions">
							<i class='bx bx-log-in-circle'></i>
							<span>¿No estas iniciado? <a href="<?php echo RUTA_PRINCIPAL . 'Ingresar';?>">Haz click aquí</a></span>
						</div>
					</div>
				</div>

				<form>
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="billing-details">
								<h3 class="title">Detalles de reserva</h3>

								<div class="row">
									<div class="col-lg-12 col-md-12">
										<div class="form-group">
											<label>Destino <span class="required">*</span></label>
										
											<div class="select-box">
												<select class="form-control">
													<option value="1">Margarita</option>
													<option value="2">Isla de Coche</option>
													<option value="3">Araya</option>
												</select>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Nombre <span class="required">*</span></label>
											<input type="text" class="form-control">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Apellido <span class="required">*</span></label>
											<input type="text" class="form-control">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Cédula <span class="required">*</span></label>
											<input type="text" class="form-control">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Item <span class="required">*</span></label>
										
											<div class="select-box">
												<select class="form-control">
													<option value="1">Adulto</option>
													<option value="2">Niño</option>
													<option value="3">Tercera Edad</option>
													<option value="4">Mascotas</option>
													<option value="5">Vehiculo de paseo</option>
													<option value="6">Vehiculo rústico</option>
													<option value="7">Pickup/Van</option>
													<option value="8">Larga/Doble Cabina</option>
													<option value="9">Moto</option>
												</select>
											</div>
										</div>
									</div>

									<div class="col-lg-12 col-md-6">
										<div class="form-group">
											<label>Dirección <span class="required">*</span></label>
											<input type="text" class="form-control">
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="col-lg-6 col-md-12">
							<div class="order-details">
								<div class="order-table table-responsive">
									<h3 class="title">Su reserva</h3>
									<table class="table table-bordered">
										<thead>
											<tr>
												<th scope="col">Producto</th>
												<th scope="col">Total</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<td class="product-name">
													<a href="#">Boleto</a>
												</td>

												<td class="product-total">
													<span class="subtotal-amount">$0.00</span>
												</td>
											</tr>

											<tr>
												<td class="order-subtotal">
													<span>Subtotal</span>
												</td>

												<td class="order-subtotal-price">
													<span class="order-subtotal-amount">$0.00</span>
												</td>
											</tr>

											<tr>
												<td class="order-shipping">
													<span>Tasa portuaria</span>
												</td>

												<td class="shipping-price">
													<span>$0.00</span>
												</td>
											</tr>

											<tr>
												<td class="total-price">
													<span>Pedido Total</span>
												</td>

												<td class="product-subtotal">
													<span class="subtotal-amount">$0.00</span>
												</td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="payment-box">
									<div class="payment-method">
										<p>Realiza tu pago directamente en nuestra cuenta bancaria. Utilice su ID de pedido como referencia de pago. Su pedido no será enviado hasta que los fondos se hayan liquidado en nuestra cuenta.</p>

										<p>
											<input type="radio" id="direct-bank-transfer" name="radio-group" checked>
											<label for="direct-bank-transfer">Transferencia Bancaria</label>
										</p>

										<p>
											<input type="radio" id="paypal" name="radio-group">
											<label for="paypal">PayPal</label>
										</p>

										<p>
											<input type="radio" id="cash-on-delivery" name="radio-group">
											<label for="cash-on-delivery">Efectivo</label>
										</p>
									</div>
	
									<a href="#" class="default-btn">
										Realizar Reserva
										<i class="flaticon-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</section>
		<!-- End Checkout Area -->

        <!-- Llamada de Footer -->
		<?php include_once 'views/template/footer-principal.php';?>
	</body>
</html>