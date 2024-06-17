<?php 

require '../m_create_avent.php'; 

$nom = "ZIZI4";
$date_debut = "2025/01/20" ;
$date_fin = '2025/01/22' ;
$fin_inscription ='2025/01/21';
$information = 'avent va gagner';
$capacity = 300;
$payant = false;
$public = true;
$lien_site = 'techday.com';
$lien_billeterie = null;
$lieu = 'ESIEA';
$age_minimum = 1;
$sous_themes = array('Code',null) ;
$createur = 1;
$theme1 = 'Voyage';
$theme2 = 'Jeux';
$theme3 = 'Sport';

create_avent($nom,$date_debut,$date_fin,$fin_inscription, $information, $capacity, $payant, $public, $lien_site, $lien_billeterie, $lieu, $age_minimum, $createur, $theme1, $theme2, $theme3, $sous_themes);
