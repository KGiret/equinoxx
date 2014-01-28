<?php

class Specialite
{

	public function getAllSpe()
	{
		global $bdd;
		$req = $bdd->prepare('SELECT spe_id, REPLACE(spe_nom, \' \', \'-\') AS spe_nom, spe_etat, spe_id_classe, classe_nom FROM spe JOIN classes ON spe_id_classe = classe_id ORDER BY spe_id_classe');
		$req->execute();
		$specialite = $req->fetchAll(PDO::FETCH_ASSOC);
		return($specialite);
	}
	
	public function getSpeByClass($id)
	{
		global $bdd;
		$req = $bdd->prepare('SELECT * FROM spe WHERE spe_id='.$id.'');
		$req->execute();
		$SpeByClass = $req->fetchAll(PDO::FETCH_ASSOC);
		return($SpeByClass);
	}
	
	public function updEtatSpe($id, $etat)
	{
		global $bdd;
		$req = $bdd->prepare('UPDATE spe SET spe_etat = '.$etat.' WHERE spe_id ='.$id);
		$req->execute();
	}
}
?>