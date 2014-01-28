<?php
$page = $_GET['page'];
$titre = 'Liste des étudiants';


$smarty->assign('titre', $titre);
$smarty->assign('page', $page);

$etudiants = Etudiant::getAll();

$smarty->assign('etudiants', $etudiants);
?>