<!DOCTYPE html>
<html lang="en">
    <body>
        
        <!-- Llamada de Header -->	
        <?php include_once 'views/template/header-principal.php';?>

		<!-- Start Page Title Area -->
		<div class="page-title-area">
			<div class="container">
				<div class="page-title-content">
					<h2>Itinerario</h2>
					<ul>
						<li>
							<a href="<?php echo RUTA_PRINCIPAL;?>">
								Inicio 
							</a>
						</li>
						<li>Itinerario</li>
					</ul>
				</div>
			</div>         
		</div>
        <section>
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
        </section>


        <!-- Llamada de Footer -->
        <?php include_once 'views/template/footer-principal.php';?>

    </body>
</html>