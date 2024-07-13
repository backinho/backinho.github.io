<!DOCTYPE html>
<html lang="en">
    <body>

        <!-- Llamada de Header -->	
        <?php include_once 'views/template/header-principal.php';?>

        <!-- Start Page Title Area -->
        <div class="page-title-area">
			<div class="container">
				<div class="page-title-content">
					<h2>Recuperar Contraseña</h2>
					<ul>
						<li>
							<a href="<?php echo RUTA_PRINCIPAL;?>">
								Inicio 
							</a>
						</li>
						<li>Recuperar Contraseña</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Recover Password Area -->
		<section class="user-area-all-style recover-password-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="contact-form-action">
							<div class="form-heading text-center">
								<h3 class="form-title">Recuperar Contraseña!</h3>
								<p class="reset-desc">Ingrese el correo electrónico de su cuenta para restablecer la contraseña. A continuación, recibirá un enlace al correo electrónico para restablecer la contraseña. Si tiene algún problema con el restablecimiento de la contraseña <a href="<?php echo RUTA_PRINCIPAL . 'contacto';?>">contactanos.</a></p>
							</div>
							<form method="post">
								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<input class="form-control" type="text" name="name" placeholder="Correo electronico">
										</div>
									</div>
									
									<div class="col-lg-6 col-md-6 col-sm-6">
										<a class="now-log-in font-q" href="<?php echo RUTA_PRINCIPAL . 'ingresar';?>">Ingresar</a>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6">
										<p class="now-register">
											¿No estas registrado?
											<a class="font-q" href="<?php echo RUTA_PRINCIPAL . 'registrar';?>"> Registrar</a>
										</p>
									</div>
									<div class="col-12">
										<button class="default-btn btn-two" type="submit">
											Recuperar Contraseña
											<i class="flaticon-right"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Recover Password Area -->

        <!-- Llamada de Footer -->
        <?php include_once 'views/template/footer-principal.php';?>

    </body>
</html>