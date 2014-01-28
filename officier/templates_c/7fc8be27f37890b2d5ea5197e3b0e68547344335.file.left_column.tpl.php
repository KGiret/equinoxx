<?php /* Smarty version Smarty-3.1.14, created on 2013-12-25 15:40:45
         compiled from "C:\wamp\www\equinoxx\tpl\officier\left_column.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2037652baef9d37a5a2-96259386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fc8be27f37890b2d5ea5197e3b0e68547344335' => 
    array (
      0 => 'C:\\wamp\\www\\equinoxx\\tpl\\officier\\left_column.tpl',
      1 => 1387986010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2037652baef9d37a5a2-96259386',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52baef9d53f489_17015579',
  'variables' => 
  array (
    'page' => 0,
    'alltier' => 0,
    'tier' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52baef9d53f489_17015579')) {function content_52baef9d53f489_17015579($_smarty_tpl) {?><div id="left_column_<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" class="left_column">
	<h4>Liste des tiers</h4>
	<ul id="liste_tier">
	<?php  $_smarty_tpl->tpl_vars['tier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alltier']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tier']->key => $_smarty_tpl->tpl_vars['tier']->value){
$_smarty_tpl->tpl_vars['tier']->_loop = true;
?>
						<li id="tier<?php echo $_smarty_tpl->tpl_vars['tier']->value['tier_id'];?>
">
							<a href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&tier=<?php echo $_smarty_tpl->tpl_vars['tier']->value['tier_numero'];?>
"><?php echo $_smarty_tpl->tpl_vars['tier']->value['tier_nom'];?>
</a>
						</li>
					<?php } ?>
	</ul>
</div>
<div id="center_column"><?php }} ?>