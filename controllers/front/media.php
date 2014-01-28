<?php
      
	$page = $_GET['page'];
	$titre = 'Médias';//titre de la page
	$title = 'Screenshots et vidéos de la guilde EquinoXx';//meta title
	if(!empty($_GET['media']))
	{
		$type = $_GET['media'];
		$tier = $_GET['tier'];
	
		if($type == 'screen')
		{
			$titre2 = 'Screenshots du Tier '.$tier ;
			$media = Screen::getScreenByTier($tier);//on récupère les screenshots par tier
		}
		else
		{ 
			$titre2 = 'Vidéos du Tier '.$tier ;
			$media = Video::getVideoByTier($tier);//on récupère les vidéos par tier
		}
	}
	else //sinon on recupere les screenshot du dernier tier
	{
		$tier = Tier::getALL();
		$tier = $tier[0]['tier_numero'];
		$type = 'screen';
		$titre2 = 'Screenshots du Tier '.$tier ;
		$media = Screen::getScreenByTier($tier);
	}
	 
	//on passe les variables au template
	$smarty->assign('titre2', $titre2);
	$smarty->assign('media', $media);
	$smarty->assign('type', $type);
	$smarty->assign('tier', $tier);
	$smarty->assign('titre', $titre);
	$smarty->assign('page', $page);
	$smarty->assign('title', $title);

?>