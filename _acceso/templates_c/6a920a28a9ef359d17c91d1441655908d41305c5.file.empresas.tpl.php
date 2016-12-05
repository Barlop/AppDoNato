<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-02 01:15:56
         compiled from "..\templates\empresas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4140583fb66bd62437-44161602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a920a28a9ef359d17c91d1441655908d41305c5' => 
    array (
      0 => '..\\templates\\empresas.tpl',
      1 => 1480637755,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4140583fb66bd62437-44161602',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_583fb66c2fe947_69880972',
  'variables' => 
  array (
    'loop' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583fb66c2fe947_69880972')) {function content_583fb66c2fe947_69880972($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templates']->value)."/_header_acceso.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
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
			<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['loop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['nombre'];?>
</div>
						<div class="panel-body">
							<b>Estado: </b><i><?php echo $_smarty_tpl->tpl_vars['loop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['estado'];?>
</i><br>
							<b>Municipio: </b><i><?php echo $_smarty_tpl->tpl_vars['loop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['municipio'];?>
</i><br>
							<b>Localidad: </b><i><?php echo $_smarty_tpl->tpl_vars['loop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['localidad'];?>
</i><br>
							<b>C.P.: </b><i><?php echo $_smarty_tpl->tpl_vars['loop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['cp'];?>
</i><br>
							<b>Telefono: </b><i><?php echo $_smarty_tpl->tpl_vars['loop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['telefono'];?>
</i><br>
							<b>Correo: </b><i><?php echo $_smarty_tpl->tpl_vars['loop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['email'];?>
</i><br>
							<b>Contacto: </b><i><?php echo $_smarty_tpl->tpl_vars['loop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['contacto'];?>
</i><br>
							<b>Dirección: </b><i><?php echo $_smarty_tpl->tpl_vars['loop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['direccion'];?>
</i><br>
							<b>Giro: </b><i><?php echo $_smarty_tpl->tpl_vars['loop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['giro'];?>
</i><br>
							<b>Colonia: </b><i><?php echo $_smarty_tpl->tpl_vars['loop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['colonia'];?>
</i>
						</div>
					</div>
				</div>
			<?php endfor; endif; ?>
		</div>
	</div>
</div><?php }} ?>
