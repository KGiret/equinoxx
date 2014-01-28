<?php /* Smarty version Smarty-3.1.14, created on 2014-01-15 11:14:21
         compiled from "C:\wamp\www\KevinGiret-Rendu\tpl\front\accueil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2476752c876bda0aa67-54109051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '641d19acd5689dc68ec6fda45738817589814ba3' => 
    array (
      0 => 'C:\\wamp\\www\\KevinGiret-Rendu\\tpl\\front\\accueil.tpl',
      1 => 1389784459,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2476752c876bda0aa67-54109051',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c876bda5fda4_00302687',
  'variables' => 
  array (
    'allArticles' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c876bda5fda4_00302687')) {function content_52c876bda5fda4_00302687($_smarty_tpl) {?>			
			<ul id="news">
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
" target="blank">Vidéo ici</a><?php }else{ ?>Bientôt en vidéo<?php }?></p>
				<div class="contenu"><?php echo $_smarty_tpl->tpl_vars['article']->value['article_contenu'];?>
</div>
				<?php if ($_smarty_tpl->tpl_vars['article']->value['screen_nom']!='Pas de screenshot'){?>
					<img src="web/img/news/t<?php echo $_smarty_tpl->tpl_vars['article']->value['tier_numero'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['screen_nom'];?>
.jpg"/>
					<?php }else{ ?>
						<p class="screenSoon">Screenshot bientôt !</p>
				<?php }?>	
			</li>
			<?php } ?>
			
			</ul>

			
			
			
			<?php }} ?>