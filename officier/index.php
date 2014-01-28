<?php

// Initialisation de l'environnement
include('../config/config_init.php');

if(!empty($_SESSION['account']) && $_SESSION['account'] == 'officier')// Si on est connecté en tant qu'admin on affiche le contenu du panneau d'admin
	{
		// Gestion de Routing (on récupère le controleur en fonction de la variable page de l'url
		
		
		if (isset($_GET['page']) && file_exists(_CTRL_.'officier/'.str_replace('.', '', $_GET['page']).'.php'))
			include(_CTRL_.'officier/'.$_GET['page'].'.php');//include dynamique
		else
			include(_CTRL_.'officier/accueil.php');
			
		// Affichage des templates(on récupère le template en fonction de la variable page de l'url
		$smarty->display(_TPL_ . 'officier/header.tpl');
		
		if (isset($_GET['page']) && file_exists(_TPL_.'officier/'.str_replace('.', '', $_GET['page']).'.tpl'))
			$smarty->display(_TPL_.'officier/'.$_GET['page'].'.tpl');
		else
			$smarty->display(_TPL_ . 'officier/accueil.tpl');
		
		$smarty->display(_TPL_ . 'officier/footer.tpl');
	}
else//sinon on affiche le formulaire de connexion
	{
		include(_CTRL_.'officier/connection.php');
		$smarty->display(_TPL_ . 'officier/connection.tpl');
	}

?>