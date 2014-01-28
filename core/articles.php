<?php

class Articles
{	
    public function getAll()
    {
		global $bdd;
		$req = $bdd->prepare('SELECT article_id, article_titre, article_contenu, article_date, screen_nom, video_lien, tier_numero FROM articles
		JOIN screenshot ON article_id_screen = screen_id JOIN video ON article_id_video = video_id JOIN tier ON article_id_tier = tier_id WHERE tier_etat = 1 ORDER BY article_id DESC');
		$req->execute();
		$articlesT = $req->fetchAll(PDO::FETCH_ASSOC);
		return($articlesT);
    }
	
	public function getAllToo()
    {
		global $bdd;
		$req = $bdd->prepare('SELECT article_id, article_titre, article_contenu, article_date, screen_nom, video_lien, tier_numero FROM articles
		JOIN screenshot ON article_id_screen = screen_id JOIN video ON article_id_video = video_id JOIN tier ON article_id_tier = tier_id ORDER BY article_id DESC');
		$req->execute();
		$articlesT = $req->fetchAll(PDO::FETCH_ASSOC);
		return($articlesT);
    }
	
	public function getByTier($tier)
	{
		global $bdd;
		$req = $bdd->prepare('SELECT  article_id, article_titre, article_contenu, article_date, screen_nom, video_lien, tier_numero FROM articles 
		JOIN screenshot ON article_id_screen = screen_id JOIN video ON article_id_video = video_id JOIN tier ON screen_id_tier = tier_id WHERE tier_numero = '.$tier.' ORDER BY article_id DESC');
		$req->execute();
		$articles = $req->fetchALL(PDO::FETCH_ASSOC);
		return($articles);
	}
	public function getArticleById($id)
	{
		global $bdd;
		$req = $bdd->prepare('SELECT article_titre, article_contenu, article_id_screen, article_id_video, article_date, article_id_tier FROM articles WHERE article_id='.$id);
		$req->execute();
		$article = $req->fetchAll(PDO::FETCH_ASSOC);
		return($article);
	}
	
	public function updateVideoAfterRemov($id)
	{
		global $bdd;
		$req = $bdd->prepare('UPDATE articles SET article_id_video = 1 WHERE article_id_video='.$id);
		$req->execute();
	}
	
	public function updateScreenAfterRemov($id)
	{
		global $bdd;
		$req = $bdd->prepare('UPDATE articles SET article_id_screen = 1 WHERE article_id_screen='.$id);
		$req->execute();
	}
	
	public function addArticle($titre, $tier, $date, $screen, $video, $contenu)
	{
		global $bdd;
		$req = $bdd->prepare('INSERT INTO articles (article_titre, article_contenu, article_date, article_id_screen, article_id_video, article_id_tier) VALUES ("'.$titre.'", "'.$contenu.'",  "'.$date.'", '.$screen.', '.$video.', '.$tier.')');
		$req->execute();
	}
	
	public function updArticle($id, $titre, $idtier, $date, $idscreen, $idvideo, $contenu)
	{
		global $bdd;
		$req = $bdd->prepare('UPDATE articles SET article_titre="'.$titre.'", article_contenu = "'.$contenu.'", article_date = "'.$date.'", article_id_screen = '.$idscreen.', article_id_video = '.$idvideo.' WHERE article_id='.$id);
		$req->execute();
	}
	
	public function deleteArticleById($id)
	{
		global $bdd;
		$req = $bdd->prepare('DELETE FROM articles WHERE article_id='.$id);
		$req->execute();
	}
}

?>
