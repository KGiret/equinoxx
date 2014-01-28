<?php
$page = $_GET['page'];
$players = Player::getAll();
$titre = 'Gestion du roster';

$smarty->assign('players', $players);
$smarty->assign('titre', $titre);
$smarty->assign('page', $page);

if(!empty($_GET['action']))
{
	$action = $_GET['action'];
	if($action == 'rem')
	{
		Player::deletePlayerById($_GET['id']);
		header('Location: ?page=roster'); 
	}
	else if($action == 'upd')
	{
		$id = $_GET['id'];
		$infoPlayer = Player::getPlayerById($id);
		$nomPlayer = $infoPlayer[0]['player_nom'];
		$classPlayer = $infoPlayer[0]['player_id_class'];
		$spePlayer = $infoPlayer[0]['player_id_spe'];
		$rolePlayer = $infoPlayer[0]['player_id_role'];
		$rangPlayer = $infoPlayer[0]['player_id_grade'];
		$classes = Classe::getAllClasse();
		$spes = Specialite::getAllSpe();
		$roles = Player::getAllRole();
		$rangs = Player::getAllRang();
		
		$smarty->assign('classes', $classes);
		$smarty->assign('spes', $spes);
		$smarty->assign('roles', $roles);
		$smarty->assign('rangs', $rangs);
		$smarty->assign('infoPlayer', $infoPlayer);
		$smarty->assign('classPlayer', $classPlayer);
		$smarty->assign('spePlayer', $spePlayer);
		$smarty->assign('rolePlayer', $rolePlayer);
		$smarty->assign('rangPlayer', $rangPlayer);
		$smarty->assign('nomPlayer', $nomPlayer);
	}
	else
	{
		$classes = Classe::getAllClasse();
		$spes = Specialite::getAllSpe();
		$roles = Player::getAllRole();
		$rangs = Player::getAllRang();
		
		$smarty->assign('classes', $classes);
		$smarty->assign('spes', $spes);
		$smarty->assign('roles', $roles);
		$smarty->assign('rangs', $rangs);
	}
	$smarty->assign('action', $action);
}

if (!empty($_POST['ajouter']))
{
	$error = '*';
	if($nom = $_POST['nomPlayer'] /*AND !Validate::isPlayerName($nom)*/)
	{
		//$error .= 'Nom du joueur invalide ; ';
	}
	$classe = $_POST['idClass'];
	$spe = $_POST['idSpe'];
	$role = $_POST['idRole'];
	$rang = $_POST['idRang'];
	
	if($error == '*')
	{
		Player::addPlayer($nom, $classe, $spe, $role, $rang);
		$affirmation = 'Le joueur a bien été ajouté';
		$smarty->assign('affirmation', $affirmation);
		header('Refresh: 1; ?page=roster');
	}
	else
	{
		$smarty->assign('error', $error);
	}
}

if (!empty($_POST['modifier']))
{
	$error = '*';
	if($nom = $_POST['nomPlayer'] /*AND !Validate::isPlayerName($nom)*/)
	{
		//$error .= 'Nom du joueur invalide ; ';
	}
	$classe = $_POST['idClass'];
	$spe = $_POST['idSpe'];
	$role = $_POST['idRole'];
	$rang = $_POST['idRang'];
	
	if($error == '*')
	{
		Player::updPlayer($id, $nom, $classe, $spe, $role, $rang);
		$affirmation = 'Le joueur a bien été modifié';
		$smarty->assign('affirmation', $affirmation);
		header('Refresh: 1; ?page=roster');
	}
	else
	{
		$smarty->assign('error', $error);
	}
}

if (!empty($_POST['annuler']))
{
	header('Location: ?page=roster');
}
?>