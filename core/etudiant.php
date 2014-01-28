<?php

class Etudiant
{
	public function getAll()
	{
		global $bdd;
		$req = $bdd->prepare('SELECT etudiant_nom, etudiant_prenom, classe_intitule FROM etudiant JOIN classe ON etudiant_classe_id = classe_id ORDER BY etudiant_classe_id');
		$req->execute();
		$etudiants = $req->fetchALL(PDO::FETCH_ASSOC);
		return($etudiants);
	}

}

?>