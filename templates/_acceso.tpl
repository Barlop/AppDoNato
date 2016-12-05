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
						<li><a href="#">Ver empresas</a></li>
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
		<div class="col-sm-3">
			<div class="panel panel-default border transparente animated fadeIn">
				<div class="panel-heading fondoBlanco">
					<strong>Filtrar por:</strong>
				</div>
				<div class="panel-body fondoBlanco">
					<ul>
						<li>Ver todo</li>
						<li>Vacantes cubiertas</li>
						<li>Vacantes abiertas</li>
						<li>Puesto ofrecido</li>
						<li>Sueldo de mayor a menor</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-sm-9">
			<div class="panel panel-default border transparente animated fadeIn">
				<div class="panel-heading fondoBlanco">
					<strong>Empresas registradas</strong>
				</div>
				<div class="panel-body fondoBlanco">
					{section name=loop loop=$loop}
					{if empty($loop[loop].num_vacantes)}
					{$loop[loop].num_vacantes = 0}
					{/if}
					<div class="empresas">
						<div class="col-md-3">
							<img src="img_logos/{$loop[loop].empresa_id}.jpg" class="logo">
						</div>
						<div class="col-md-5">
							<font size="4" color="cyan"><b>{$loop[loop].empresa_nombre}</b></font><br>
							{$loop[loop].direccion}&nbsp;&nbsp;&nbsp;&nbsp;Col. {$loop[loop].colonia} <br>
							{$loop[loop].municipio}, {$loop[loop].estado}. C.P.	{$loop[loop].cp}<br>
							Tel. {$loop[loop].telefono}&nbsp;&nbsp;&nbsp;&nbsp;Correo: {$loop[loop].email}<br>
							Contacto: {$loop[loop].contacto}
						</div>
						<div class="col-md-2">
							<b>Ofertas</b>
							<div class="green-circle">
								<p class="totales">{$loop[loop].ofertas}</p>
							</div>
						</div>
						<div class="col-md-2">
							<b>Vacantes</b>
							<div class="violet-circle">
								<p class="totales">{$loop[loop].num_vacantes}</p>
							</div>
						</div>
						<div class="col-md-12 text-right detalles">
							<div class="btn-group btn-group">
								<button type="button" class="btn btn-default btn-sm" 
									onclick="window.location.href='acciones.php?id={$loop[loop].empresa_id}&caso=1'">Ver detalles
								</button>
								<button type="button" class="btn btn-default btn-sm" 
									onclick="window.location.href='editar.php?id={$loop[loop].empresa_id}&caso=2'">Editar empresa
								</button>
								<button type="button" class="btn btn-default btn-sm" 
									onclick="window.location.href='acciones.php?id={$loop[loop].empresa_id}&caso=3'">Eliminar empresa
								</button>
								<button type="button" class="btn btn-default btn-sm" 
									onclick="window.location.href='nueva_vacante.php?id={$loop[loop].empresa_id}&caso=4'">Agreagar vacante
								</button>
							</div>
						</div>
					</div>
					{/section}
				</div>
			</div>
		</div>
	</div>
</div>