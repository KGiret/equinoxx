<?php /* Smarty version Smarty-3.1.14, created on 2014-01-04 21:06:06
         compiled from "C:\wamp\www\KevinGiret-Rendu\tpl\officier\videos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2695152c877bec2d2f7-37721194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b560f008e48abd7dba5b8f5cd3d68563cdce16af' => 
    array (
      0 => 'C:\\wamp\\www\\KevinGiret-Rendu\\tpl\\officier\\videos.tpl',
      1 => 1388756225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2695152c877bec2d2f7-37721194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titre' => 0,
    'action' => 0,
    'page' => 0,
    'videos' => 0,
    'video' => 0,
    'infoVideo' => 0,
    'nomVideo' => 0,
    'lienVideo' => 0,
    'tiers' => 0,
    'tier' => 0,
    'tierVideo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c877bedbec04_02209703',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c877bedbec04_02209703')) {function content_52c877bedbec04_02209703($_smarty_tpl) {?><h3><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</h3>

<?php if (!(isset($_smarty_tpl->tpl_vars['action']->value))||$_smarty_tpl->tpl_vars['action']->value=='rem'){?>
	<a href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&action=add" id="add_button">+ Ajouter une vidéo</a>
	<table cellspacing=0>
		<tr>
			<th id="th_nom">Nom</th>
			<th>Lien</th>
			<th id="th_action">Actions</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value){
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['video']->value['video_lien']!='vide'){?>
				<tr>
					<td class="td_nom"><?php echo $_smarty_tpl->tpl_vars['video']->value['video_nom'];?>
</td>
					<td><a href="http://www.youtube.com/watch?v=<?php echo $_smarty_tpl->tpl_vars['video']->value['video_lien'];?>
">http://www.youtube.com/watch?v=<?php echo $_smarty_tpl->tpl_vars['video']->value['video_lien'];?>
</a></td>
					<td class="td_action"><a href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&action=upd&id=<?php echo $_smarty_tpl->tpl_vars['video']->value['video_id'];?>
"><img src="../web/img/update.png" title="Modifier"/></a><a href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&action=rem&id=<?php echo $_smarty_tpl->tpl_vars['video']->value['video_id'];?>
"><img src="../web/img/remove.png" title="Supprimer"/></a></td>
				</tr>
			<?php }?>
		<?php } ?>
	</table>

	<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='upd'||$_smarty_tpl->tpl_vars['action']->value=='add'){?>
		<form method=POST action="">
			<input type="text" required name="nomVideo" id="nomVideo" <?php if ((isset($_smarty_tpl->tpl_vars['infoVideo']->value))){?>value="<?php echo $_smarty_tpl->tpl_vars['nomVideo']->value;?>
"<?php }else{ ?>placeholder="Nom de la vidéo"<?php }?>>
			<input type="text" required name="lienVideo" id="lienVideo" <?php if ((isset($_smarty_tpl->tpl_vars['infoVideo']->value))){?>value="http://www.youtube.com/watch?v=<?php echo $_smarty_tpl->tpl_vars['lienVideo']->value;?>
"<?php }else{ ?>placeholder="Lien youtube"<?php }?>>
			<select name="numeroTier" id="videoNumeroTier" required>
				<option value="">Tiers</option>
				<?php  $_smarty_tpl->tpl_vars['tier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tiers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tier']->key => $_smarty_tpl->tpl_vars['tier']->value){
$_smarty_tpl->tpl_vars['tier']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['tier']->value['tier_id'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['infoVideo']->value))&&$_smarty_tpl->tpl_vars['tier']->value['tier_id']==$_smarty_tpl->tpl_vars['tierVideo']->value){?>selected="selected"<?php }?>>Tier <?php echo $_smarty_tpl->tpl_vars['tier']->value['tier_numero'];?>
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