<!DOCTYPE html>
<html lang="en">
    <body>
		<!-- Llamada de Header -->	
		<?php include_once 'views/template/header-principal.php';?>

        <!-- Start Page Title Area -->
        <div class="page-title-area">
			<div class="container">
				<div class="page-title-content">
					<h2>Registrar</h2>
					<ul>
						<li>
							<a href="<?php echo RUTA_PRINCIPAL;?>">
								Inicio 
							</a>
						</li>
						<li>Registrar</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Sign Up Area -->
		<section class="user-area-all-style sign-up-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="contact-form-action">
							<div class="form-heading text-center">
								<h3 class="form-title">Crea una cuenta!</h3>
							</div>
							<form method="post">
								<div class="row">
									<div class="col-md-12 col-sm-12">
										<div class="form-group">
											<input class="form-control" type="text" name="name" placeholder="Nombre">
										</div>
									</div>
									<div class="col-md-12 col-sm-12 ">
										<div class="form-group">
											<input class="form-control" type="text" name="name" placeholder="Apellido">
										</div>
									</div>
									<div class="col-md-12 col-sm-12">
										<div class="form-group">
											<input class="form-control" type="email" name="email" placeholder="Correo electronico">
										</div>
									</div>
                                    <div class="col-md-12 col-sm-12">
										<div class="form-group">
											<input class="form-control" type="tel" name="name" placeholder="Teléfono">
										</div>
									</div>
									<div class="col-md-12 col-sm-12">
										<div class="form-group">
											<input class="form-control" type="text" name="password" placeholder="Contraseña">
										</div>
									</div>
									<div class="col-md-12 col-sm-12 ">
										<div class="form-group">
											<input class="form-control" type="text" name="password" placeholder="Confirmar contraseña">
										</div>
									</div>
									<div class="col-md-12 col-sm-12 col-xs-12 form-condition">
										<div class="agree-label">
											<input type="checkbox" id="chb1">
											<label for="chb1">
												Acepto la 
												<a href="#">Politica de Privacidad</a>
											</label>
										</div>
										<div class="agree-label">
											<input type="checkbox" id="chb2">
											<label for="chb2">
												Acepto los 
												<a href="#">Terminos de Uso</a>
											</label>
										</div>
									</div>
									<div class="col-12">
										<button class="default-btn btn-two" type="submit">
											Registrarse
											<i class="flaticon-right"></i>
										</button>
									</div>
									<div class="col-12">
										<p class="account-desc">
											¿Ya tiene una cuenta?
											<a href="<?php echo RUTA_PRINCIPAL . 'ingresar';?>"> Ingresar</a>
										</p>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Sign Up Area -->

        <!-- Llamada de Footer -->
        <?php include_once 'views/template/footer-principal.php';?>

    </body>
</html>