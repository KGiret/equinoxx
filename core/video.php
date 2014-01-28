<?php

class Video
{
	public function getTwoLastVideo()
	{
		global $bdd;
		$req = $bdd->prepare('SELECT video_lien from video ORDER BY video_id DESC LIMIT 0,2');
		$req->execute();
		$video = $req->fetchAll(PDO::FETCH_ASSOC);
		return($video);
	}

	public function getVideoByTier($tier)
	{
		global $bdd;
		$req = $bdd->prepare('SELECT video_id, video_lien, video_nom, tier_id FROM video JOIN tier ON video_id_tier = tier_id WHERE tier_numero = '.$tier);
		$req->execute();
		$video = $req->fetchALL(PDO::FETCH_ASSOC);
		return($video);
	}
	
	public function getVideo()
	{
		global $bdd;
		$req = $bdd->prepare('SELECT video_id, video_lien, video_nom, video_id_tier FROM video');
		$req->execute();
		$video = $req->fetchALL(PDO::FETCH_ASSOC);
		return($video);
	}
	
	public function getVideoById($id)
	{
		global $bdd;
		$req = $bdd-> prepare('SELECT video_nom, video_lien, video_id_tier FROM video WHERE video_id ='.$id);
		$req->execute();
		$video = $req->fetchALL(PDO::FETCH_ASSOC);
		return($video);
	}
	
	public function updVideo($id, $nom, $lien, $idtier)
	{
		global $bdd;
		$req = $bdd->prepare('UPDATE video SET video_nom = "'.$nom.'", video_lien ="'.$lien.'", video_id_tier ="'.$idtier.'" WHERE video_id ='.$id);
		$req->execute();
	}
	
	public function addVideo($nom, $lien, $idtier)
	{
		global $bdd;
		$req = $bdd->prepare('INSERT INTO video (video_nom, video_lien, video_id_tier) VALUES ("'.$nom.'", "'.$lien.'", '.$idtier.')');
		$req->execute();
	}
	
	public function deleteVideoById($id)
	{
		global $bdd;
		$req = $bdd->prepare('DELETE FROM video WHERE video_id ='.$id);
		$req->execute();
	}
}

?>


