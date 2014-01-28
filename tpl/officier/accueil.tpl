<h3>{$titre}</h3>

{if !(isset($action)) || $action == 'rem'}
	<a href="?page={$page}&action=add" id="add_button">+ Ajouter une news</a>
	<table cellspacing=0>
		<tr>
			<th id="th_nom">Titre</th>
			<th>Date</th>
			<th id="th_action">Actions</th>
		</tr>
		{foreach from=$articles item=article}
				<tr>
					<td class="td_nom">{$article.article_titre}</td>
					<td>{$article.article_date}</td>
					<td class="td_action"><a href="?page={$page}&action=upd&id={$article.article_id}"><img src="../web/img/update.png" title="Modifier"/></a><a href="?page={$page}&action=rem&id={$article.article_id}"><img src="../web/img/remove.png" title="Supprimer"/></a></td>
				</tr>
		{/foreach}
	</table>
	
	{else if $action == 'upd' || $action == 'add'}
		<form method=POST action="">
			<input type="text" required name="titreArticle" id="titreArticle" {if (isset($infoArticle))}value="{$titreArticle}" {else}placeholder="Titre" {/if}>
			<select name="articleNumeroTier" id="articleNumeroTier" required>
				<option value="">Tiers</option>
				{foreach from=$tiers item=tier}
					<option value="{$tier.tier_id}" {if (isset($infoArticle)) && $tierArticle == $tier.tier_id}selected="selected"{/if}>Tier {$tier.tier_numero}</option>
				{/foreach}
			</select>
			<input type="date" required id="dateArticle" name="dateArticle" {if (isset($dateArticle)) }value="{$dateArticle}"{/if}>
			<select name="screenId" required id="screenId">	
				<option value="">Screenshots</option>
				{foreach from=$screens item=screen}
					{if (isset($infoArticle))}
						<option value="{$screen.screen_id}" class="{$screen.screen_id_tier}" {if (isset($infoArticle)) && $screenArticle == $screen.screen_id}selected="selected"{/if}>{$screen.screen_nom}</option>
						{else if (!isset($infoArticle))}
							<option value="{$screen.screen_id}" class="{$screen.screen_id_tier}" >{$screen.screen_nom}</option>
					{/if}
				{/foreach}
			</select>
			<select name="videoId" required id="videoId">	
				<option value="">Vidéos</option>
				{foreach from=$videos item=video}
					{if (isset($infoArticle))}
						<option value="{$video.video_id}" class="{$video.video_id_tier}" {if (isset($infoArticle)) && $videoArticle == $video.video_id}selected="selected"{/if}>{$video.video_nom}</option>
						{else if (!isset($infoArticle))}
							<option value="{$video.video_id}" class="{$video.video_id_tier}" >{$video.video_nom}</option>
					{/if}
				{/foreach}
			</select>
			<textarea name="contenuArticle">{if (isset($infoArticle))}{$contenuArticle}{/if}</textarea>	

			{if $action == 'add'}
				<input type="submit" name="effacer" id="Annul" value="Tout Effacer">
				<input type="submit" name="ajouter" id="Ajout" value="Ajouter">			
				{else}
					<input type="submit" name="annuler" id="Annul" value="Annuler">
					<input type="submit" name="modifier" id="Ajout" value="Enregistrer">		
			{/if}
		</form>
{/if}
	

			
			
			
			