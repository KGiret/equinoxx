<?php

class Player
{
	public function getPlayerByRole($rolename)
	{
		global $bdd;
		$req = $bdd->prepare('SELECT player_nom, rang_nom, classe_nom, classe_id, spe_nom FROM players JOIN rang ON player_id_grade = rang_id JOIN classes ON player_id_class = classe_id JOIN role ON player_id_role = role_id JOIN spe ON player_id_spe = spe_id WHERE role_nom ="'.$rolename.'"');
		$req->execute();
		$players = $req->fetchAll(PDO::FETCH_ASSOC);
		return($players);
	}
	
	public function getPlayerById($id)
	{
		global $bdd;
		$req = $bdd->prepare('SELECT player_nom, player_id_class, player_id_spe, player_id_role, player_id_grade FROM players WHERE player_id ='.$id);
		$req->execute();
		$players = $req->fetchAll(PDO::FETCH_ASSOC);
		return($players);
	}
	
	public function getAll()
	{
		global $bdd;
		$req = $bdd->prepare('SELECT player_id, player_nom, rang_nom, classe_nom, classe_id, spe_nom, role_nom FROM players JOIN rang ON player_id_grade = rang_id JOIN classes ON player_id_class = classe_id JOIN role ON player_id_role = role_id JOIN spe ON player_id_spe = spe_id');
		$req->execute();
		$players = $req->fetchAll(PDO::FETCH_ASSOC);
		return($players);
	}
	
	public function getAllRole()
	{
		global $bdd;
		$req = $bdd->prepare('SELECT role_id, role_nom FROM role');
		$req->execute();
		$role = $req->fetchAll(PDO::FETCH_ASSOC);
		return($role);
	}
	
	public function getAllRang()
	{
		global $bdd;
		$req = $bdd->prepare('SELECT rang_id, rang_nom FROM rang');
		$req->execute();
		$rang = $req->fetchAll(PDO::FETCH_ASSOC);
		return($rang);
	}
	
	public function addPlayer($nom, $classe, $spe, $role, $rang)
	{
		global $bdd;
		$req = $bdd->prepare('INSERT INTO players (player_nom, player_id_class, player_id_spe, player_id_role, player_id_grade) VALUES ("'.$nom.'", '.$classe.', '.$spe.', '.$role.', '.$rang.')');
		$req->execute();
	}
	
	public function updPlayer($id, $nom, $classe, $spe, $role, $rang)
	{
		global $bdd;
		$req = $bdd->prepare('UPDATE players SET player_nom ="'.$nom.'", player_id_class='.$classe.', player_id_spe ='.$spe.', player_id_role ='.$role.', player_id_grade = '.$rang.' WHERE player_id ='.$id);
		$req->execute();
	}
	
	public function deletePlayerById($id)
	{
		global $bdd;
		$req = $bdd->prepare('DELETE FROM players WHERE player_id ='.$id);
		$req->execute();
	}
}
?>