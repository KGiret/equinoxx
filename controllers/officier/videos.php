<?php
$page = $_GET['page'];
$videos = Video::getVideo();
$titre = 'Gestion des vidéos';

$smarty->assign('videos', $videos);
$smarty->assign('titre', $titre);
$smarty->assign('page', $page);

if(!empty($_GET['action']))
{
	$action = $_GET['action'];
	if($action == 'rem')
	{
		Video::deleteVideoById($_GET['id']);
		Articles::updateVideoAfterRemov($_GET['id']);
		header('Location: ?page=videos'); 
	}
	else if($action == 'upd')
	{
		$id = $_GET['id'];
		$tiers = Tier::getAll();
		$infoVideo = Video::getVideoById($id);
		$nomVideo = $infoVideo[0]['video_nom'];
		$lienVideo = $infoVideo[0]['video_lien'];
		$tierVideo = $infoVideo[0]['video_id_tier'];
		$smarty->assign('nomVideo', $nomVideo);
		$smarty->assign('lienVideo', $lienVideo);
		$smarty->assign('infoVideo', $infoVideo);
		$smarty->assign('tierVideo', $tierVideo);
		$smarty->assign('tiers', $tiers);
	}
	else
	{
		$tiers = Tier::getAll();
		$smarty->assign('tiers', $tiers);
	}
	$smarty->assign('action', $action);
}

if (!empty($_POST['modifier']))
{
	$error = '*';
	if($nom = $_POST['nomVideo'] AND !Validate::isVideoName($nom))
	{
		$error .= 'Nom de la vidéo invalide ; ';
	}
	
	if($lien = $_POST['lienVideo'] AND !Validate::isYoutubeLink($lien))
	{
		$error .= 'Lien youtube invalide ; ';
	}
	
	$idtier = $_POST['numeroTier'];
	
	if($error == '*')
	{
		$lien = substr($lien, -11, 11);
		Video::updVideo($id, $nom, $lien, $idtier);
		$affirmation = 'La vidéo a bien été modifiée';
		$smarty->assign('affirmation', $affirmation);
		header('Refresh: 1; ?page=videos');
	}
	else
	{
		$smarty->assign('error', $error);
	}
}

if (!empty($_POST['ajouter']))
{
	$error = '*';
	if($nom = $_POST['nomVideo'] AND !Validate::isVideoName($nom))
	{
		$error .= 'Nom de la vidéo invalide ; ';
	}
	
	if($lien = $_POST['lienVideo'] AND !Validate::isYoutubeLink($lien))
	{
		$error .= 'Lien youtube invalide ; ';
	}
	
	$idtier = $_POST['numeroTier'];
	
	if($error == '*')
	{
		$lien = substr($lien, -11, 11);
		Video::addVideo($nom, $lien, $idtier);
		$affirmation = 'La vidéo a bien été ajoutée';
		$smarty->assign('affirmation', $affirmation);
		header('Refresh: 1; ?page=videos');
	}
	else
	{
		$smarty->assign('error', $error);
	}
}

if (!empty($_POST['annuler']))
{
	header('Location: ?page=videos');
}

?>