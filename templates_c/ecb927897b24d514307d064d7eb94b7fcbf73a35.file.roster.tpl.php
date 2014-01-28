<?php /* Smarty version Smarty-3.1.14, created on 2013-12-06 10:11:27
         compiled from "C:\wamp\www\equinoxx\tpl\pages\roster.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131515283620f239a60-25178384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecb927897b24d514307d064d7eb94b7fcbf73a35' => 
    array (
      0 => 'C:\\wamp\\www\\equinoxx\\tpl\\pages\\roster.tpl',
      1 => 1386324684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131515283620f239a60-25178384',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5283620f266fa3_62954755',
  'variables' => 
  array (
    'alltank' => 0,
    'tank' => 0,
    'allheal' => 0,
    'heal' => 0,
    'alldps' => 0,
    'dps' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5283620f266fa3_62954755')) {function content_5283620f266fa3_62954755($_smarty_tpl) {?><div id="roster">
	<div id="tank">
		<img src="web/img/tank.png"/>
		<ul>
		<?php  $_smarty_tpl->tpl_vars['tank'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tank']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alltank']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tank']->key => $_smarty_tpl->tpl_vars['tank']->value){
$_smarty_tpl->tpl_vars['tank']->_loop = true;
?>
			<li>
				<ul class="player_info">
					<li class="player_name"><h2><a href="http://eu.battle.net/wow/fr/character/archimonde/<?php echo $_smarty_tpl->tpl_vars['tank']->value['player_nom'];?>
/advanced" class="classe<?php echo $_smarty_tpl->tpl_vars['tank']->value['classe_id'];?>
" target="blank"><?php echo $_smarty_tpl->tpl_vars['tank']->value['player_nom'];?>
</a></h2></li>
					<li>Classe : <?php echo $_smarty_tpl->tpl_vars['tank']->value['classe_nom'];?>
</li>
					<li>Spécialité : <?php echo $_smarty_tpl->tpl_vars['tank']->value['spe_nom'];?>
</li>
					<li>Rang de guilde : <?php echo $_smarty_tpl->tpl_vars['tank']->value['rang_nom'];?>
</li>
				</ul>
			</li>
			<?php } ?>
		</ul>
	</div>
	
	<div id="heal">
		<img src="web/img/heal.png"/>
		<ul>
		<?php  $_smarty_tpl->tpl_vars['heal'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['heal']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allheal']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['heal']->key => $_smarty_tpl->tpl_vars['heal']->value){
$_smarty_tpl->tpl_vars['heal']->_loop = true;
?>
			<li>
				<ul class="player_info">
					<li class="player_name"><h2><a href="http://eu.battle.net/wow/fr/character/archimonde/<?php echo $_smarty_tpl->tpl_vars['heal']->value['player_nom'];?>
/advanced" class="classe<?php echo $_smarty_tpl->tpl_vars['heal']->value['classe_id'];?>
" target="blank"><?php echo $_smarty_tpl->tpl_vars['heal']->value['player_nom'];?>
</a></h2></li>
					<li>Classe : <?php echo $_smarty_tpl->tpl_vars['heal']->value['classe_nom'];?>
</li>
					<li>Spécialité : <?php echo $_smarty_tpl->tpl_vars['heal']->value['spe_nom'];?>
</li>
					<li>Rang de guilde : <?php echo $_smarty_tpl->tpl_vars['heal']->value['rang_nom'];?>
</li>
				</ul>
			</li>
			<?php } ?>
		</ul>
	</div>
	
	<div id="dps">
		<img src="web/img/dps.png"/>
		<ul>
		<?php  $_smarty_tpl->tpl_vars['dps'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dps']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alldps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dps']->key => $_smarty_tpl->tpl_vars['dps']->value){
$_smarty_tpl->tpl_vars['dps']->_loop = true;
?>
			<li>
				<ul class="player_info">
					<li class="player_name"><h2><a href="http://eu.battle.net/wow/fr/character/archimonde/<?php echo $_smarty_tpl->tpl_vars['dps']->value['player_nom'];?>
/advanced" class="classe<?php echo $_smarty_tpl->tpl_vars['dps']->value['classe_id'];?>
" target="blank"><?php echo $_smarty_tpl->tpl_vars['dps']->value['player_nom'];?>
</a></h2></li>
					<li>Classe : <?php echo $_smarty_tpl->tpl_vars['dps']->value['classe_nom'];?>
</li>
					<li>Spécialité : <?php echo $_smarty_tpl->tpl_vars['dps']->value['spe_nom'];?>
</li>
					<li>Rang de guilde : <?php echo $_smarty_tpl->tpl_vars['dps']->value['rang_nom'];?>
</li>
				</ul>
			</li>
			<?php } ?>
		</ul>
	</div>
</div><?php }} ?>