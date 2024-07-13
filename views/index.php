<!doctype html>
<html lang="en">	
	<body>
		<!-- Llamada de Header -->	
		<?php include_once 'views/template/header-principal.php';?>    

		<!-- Start Ecorik Slider Area -->
		<section class="eorik-slider-area">
			<div class="eorik-slider owl-carousel owl-theme">
				<div class="eorik-slider-item slider-item-bg-1">
					<div class="d-table">
						<div class="d-table-cell">
							<div class="container">
								<div class="eorik-slider-text overflow-hidden one eorik-slider-text-one">
									<h1>Vacaciones</h1>
									<span>Descrubre lugares para pasarla bien</span>
									<div class="slider-btn">
										<a class="default-btn" href="<?php echo RUTA_PRINCIPAL . 'Reserva';?>">
											Reserva Ya
											<i class="flaticon-right"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="eorik-slider-item slider-item-bg-2">
					<div class="d-table">
						<div class="d-table-cell">
							<div class="container">
								<div class="eorik-slider-text overflow-hidden two eorik-slider-text-one">
									<h1>Relajate</h1>
									<span>Disfruta de tus vacaciones soñadas</span>
									<div class="slider-btn">
										<a class="default-btn" href="<?php echo RUTA_PRINCIPAL . 'Reserva';?>">
											Reserva Ya
											<i class="flaticon-right"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="eorik-slider-item slider-item-bg-3">
					<div class="d-table">
						<div class="d-table-cell">
							<div class="container">
								<div class="eorik-slider-text overflow-hidden three eorik-slider-text-one">
									<h1>Lugares Favoritos</h1>
									<span>Disfruta junto a tu familia de tus lugares favoritos</span>
									<div class="slider-btn">
										<a class="default-btn" href="<?php echo RUTA_PRINCIPAL . 'Reserva';?>">
											Reserva Ya
											<i class="flaticon-right"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="white-shape">
				<img src="<?php echo RUTA_PRINCIPAL . 'assets/principal';?>/img/home-one/slider/white-shape.png" alt="Image">
			</div>
			<div class="social-link">
				<ul>
					<li>
						<a href="#">
							<i class="bx bxl-facebook"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="bx bxl-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="bx bxl-linkedin"></i>
						</a>
					</li>
				</ul>
			</div>
		</section>
		<!-- End Ecorik Slider Area -->

		<!-- Start Check Area -->
        <div class="check-area mb-minus-70">
            <div class="container">
                <form class="check-form">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
							<div class="check-content">
								<p>Fecha de Viaje</p>
								<div class="form-group">
									<div class="input-group date" id="datetimepicker-1">
										<i class="flaticon-calendar"></i>
										<input type="text" class="form-control" placeholder="29/02/2024">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-th"></i>
										</span>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-3">								
							<div class="check-content">
								<p>Origen</p>
								<div class="form-group">
									<select name="origen" class="form-content">
										<option value="1">Puerto La Cruz</option>
										<option value="2">Isla de Coche</option>
										<option value="3">Margarita</option>
										<option value="4">Araya</option>
									</select>
								</div>
							</div> 
						</div>
						<div class="col-lg-3">			
							<div class="check-content">
								<p>Destino</p>
								<div class="form-group">
									<select name="destino" class="form-content">
										<option value="1">Puerto La Cruz</option>
										<option value="2">Isla de Coche</option>
										<option value="3">Margarita</option>
										<option value="4">Araya</option>
									</select>
								</div>
							</div> 
						</div>
                        <div class="col-lg-3">
							<div class="check-btn check-content mb-0">
								<button class="default-btn">
									Consultar
									<i class="flaticon-right"></i>
								</button>
							</div> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Check Section -->

		<!-- Start Explore Area -->
		<section class="explore-area pt-170 pb-100">
			<div class="container">
				<div class="section-title">
					<span>Explora</span>
					<h2>Disfruta al máximo de tu travesía</h2>
				</div>
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="explore-img">
							<img src="<?php echo RUTA_PRINCIPAL . 'assets/principal';?>/img/explore-img.png" alt="Image">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="explore-content ml-30">
							<h2>Vive una experiencia inolvidable</h2>
							<p>Explora la belleza de la costa venezolana con nuestra línea de ferrys. Conectamos destinos emblemáticos como las paradisíacas islas de Margarita y Coche con el continente, ofreciendo travesías seguras y cómodas para que disfrutes al máximo de tu viaje.</p>

							<p>Navega por aguas cristalinas, admira paisajes impresionantes y sumérgete en la cultura y la calidez de Venezuela.</p>

							<p>¡Déjate llevar por la magia del Caribe venezolano con nosotros!</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Explore Area -->

		<!-- End Incredible Area -->
		<section class="incredible-area ptb-140">
			<div class="container">
				<div class="incredible-content">
					<a href="https://www.youtube.com/watch?v=mUMzOiW3ZH0" class="video-btn popup-youtube">
						<i class="flaticon-play-button"></i>
					</a>
					<h2><span>Increible!</span> Conoce nuestras instalacioens</h2>
					<p>Explorar nuestras instalaciones es embarcarse en una experiencia fascinante llena de descubrimientos y confort. Desde el momento en que pones un pie en la embarcación, te envuelve una sensación de emoción y libertad que solo el mar puede brindar.</p>
					<a href="#" class="default-btn">
						Ingresa Ya
						<i class="flaticon-right"></i>
					</a>
				</div>
			</div>
			<div class="white-shape">
				<img src="<?php echo RUTA_PRINCIPAL . 'assets/principal';?>/img/shape/white-shape-top.png" alt="Image">
				<img src="<?php echo RUTA_PRINCIPAL . 'assets/principal';?>/img/shape/white-shape-bottom.png" alt="Image">
			</div>
		</section>
		<!-- End Incredible Area -->

		<br>
		<br>

		<!-- Start Booking Area -->
		<section class="bokking-area pb-70">
			<div class="container">
				<div class="section-title">
					<span>Reserva</span>
					<h2>Beneficios que ofrecemos</h2>
				</div>

				<div class="row">
					<div class="booking-col-2">
						<div class="single-booking">
							<a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
								<i class="book-icon flaticon-online-booking"></i>
								<span class="booking-title">Libre de costo</span>
								<h3>Sin tarifas</h3>
							</a>
							
							<div class="modal fade" id="staticBackdrop">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Sin tarifas</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>

										<div class="modal-body">
											<p>¡Reserva ahora sin preocuparte por las tarifas adicionales! En nuestro servicio, garantizamos transparencia y comodidad para que puedas reservar con total tranquilidad. ¡Aprovecha esta oportunidad y asegura tu lugar hoy mismo!</p>
										</div>

										<div class="modal-footer">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="booking-col-2">
						<div class="single-booking">
							<a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop-2">
								<i class="book-icon flaticon-podium"></i>
								<span class="booking-title">Libre de costo</span>
								<h3>Mejor tarifa garantizada</h3>
							</a>

							<div class="modal fade" id="staticBackdrop-2">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Mejor tarifa garantizada</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>

										<div class="modal-body">
											<p>¡Reserva con nosotros y disfruta de la mejor tarifa garantizada! En nuestro compromiso por brindarte la mejor experiencia, te aseguramos que encontrarás el precio más bajo al reservar directamente con nosotros. No pierdas esta oportunidad y reserva ahora para obtener la mejor oferta disponible.</p>
										</div>

										<div class="modal-footer">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="booking-col-2">
						<div class="single-booking">
							<a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop-3">
								<i class="book-icon flaticon-airport"></i>
								<span class="booking-title">Libre de costo</span>
								<h3>Reservación 24/7</h3>
							</a>

							<div class="modal fade" id="staticBackdrop-3">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Reservación 24/7</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>

										<div class="modal-body">
											<p>¡Reserva tu próximo servicio con nosotros de forma rápida y sencilla con nuestra opción de reservación disponible las 24 horas, los 7 días de la semana! Ya sea de día o de noche, estamos aquí para atenderte y asegurar tu reserva en cualquier momento. ¡Haz tu reservación ahora y despreocúpate del horario!</p>
										</div>

										<div class="modal-footer">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="booking-col-2">
						<div class="single-booking">
							<a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop-4">
								<i class="book-icon flaticon-slow"></i>
								<span class="booking-title">Libre de costo</span>
								<h3>Wi-Fi</h3>
							</a>

							<div class="modal fade" id="staticBackdrop-4">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Wi-Fi</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>

										<div class="modal-body">
											<p>¡Conéctate y disfruta de la comodidad de nuestro servicio de WiFi gratuito! En nuestra instalación, te ofrecemos conexión a internet de alta velocidad para que puedas estar siempre conectado durante tu estancia. Navega, trabaja o simplemente relájate en línea sin preocupaciones. ¡Haz tu reserva y disfruta de WiFi sin costos adicionales!</p>
										</div>

										<div class="modal-footer">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="booking-col-2">
						<div class="single-booking">
							<a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop-5">
								<i class="book-icon flaticon-coffee-cup-1"></i>
								<span class="booking-title"></span>
								<br>
								<h3>Restaurant</h3>
							</a>

							<div class="modal fade" id="staticBackdrop-5">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Restaurant</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>

										<div class="modal-body">
											<p>¡Descubre una experiencia gastronómica única en nuestro restaurante! Nuestro chef experto ha creado un menú exquisito que combina sabores tradicionales con toques innovadores. Disfruta de platillos cuidadosamente preparados en un ambiente acogedor y elegante. ¡Haz tu reserva y déjate deleitar por nuestra cocina de alta calidad!</p>
										</div>
										
										<div class="modal-footer">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Booking Area -->

		<!-- Start Restaurants Area -->
		<section class="restaurants-area pb-100">
			<div class="container-fluid p-0">
				<div class="section-title">
					<span>Destinos</span>
					<h2>Explora los mejores lugares</h2>
				</div>
				
				<div class="restaurants-wrap owl-carousel owl-theme">
					<div class="single-restaurants bg-1">
						<i class="restaurants-icon flaticon-coffee-cup"></i>
						<span>Margarita</span>
						<p>Con sus hermosas playas, como Playa El Agua, Playa Parguito y Playa Caribe, es el lugar perfecto para relajarse y disfrutar del sol y el mar.</p>
						<a href="<?php echo RUTA_PRINCIPAL . 'Reserva';?>" class="default-btn">
							Reserva Ya
							<i class="flaticon-right"></i> 
						</a>
					</div>
					<div class="single-restaurants bg-2">
						<i class="restaurants-icon flaticon-swimming"></i>
						<span>Isla de Coche</span>
						<p>Con sus aguas cristalinas y arenas blancas, es un verdadero paraíso para los amantes de la playa y el sol. Un destino ideal para unas vacaciones inolvidables.</p>
						<a href="<?php echo RUTA_PRINCIPAL . 'Reserva';?>" class="default-btn">
							Reserva Ya
							<i class="flaticon-right"></i> 
						</a>
					</div>
					<div class="single-restaurants bg-3">
						<i class="restaurants-icon flaticon-speaker"></i>
						<span>Araya</span>
						<p>Conocido por sus hermosas playas, como la Playa de Araya y la Playa de Medina, este destino en Venezuela es perfecto para relajarse y disfrutar del sol y el mar.</p>
						<a href="<?php echo RUTA_PRINCIPAL . 'Reserva';?>" class="default-btn">
							Reserva Ya
							<i class="flaticon-right"></i> 
						</a>
					</div>
				</div>
			</div>
		</section>
		<!-- End Restaurants Area -->

		<!-- Llamada de Footer -->
		<?php include_once 'views/template/footer-principal.php';?>
	</body>
</html>