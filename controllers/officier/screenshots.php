<?php
$page = $_GET['page'];
$screens = 	Screen::getAll();
$titre = 'Gestion des screenshots';

$smarty->assign('screens', $screens);
$smarty->assign('titre', $titre);
$smarty->assign('page', $page);

if(!empty($_GET['action']))
{
	$action = $_GET['action'];
	if($action == 'rem')
	{
		$id = $_GET['id'];
		Screen::deleteScreenById($id);
		Articles::updateScreenAfterRemov($id);
		header('Location: ?page=screenshots');
	}
	
	else if($action == 'upd')
	{
		$id = $_GET['id'];
		$tiers = Tier::getAll();
		$infoScreen = Screen::getScreenById($id);
		$nomScreen = $infoScreen[0]['screen_nom'];
		$tierScreen = $infoScreen[0]['screen_id_tier'];
		$smarty->assign('nomScreen', $nomScreen);
		$smarty->assign('infoScreen', $infoScreen);
		$smarty->assign('tierScreen', $tierScreen);
		$smarty->assign('tiers', $tiers);
	}
	else
	{
		$tiers = Tier::getAll();
		$smarty->assign('tiers', $tiers);
	}
	$smarty->assign('action', $action);
	
	if(!empty($_POST['ajouter']))
	{
		$error = '*';
		$idtier = $_POST['numeroTier'];
		$tier = Tier::getTierById($idtier);
		$tier = $tier[0]['tier_numero'];
		$dossier = _IMG_.'news/t'.$tier.'';//dossier d'upload
		$fichier = basename($_FILES['fileScreen']['name']);//le fichier
		$pos = strpos($fichier, '.');//la position du point de l'extension
		$ext = substr($fichier, $pos +1);//l'extension (tout ce qui est après le point)
		$nom = substr($fichier, 0, $pos);//le nom (tout ce qui est avant le point)

		$taille_maxi = 800000;
		$taille = filesize($_FILES['fileScreen']['tmp_name']);
		if($ext != 'jpg')//si l'extension n'est pas jpg (pas super top mais les fonctions php ne fonctionne pas)
		{
			$error .= 'Extension du fichier invalide (.jpg seulement) ; ';
		}
		if(!Validate::isScreenName($nom))// on compare le nom à une expression régulière
		{
			$error .= 'Nom de fichier invalide ; ';
		}
		if($taille > $taille_maxi)
		{
			$error .= 'Taille de fichier trop importante ; ';
		}	
		
		if($error == '*')
		{		
			if(move_uploaded_file($_FILES['fileScreen']['tmp_name'], $dossier.'/'.$fichier))//deplacement du dossier temporaire au dossier d'upload
			{
				$affirmation = 'Le screenshot a bien été ajoutée';
				//Image::createDiapoImage($dossier.'/'.$fichier, $fichier, $dossier);
				$smarty->assign('affirmation', $affirmation);
				Screen::addScreen($nom, $idtier);
			//	header('Refresh: 1; ?page=screenshots');//redirection
			}
			else
			{
				$error .= 'Erreur lors de l\'upload du screenshot';
				$smarty->assign('error', $error);
			}
		}
		else
		{
			$smarty->assign('error', $error);
		}
	}
	
	if(!empty($_POST['modifier']))
	{
		$error = '*';
		$idtier = $_POST['numeroTier'];
		$tier = Tier::getTierById($idtier);
		$tier = $tier[0]['tier_numero'];
	
		$dossier = '/wamp/www/KevinGiret-Rendu/web/img/news/t'.$tier.'';
		$fichier = basename($_FILES['fileScreen']['name']);
		$pos = strpos($fichier, '.');
		$ext = substr($fichier, $pos +1);
		$nom = substr($fichier, 0, $pos);
		$taille_maxi = 800000;
		$taille = filesize($_FILES['fileScreen']['tmp_name']);
		if($ext != 'jpg')
		{
			$error .= 'Extension du cichier invalide (.jpg seulement) ; ';
		}
		if(!Validate::isScreenName($nom))
		{
			$error .= 'Nom de fichier invalide ; ';
		}
		if($taille > $taille_maxi)
		{
			$error .= 'Taille de fichier trop importante ; ';
		}	
		
		if($error == '*')
		{	
			if(move_uploaded_file($_FILES['fileScreen']['tmp_name'], $dossier.'/'.$fichier))
			{
				$affirmation = 'Le screenshot a bien été modifié';
				$smarty->assign('affirmation', $affirmation);
				Screen::updScreen($id, $nom, $idtier);
				header('Refresh: 1; ?page=screenshots');
			}
			else
			{
				$error .= 'Erreur lors de l\'upload du screenshot';
				$smarty->assign('error', $error);
			}
		}
	}
	
	if (!empty($_POST['annuler']))
	{
		header('Location: ?page=screenshots');
	}
}
?>