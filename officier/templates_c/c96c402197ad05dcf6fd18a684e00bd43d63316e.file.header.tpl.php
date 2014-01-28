<?php /* Smarty version Smarty-3.1.14, created on 2014-01-04 18:44:38
         compiled from "C:\wamp\www\equinoxx\tpl\officier\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:549952baef9cf3ae45-37468439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c96c402197ad05dcf6fd18a684e00bd43d63316e' => 
    array (
      0 => 'C:\\wamp\\www\\equinoxx\\tpl\\officier\\header.tpl',
      1 => 1388861075,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '549952baef9cf3ae45-37468439',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52baef9d327ba1_78626896',
  'variables' => 
  array (
    'page' => 0,
    'affirmation' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52baef9d327ba1_78626896')) {function content_52baef9d327ba1_78626896($_smarty_tpl) {?><!DOCTYPE html>
<html lang="fr">
	<head>
        <title>EquinoXx - Administration</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="../web/css/admin.css"/>
        <link rel="shortcut icon" href="../web/img/favicon.ico" />
		<?php if ($_smarty_tpl->tpl_vars['page']->value=='accueil'||$_smarty_tpl->tpl_vars['page']->value=='roster'){?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value=='accueil'){?>
				<script type="text/javascript" src="../web/js/tinymce/tinymce.min.js"></script>
				<script type="text/javascript">
					tinymce.init({
						selector: "textarea"
					});
				</script>
			<?php }?>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
			<script src="../web/js/jquery.chained.js" type="text/javascript" charset="utf-8"></script>
			<script type="text/javascript" charset="utf-8">
			$(function(){
				<?php if ($_smarty_tpl->tpl_vars['page']->value=='accueil'){?>
					$("#screenId").chained("#articleNumeroTier");
					$("#videoId").chained("#articleNumeroTier");
					<?php }elseif($_smarty_tpl->tpl_vars['page']->value=='roster'){?>
						$("#idSpe").chained("#idClass");
				<?php }?>
			});
			</script>
		<?php }?>
	</head>

	<body id="cms">	
		<h1>EquinoXx</h1>
		<h2>Administration</h2>
		<ul id="nav">
		<li id="nav1"><a href="?page=accueil">News</a></li>
		<li id="nav2"><a href="?page=recrutement">Recrutement</a></li>
		<li id="nav3"><a href="?page=roster">Roster</a></li>
		<li id="nav4"><a href="?page=screenshots">Screenshots</a></li>
		<li id="nav5"><a href="?page=videos">Vidéos</a></li>
		<li id="nav6"><a href="?page=tiers">Tiers</a></li>
	</ul>


<div id="column">
<?php if (isset($_smarty_tpl->tpl_vars['affirmation']->value)){?>
	<div id="affirmation">
		<?php echo $_smarty_tpl->tpl_vars['affirmation']->value;?>

	</div>
	<?php }elseif(isset($_smarty_tpl->tpl_vars['error']->value)){?>
		<div id="error">
			<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

		</div>
<?php }?>



		<?php }} ?>