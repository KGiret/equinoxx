<h3></h3>
<table cellspacing=0>
	<tr>
		<th id="th_nom">Nom</th>
		<th>Prénom</th>
		<th id="th_action">Classe</th>
	</tr>
	{foreach from=$etudiants item=etudiant}
		<tr>
			<td class="td_nom">{$etudiant.etudiant_nom}</td>
			<td>{$etudiant.etudiant_prenom}</td>
			<td class="td_action">{$etudiant.classe_intitule}</td>
		</tr>
	{/foreach}
</table>