<h3>{$titre}</h3>

{if !(isset($action)) || $action == 'rem'}
	<a href="?page={$page}&action=add" id="add_button">+ Ajouter un tier</a>
	<table cellspacing=0>
		<tr>
			<th id="th_nom">Nom</th>
			<th>Numéro</th>
			<th>État</th>
			<th id="th_action">Actions</th>
		</tr>
		{foreach from=$tiers item=tier}
			<tr>
				<td class="td_nom">{$tier.tier_nom}</td>
				<td>{$tier.tier_numero}</td>
				<td>{if $tier.tier_etat == 1}En cours{else}Terminé{/if}</td>
				<td class="td_action"><a href="?page={$page}&action=upd&id={$tier.tier_id}"><img src="../web/img/update.png" title="Modifier"/></a><a href="?page={$page}&action=rem&id={$tier.tier_id}"><img src="../web/img/remove.png" title="Supprimer"/></a></td>
			</tr>
		{/foreach}
	</table>

	{else if $action == 'upd' || $action == 'add'}
		<form method=POST action="">
			<input type="text" required name="nomTier" id="nomTier" {if (isset($infoTier))}value="{$nomTier}"{else}placeholder="Nom du tier"{/if}>
			<input type="text" required name="numeroTier" id="numeroTier" {if (isset($infoTier))}value="{$numeroTier}"{else}placeholder="Numéro du tier"{/if}>
			<select name="etatTier" id="etatTier" required>
				<option value="">État</option>
				<option value="1" {if  (isset($infoTier)) && $etatTier == 1}selected="selected"{/if}>En cours</option>
				<option value="0" {if  (isset($infoTier)) && $etatTier == 0}selected="selected"{/if}>Terminé</option>
			</select>
			
			{if $action == 'add'}
				<input type="submit" name="effacer" id="Annul" value="Tout effacer">
				<input type="submit" name="ajouter" id="Ajout" value="Ajouter">
				{else}
					<input type="submit" name="annuler" id="Annul" value="Annuler">
					<input type="submit" name="modifier" id="Ajout" value="Modifier">
			{/if}
		</form>
{/if}