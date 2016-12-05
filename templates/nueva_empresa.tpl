{include file="$templates/_header_acceso.tpl"}
<input type="hidden" id="rooturl" value="{$rooturl}">
<div class="container">
	<nav class="navbar navbar-default fondoBlanco">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">
				<p id="brand"><b>DEAPARTAMENTO DE VINCULACIÓN</b><br>Usuario: {$usuario}</p>
			</a>
		</div>
		<div class="collapse navbar-collapse navbar-right" id="menu">
			<ul class="nav navbar-nav">
				<li class="active dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						Empresas y vacantes <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="{$rooturl}_acceso">Ver empresas</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="{$rooturl}_acceso/nueva_empresa.php">Nueva empresa</a></li>
					</ul>
				</li>
				<li><a href="#">Usuarios</a></li>
				<li><a href="#">Mis datos</a></li>
				<li><a href="{$rooturl}_acceso/cerrar_sesion.php">Salir</a></li>
			</ul>
		</div>
	</nav>	
</div>
<div class="container">
	<form method="post" action="registra_empresa.php" enctype="multipart/form-data">
		<div class="panel panel-default border transparente animated fadeIn">
			<div class="panel-heading fondoBlanco">
				<strong>Registro de nueva empresa</strong>
			</div>
			<div class="panel-body fondoBlanco">
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<label>Elija el logo de la empresa:</label>
							<input type="file" class="file" name="input" id="input" accept="image/jpeg" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label>Escriba el nombre de la empresa:</label>
							<input type="text" name="nombre" class="form-control input-sm" required>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>Escriba el giro de la empresa:</label>
							<input type="text" name="giro" class="form-control input-sm" required>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>Escriba el nombre del contacto en la empresa:</label>
							<input type="text" name="contacto" class="form-control input-sm" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label>Elija el estado:</label>
							<select required class="form-control input-sm" name="estado" id="estado" onchange="llena_municipios(this)">
								<option class="text-center" value="">ELIJE UNA OPCIÓN</option>
								{html_options values=$id output=$nombre}							
							</select>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>Elija el municipio:</label>
							<select required class="form-control input-sm" name="municipio" id="municipio" onchange="llena_localidades(this)">
								<option class="text-center" value="">ELIJE UNA OPCIÓN</option>						
							</select>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>Elija la localidad:</label>
							<select required class="form-control input-sm" name="localidad" id="localidad">
								<option class="text-center" value="">ELIJE UNA OPCIÓN</option>							
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3">
						<div class="form-group">
							<label>Escriba la dirección:</label>
							<input type="text" required name="direccion" class="form-control input-sm">
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label>Escriba la colonia:</label>
							<input type="text" required name="colonia" class="form-control input-sm">
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label>Escriba el código postal:</label>
							<input type="text" required name="cp" class="form-control input-sm">
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label>Escriba el teléfono:</label>
							<input type="text" required name="telefono" class="form-control input-sm">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label>Escriba el correo electrónico:</label>
							<input type="email" required name="email" class="form-control input-sm">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label>Confirme el correo electrónico:</label>
							<input type="email" required name="email2" class="form-control input-sm">
						</div>
					</div>
				</div>
			</div>
			<div class="panel-footer text-right fondoBlanco">
				<button type="submint" class="btn btn-info btn-md">
					Guardar
				</button>
				<button type="reset" class="btn btn-default btn-md">
					Reset
				</button>
			</div>
		</div>
	</form>
</div>