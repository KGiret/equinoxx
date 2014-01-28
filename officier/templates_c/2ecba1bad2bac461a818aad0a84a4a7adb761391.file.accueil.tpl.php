<?php /* Smarty version Smarty-3.1.14, created on 2014-01-04 17:31:55
         compiled from "C:\wamp\www\equinoxx\tpl\officier\accueil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2218052bb0753ed8cd2-38347724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ecba1bad2bac461a818aad0a84a4a7adb761391' => 
    array (
      0 => 'C:\\wamp\\www\\equinoxx\\tpl\\officier\\accueil.tpl',
      1 => 1388856666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2218052bb0753ed8cd2-38347724',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52bb0753f40ad6_89465633',
  'variables' => 
  array (
    'titre' => 0,
    'action' => 0,
    'page' => 0,
    'articles' => 0,
    'article' => 0,
    'infoArticle' => 0,
    'titreArticle' => 0,
    'tiers' => 0,
    'tier' => 0,
    'tierArticle' => 0,
    'dateArticle' => 0,
    'screens' => 0,
    'screen' => 0,
    'screenArticle' => 0,
    'videos' => 0,
    'video' => 0,
    'videoArticle' => 0,
    'contenuArticle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bb0753f40ad6_89465633')) {function content_52bb0753f40ad6_89465633($_smarty_tpl) {?><h3><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</h3>

<?php if (!(isset($_smarty_tpl->tpl_vars['action']->value))||$_smarty_tpl->tpl_vars['action']->value=='rem'){?>
	<a href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&action=add" id="add_button">+ Ajouter une news</a>
	<table cellspacing=0>
		<tr>
			<th id="th_nom">Titre</th>
			<th>Date</th>
			<th id="th_action">Actions</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
				<tr>
					<td class="td_nom"><?php echo $_smarty_tpl->tpl_vars['article']->value['article_titre'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['article']->value['article_date'];?>
</td>
					<td class="td_action"><a href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&action=upd&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['article_id'];?>
"><img src="../web/img/update.png" title="Modifier"/></a><a href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&action=rem&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['article_id'];?>
"><img src="../web/img/remove.png" title="Supprimer"/></a></td>
				</tr>
		<?php } ?>
	</table>
	
	<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='upd'||$_smarty_tpl->tpl_vars['action']->value=='add'){?>
		<form method=POST action="">
			<input type="text" required name="titreArticle" id="titreArticle" <?php if ((isset($_smarty_tpl->tpl_vars['infoArticle']->value))){?>value="<?php echo $_smarty_tpl->tpl_vars['titreArticle']->value;?>
" <?php }else{ ?>placeholder="Titre" <?php }?>>
			<select name="articleNumeroTier" id="articleNumeroTier" required>
				<option value="">Tiers</option>
				<?php  $_smarty_tpl->tpl_vars['tier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tiers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tier']->key => $_smarty_tpl->tpl_vars['tier']->value){
$_smarty_tpl->tpl_vars['tier']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['tier']->value['tier_id'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['infoArticle']->value))&&$_smarty_tpl->tpl_vars['tierArticle']->value==$_smarty_tpl->tpl_vars['tier']->value['tier_id']){?>selected="selected"<?php }?>>Tier <?php echo $_smarty_tpl->tpl_vars['tier']->value['tier_numero'];?>
</option>
				<?php } ?>
			</select>
			<input type="date" required id="dateArticle" name="dateArticle" <?php if ((isset($_smarty_tpl->tpl_vars['dateArticle']->value))){?>value="<?php echo $_smarty_tpl->tpl_vars['dateArticle']->value;?>
"<?php }?>>
			<select name="screenId" id="screenId">	
				<option value="1">Screenshots</option>
				<?php  $_smarty_tpl->tpl_vars['screen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['screen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['screens']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['screen']->key => $_smarty_tpl->tpl_vars['screen']->value){
$_smarty_tpl->tpl_vars['screen']->_loop = true;
?>
					<?php if ((isset($_smarty_tpl->tpl_vars['infoArticle']->value))){?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['screen']->value['screen_id'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['screen']->value['screen_id_tier'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['infoArticle']->value))&&$_smarty_tpl->tpl_vars['screenArticle']->value==$_smarty_tpl->tpl_vars['screen']->value['screen_id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['screen']->value['screen_nom'];?>
</option>
						<?php }elseif((!isset($_smarty_tpl->tpl_vars['infoArticle']->value))){?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['screen']->value['screen_id'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['screen']->value['screen_id_tier'];?>
" ><?php echo $_smarty_tpl->tpl_vars['screen']->value['screen_nom'];?>
</option>
					<?php }?>
				<?php } ?>
			</select>
			<select name="videoId" id="videoId">	
				<option value="1">Vidéos</option>
				<?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value){
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
					<?php if ((isset($_smarty_tpl->tpl_vars['infoArticle']->value))){?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['video']->value['video_id'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['video']->value['video_id_tier'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['infoArticle']->value))&&$_smarty_tpl->tpl_vars['videoArticle']->value==$_smarty_tpl->tpl_vars['video']->value['video_id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['video']->value['video_nom'];?>
</option>
						<?php }elseif((!isset($_smarty_tpl->tpl_vars['infoArticle']->value))){?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['video']->value['video_id'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['video']->value['video_id_tier'];?>
" ><?php echo $_smarty_tpl->tpl_vars['video']->value['video_nom'];?>
</option>
					<?php }?>
				<?php } ?>
			</select>
			<textarea name="contenuArticle"><?php if ((isset($_smarty_tpl->tpl_vars['infoArticle']->value))){?><?php echo $_smarty_tpl->tpl_vars['contenuArticle']->value;?>
<?php }?></textarea>	

			<?php if ($_smarty_tpl->tpl_vars['action']->value=='add'){?>
				<input type="submit" name="effacer" id="Annul" value="Tout Effacer">
				<input type="submit" name="ajouter" id="Ajout" value="Ajouter">			
				<?php }else{ ?>
					<input type="submit" name="annuler" id="Annul" value="Annuler">
					<input type="submit" name="modifier" id="Ajout" value="Enregistrer">		
			<?php }?>
		</form>
<?php }?>
	

			
			
			
			<?php }} ?>