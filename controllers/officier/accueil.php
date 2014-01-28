<?php
if(!empty($_GET['page']))
{
	$page = $_GET['page'];
}
else
{
	$page = 'accueil';
}
$articles = Articles::getAllToo();// on récupère tous les articles
$titre = 'Gestion des news';

//on passe les variables au template
$smarty->assign('articles', $articles);
$smarty->assign('titre', $titre);
$smarty->assign('page', $page);

if(!empty($_GET['action']))//si action est présent dans l'url
{
	$action = $_GET['action'];
	if($action == 'rem')//on supprime l'article sélectionné
	{
		Articles::deleteArticleById($_GET['id']);
		header('Location: ?page=accueil');
	}
	else if($action == 'upd')// formulaire de modification
	{
		$id = $_GET['id'];
		$tiers = Tier::getALL();//on récupère les tiers
		$screens = Screen::getAll();//on récupère les images
		$videos = Video::getVideo();//on récupère les vidéos
		$infoArticle = Articles::getArticleById($id);// on récupère les infos de l'article
		
		//chaque info est enregistré dans une variable distincte
		$titreArticle = $infoArticle[0]['article_titre'];
		$contenuArticle = $infoArticle[0]['article_contenu'];
		$dateArticle = $infoArticle[0]['article_date'];
		$screenArticle = $infoArticle[0]['article_id_screen'];
		$videoArticle = $infoArticle[0]['article_id_video'];
		$tierArticle = $infoArticle[0]['article_id_tier'];
		
		//on passe les varaibles au template
		$smarty->assign('infoArticle', $infoArticle);
		$smarty->assign('titreArticle', $titreArticle);
		$smarty->assign('contenuArticle', $contenuArticle);
		$smarty->assign('dateArticle', $dateArticle);
		$smarty->assign('screenArticle', $screenArticle);
		$smarty->assign('videoArticle', $videoArticle);
		$smarty->assign('tierArticle', $tierArticle);		
		$smarty->assign('tiers', $tiers);
		$smarty->assign('screens', $screens);	
		$smarty->assign('videos', $videos);
	}
	else//formulaire d'ajout
	{
		$tiers = Tier::getAll();
		$screens = Screen::getAll();
		$videos = Video::getVideo();
		$smarty->assign('tiers', $tiers);
		$smarty->assign('screens', $screens);
		$smarty->assign('videos', $videos);		
	}
	$smarty->assign('action', $action);
}

if (!empty($_POST['ajouter']))
{
	$error = '*';
	if($titre = $_POST['titreArticle'] AND !Validate::isArticleTitre($titre))//on compare la variable à une expression régulière
	{
		$error .= 'Titre de l\'article invalide';
	}
	
	if($contenu = $_POST['contenuArticle'] /*AND !Validate::isContenuArticle($contenu)*/)
	{
		//$error .= 'Contenu manquant ou invalide';
		echo $contenu;
	}
	$idtier = $_POST['articleNumeroTier'];
	$idscreen = $_POST['screenId'];
	$idvideo = $_POST['videoId'];
	$date = $_POST['dateArticle'];
	$titre = $_POST['titreArticle'];
	$contenu = $_POST['contenuArticle'];
	
	if($error == '*')
	{
		Articles::addArticle($titre, $idtier, $date, $idscreen, $idvideo, $contenu);//on execute la fonction avec les infos du nouvel article
		$affirmation = 'La news a bien été ajoutée';
		$smarty->assign('affirmation', $affirmation);
	//	header('Refresh: 1; ?page=accueil');
	}
	else
	{
		$smarty->assign('error', $error);
	}
}

if (!empty($_POST['modifier']))
{
	$error = '*';
	if($titre = $_POST['titreArticle'] AND !Validate::isArticleTitre($titre))//on compare la variable à une expression régulière
	{
		$error .= 'Titre de l\'article invalide';
	}
	
	if($contenu = $_POST['contenuArticle'] /*AND !Validate::isContenuArticle($contenu)*/)
	{
		//$error .= 'Contenu manquant ou invalide';
	}
	$idtier = $_POST['articleNumeroTier'];
	$idscreen = $_POST['screenId'];
	$idvideo = $_POST['videoId'];
	$date = $_POST['dateArticle'];
	$titre = $_POST['titreArticle'];
	$contenu = $_POST['contenuArticle'];
	
	if($error == '*')
	{
		Articles::updArticle($id, $titre, $idtier, $date, $idscreen, $idvideo, $contenu);// on execute la fonction avec les infos de l'article modifié
		$affirmation = 'La news a bien été modifiée';
		$smarty->assign('affirmation', $affirmation);
		header('Refresh: 1; ?page=accueil');
	}
	else
	{
		$smarty->assign('error', $error);
	}
}

if (!empty($_POST['annuler']))
{
	header('Location: ?page=accueil');
}
?>