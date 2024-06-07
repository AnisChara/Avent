<?php 

require '../m_create_avent.php'; 

$nom = "nom";
$date_debut = "2005/01/20" ;
$date_fin = '2005/01/22' ;
$fin_inscription ='2005/01/21';
$information = 'information';
$capacity = 200;
$payant = true;
$public = true;
$lien_site = 'lien_site';
$lien_billeterie = 'lien_billetterie';
$lieu = 'lieu';
$age_minimum = 10;
$sous_theme = 1;
$createur = 1;
$theme1 = 'Voyage';
$theme2 = 'Jeux';
$theme3 = 'Sport';

create_avent($nom,$date_debut,$date_fin,$fin_inscription, $information, $capacity, $payant, $public, $lien_site, $lien_billeterie, $lieu, $age_minimum, $sous_theme, $createur, $theme1, $theme2, $theme3);
