<main>
	<article>
    <div class='row'> <!--fila 2-->
		<center>
		<div class="col-sm-3 ">
		</div>
			<div class="col-xs-12"><h1>Registro</h1></div>
			
				<div class="col-xs-12 col-sm-6 ">	
				<form  action="../modelo/nuevo.php" method="POST" autocomplete="off">
							
		
							<div style="margin-bottom: 25px"  class="col-xs-12 input-group ">
								
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" class="form-control" name="nombre" placeholder="Digite Nombre" value="" required="">
								
							</div>

							<div style="margin-bottom: 25px"  class="col-xs-12 input-group">
								
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input type="text" class="form-control" name="apellido" placeholder="Digite Apellidos" value="" required="">
								</div>
				</div>
				<div class="col-xs-12 col-sm-6 ">	
											
		
							<div style="margin-bottom: 25px"  class="col-xs-12 input-group ">
								
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="usuario" type="text" class="form-control" name="usuario" value="" placeholder="Usuario" required>
								
							</div>

							<div style="margin-bottom: 25px"  class="col-xs-12 input-group">
								
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
									<input id="password" type="password" class="form-control" name="password" placeholder="Ingrese Contraseña" required>
								</div>
				</div>			
							<div class="form-group">                                      
								
									<button id="btn-signup" type="submit" class="col-xs-12 btn btn-success"><i class="icon-hand-right"></i>Registrar</button> 
								
							</div>
							<div class="col-sm-3 ">
					<h4>Volver al  <a href="index.php">Inicio</a></h4>
			</div>
						</form>
						
					</div>
				
				
			</center>
		</div> <!--fin fila 2-->
	</article>
</main>