<?php /* Smarty version Smarty-3.1.14, created on 2014-01-16 10:09:31
         compiled from "C:\wamp\www\KevinGiret-Rendu\tpl\officier\demo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1206452d5b348f08de9-31559933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58eea56ca51441d74df42de7ce34c0da8efa5d8f' => 
    array (
      0 => 'C:\\wamp\\www\\KevinGiret-Rendu\\tpl\\officier\\demo.tpl',
      1 => 1389866969,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1206452d5b348f08de9-31559933',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52d5b349008749_12046851',
  'variables' => 
  array (
    'etudiants' => 0,
    'etudiant' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d5b349008749_12046851')) {function content_52d5b349008749_12046851($_smarty_tpl) {?><h3></h3>
<table cellspacing=0>
	<tr>
		<th id="th_nom">Nom</th>
		<th>Prénom</th>
		<th id="th_action">Classe</th>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['etudiant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['etudiant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['etudiants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['etudiant']->key => $_smarty_tpl->tpl_vars['etudiant']->value){
$_smarty_tpl->tpl_vars['etudiant']->_loop = true;
?>
		<tr>
			<td class="td_nom"><?php echo $_smarty_tpl->tpl_vars['etudiant']->value['etudiant_nom'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['etudiant']->value['etudiant_prenom'];?>
</td>
			<td class="td_action"><?php echo $_smarty_tpl->tpl_vars['etudiant']->value['classe_intitule'];?>
</td>
		</tr>
	<?php } ?>
</table><?php }} ?>