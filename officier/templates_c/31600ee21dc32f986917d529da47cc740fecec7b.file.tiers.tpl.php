<?php /* Smarty version Smarty-3.1.14, created on 2014-01-03 12:36:13
         compiled from "C:\wamp\www\equinoxx\tpl\officier\tiers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:440352c69fe3e67dc8-49519882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31600ee21dc32f986917d529da47cc740fecec7b' => 
    array (
      0 => 'C:\\wamp\\www\\equinoxx\\tpl\\officier\\tiers.tpl',
      1 => 1388752568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '440352c69fe3e67dc8-49519882',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c69fe4008ae1_89479532',
  'variables' => 
  array (
    'titre' => 0,
    'action' => 0,
    'page' => 0,
    'tiers' => 0,
    'tier' => 0,
    'infoTier' => 0,
    'nomTier' => 0,
    'numeroTier' => 0,
    'etatTier' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c69fe4008ae1_89479532')) {function content_52c69fe4008ae1_89479532($_smarty_tpl) {?><h3><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</h3>

<?php if (!(isset($_smarty_tpl->tpl_vars['action']->value))||$_smarty_tpl->tpl_vars['action']->value=='rem'){?>
	<a href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&action=add" id="add_button">+ Ajouter un tier</a>
	<table cellspacing=0>
		<tr>
			<th id="th_nom">Nom</th>
			<th>Numéro</th>
			<th>État</th>
			<th id="th_action">Actions</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['tier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tiers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tier']->key => $_smarty_tpl->tpl_vars['tier']->value){
$_smarty_tpl->tpl_vars['tier']->_loop = true;
?>
			<tr>
				<td class="td_nom"><?php echo $_smarty_tpl->tpl_vars['tier']->value['tier_nom'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['tier']->value['tier_numero'];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['tier']->value['tier_etat']==1){?>En cours<?php }else{ ?>Terminé<?php }?></td>
				<td class="td_action"><a href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&action=upd&id=<?php echo $_smarty_tpl->tpl_vars['tier']->value['tier_id'];?>
"><img src="../web/img/update.png" title="Modifier"/></a><a href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&action=rem&id=<?php echo $_smarty_tpl->tpl_vars['tier']->value['tier_id'];?>
"><img src="../web/img/remove.png" title="Supprimer"/></a></td>
			</tr>
		<?php } ?>
	</table>

	<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='upd'||$_smarty_tpl->tpl_vars['action']->value=='add'){?>
		<form method=POST action="">
			<input type="text" required name="nomTier" id="nomTier" <?php if ((isset($_smarty_tpl->tpl_vars['infoTier']->value))){?>value="<?php echo $_smarty_tpl->tpl_vars['nomTier']->value;?>
"<?php }else{ ?>placeholder="Nom du tier"<?php }?>>
			<input type="text" required name="numeroTier" id="numeroTier" <?php if ((isset($_smarty_tpl->tpl_vars['infoTier']->value))){?>value="<?php echo $_smarty_tpl->tpl_vars['numeroTier']->value;?>
"<?php }else{ ?>placeholder="Numéro du tier"<?php }?>>
			<select name="etatTier" id="etatTier" required>
				<option value="">État</option>
				<option value="1" <?php if ((isset($_smarty_tpl->tpl_vars['infoTier']->value))&&$_smarty_tpl->tpl_vars['etatTier']->value==1){?>selected="selected"<?php }?>>En cours</option>
				<option value="0" <?php if ((isset($_smarty_tpl->tpl_vars['infoTier']->value))&&$_smarty_tpl->tpl_vars['etatTier']->value==0){?>selected="selected"<?php }?>>Terminé</option>
			</select>
			
			<?php if ($_smarty_tpl->tpl_vars['action']->value=='add'){?>
				<input type="submit" name="effacer" id="Annul" value="Tout effacer">
				<input type="submit" name="ajouter" id="Ajout" value="Ajouter">
				<?php }else{ ?>
					<input type="submit" name="annuler" id="Annul" value="Annuler">
					<input type="submit" name="modifier" id="Ajout" value="Modifier">
			<?php }?>
		</form>
<?php }?><?php }} ?>