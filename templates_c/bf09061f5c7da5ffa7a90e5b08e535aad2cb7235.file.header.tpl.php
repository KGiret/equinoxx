<?php /* Smarty version Smarty-3.1.14, created on 2013-12-14 20:09:21
         compiled from "C:\wamp\www\equinoxx\tpl\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30514520f456d5c5127-26040008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf09061f5c7da5ffa7a90e5b08e535aad2cb7235' => 
    array (
      0 => 'C:\\wamp\\www\\equinoxx\\tpl\\header.tpl',
      1 => 1387051758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30514520f456d5c5127-26040008',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_520f456d6044b6_36743842',
  'variables' => 
  array (
    'title' => 0,
    'page' => 0,
    'titre' => 0,
    'fiveImages' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520f456d6044b6_36743842')) {function content_520f456d6044b6_36743842($_smarty_tpl) {?><!DOCTYPE html>
<html lang="fr">
<head>
        <title>EquinoXx - <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta name="description" content="Site officiel de la guilde PvE hl EquinoXx." />
		<link rel="stylesheet" type="text/css" href="web/css/style.css"/>
        <link rel="shortcut icon" href="web/img/favicon.ico" />
        <!-- On importe jQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
		<script type="text/javascript" src="web/js/infiniteCarousel/jquery.infinitecarousel.js"></script>

</script>
</head>
<body id="cms">
	<header>
		<a href="?page=accueil" id="home"></a>
		<ul id="top_menu">
			<li id="top2"><a href="http://fr.twitch.tv/linkoff" target="blank"></a></li>
			<li id="top1"><a href="https://www.facebook.com/leniwow" target="blank"></a></li>
			<li id="top3"><a href="?page=archives">Archives</a></li>
			<li id="top4"><a href="http://www.worldoflogs.com/guilds/213315/" target="blank">WoL</a></li>
		</ul>
		
		<ul id="nav">
			<li id="nav1" <?php if ($_smarty_tpl->tpl_vars['page']->value=='accueil'){?>class="selected"<?php }?>><a href="?page=accueil">News</a></li>
			<li id="nav2"><a href="http://equinoxx.forumpro.fr/" target="blank">Forum</a></li>
			<li id="nav3"><a href="http://www.wowprogress.com/guild/eu/archimonde/EquinoXx" target="blank">Avancée</a></li>
			<li id="nav4" <?php if ($_smarty_tpl->tpl_vars['page']->value=='roster'){?>class="selected"<?php }?>><a href="?page=roster" >Roster</a></li>
			<li id="nav5" <?php if ($_smarty_tpl->tpl_vars['page']->value=='media'){?>class="selected"<?php }?>><a href="?page=media">Média</a></li>
			<li id="nav6"><a href="http://equinoxx.forumpro.fr/f3-candidature" target="blank">Apply</a></li>
		</ul>
	</header>
	<div id="column">
	<h1><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</h1>
	<?php if (isset($_smarty_tpl->tpl_vars['page']->value)){?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value=='accueil'){?>
			<script type="text/javascript">
				$(function(){
					$('#carousel').infiniteCarousel();
				});
			</script>
			
			<div id="carousel">
				<ul>
					<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fiveImages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
						<li>
							<img src="web/img/news/t16/<?php echo $_smarty_tpl->tpl_vars['image']->value['screen_nom'];?>
-diapo.png" width="892" height="350"/>
						</li>
					<?php } ?>
				</ul>
			</div>
			<?php }elseif($_smarty_tpl->tpl_vars['page']->value!='accueil'){?>
				<img src="web/img/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.jpg" id="page_img" />
		<?php }?>
		
		
	<?php }?>	<?php }} ?>