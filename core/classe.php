<?php

class Classe
{
		public function getAllClasse()
	{
		global $bdd;
		$req = $bdd->prepare('SELECT classe_id, classe_nom FROM classes');
		$req->execute();
		$classe = $req->fetchAll(PDO::FETCH_ASSOC);
		return($classe);
	}
}



?>