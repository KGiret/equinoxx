<?php /* Smarty version Smarty-3.1.14, created on 2014-01-04 19:01:48
         compiled from "C:\wamp\www\equinoxx\tpl\officier\roster.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2558552baef9d5d4147-16088121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5f966fce44fa72fcf96595109c82a7579d8efa5' => 
    array (
      0 => 'C:\\wamp\\www\\equinoxx\\tpl\\officier\\roster.tpl',
      1 => 1388862106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2558552baef9d5d4147-16088121',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52baef9d5d55a1_12198863',
  'variables' => 
  array (
    'titre' => 0,
    'action' => 0,
    'page' => 0,
    'players' => 0,
    'player' => 0,
    'infoPlayer' => 0,
    'nomPlayer' => 0,
    'classes' => 0,
    'classe' => 0,
    'classPlayer' => 0,
    'spes' => 0,
    'spe' => 0,
    'spePlayer' => 0,
    'roles' => 0,
    'role' => 0,
    'rolePlayer' => 0,
    'rangs' => 0,
    'rang' => 0,
    'rangPlayer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52baef9d5d55a1_12198863')) {function content_52baef9d5d55a1_12198863($_smarty_tpl) {?><h3><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</h3>

<?php if (!(isset($_smarty_tpl->tpl_vars['action']->value))||$_smarty_tpl->tpl_vars['action']->value=='rem'){?>
	<a href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&action=add" id="add_button">+ Ajouter un joueur</a>
	<table cellspacing=0>
		<tr>
			<th id="th_nom">Joueur</th>
			<th>Classe</th>
			<th>Spécialité</th>
			<th>Rôle</th>
			<th>Rang</th>
			<th id="th_action">Actions</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['player'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['player']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['players']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['player']->key => $_smarty_tpl->tpl_vars['player']->value){
$_smarty_tpl->tpl_vars['player']->_loop = true;
?>
				<tr>
					<td class="td_nom"><?php echo $_smarty_tpl->tpl_vars['player']->value['player_nom'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['player']->value['classe_nom'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['player']->value['spe_nom'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['player']->value['role_nom'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['player']->value['rang_nom'];?>
</td>
					<td class="td_action"><a href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&action=upd&id=<?php echo $_smarty_tpl->tpl_vars['player']->value['player_id'];?>
"><img src="../web/img/update.png" title="Modifier"/></a><a href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&action=rem&id=<?php echo $_smarty_tpl->tpl_vars['player']->value['player_id'];?>
"><img src="../web/img/remove.png" title="Supprimer"/></a></td>
				</tr>
		<?php } ?>
		
	</table>
	
	<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='upd'||$_smarty_tpl->tpl_vars['action']->value=='add'){?>
		<form method=POST action="">
			<input type="text" required name="nomPlayer" id="nomPlayer" <?php if (isset($_smarty_tpl->tpl_vars['infoPlayer']->value)){?>value="<?php echo $_smarty_tpl->tpl_vars['nomPlayer']->value;?>
" <?php }else{ ?>placeholder="Joueur"<?php }?>>
			<select required name="idClass" id="idClass">
				<option value="">Classe</option>
				<?php  $_smarty_tpl->tpl_vars['classe'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['classe']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['classes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['classe']->key => $_smarty_tpl->tpl_vars['classe']->value){
$_smarty_tpl->tpl_vars['classe']->_loop = true;
?>
				{
					<option value="<?php echo $_smarty_tpl->tpl_vars['classe']->value['classe_id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['infoPlayer']->value)&&$_smarty_tpl->tpl_vars['classPlayer']->value==$_smarty_tpl->tpl_vars['classe']->value['classe_id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['classe']->value['classe_nom'];?>
</option>
				}
				<?php } ?>
			</select>
			<select required name="idSpe" id="idSpe">
				<option value="">Spécialité</option>
				<?php  $_smarty_tpl->tpl_vars['spe'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['spe']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['spes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['spe']->key => $_smarty_tpl->tpl_vars['spe']->value){
$_smarty_tpl->tpl_vars['spe']->_loop = true;
?>
				{
					<option value="<?php echo $_smarty_tpl->tpl_vars['spe']->value['spe_id'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['spe']->value['spe_id_classe'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['infoPlayer']->value)&&$_smarty_tpl->tpl_vars['spePlayer']->value==$_smarty_tpl->tpl_vars['spe']->value['spe_id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['spe']->value['spe_nom'];?>
</option>
				}
				<?php } ?>
			</select>
			<select required name="idRole" id="idRole">
				<option value="">Rôle</option>
				<?php  $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['role']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['role']->key => $_smarty_tpl->tpl_vars['role']->value){
$_smarty_tpl->tpl_vars['role']->_loop = true;
?>
				{
					<option value="<?php echo $_smarty_tpl->tpl_vars['role']->value['role_id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['infoPlayer']->value)&&$_smarty_tpl->tpl_vars['rolePlayer']->value==$_smarty_tpl->tpl_vars['role']->value['role_id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['role']->value['role_nom'];?>
</option>
				}
				<?php } ?>
			</select>
			<select required name="idRang" id="idRang">
				<option value="">Rang</option>
				<?php  $_smarty_tpl->tpl_vars['rang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rangs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rang']->key => $_smarty_tpl->tpl_vars['rang']->value){
$_smarty_tpl->tpl_vars['rang']->_loop = true;
?>
				{
					<option value="<?php echo $_smarty_tpl->tpl_vars['rang']->value['rang_id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['infoPlayer']->value)&&$_smarty_tpl->tpl_vars['rangPlayer']->value==$_smarty_tpl->tpl_vars['rang']->value['rang_id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['rang']->value['rang_nom'];?>
</option>
				}
				<?php } ?>
			</select>
			
			<?php if ($_smarty_tpl->tpl_vars['action']->value=='add'){?>
				<input type="submit" name="effacer" id="Annul" value="Tout Effacer">
				<input type="submit" name="ajouter" id="Ajout" value="Ajouter">			
				<?php }else{ ?>
					<input type="submit" name="annuler" id="Annul" value="Annuler">
					<input type="submit" name="modifier" id="Ajout" value="Enregistrer">		
			<?php }?>
		</form>

<?php }?><?php }} ?>