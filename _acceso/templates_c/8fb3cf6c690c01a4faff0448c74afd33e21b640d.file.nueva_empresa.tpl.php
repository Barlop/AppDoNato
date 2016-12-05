<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-18 17:28:52
         compiled from "C:\wamp\www\app_donato\templates\nueva_empresa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1822457a0b8ee44cdc9-16171223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fb3cf6c690c01a4faff0448c74afd33e21b640d' => 
    array (
      0 => 'C:\\wamp\\www\\app_donato\\templates\\nueva_empresa.tpl',
      1 => 1474218515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1822457a0b8ee44cdc9-16171223',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57a0b8ee4c7326_46707759',
  'variables' => 
  array (
    'rooturl' => 0,
    'usuario' => 0,
    'id' => 0,
    'nombre' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a0b8ee4c7326_46707759')) {function content_57a0b8ee4c7326_46707759($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\wamp\\www\\app_donato\\include\\smarty\\plugins\\function.html_options.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templates']->value)."/_header_acceso.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<input type="hidden" id="rooturl" value="<?php echo $_smarty_tpl->tpl_vars['rooturl']->value;?>
">
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
				<p id="brand"><b>DEAPARTAMENTO DE VINCULACIÓN</b><br>Usuario: <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</p>
			</a>
		</div>
		<div class="collapse navbar-collapse navbar-right" id="menu">
			<ul class="nav navbar-nav">
				<li class="active dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						Empresas y vacantes <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['rooturl']->value;?>
_acceso">Ver empresas</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['rooturl']->value;?>
_acceso/nueva_empresa.php">Nueva empresa</a></li>
					</ul>
				</li>
				<li><a href="#">Usuarios</a></li>
				<li><a href="#">Mis datos</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['rooturl']->value;?>
_acceso/cerrar_sesion.php">Salir</a></li>
			</ul>
		</div>
	</nav>	
</div>
<div class="container">
	<form method="post" action="registra_empresa.php" enctype="multipart/form-data">
		<div class="panel panel-default border transparente">
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
								<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['id']->value,'output'=>$_smarty_tpl->tpl_vars['nombre']->value),$_smarty_tpl);?>
							
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
</div><?php }} ?>
