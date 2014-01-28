<?php

class Screen
{
	public function getAll()
	{
		global $bdd;
		$req = $bdd->prepare('SELECT screen_id, screen_nom, screen_id_tier FROM screenshot');
		$req->execute();
		$screen = $req->fetchALL(PDO::FETCH_ASSOC);
		return($screen);
	}
	
	public function getScreenByTier($tier)
	{
		global $bdd;
		$req = $bdd->prepare('SELECT screen_nom, tier_id FROM screenshot JOIN tier ON screen_id_tier = tier_id WHERE tier_numero = '.$tier);
		$req->execute();
		$screen = $req->fetchALL(PDO::FETCH_ASSOC);
		return($screen);
	}
	
	public function getScreenById($id)
	{
		global $bdd;
		$req = $bdd->prepare('SELECT screen_nom, screen_id_tier FROM screenshot WHERE screen_id='.$id);
		$req->execute();
		$screen = $req->fetchALL(PDO::FETCH_ASSOC);
		return($screen);
	}
	
	public function getFiveLastImage()
	{
		global $bdd;
		$req = $bdd->prepare('SELECT screen_nom, tier_numero FROM screenshot JOIN tier ON screen_id_tier = tier_id ORDER BY screen_id DESC LIMIT 0,5');
		$req->execute();
		$images = $req->fetchAll(PDO::FETCH_ASSOC);
		return($images);
	}
	
	public function addScreen($nom, $tier)
	{
		global $bdd;
		$req = $bdd->prepare('INSERT INTO screenshot (screen_nom, screen_id_tier) VALUES ("'.$nom.'", '.$tier.')');
		$req->execute();
	}
	
	public function updScreen($id, $nom, $tier)
	{
		global $bdd;
		$req = $bdd->prepare('UPDATE screenshot SET screen_nom = "'.$nom.'", screen_id_tier = '.$tier.' WHERE screen_id ='.$id);
		$req->execute();
	}
	
	public function deleteScreenById($id)
	{
		global $bdd;
		$req = $bdd->prepare('DELETE FROM screenshot WHERE screen_id ='.$id);
		$req->execute();
	}
}

?>