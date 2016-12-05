<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-02 13:12:21
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:265405799ffc18ac6f5-04278142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abef2073bd829a5a0e68cd14e43164aa2059a979' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1470143539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '265405799ffc18ac6f5-04278142',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5799ffc1abca13_62790717',
  'variables' => 
  array (
    'rooturl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5799ffc1abca13_62790717')) {function content_5799ffc1abca13_62790717($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<input type="hidden" id="rooturl" value="<?php echo $_smarty_tpl->tpl_vars['rooturl']->value;?>
">
<br><br>
<div class="container">
	<div class="alert alert-danger alertas text-center">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<span>
			<strong>El usuario o la contraseña no son válidos, favor de verificarlo</strong>
		</span>
	</div>
</div>
<div class="container-fluid vcenter">
	<div class="form-group">
		<input type="text" id="usuario" class="form-control input-lg" placeholder="Usuario">
	</div>
	<div class="form-group">
		<input type="password" id="password" class="form-control input-lg" placeholder="Contraseña">
	</div>
	<div class="form-group">
		<button type="button" id="entrar">
			Iniciar sesión	
		</button>
	</div>
</div>

<?php echo '<script'; ?>
>
	function muestraReloj(){
		var fechaHora = new Date();
		var horas = fechaHora.getHours();
		var minutos = fechaHora.getMinutes();
		var segundos = fechaHora.getSeconds();

		var sufijo = ' am';
		if(horas > 12) {
			horas = horas - 12;
			sufijo = ' pm';
		}

		if(horas < 10) { horas = '0' + horas; }
		if(minutos < 10) { minutos = '0' + minutos; }
		if(segundos < 10) { segundos = '0' + segundos; }

		document.getElementById("reloj").innerHTML = horas+':'+minutos+':'+segundos+sufijo;	
	}
	window.onload = function() {
		setInterval(muestraReloj, 1000);
	}
<?php echo '</script'; ?>
>

<div id="titulo">
	<h5>Departamento de vinculación</h5>
	<h6>TESCHA</h6>
	<div id="reloj" />
</div>

<?php }} ?>
