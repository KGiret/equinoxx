<?php

// Initialisation de l'environnement
include('./config/config_init.php');

// Gestion de Routing (on récupère le controleur en fonction de la varaible page de l'url
if (isset($_GET['page']) && $_GET['page'] != 'mentions')
{
	include(_CTRL_.'/front/left_column.php');
}

if (isset($_GET['page']) && file_exists(_CTRL_.'front/'.str_replace('.', '', $_GET['page']).'.php'))
    include(_CTRL_.'front/'.$_GET['page'].'.php');
else
    include(_CTRL_.'front/accueil.php');
	
// Affichage des templates (on récupère le template en fonction de la varaible page de l'url
$smarty->display(_TPL_ . 'front/header.tpl');
if (isset($_GET['page']) && $_GET['page'] != 'mentions')
{
	$smarty->display(_TPL_ . 'front/left_column.tpl');
}

if (isset($_GET['page']) && file_exists(_TPL_.'front/'.str_replace('.', '', $_GET['page']).'.tpl'))
    $smarty->display(_TPL_.'front/'.$_GET['page'].'.tpl');
else
    $smarty->display(_TPL_ . 'front/accueil.tpl');

$smarty->display(_TPL_ . 'front/footer.tpl');


?>