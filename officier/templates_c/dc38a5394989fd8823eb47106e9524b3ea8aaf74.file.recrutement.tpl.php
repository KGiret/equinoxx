<?php /* Smarty version Smarty-3.1.14, created on 2014-01-20 10:47:42
         compiled from "C:\wamp\www\KevinGiret-Rendu\tpl\officier\recrutement.tpl" */ ?>
<?php /*%%SmartyHeaderCode:347252c877f7d45390-01090876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc38a5394989fd8823eb47106e9524b3ea8aaf74' => 
    array (
      0 => 'C:\\wamp\\www\\KevinGiret-Rendu\\tpl\\officier\\recrutement.tpl',
      1 => 1390214858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '347252c877f7d45390-01090876',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c877f7da8124_34124725',
  'variables' => 
  array (
    'page' => 0,
    'titre' => 0,
    'action' => 0,
    'specialites' => 0,
    'specialite' => 0,
    'recrutement' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c877f7da8124_34124725')) {function content_52c877f7da8124_34124725($_smarty_tpl) {?><h3 id="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</h3>

<?php if (!(isset($_smarty_tpl->tpl_vars['action']->value))){?>
	<a href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&action=detail" id="add_button">+ Modifier les détails</a>

	<table cellspacing=0>
		<tr>
			<th id="th_nom">Classe</th>
			<th>Spécialité</th>
			<th>État</th>
			<th id="th_action">Action</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['specialite'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['specialite']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['specialites']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['specialite']->key => $_smarty_tpl->tpl_vars['specialite']->value){
$_smarty_tpl->tpl_vars['specialite']->_loop = true;
?>
			<tr>
				<td class="td_nom classe<?php echo $_smarty_tpl->tpl_vars['specialite']->value['spe_id_classe'];?>
"><?php echo $_smarty_tpl->tpl_vars['specialite']->value['classe_nom'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['specialite']->value['spe_nom'];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['specialite']->value['spe_etat']==0){?>Fermé<?php }else{ ?>Ouvert<?php }?></td>
				<td class="td_action"><?php if ($_smarty_tpl->tpl_vars['specialite']->value['spe_etat']==0){?><a href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&action=open&id=<?php echo $_smarty_tpl->tpl_vars['specialite']->value['spe_id'];?>
"><img src="../web/img/activer.png" title="Ouvrir"/></a><?php }else{ ?><a href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&action=close&id=<?php echo $_smarty_tpl->tpl_vars['specialite']->value['spe_id'];?>
"><img src="../web/img/remove.png" title="Fermer"/></a><?php }?></td>
			</tr>
		<?php } ?>
	</table>
	<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='detail'){?>
		<form method=POST action="">
			<textarea name="recrutementDetail"><?php if ((isset($_smarty_tpl->tpl_vars['recrutement']->value))){?><?php echo $_smarty_tpl->tpl_vars['recrutement']->value;?>
<?php }?></textarea>	
			<input type="submit" name="annuler" id="Annul" value="Annuler">
			<input type="submit" name="modifier" id="Ajout" value="Enregistrer">
		</form>
<?php }?><?php }} ?>