<!DOCTYPE html>
<html lang="en">
    <body>

        <!-- Llamada de Header -->	
        <?php include_once 'views/template/header-principal.php';?>

        <!-- Start Page Title Area -->
		<div class="page-title-area">
			<div class="container">
				<div class="page-title-content">
					<h2>Ingresar</h2>
					<ul>
						<li>
							<a href="<?php echo RUTA_PRINCIPAL;?>">
								Inicio 
							</a>
						</li>
						<li>Ingresar</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Log In Area -->
		<section class="user-area-all-style log-in-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="contact-form-action">
							<div class="form-heading text-center">
								<h3 class="form-title">Ingresa en tu cuenta!</h3>
							</div>
							<form method="post">
								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<input class="form-control" type="text" name="name" placeholder="Ususario">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<input class="form-control" type="password" name="password" placeholder="Contraseña">
										</div>
									</div>
									<div class="col-lg-6 col-sm-6 form-condition">
										<div class="agree-label">
											<input type="checkbox" id="chb1">
											<label for="chb1">
												Recordarme
											</label>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<a class="forget" href="<?php echo RUTA_PRINCIPAL . 'recuperar';?>">¿Olvidó su contrseña?</a>
									</div>
									<div class="col-12">
										<button class="default-btn btn-two" type="submit">
											Ingresar
											<i class="flaticon-right"></i>
										</button>
									</div>
									<div class="col-12">
										<p class="account-desc">
											¿No estas registrado?
											<a href="<?php echo RUTA_PRINCIPAL . 'registrar';?>">Registrate</a>
										</p>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Log In Area -->

        <!-- Llamada de Footer -->
        <?php include_once 'views/template/footer-principal.php';?>

    </body>
</html>