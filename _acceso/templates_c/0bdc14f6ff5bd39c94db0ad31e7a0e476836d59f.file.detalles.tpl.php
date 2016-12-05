<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-05 05:51:29
         compiled from "C:\xampp\htdocs\app_donato\templates\detalles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:268958434a09e072c7-66997314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bdc14f6ff5bd39c94db0ad31e7a0e476836d59f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app_donato\\templates\\detalles.tpl',
      1 => 1480913484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '268958434a09e072c7-66997314',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58434a09e9ce70_59036761',
  'variables' => 
  array (
    'usuario' => 0,
    'rooturl' => 0,
    'contador' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58434a09e9ce70_59036761')) {function content_58434a09e9ce70_59036761($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templates']->value)."/_header_acceso.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
		<div class="col-md-6 col-md-offset-3">
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detalles'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['name'] = 'detalles';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['contador']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['detalles']['total']);
?>
			<div class="panel panel-default animated fadeIn">
				<div class="panel-heading">Detalles de la empresa <?php echo $_smarty_tpl->tpl_vars['contador']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detalles']['index']]['empresa_nombre'];?>
</div>
					<div class="panel-body text-center">
						<div class="col-md-4">
							<img src="img_logos/<?php echo $_smarty_tpl->tpl_vars['contador']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detalles']['index']]['empresa_id'];?>
.jpg" class="img-circle logo">
						</div>
						<font size="4" color="cyan"><b><?php echo $_smarty_tpl->tpl_vars['contador']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detalles']['index']]['empresa_nombre'];?>
</b></font><br>
						<?php echo $_smarty_tpl->tpl_vars['contador']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detalles']['index']]['direccion'];?>
&nbsp;&nbsp;&nbsp;&nbsp;Col. <?php echo $_smarty_tpl->tpl_vars['contador']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detalles']['index']]['colonia'];?>
 <br>
						<?php echo $_smarty_tpl->tpl_vars['contador']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detalles']['index']]['municipio'];?>
, <?php echo $_smarty_tpl->tpl_vars['contador']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detalles']['index']]['estado'];?>
. C.P.	<?php echo $_smarty_tpl->tpl_vars['contador']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detalles']['index']]['cp'];?>
<br>
						Tel. <?php echo $_smarty_tpl->tpl_vars['contador']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detalles']['index']]['telefono'];?>
&nbsp;&nbsp;&nbsp;&nbsp;Correo: <?php echo $_smarty_tpl->tpl_vars['contador']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detalles']['index']]['email'];?>
<br>
						Contacto: <?php echo $_smarty_tpl->tpl_vars['contador']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detalles']['index']]['contacto'];?>

					</div>
				</div>
			<?php endfor; endif; ?>
			<div class="form-group">
				<a href="<?php echo $_smarty_tpl->tpl_vars['rooturl']->value;?>
_acceso" class="btn btn-warning"><i class=" glyphicon glyphicon-arrow-left"></i> Ver empresas</a>
			</div>
		</div>
	</div>
</div><?php }} ?>
