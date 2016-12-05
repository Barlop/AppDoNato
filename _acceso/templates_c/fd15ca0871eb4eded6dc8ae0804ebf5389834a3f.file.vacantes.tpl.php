<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-05 05:50:37
         compiled from "C:\xampp\htdocs\app_donato\templates\vacantes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15405844e8fae79e98-01556793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd15ca0871eb4eded6dc8ae0804ebf5389834a3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app_donato\\templates\\vacantes.tpl',
      1 => 1480913434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15405844e8fae79e98-01556793',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5844e8faed5e50_50488621',
  'variables' => 
  array (
    'usuario' => 0,
    'rooturl' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5844e8faed5e50_50488621')) {function content_5844e8faed5e50_50488621($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templates']->value)."/_header_acceso.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
	<form method="post" action="vacantes.php" enctype="multipart/form-data">
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['contador'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['contador']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['name'] = 'contador';
$_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['id']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['contador']['total']);
?>
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contador']['index']]['empresa_id'];?>
">
		<?php endfor; endif; ?>
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
</div><?php }} ?>
