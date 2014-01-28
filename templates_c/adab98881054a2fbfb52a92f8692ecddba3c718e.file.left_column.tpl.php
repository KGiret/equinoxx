<?php /* Smarty version Smarty-3.1.14, created on 2014-01-27 10:09:24
         compiled from "C:\wamp\www\KevinGiret-Rendu\tpl\front\left_column.tpl" */ ?>
<?php /*%%SmartyHeaderCode:995052c876bd89ecb0-84721147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adab98881054a2fbfb52a92f8692ecddba3c718e' => 
    array (
      0 => 'C:\\wamp\\www\\KevinGiret-Rendu\\tpl\\front\\left_column.tpl',
      1 => 1390817360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '995052c876bd89ecb0-84721147',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c876bd9bdda3_51060538',
  'variables' => 
  array (
    'page' => 0,
    'allClasse' => 0,
    'classe' => 0,
    'allSpe' => 0,
    'spe' => 0,
    'twoLastVideo' => 0,
    'video' => 0,
    'allTiers' => 0,
    'tier' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c876bd9bdda3_51060538')) {function content_52c876bd9bdda3_51060538($_smarty_tpl) {?><div id="left_column_<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" class="left_column">
	<?php if ($_smarty_tpl->tpl_vars['page']->value=='accueil'||$_smarty_tpl->tpl_vars['page']->value=='recrutement'||$_smarty_tpl->tpl_vars['page']->value=='roster'){?>
		<div id="recrutement">
			<h2> Recrutement </h2>
			<div id="class">
				<ul>
				<?php  $_smarty_tpl->tpl_vars['classe'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['classe']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allClasse']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['classe']->key => $_smarty_tpl->tpl_vars['classe']->value){
$_smarty_tpl->tpl_vars['classe']->_loop = true;
?>
					<li class="classe<?php echo $_smarty_tpl->tpl_vars['classe']->value['classe_id'];?>
">
						<?php echo $_smarty_tpl->tpl_vars['classe']->value['classe_nom'];?>

					</li>
				<?php } ?>
				</ul>
			</div>
			<div id="spe">
				<ul>
					<?php  $_smarty_tpl->tpl_vars['spe'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['spe']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allSpe']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['spe']->key => $_smarty_tpl->tpl_vars['spe']->value){
$_smarty_tpl->tpl_vars['spe']->_loop = true;
?>
						<li id="spe<?php echo $_smarty_tpl->tpl_vars['spe']->value['spe_id'];?>
">
							<img src="web/img/recrut/<?php echo $_smarty_tpl->tpl_vars['spe']->value['spe_nom'];?>
<?php echo $_smarty_tpl->tpl_vars['spe']->value['spe_id'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['spe']->value['spe_nom'];?>
" <?php if ($_smarty_tpl->tpl_vars['spe']->value['spe_etat']==0){?>class="no_recrut"<?php }?>/>			
						</li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<a href="?page=recrutement" class="recrut_lien" id="recrut_lien1">Voir détails</a>
		<a href="http://equinoxx.forumpro.fr/f3-candidature" id="recrut_lien2" class="recrut_lien" target="blank">Apply</a>
		<?php if ($_smarty_tpl->tpl_vars['page']->value=='accueil'){?>		
			<div id="twolastvideo">
				<h2> Dernières vidéos </h2>
				<ul>
					<?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['twoLastVideo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value){
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['video']->value['video_lien']!='vide'){?>
							<li>
								<iframe width="240" height="160" src="http://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['video']->value['video_lien'];?>
?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
							</li>
						<?php }?>
					<?php } ?>
				</ul>
			</div>
			<a href="http://www.youtube.com/channel/UCSJrBDvG3Oksw50WIFUIM4A?feature=watch" id="youtube_link" target="blank"></a>
		<?php }?>
	<?php }elseif($_smarty_tpl->tpl_vars['page']->value=='media'||$_smarty_tpl->tpl_vars['page']->value=='archives'){?>
		<div id="<?php if ($_smarty_tpl->tpl_vars['page']->value=='media'){?>screenshot<?php }elseif($_smarty_tpl->tpl_vars['page']->value=='archives'){?>tiers<?php }?>">
			<h2> <?php if ($_smarty_tpl->tpl_vars['page']->value=='media'){?>Screenshots<?php }elseif($_smarty_tpl->tpl_vars['page']->value=='archives'){?>Tiers<?php }?></h2>
				<ul>
					<?php  $_smarty_tpl->tpl_vars['tier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allTiers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tier']->key => $_smarty_tpl->tpl_vars['tier']->value){
$_smarty_tpl->tpl_vars['tier']->_loop = true;
?>
						<li id="tier<?php echo $_smarty_tpl->tpl_vars['tier']->value['tier_id'];?>
">
							<?php if ($_smarty_tpl->tpl_vars['page']->value=='media'){?>
								<a href="?page=media&media=screen&tier=<?php echo $_smarty_tpl->tpl_vars['tier']->value['tier_numero'];?>
"><?php echo $_smarty_tpl->tpl_vars['tier']->value['tier_nom'];?>
</a>
								<?php }elseif($_smarty_tpl->tpl_vars['page']->value=='archives'){?>
									<?php if ($_smarty_tpl->tpl_vars['tier']->value['tier_etat']!='1'){?>
										<a href="?page=archives&tier=<?php echo $_smarty_tpl->tpl_vars['tier']->value['tier_numero'];?>
"><?php echo $_smarty_tpl->tpl_vars['tier']->value['tier_nom'];?>
</a>
									<?php }?>
							<?php }?>
						</li>
					<?php } ?>
				</ul>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['page']->value=='media'){?>
			<div id="video">
			<h2> Vidéos </h2>
				<ul>
					<?php  $_smarty_tpl->tpl_vars['tier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allTiers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tier']->key => $_smarty_tpl->tpl_vars['tier']->value){
$_smarty_tpl->tpl_vars['tier']->_loop = true;
?>
						<li id="tier<?php echo $_smarty_tpl->tpl_vars['tier']->value['tier_id'];?>
">
							<a href="?page=media&media=video&tier=<?php echo $_smarty_tpl->tpl_vars['tier']->value['tier_numero'];?>
"><?php echo $_smarty_tpl->tpl_vars['tier']->value['tier_nom'];?>
</a>
						</li>
					<?php } ?>
				</ul>
			</div>
		<?php }?>
	<?php }?>
</div>
		<div id="center_column">
		
	<?php }} ?>