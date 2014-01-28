<?php /* Smarty version Smarty-3.1.14, created on 2014-01-28 10:12:43
         compiled from "C:\wamp\www\KevinGiret-Rendu\tpl\front\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1794552c876bd4dcb38-86168647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '968e50862903fcc2c4027ef5f2040a160e200bca' => 
    array (
      0 => 'C:\\wamp\\www\\KevinGiret-Rendu\\tpl\\front\\header.tpl',
      1 => 1390903961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1794552c876bd4dcb38-86168647',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c876bd8075b3_26394716',
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
<?php if ($_valid && !is_callable('content_52c876bd8075b3_26394716')) {function content_52c876bd8075b3_26394716($_smarty_tpl) {?><!DOCTYPE html>
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
		<?php if ($_smarty_tpl->tpl_vars['page']->value=='accueil'){?>
			<script type="text/javascript" src="web/js/infiniteCarousel/jquery.infinitecarousel.js"></script>
			<?php }elseif($_smarty_tpl->tpl_vars['page']->value=='media'){?>
				<link rel="stylesheet" href="web/js/fancyBox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
				<script type="text/javascript" src="web/js/fancyBox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
		<?php }?>		
</script>
</head>
<body id="cms">
	<header>
		<a href="?page=accueil" id="home"></a>
		<ul id="top_menu">
			<li id="top1"><a href="http://www.wowprogress.com/guild/eu/archimonde/EquinoXx" target="blank">WoW Progress</a></li>
			<li id="top2"><a href="http://www.worldoflogs.com/guilds/213315/" target="blank">World of log</a></li>	
			<li id="top3"><a href="http://eu.battle.net/wow/fr/guild/archimonde/EquinoXx/" target="blank">Armurerie</a></li>
		</ul>
		
		<ul id="nav">
			<li id="nav1" <?php if ($_smarty_tpl->tpl_vars['page']->value=='accueil'){?>class="selected"<?php }?>><a href="?page=accueil">News</a></li>
			<li id="nav2"><a href="http://equinoxx.forumpro.fr/" target="blank">Forum</a></li>
			<li id="nav3" <?php if ($_smarty_tpl->tpl_vars['page']->value=='roster'){?>class="selected"<?php }?>><a href="?page=roster" >Roster</a></li>
			<li id="nav4" <?php if ($_smarty_tpl->tpl_vars['page']->value=='media'){?>class="selected"<?php }?>><a href="?page=media">Média</a></li>
			<li id="nav5"><a href="http://equinoxx.forumpro.fr/f3-candidature" target="blank">Apply</a></li>
			<li id="nav6" <?php if ($_smarty_tpl->tpl_vars['page']->value=='archives'){?>class="selected"<?php }?>><a href="?page=archives">Archives</a></li>
		</ul>
	</header>
	<div id="column">
	<h1 id="titre_<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
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
						<?php if ($_smarty_tpl->tpl_vars['image']->value['screen_nom']!='Pas de screenshot'){?>
							<li>
								<img src="web/img/news/t<?php echo $_smarty_tpl->tpl_vars['image']->value['tier_numero'];?>
/<?php echo $_smarty_tpl->tpl_vars['image']->value['screen_nom'];?>
.jpg" width="892" height="350"/>
							</li>
						<?php }?>
					<?php } ?>
				</ul>
			</div>
			<?php }elseif($_smarty_tpl->tpl_vars['page']->value!='accueil'&&$_smarty_tpl->tpl_vars['page']->value!='mentions'){?>
				<img src="web/img/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.jpg" id="page_img" />
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value=='media'){?>
			<script type="text/javascript">
				$(document).ready(function() {
					$(".fancybox").fancybox();
				});
			</script>
		<?php }?>
		
		
	<?php }?>	<?php }} ?>