<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-05 05:52:26
         compiled from "C:\xampp\htdocs\app_donato\templates\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191345844648ed7c757-70593091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8481eaa1fe5dc5ffd88ec57490c84a32db585bd8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app_donato\\templates\\editar.tpl',
      1 => 1480913544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191345844648ed7c757-70593091',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5844648ef22a82_77453966',
  'variables' => 
  array (
    'usuario' => 0,
    'rooturl' => 0,
    'editar' => 0,
    'idemp' => 0,
    'nombre' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5844648ef22a82_77453966')) {function content_5844648ef22a82_77453966($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\app_donato\\include\\smarty\\plugins\\function.html_options.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templates']->value)."/_header_acceso.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
	<div class="row">
		<div class="col-md-12">
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['editar'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['editar']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['name'] = 'editar';
$_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['editar']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['editar']['total']);
?>
			<form method="post" action="registra_empresa.php" enctype="multipart/form-d ata">
				<div class="panel panel-default border transparente animated fadeIn">
					<div class="panel-heading fondoBlanco">
						<strong>Editar empresa</strong>
					</div>
					<div class="panel-body fondoBlanco">
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label>Escriba el nombre de la empresa:</label>
									<input type="text" name="nombre" class="form-control input-sm" value="<?php echo $_smarty_tpl->tpl_vars['editar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['editar']['index']]['empresa_nombre'];?>
" required>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label>Escriba el giro de la empresa:</label>
									<input type="text" name="giro" class="form-control input-sm" value="<?php echo $_smarty_tpl->tpl_vars['editar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['editar']['index']]['giro'];?>
" required>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label>Escriba el nombre del contacto en la empresa:</label>
									<input type="text" name="contacto" class="form-control input-sm" value="<?php echo $_smarty_tpl->tpl_vars['editar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['editar']['index']]['contacto'];?>
" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label>Elija el estado:</label>
									<select required class="form-control input-sm" name="estado" id="estado" onchange="llena_municipios(this)">
										<option class="text-center" value=""><?php echo $_smarty_tpl->tpl_vars['editar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['editar']['index']]['estado'];?>
</option>
										<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['idemp']->value,'output'=>$_smarty_tpl->tpl_vars['nombre']->value),$_smarty_tpl);?>
							
									</select>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label>Elija el municipio:</label>
									<select required class="form-control input-sm" name="municipio" id="municipio" onchange="llena_localidades(this)">
										<option class="text-center" value=""><?php echo $_smarty_tpl->tpl_vars['editar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['editar']['index']]['municipio'];?>
</option>						
									</select>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label>Elija la localidad:</label>
									<select required class="form-control input-sm" name="localidad" id="localidad">
										<option class="text-center" value=""><?php echo $_smarty_tpl->tpl_vars['editar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['editar']['index']]['localidad'];?>
</option>							
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<label>Escriba la dirección:</label>
									<input type="text" required name="direccion" value="<?php echo $_smarty_tpl->tpl_vars['editar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['editar']['index']]['direccion'];?>
" class="form-control input-sm">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Escriba la colonia:</label>
									<input type="text" required name="colonia"  value="<?php echo $_smarty_tpl->tpl_vars['editar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['editar']['index']]['colonia'];?>
" class="form-control input-sm">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Escriba el código postal:</label>
									<input type="text" required name="cp" value="<?php echo $_smarty_tpl->tpl_vars['editar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['editar']['index']]['cp'];?>
" class="form-control input-sm">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Escriba el teléfono:</label>
									<input type="text" required name="telefono" value="<?php echo $_smarty_tpl->tpl_vars['editar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['editar']['index']]['telefono'];?>
" class="form-control input-sm">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>Escriba el correo electrónico:</label>
									<input type="email" required name="email" value="<?php echo $_smarty_tpl->tpl_vars['editar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['editar']['index']]['email'];?>
" class="form-control input-sm">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Confirme el correo electrónico:</label>
									<input type="email" required name="email2" value="<?php echo $_smarty_tpl->tpl_vars['editar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['editar']['index']]['email'];?>
" class="form-control input-sm">
								</div>
							</div>
						</div>
					</div>
					<div class="panel-footer text-right fondoBlanco">
						<button type="submint" class="btn btn-info btn-md">
							Actualizar
						</button>
					</div>
				</div>
			</form>
			<?php endfor; endif; ?>
		</div>
	</div>
</div><?php }} ?>
