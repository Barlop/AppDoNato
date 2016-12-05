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
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			{section name=detalles loop=$contador}
			<div class="panel panel-default animated fadeIn">
				<div class="panel-heading">Detalles de la empresa {$contador[detalles].empresa_nombre}</div>
					<div class="panel-body text-center">
						<div class="col-md-4">
							<img src="img_logos/{$contador[detalles].empresa_id}.jpg" class="img-circle logo">
						</div>
						<font size="4" color="cyan"><b>{$contador[detalles].empresa_nombre}</b></font><br>
						{$contador[detalles].direccion}&nbsp;&nbsp;&nbsp;&nbsp;Col. {$contador[detalles].colonia} <br>
						{$contador[detalles].municipio}, {$contador[detalles].estado}. C.P.	{$contador[detalles].cp}<br>
						Tel. {$contador[detalles].telefono}&nbsp;&nbsp;&nbsp;&nbsp;Correo: {$contador[detalles].email}<br>
						Contacto: {$contador[detalles].contacto}
					</div>
				</div>
			{/section}
			<div class="form-group">
				<a href="{$rooturl}_acceso" class="btn btn-warning"><i class=" glyphicon glyphicon-arrow-left"></i> Ver empresas</a>
			</div>
		</div>
	</div>
</div>