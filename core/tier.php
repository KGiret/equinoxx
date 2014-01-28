<?php

class Tier
{
	public function getAll()
	{
		global $bdd;
		$req = $bdd->prepare('SELECT * from tier ORDER BY tier_numero DESC');
		$req->execute();
		$tier = $req->fetchAll(PDO::FETCH_ASSOC);
		return($tier);
	}
	
	public function getTierById($id)
	{
		global $bdd;
		$req = $bdd->prepare('SELECT tier_nom, tier_numero, tier_etat FROM tier WHERE tier_id = '.$id);
		$req->execute();
		$tier = $req->fetchAll(PDO::FETCH_ASSOC);
		return($tier);
	}
	
	public function getTierByNum($numero)
	{
		global $bdd;
		$req = $bdd->prepare('SELECT tier_nom, tier_numero, tier_etat FROM tier WHERE tier_numero = '.$numero);
		$req->execute();
		$tier = $req->fetchAll(PDO::FETCH_ASSOC);
		return($tier);
	}
	
	public function addTier($nom, $numero, $etat)
	{
		global $bdd;
		$req = $bdd->prepare('INSERT INTO tier (tier_nom, tier_numero, tier_etat) VALUES ("'.$nom.'", '.$numero.', '.$etat.')');
		$req->execute();
	}
	
	public function updTier($id, $nom, $numero, $etat)
	{
		global $bdd;
		$req = $bdd->prepare('UPDATE tier SET tier_nom = "'.$nom.'", tier_numero= '.$numero.', tier_etat = '.$etat.' WHERE tier_id = '.$id);
		$req->execute();
	}
	
	public function deleteTierById($id)
	{
		global $bdd;
		$req = $bdd->prepare('DELETE FROM tier WHERE tier_id = '.$id);
		$req->execute();
	}
	
}

?>