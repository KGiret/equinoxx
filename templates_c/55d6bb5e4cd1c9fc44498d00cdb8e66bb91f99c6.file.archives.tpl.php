<?php /* Smarty version Smarty-3.1.14, created on 2014-01-27 10:23:06
         compiled from "C:\wamp\www\KevinGiret-Rendu\tpl\front\archives.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3242452e24bbf9d1aa9-07448057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55d6bb5e4cd1c9fc44498d00cdb8e66bb91f99c6' => 
    array (
      0 => 'C:\\wamp\\www\\KevinGiret-Rendu\\tpl\\front\\archives.tpl',
      1 => 1390818185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3242452e24bbf9d1aa9-07448057',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52e24bbf9d27f8_23901627',
  'variables' => 
  array (
    'allArticles' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e24bbf9d27f8_23901627')) {function content_52e24bbf9d27f8_23901627($_smarty_tpl) {?><ul id="old_news">
			<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allArticles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['article']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->iteration++;
 $_smarty_tpl->tpl_vars['article']->last = $_smarty_tpl->tpl_vars['article']->iteration === $_smarty_tpl->tpl_vars['article']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['new']['last'] = $_smarty_tpl->tpl_vars['article']->last;
?>
			<li <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['new']['last']){?> id="last"<?php }?>>
				<h2><?php echo $_smarty_tpl->tpl_vars['article']->value['article_titre'];?>
</h2>
				<p class="date_video"><?php echo $_smarty_tpl->tpl_vars['article']->value['article_date'];?>
 - <?php if ($_smarty_tpl->tpl_vars['article']->value['video_lien']!='vide'){?><a href="http://www.youtube.com/watch?v=<?php echo $_smarty_tpl->tpl_vars['article']->value['video_lien'];?>
" target="blank">Vidéo ici</a><?php }else{ ?>Pas de vidéo<?php }?></p>
				<div class="contenu"><?php echo $_smarty_tpl->tpl_vars['article']->value['article_contenu'];?>
</div>
				<?php if ($_smarty_tpl->tpl_vars['article']->value['screen_nom']!='Pas de screenshot'){?>
					<img src="web/img/news/t<?php echo $_smarty_tpl->tpl_vars['article']->value['tier_numero'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['screen_nom'];?>
.jpg"/>
					<?php }else{ ?>
						<p class="screenSoon">Pas de screenshot !</p>
				<?php }?>	
			</li>
			<?php } ?>
			
			</ul><?php }} ?>