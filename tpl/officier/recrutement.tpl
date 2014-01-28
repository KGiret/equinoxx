<h3 id="{$page}">{$titre}</h3>

{if !(isset($action))}
	<a href="?page={$page}&action=detail" id="add_button">+ Modifier les détails</a>

	<table cellspacing=0>
		<tr>
			<th id="th_nom">Classe</th>
			<th>Spécialité</th>
			<th>État</th>
			<th id="th_action">Action</th>
		</tr>
		{foreach from=$specialites item=specialite}
			<tr>
				<td class="td_nom classe{$specialite.spe_id_classe}">{$specialite.classe_nom}</td>
				<td>{$specialite.spe_nom}</td>
				<td>{if $specialite.spe_etat == 0}Fermé{else}Ouvert{/if}</td>
				<td class="td_action">{if $specialite.spe_etat == 0}<a href="?page={$page}&action=open&id={$specialite.spe_id}"><img src="../web/img/activer.png" title="Ouvrir"/></a>{else}<a href="?page={$page}&action=close&id={$specialite.spe_id}"><img src="../web/img/remove.png" title="Fermer"/></a>{/if}</td>
			</tr>
		{/foreach}
	</table>
	{else if $action == 'detail'}
		<form method=POST action="">
			<textarea name="recrutementDetail">{if (isset($recrutement))}{$recrutement}{/if}</textarea>	
			<input type="submit" name="annuler" id="Annul" value="Annuler">
			<input type="submit" name="modifier" id="Ajout" value="Enregistrer">
		</form>
{/if}