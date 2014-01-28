<?php
	$rolename = 'tank';
	$alltank = Player::getPlayerByRole($rolename);//on récupère les joueurs don le role est tank
	
	$rolename = 'heal';
	$allheal  = Player::getPlayerByRole($rolename);//on récupère les joueurs don le role est heal
	
	$rolename = 'dps';
	$alldps = Player::getPlayerByRole($rolename);//on récupère les joueurs don le role est dps
	
	$page = $_GET['page'];
	$titre = 'Roster';//titre de la page
	$title = 'Le roster de la guilde EquinoXx';//meta title
	
	//on passe les variables au template
	$smarty->assign('page', $page);
	$smarty->assign('titre', $titre);
	$smarty->assign('title', $title);
	$smarty->assign('alltank', $alltank);
	$smarty->assign('allheal', $allheal);
	$smarty->assign('alldps', $alldps);


?>