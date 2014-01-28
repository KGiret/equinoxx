<?php

	$page = $_GET['page'];
	$titre = 'Archives';
	$title = 'Archives de la guilde EquinoXx';//meta title
	
	$smarty->assign('page', $page);
	$smarty->assign('titre', $titre);
	$smarty->assign('title', $title);
	
	if(!empty($_GET['tier']))
	{
		$tier = $_GET['tier'];
	}
	else
	{
		$tier = Tier::getALL();
		$tier = $tier[1]['tier_numero'];	
	}
	$allArticles = Articles::getByTier($tier);
	$smarty->assign('allArticles', $allArticles);




?>