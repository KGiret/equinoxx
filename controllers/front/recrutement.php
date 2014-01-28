<?php
	$page = $_GET['page'];
	$titre = 'Recrutement';//titre de la page
	$title = 'État du recrutement de la guilde EquinoXx';//meta title
	 
	$recrutement = Recrutement::getDetail(); // on récupère le contenu texte de la page recrutement
	$recrutement = $recrutement[0]['recrutement_contenu'];
	//on passe les variables au template
	$smarty->assign('titre', $titre);
	$smarty->assign('title', $title);
	$smarty->assign('page', $page);
	$smarty->assign('recrutement', $recrutement);
?>