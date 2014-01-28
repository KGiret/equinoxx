<?php /* Smarty version Smarty-3.1.14, created on 2013-08-17 12:09:53
         compiled from "C:\wamp\www\equinoxx\tpl\pages\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11395520f458e2fa387-60754234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e85a3ba85fb6a6ea6617dace661fa61c9107a74' => 
    array (
      0 => 'C:\\wamp\\www\\equinoxx\\tpl\\pages\\index.tpl',
      1 => 1376734192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11395520f458e2fa387-60754234',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_520f458e367110_17111989',
  'variables' => 
  array (
    'allArticles' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520f458e367110_17111989')) {function content_520f458e367110_17111989($_smarty_tpl) {?><div>
     <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allArticles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
	 
	 <?php echo $_smarty_tpl->tpl_vars['article']->value['titre'];?>

	 
	 <?php echo $_smarty_tpl->tpl_vars['article']->value['contenu'];?>

	 
	 <?php } ?>
</div><?php }} ?>