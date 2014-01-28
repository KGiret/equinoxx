<h3>{$titre}</h3>

{if !(isset($action)) || $action == 'rem' }
	<a href="?page={$page}&action=add" id="add_button">+ Ajouter un joueur</a>
	<table cellspacing=0>
		<tr>
			<th id="th_nom">Joueur</th>
			<th>Classe</th>
			<th>Spécialité</th>
			<th>Rôle</th>
			<th>Rang</th>
			<th id="th_action">Actions</th>
		</tr>
		{foreach from=$players item=player}
				<tr>
					<td class="td_nom">{$player.player_nom}</td>
					<td>{$player.classe_nom}</td>
					<td>{$player.spe_nom}</td>
					<td>{$player.role_nom}</td>
					<td>{$player.rang_nom}</td>
					<td class="td_action"><a href="?page={$page}&action=upd&id={$player.player_id}"><img src="../web/img/update.png" title="Modifier"/></a><a href="?page={$page}&action=rem&id={$player.player_id}"><img src="../web/img/remove.png" title="Supprimer"/></a></td>
				</tr>
		{/foreach}
		
	</table>
	
	{else if $action == 'upd' || $action == 'add'}
		<form method=POST action="">
			<input type="text" required name="nomPlayer" id="nomPlayer" {if isset($infoPlayer)}value="{$nomPlayer}" {else}placeholder="Joueur"{/if}>
			<select required name="idClass" id="idClass">
				<option value="">Classe</option>
				{foreach from=$classes item=classe}
				{
					<option value="{$classe.classe_id}" {if isset($infoPlayer) && $classPlayer == $classe.classe_id}selected="selected"{/if}>{$classe.classe_nom}</option>
				}
				{/foreach}
			</select>
			<select required name="idSpe" id="idSpe">
				<option value="">Spécialité</option>
				{foreach from=$spes item=spe}
				{
					<option value="{$spe.spe_id}" class="{$spe.spe_id_classe}" {if isset($infoPlayer) && $spePlayer == $spe.spe_id}selected="selected"{/if}>{$spe.spe_nom}</option>
				}
				{/foreach}
			</select>
			<select required name="idRole" id="idRole">
				<option value="">Rôle</option>
				{foreach from=$roles item=role}
				{
					<option value="{$role.role_id}" {if isset($infoPlayer) && $rolePlayer == $role.role_id}selected="selected"{/if}>{$role.role_nom}</option>
				}
				{/foreach}
			</select>
			<select required name="idRang" id="idRang">
				<option value="">Rang</option>
				{foreach from=$rangs item=rang}
				{
					<option value="{$rang.rang_id}" {if isset($infoPlayer) && $rangPlayer == $rang.rang_id}selected="selected"{/if}>{$rang.rang_nom}</option>
				}
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