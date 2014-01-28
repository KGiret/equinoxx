<?php

$page = $_GET['page'];
$titre = 'Mentions Légales';
$title = 'Mentions légales du site de la guilde EquinoXx';//meta title

$smarty->assign('page', $page);
$smarty->assign('titre', $titre);
$smarty->assign('title', $title);

?>