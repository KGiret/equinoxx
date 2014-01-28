<h3>{$titre}</h3>

{if !(isset($action)) || $action == 'rem' }
	<a href="?page={$page}&action=add" id="add_button">+ Ajouter une vidéo</a>
	<table cellspacing=0>
		<tr>
			<th id="th_nom">Nom</th>
			<th>Lien</th>
			<th id="th_action">Actions</th>
		</tr>
		{foreach from=$videos item=video}
			{if $video.video_lien != 'vide'}
				<tr>
					<td class="td_nom">{$video.video_nom}</td>
					<td><a href="http://www.youtube.com/watch?v={$video.video_lien}">http://www.youtube.com/watch?v={$video.video_lien}</a></td>
					<td class="td_action"><a href="?page={$page}&action=upd&id={$video.video_id}"><img src="../web/img/update.png" title="Modifier"/></a><a href="?page={$page}&action=rem&id={$video.video_id}"><img src="../web/img/remove.png" title="Supprimer"/></a></td>
				</tr>
			{/if}
		{/foreach}
	</table>

	{else if $action == 'upd' || $action == 'add'}
		<form method=POST action="">
			<input type="text" required name="nomVideo" id="nomVideo" {if (isset($infoVideo))}value="{$nomVideo}"{else}placeholder="Nom de la vidéo"{/if}>
			<input type="text" required name="lienVideo" id="lienVideo" {if (isset($infoVideo))}value="http://www.youtube.com/watch?v={$lienVideo}"{else}placeholder="Lien youtube"{/if}>
			<select name="numeroTier" id="videoNumeroTier" required>
				<option value="">Tiers</option>
				{foreach from=$tiers item=tier}
					<option value="{$tier.tier_id}" {if  (isset($infoVideo)) && $tier.tier_id == $tierVideo}selected="selected"{/if}>Tier {$tier.tier_numero}</option>
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