<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-11-17 05:05:40
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:265582d2c946be258-21390328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f0c64c33a56672786c623aa571605488c202690' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1470143540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '265582d2c946be258-21390328',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rooturl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_582d2c94794c66_54821796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582d2c94794c66_54821796')) {function content_582d2c94794c66_54821796($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
