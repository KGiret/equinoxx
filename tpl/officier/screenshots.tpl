<h3 id="{$page}">{$titre}</h3>

{if !(isset($action)) || $action == 'rem'}
	<a href="?page={$page}&action=add" id="add_button">+ Ajouter un screenshot</a>
	<table cellspacing=0>
		<tr>
			<th id="th_nom">Nom</th>
			<th id="th_action">Actions</th>
		</tr>
		{foreach from=$screens item=screen}
			{if $screen.screen_nom != 'Pas de screenshot'}
				<tr>
					<td class="td_nom">{$screen.screen_nom|capitalize:true|replace:'-':' '}</td>
					<td class="td_action"><a href="?page={$page}&action=upd&id={$screen.screen_id}"><img src="../web/img/update.png" title="Modifier"/></a><a href="?page={$page}&action=rem&id={$screen.screen_id}"><img src="../web/img/remove.png" title="Supprimer"/></a></td>
				</tr>
			{/if}
		{/foreach}
	</table>
	
	{else if $action == 'upd' || $action == 'add'}
		<form method=POST action="" enctype="multipart/form-data">
			<input type="file" required name="fileScreen">
			<input type="hidden" name="MAX_FILE_SIZE" value="800000">
			{if (isset($infoScreen))}<span>Actuel : {$nomScreen|capitalize:true|replace:'-':' '}</span>{/if}
			<select name="numeroTier" id="videoNumeroTier" required>
				<option value="">Tiers</option>
				{foreach from=$tiers item=tier}
					<option value="{$tier.tier_id}" {if  (isset($infoScreen)) && $tier.tier_id == $tierScreen}selected="selected"{/if}>Tier {$tier.tier_numero}</option>
				{/foreach}
			</select>
			
			{if $action == 'add'}
				<input type="submit" name="effacer" id="Annul" value="Tout Effacer">
				<input type="submit" name="ajouter" id="Ajout" value="Ajouter">			
				{else}
					<input type="submit" name="annuler" id="Annul" value="Annuler">
					<input type="submit" name="modifier" id="Ajout" value="Enregistrer">		
			{/if}
		</form>
{/if}