<?php /* Smarty version Smarty-3.1.14, created on 2013-12-06 09:58:11
         compiled from "C:\wamp\www\equinoxx\tpl\pages\recrutement.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7637526147f6e2dad5-66510436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a30eeac7f77d64d8163be377ff7aed8cc5843be9' => 
    array (
      0 => 'C:\\wamp\\www\\equinoxx\\tpl\\pages\\recrutement.tpl',
      1 => 1386323888,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7637526147f6e2dad5-66510436',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526147f6e57674_58441737',
  'variables' => 
  array (
    'recrutement' => 0,
    'detail' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526147f6e57674_58441737')) {function content_526147f6e57674_58441737($_smarty_tpl) {?><div id="recrut_detail"><?php  $_smarty_tpl->tpl_vars['detail'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['detail']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recrutement']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['detail']->key => $_smarty_tpl->tpl_vars['detail']->value){
$_smarty_tpl->tpl_vars['detail']->_loop = true;
?>

 <?php echo $_smarty_tpl->tpl_vars['detail']->value['recrutement_contenu'];?>

<?php } ?>
</div><?php }} ?>