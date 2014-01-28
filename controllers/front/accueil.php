<?php
      $allArticles = Articles::getAll(); //récupère les articles du dernier tier
	  $fiveImages  = Screen::getFiveLastImage(); //récupère les 5 dernières images pour le diapo
	  $titre = 'Dernières News'; // titre de la page
	  $title = 'Dernières nouvelles de la guilde EquinoXx';//meta title
	  if(!empty($_GET['page']))
	  {
		if($_GET['page'] != 'accueil')
		{
			$page = 'accueil';
		}
		else
		{
			$page = 'accueil';
		}
	  }
	 
	  else
	  {
		$page = 'accueil';
	  }
	  
	  //on envoie les variables au template
	$smarty->assign('allArticles', $allArticles);
	$smarty->assign('fiveImages', $fiveImages);
	$smarty->assign('page', $page);
	$smarty->assign('titre', $titre);
	$smarty->assign('title', $title);

?>