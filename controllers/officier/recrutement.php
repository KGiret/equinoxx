<?php
$page = $_GET['page'];
$titre = 'Gestion du recrutement';
$specialites = Specialite::getAllSpe();


$smarty->assign('titre', $titre);
$smarty->assign('page', $page);
$smarty->assign('specialites',$specialites);

if(!empty($_GET['action']) && $_GET['action'] != 'detail')
{
	if ($_GET['action'] == 'open')
	{
		$newEtat = 1;
	}
	else
	{
		$newEtat = 0;
	}
	$id = $_GET['id'];
	Specialite::updEtatSpe($id, $newEtat);
	header('Location: ?page=recrutement'); 
}

if(!empty($_GET['action']) && $_GET['action'] == 'detail')
{
	$recrutement = Recrutement::getDetail();
	$recrutement = $recrutement[0]['recrutement_contenu'];
	$action = $_GET['action'];
	$smarty->assign('action', $action);
	$smarty->assign('recrutement', $recrutement);
}

if(!empty($_POST['modifier']))
{
	$detail = $_POST['recrutementDetail'];
	Recrutement::updDetail($detail);
	print_r($detail);
	$affirmation = 'Les détails ont bien été modifiés';
	$smarty->assign('affirmation', $affirmation);
	header('Refresh: 1; ?page=recrutement');
}

if(!empty($_POST['annuler']))
{
	header('Location: ?page=recrutement');
}
?>