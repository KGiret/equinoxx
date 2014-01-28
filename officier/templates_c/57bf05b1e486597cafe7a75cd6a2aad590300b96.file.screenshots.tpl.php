<?php /* Smarty version Smarty-3.1.14, created on 2014-01-04 00:49:35
         compiled from "C:\wamp\www\equinoxx\tpl\officier\screenshots.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1904452c6b35721c8d9-90235124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57bf05b1e486597cafe7a75cd6a2aad590300b96' => 
    array (
      0 => 'C:\\wamp\\www\\equinoxx\\tpl\\officier\\screenshots.tpl',
      1 => 1388796571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1904452c6b35721c8d9-90235124',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c6b35721d1a5_76212192',
  'variables' => 
  array (
    'page' => 0,
    'titre' => 0,
    'action' => 0,
    'screens' => 0,
    'screen' => 0,
    'infoScreen' => 0,
    'nomScreen' => 0,
    'tiers' => 0,
    'tier' => 0,
    'tierScreen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c6b35721d1a5_76212192')) {function content_52c6b35721d1a5_76212192($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\wamp\\www\\equinoxx\\web\\tools\\smarty\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_replace')) include 'C:\\wamp\\www\\equinoxx\\web\\tools\\smarty\\plugins\\modifier.replace.php';
?><h3 id="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</h3>

<?php if (!(isset($_smarty_tpl->tpl_vars['action']->value))||$_smarty_tpl->tpl_vars['action']->value=='rem'){?>
	<a href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&action=add" id="add_button">+ Ajouter un screenshot</a>
	<table cellspacing=0>
		<tr>
			<th id="th_nom">Nom</th>
			<th id="th_action">Actions</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['screen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['screen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['screens']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['screen']->key => $_smarty_tpl->tpl_vars['screen']->value){
$_smarty_tpl->tpl_vars['screen']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['screen']->value['screen_nom']!='vide'){?>
				<tr>
					<td class="td_nom"><?php echo smarty_modifier_replace(smarty_modifier_capitalize($_smarty_tpl->tpl_vars['screen']->value['screen_nom'],true),'-',' ');?>
</td>
					<td class="td_action"><a href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&action=upd&id=<?php echo $_smarty_tpl->tpl_vars['screen']->value['screen_id'];?>
"><img src="../web/img/update.png" title="Modifier"/></a><a href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&action=rem&id=<?php echo $_smarty_tpl->tpl_vars['screen']->value['screen_id'];?>
"><img src="../web/img/remove.png" title="Supprimer"/></a></td>
				</tr>
			<?php }?>
		<?php } ?>
	</table>
	
	<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='upd'||$_smarty_tpl->tpl_vars['action']->value=='add'){?>
		<form method=POST action="" enctype="multipart/form-data">
			<input type="file" required name="fileScreen">
			<input type="hidden" name="MAX_FILE_SIZE" value="800000">
			<?php if ((isset($_smarty_tpl->tpl_vars['infoScreen']->value))){?><span>Actuel : <?php echo smarty_modifier_replace(smarty_modifier_capitalize($_smarty_tpl->tpl_vars['nomScreen']->value,true),'-',' ');?>
</span><?php }?>
			<select name="numeroTier" id="videoNumeroTier" required>
				<option value="">Tiers</option>
				<?php  $_smarty_tpl->tpl_vars['tier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tiers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tier']->key => $_smarty_tpl->tpl_vars['tier']->value){
$_smarty_tpl->tpl_vars['tier']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['tier']->value['tier_id'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['infoScreen']->value))&&$_smarty_tpl->tpl_vars['tier']->value['tier_id']==$_smarty_tpl->tpl_vars['tierScreen']->value){?>selected="selected"<?php }?>>Tier <?php echo $_smarty_tpl->tpl_vars['tier']->value['tier_numero'];?>
</option>
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