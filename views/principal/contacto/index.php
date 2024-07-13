<!DOCTYPE html>
<html lang="en">
    <body>

        <!-- Llamada de Header -->	
        <?php include_once 'views/template/header-principal.php';?>

        <!-- Start Page Title Area -->
		<div class="page-title-area">
			<div class="container">
				<div class="page-title-content">
					<h2>Contacto</h2>
					<ul>
						<li>
							<a href="<?php echo RUTA_PRINCIPAL;?>">
								Inicio 
							</a>
						</li>
						<li>Contacto</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Contact Info Area -->
		<section class="contact-info-area pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="single-contact-info">
							<i class="bx bx-envelope"></i>
							<h3>Escribenos:</h3>
							<a href="mailto:expresslagaviota@gmail.com">expresslagaviota@gmail.com</a>
							<a href="mailto:infogaviotaexpress@gmail.com">infogaviotaexpress@gmail.com</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-contact-info">
							<i class="bx bx-phone-call"></i>
							<h3>Llamanos:</h3>
							<a href="tel:+(58)412-188-9816">Tel. + (58) 412-188-9816</a>
							<a href="tel:+(58)412-109-7373">Tel. + (58) 412-109-7373</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-contact-info">
							<i class="bx bx-location-plus"></i>
							<h3>Localizanos</h3>
							<a href="#">Puerto La Cruz, Anzoátegui, Venezuela</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Info Area -->

		<!-- Start Contact Area -->
		<section class="main-contact-area pb-100">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="contact-wrap mb-0">
							<div class="contact-form">
								<div class="section-title">
									<h2>Déjanos tus preguntas</h2>
								</div>
								<form id="contactForm">
									<div class="row">
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="text" name="name" id="name" class="form-control" required data-error="Por favor ingrese su nombre" placeholder="Tu Nombre">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="email" name="email" id="email" class="form-control" required data-error="Por favor ingrese su correo" placeholder="Tu Correo">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="text" name="phone_number" id="phone_number" required data-error="Por favor ingrese su teléfono" class="form-control" placeholder="Tu Teléfono">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Por favor ingrese el asunto" placeholder="Tu Asunto">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Escribe tu mensaje" placeholder="Tu Mensaje"></textarea>
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-12 col-md-12">
											<button type="submit" class="default-btn btn-two">
												Enviar Mensaje
												<i class="flaticon-right"></i>
											</button>
											<div id="msgSubmit" class="h3 text-center hidden"></div>
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Area -->

		<!-- Start Map Area -->
		<div class="map-area">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62827.548695662794!2d-64.67348599984574!3d10.203233032442347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2d740d55b939f1%3A0x6a6baaf6f31a1448!2sPuerto%20La%20Cruz%2C%20Anzo%C3%A1tegui!5e0!3m2!1ses!2sve!4v1719528140645!5m2!1ses!2sve"></iframe>
		</div>
		<!-- End Map Area -->

        <!-- Llamada de Footer -->
        <?php include_once 'views/template/footer-principal.php';?>

    </body>
</html>