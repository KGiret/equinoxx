<?php /* Smarty version Smarty-3.1.14, created on 2013-12-06 09:25:07
         compiled from "C:\wamp\www\equinoxx\tpl\pages\accueil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13175523340d7edc658-93327016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4d1a00e6a8ae602930d5590ff50094e577ea668' => 
    array (
      0 => 'C:\\wamp\\www\\equinoxx\\tpl\\pages\\accueil.tpl',
      1 => 1386321895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13175523340d7edc658-93327016',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523340d8092713_62476190',
  'variables' => 
  array (
    'allArticles' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523340d8092713_62476190')) {function content_523340d8092713_62476190($_smarty_tpl) {?>			
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
				<p id="date_video"><?php echo $_smarty_tpl->tpl_vars['article']->value['article_date'];?>
 - <?php if ($_smarty_tpl->tpl_vars['article']->value['video_lien']!=''){?><a href="http://www.youtube.com/watch?v=<?php echo $_smarty_tpl->tpl_vars['article']->value['video_lien'];?>
" target="blank">Vidéo ici</a><?php }else{ ?>Bientôt en vidéo<?php }?></p>
				<p id="contenu"><?php echo $_smarty_tpl->tpl_vars['article']->value['article_contenu'];?>
</p>
				<img src="web/img/news/t<?php echo $_smarty_tpl->tpl_vars['article']->value['tier_numero'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['screen_nom'];?>
-article.png"/>
			</li>
			<?php } ?>
			
			</ul>

			
			
			
			<?php }} ?>