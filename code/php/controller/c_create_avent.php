<?php 

require '../modele/m_create_avent.php';
require '../modele/m_insert_sous_theme.php';
require_once 'c_verif_cookies.php';

verif_cookies();

//insert sous theme
create_avent($_POST['nom'], $_POST['date_debut'], $_POST['date_fin'], $_POST['fin_inscription'], $_POST['information'],$_POST['capacity'],$_POST['is_payant'],$_POST['is_public'],$_POST['lien_site'],$_POST['lien_billeterie'],$_POST['lieu'],$_POST['age_minimum'],$_POST['sous_theme'],$_POST['createur'],$_POST['theme1'],$_POST['theme2'],$_POST['theme3']);

