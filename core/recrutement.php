<?php

class Recrutement
{
	public function getDetail()
	{
		global $bdd;
		$req = $bdd->prepare('SELECT recrutement_contenu FROM recrutement');
		$req->execute();
		$detail = $req->fetchAll(PDO::FETCH_ASSOC);
		return($detail);

	}
	
	public function updDetail($detail)
	{
		global $bdd;
		$req = $bdd->prepare('UPDATE recrutement SET recrutement_contenu ="'.$detail.'"');
		$req->execute();
	}
}



?>