<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-19 16:03:37
         compiled from "C:\wamp\www\app_donato\templates\\_header_acceso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2709557a0a2258e79a1-27082657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d53b8e77983928a6e6a45b7f7fa8e64f53bb963' => 
    array (
      0 => 'C:\\wamp\\www\\app_donato\\templates\\\\_header_acceso.tpl',
      1 => 1474301014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2709557a0a2258e79a1-27082657',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57a0a22593dd04_76192274',
  'variables' => 
  array (
    'rooturl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a0a22593dd04_76192274')) {function content_57a0a22593dd04_76192274($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TESCHA - Vinculación</title>

	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['rooturl']->value;?>
css/general_acceso.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['rooturl']->value;?>
css/fondos.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['rooturl']->value;?>
include/bootstrap/css/bootstrap.min.slate.css">
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['rooturl']->value;?>
include/bootstrap/css/bootstrap-theme.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['rooturl']->value;?>
include/fileInput/css/fileinput.min.css">

	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['rooturl']->value;?>
include/jquery/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['rooturl']->value;?>
js/funciones_acceso.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['rooturl']->value;?>
include/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['rooturl']->value;?>
include/fileInput/js/fileinput.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['rooturl']->value;?>
include/fileInput/js/fileinput_locale_es.js"><?php echo '</script'; ?>
>
	
</head>
<body>
	<div class="well fondoBlanco">
		<img src="<?php echo $_smarty_tpl->tpl_vars['rooturl']->value;?>
imagenes/tescha-logo.png" id="logo">
		<img src="<?php echo $_smarty_tpl->tpl_vars['rooturl']->value;?>
imagenes/estado-mexico.png" id="emexico">
	</div><?php }} ?>
