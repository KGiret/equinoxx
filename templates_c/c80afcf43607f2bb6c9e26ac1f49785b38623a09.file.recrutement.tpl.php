<?php /* Smarty version Smarty-3.1.14, created on 2013-12-16 15:30:19
         compiled from "C:\wamp\www\equinoxx\tpl\front\recrutement.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1922052af1c8bd20849-06467629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c80afcf43607f2bb6c9e26ac1f49785b38623a09' => 
    array (
      0 => 'C:\\wamp\\www\\equinoxx\\tpl\\front\\recrutement.tpl',
      1 => 1386323888,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1922052af1c8bd20849-06467629',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'recrutement' => 0,
    'detail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52af1c8bdaf475_36745772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52af1c8bdaf475_36745772')) {function content_52af1c8bdaf475_36745772($_smarty_tpl) {?><div id="recrut_detail"><?php  $_smarty_tpl->tpl_vars['detail'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['detail']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recrutement']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['detail']->key => $_smarty_tpl->tpl_vars['detail']->value){
$_smarty_tpl->tpl_vars['detail']->_loop = true;
?>

 <?php echo $_smarty_tpl->tpl_vars['detail']->value['recrutement_contenu'];?>

<?php } ?>
</div><?php }} ?>