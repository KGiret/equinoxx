<?php /* Smarty version Smarty-3.1.14, created on 2013-12-25 20:36:24
         compiled from "C:\wamp\www\equinoxx\tpl\officier\connection.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145652bb41c83d4844-27961138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab18122b3d81deca7f77ccfc086f6a8ad521f61c' => 
    array (
      0 => 'C:\\wamp\\www\\equinoxx\\tpl\\officier\\connection.tpl',
      1 => 1387200355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145652bb41c83d4844-27961138',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'login' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52bb41c85c3053_29713407',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bb41c85c3053_29713407')) {function content_52bb41c85c3053_29713407($_smarty_tpl) {?><!DOCTYPE html>
<html lang="fr">
	<head>
        <title>EquinoXx - Administration</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="../web/css/admin.css"/>
        <link rel="shortcut icon" href="../web/img/favicon.ico" />
	</head>
	<body id="cms">
		<h1>EquinoXx</h1>
		<h2>Administration</h2>
		<div id="formulaire">
			<?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?>
				<p id="form_error">*<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
			<?php }?>
			<form method=post action="">
			<input type="text" name="login" required placeholder="Login" <?php if (isset($_smarty_tpl->tpl_vars['login']->value)){?>value=<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
<?php }?>>
			
			<input type="password" name="password" required placeholder="Password">
			
			<input type="submit" name="connec" value="Se connecter">
			</form>
		</div>
	</body>
</html><?php }} ?>