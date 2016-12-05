{include file="$templates/_header_acceso.tpl"}
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
	<form method="post" action="vacantes.php" enctype="multipart/form-data">
		{section name=contador loop=$id}
			<input type="hidden" name="id" value="{$id[contador].empresa_id}">
		{/section}
		<div class="panel panel-default border transparente animated fadeIn">
			<div class="panel-heading fondoBlanco">
				<strong>Registro de vacantes</strong>
			</div>
			<div class="panel-body fondoBlanco">
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label>Escriba el cargo:</label>
							<input type="text" name="cargo" class="form-control input-sm" required>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>Digite el sueldo:</label>
							<input type="text" name="sueldo" class="form-control input-sm" required>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>Escriba un breve descripción:</label>
							<input type="text" name="descripcion" class="form-control input-sm" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label>Fecha de publicación:</label>
							<input type="date" name="fecha_publicacion" class="form-control input-sm" required>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>Fecha de cierre:</label>
							<input type="date" name="fecha_cierre" class="form-control input-sm" required>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="form-group">
							<label>Numero de vacantes:</label>
							<input type="number" name="num_vacantes" class="form-control input-sm" required>
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