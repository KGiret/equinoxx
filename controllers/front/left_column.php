<?php
	$allSpe = Specialite::getAllSpe();//on recupère les infos de toute les spé
	$allClasse =  Classe::getAllclasse();//on recupère les infos de toute les classes
	$twoLastVideo = Video::getTwoLastVideo();////on recupère les deux dernières vidéos
	$allTiers = Tier::getAll();//on récupère les infos de tous les tiers
	
	//on passe les variables au template
	$smarty->assign('allSpe', $allSpe);
	$smarty->assign('allClasse', $allClasse);
	$smarty->assign('twoLastVideo', $twoLastVideo);
	$smarty->assign('allTiers', $allTiers);
?>