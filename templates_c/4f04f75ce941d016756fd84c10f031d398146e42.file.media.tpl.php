<?php /* Smarty version Smarty-3.1.14, created on 2014-01-04 01:22:03
         compiled from "C:\wamp\www\equinoxx\tpl\front\media.tpl" */ ?>
<?php /*%%SmartyHeaderCode:855152af1c8603eb89-80346742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f04f75ce941d016756fd84c10f031d398146e42' => 
    array (
      0 => 'C:\\wamp\\www\\equinoxx\\tpl\\front\\media.tpl',
      1 => 1388798517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '855152af1c8603eb89-80346742',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52af1c860c7cb3_60654547',
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
<?php if ($_valid && !is_callable('content_52af1c860c7cb3_60654547')) {function content_52af1c860c7cb3_60654547($_smarty_tpl) {?>	<h2 id="media_title"><?php echo $_smarty_tpl->tpl_vars['titre2']->value;?>
</h2>
		<?php if ($_smarty_tpl->tpl_vars['type']->value=='screen'){?>
			<div id="media">
				<?php  $_smarty_tpl->tpl_vars['screen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['screen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['media']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['screen']->key => $_smarty_tpl->tpl_vars['screen']->value){
$_smarty_tpl->tpl_vars['screen']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['screen']->value['screen_nom']!='vide'){?>
						<img class="media_screen" src="web/img/news/t<?php echo $_smarty_tpl->tpl_vars['tier']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['screen']->value['screen_nom'];?>
.jpg" title="<?php echo $_smarty_tpl->tpl_vars['screen']->value['screen_nom'];?>
"/>
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