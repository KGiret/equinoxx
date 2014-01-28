<?php
$page = $_GET['page'];
$tiers = Tier::getAll();
$titre = 'Gestion des tiers';

$smarty->assign('page', $page);
$smarty->assign('tiers', $tiers);
$smarty->assign('titre', $titre);

if(!empty($_GET['action']))
{
	$action = $_GET['action'];
	if($action == 'rem')
	{
		$numTier = Tier::getTierById($_GET['id']);
		rmdir('../web/img/news/t'.$numTier[0]['tier_numero'].'');//suppression du dossier
		Tier::deleteTierById($_GET['id']);
		header('Location: ?page=tiers');
	}
	else if($action == 'upd')
	{
		$id = $_GET['id'];
		$infoTier = Tier::getTierById($id);
		$nomTier = $infoTier[0]['tier_nom'];
		$numeroTier = $infoTier[0]['tier_numero'];
		$etatTier = $infoTier[0]['tier_etat'];
		$smarty->assign('nomTier', $nomTier);
		$smarty->assign('numeroTier', $numeroTier);
		$smarty->assign('etatTier', $etatTier);
		$smarty->assign('infoTier', $infoTier);
	}
	$smarty->assign('action', $action);
}

if (!empty($_POST['modifier']))
{
	$error = '*';
	if($nom = $_POST['nomTier'] AND !Validate::isTierName($nom))
	{
		$error .= 'Nom du tier invalide ; ';
	}
	
	if($numero = $_POST['numeroTier'] AND !Validate::isTierNumero($numero))
	{
		$error .= 'Numéro du tier invalide ; ';
	}
	
	$etat = $_POST['etatTier'];
	
	if($error == '*')
	{
		$exisTier = Tier::getTierByNum($numero);
		if(empty($exisTier))
		{
			rename('../web/img/news/t'.$numeroTier.'', '../web/img/news/t'.$numero.'');//on renomme le dossier
			Tier::updTier($id, $nom, $numero, $etat);
			$affirmation = 'Le tier a bien été modifié';
			$smarty->assign('affirmation', $affirmation);
			header('Refresh :1; ?page=tiers');
		}
		else
		{
			$error .= 'Ce tier existe déjà';
			$smarty->assign('error', $error);
		}
	}
	else
	{
		$smarty->assign('error', $error);
	}
}

if (!empty($_POST['ajouter']))
{
	$error = '*';
	if($nom = $_POST['nomTier'] AND !Validate::isTierName($nom))
	{
		$error .= 'Nom du tier invalide ; ';
	}
	
	if($numero = $_POST['numeroTier'] AND !Validate::isTierNumero($numero))
	{
		$error .= 'Numéro du tier invalide ; ';
	}
	
	$etat = $_POST['etatTier'];
	
	if($error == '*')
	{
		$exisTier = Tier::getTierByNum($numero);
		if(empty($exisTier))
		{
			Tier::addTier($nom, $numero, $etat);
			mkdir('../web/img/news/t'.$numero.'', 0700);//on créer une dossier avec tous les droits
			$affirmation = 'Le tier a bien été ajouté';
			$smarty->assign('affirmation', $affirmation);
			header('Refresh: 1; ?page=tiers');
		}
		else
		{
			$error .= 'Ce tier existe déjà';
			$smarty->assign('error', $error);
		}
		
	}
	else
	{
		$smarty->assign('error', $error);
	}
}

if (!empty($_POST['annuler']))
{
	header('Location: ?page=tiers');
}

?>