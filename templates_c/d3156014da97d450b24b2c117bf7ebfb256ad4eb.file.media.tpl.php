<?php /* Smarty version Smarty-3.1.14, created on 2014-01-28 08:37:06
         compiled from "C:\wamp\www\KevinGiret-Rendu\tpl\front\media.tpl" */ ?>
<?php /*%%SmartyHeaderCode:359252c87a89705998-64582969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3156014da97d450b24b2c117bf7ebfb256ad4eb' => 
    array (
      0 => 'C:\\wamp\\www\\KevinGiret-Rendu\\tpl\\front\\media.tpl',
      1 => 1390898221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '359252c87a89705998-64582969',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c87a8977d747_75155722',
  'variables' => 
  array (
    'titre2' => 0,
    'type' => 0,
    'media' => 0,
    'screen' => 0,
    'tier' => 0,
    'video' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c87a8977d747_75155722')) {function content_52c87a8977d747_75155722($_smarty_tpl) {?>	<h2 id="media_title"><?php echo $_smarty_tpl->tpl_vars['titre2']->value;?>
</h2>
		<?php if ($_smarty_tpl->tpl_vars['type']->value=='screen'){?>
			<div id="media">
				<?php  $_smarty_tpl->tpl_vars['screen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['screen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['media']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['screen']->key => $_smarty_tpl->tpl_vars['screen']->value){
$_smarty_tpl->tpl_vars['screen']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['screen']->value['screen_nom']!='Pas de screenshot'){?>
						<a class="fancybox" rel="group" href="web/img/news/t<?php echo $_smarty_tpl->tpl_vars['tier']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['screen']->value['screen_nom'];?>
.jpg"><img class="media_screen" src="web/img/news/t<?php echo $_smarty_tpl->tpl_vars['tier']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['screen']->value['screen_nom'];?>
.jpg" title="<?php echo $_smarty_tpl->tpl_vars['screen']->value['screen_nom'];?>
"/></a>
					<?php }?>
				<?php } ?>
			</div>
		<?php }else{ ?>
			<div id="media">
				<?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['media']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value){
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['video']->value['video_lien']!='vide'){?>
						<iframe width="315" height="195" class="media_video" src="http://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['video']->value['video_lien'];?>
?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
					<?php }?>
				<?php } ?>
			</div>
		<?php }?>
<?php }} ?>