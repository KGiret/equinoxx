<?php /* Smarty version Smarty-3.1.14, created on 2013-09-13 18:00:44
         compiled from "C:\wamp\www\equinoxx\tpl\pages\test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31660523342515f7287-83589191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3515b7ee0479fc1f967419b1e76269473d5dd08' => 
    array (
      0 => 'C:\\wamp\\www\\equinoxx\\tpl\\pages\\test.tpl',
      1 => 1379094673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31660523342515f7287-83589191',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5233425161bb75_89060398',
  'variables' => 
  array (
    'allArticles' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5233425161bb75_89060398')) {function content_5233425161bb75_89060398($_smarty_tpl) {?>
			<ul id="news">
			<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allArticles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
			<li>
			<h3><?php echo $_smarty_tpl->tpl_vars['article']->value['titre'];?>
</h3>
			
			<?php echo $_smarty_tpl->tpl_vars['article']->value['contenu'];?>

			</li>
			<?php } ?>
			
			</ul>
<?php }} ?>