<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-11-08 13:36:58
         compiled from "C:\wamp\www\app_donato\templates\_acceso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1871157a0a098427820-84184349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dd94de3c520c56dd4a0e5c033c6cd8f8087f8df' => 
    array (
      0 => 'C:\\wamp\\www\\app_donato\\templates\\_acceso.tpl',
      1 => 1478612182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1871157a0a098427820-84184349',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57a0a098530c07_03580095',
  'variables' => 
  array (
    'usuario' => 0,
    'rooturl' => 0,
    'loop' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a0a098530c07_03580095')) {function content_57a0a098530c07_03580095($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templates']->value)."/_header_acceso.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
						<li><a href="#">Ver empresas</a></li>
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
		<div class="col-sm-3">
			<div class="panel panel-default border transparente">
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
			<div class="panel panel-default border transparente">
				<div class="panel-heading fondoBlanco">
					<strong>Empresas registradas</strong>
				</div>
				<div class="panel-body fondoBlanco">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['loop']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total']);
?>
					<?php if (empty($_smarty_tpl->tpl_vars['loop']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['loop']['index']]['num_vacantes'])) {?>
					<?php $_smarty_tpl->createLocalArrayVariable('loop', null, 0);
$_smarty_tpl->tpl_vars['loop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['num_vacantes'] = 0;?>
					<?php }?>
					<div class="empresas">
						<div class="col-md-3">
							<img src="img_logos/<?php echo $_smarty_tpl->tpl_vars['loop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['empresa_id'];?>
.jpg" class="logo">
						</div>
						<div class="col-md-5">
							<font size="4" color="cyan"><b><?php echo $_smarty_tpl->tpl_vars['loop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['empresa_nombre'];?>
</b></font><br>
							<?php echo $_smarty_tpl->tpl_vars['loop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['direccion'];?>
&nbsp;&nbsp;&nbsp;&nbsp;Col. <?php echo $_smarty_tpl->tpl_vars['loop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['colonia'];?>
 <br>
							<?php echo $_smarty_tpl->tpl_vars['loop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['municipio'];?>
, <?php echo $_smarty_tpl->tpl_vars['loop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['estado'];?>
. C.P.	<?php echo $_smarty_tpl->tpl_vars['loop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['cp'];?>
<br>
							Tel. <?php echo $_smarty_tpl->tpl_vars['loop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['telefono'];?>
&nbsp;&nbsp;&nbsp;&nbsp;Correo: <?php echo $_smarty_tpl->tpl_vars['loop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['email'];?>
<br>
							Contacto: <?php echo $_smarty_tpl->tpl_vars['loop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['contacto'];?>

						</div>
						<div class="col-md-2">
							<b>Ofertas</b>
							<div class="green-circle">
								<p class="totales"><?php echo $_smarty_tpl->tpl_vars['loop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['ofertas'];?>
</p>
							</div>
						</div>
						<div class="col-md-2">
							<b>Vacantes</b>
							<div class="violet-circle">
								<p class="totales"><?php echo $_smarty_tpl->tpl_vars['loop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['num_vacantes'];?>
</p>
							</div>
						</div>
						<div class="col-md-12 text-right detalles">
							<div class="btn-group btn-group">
								<button type="button" class="btn btn-default btn-sm" 
									onclick="window.location.href='acciones.php?id=<?php echo $_smarty_tpl->tpl_vars['loop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['empresa_id'];?>
&caso=1'">Ver detalles
								</button>
								<button type="button" class="btn btn-default btn-sm" 
									onclick="window.location.href='acciones.php?id=<?php echo $_smarty_tpl->tpl_vars['loop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['empresa_id'];?>
&caso=2'">Editar empresa
								</button>
								<button type="button" class="btn btn-default btn-sm" 
									onclick="window.location.href='acciones.php?id=<?php echo $_smarty_tpl->tpl_vars['loop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['empresa_id'];?>
&caso=3'">Eliminar empresa
								</button>
								<button type="button" class="btn btn-default btn-sm" 
									onclick="window.location.href='acciones.php?id=<?php echo $_smarty_tpl->tpl_vars['loop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['empresa_id'];?>
&caso=4'">Agreagar vacante
								</button>
							</div>
						</div>
					</div>
					<?php endfor; endif; ?>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>
