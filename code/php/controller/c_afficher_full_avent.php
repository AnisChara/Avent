<?php

require_once 'c_verif_cookies.php';

verif_cookies();

require_once '../modele/m_collect_info_display_full.php';
require_once '../modele/m_getID_from_mail.php';
require_once '../modele/m_recuperation_info_user.php';

$avent = get_info_avent_full_display($_POST['avent_id']);
$infoCreator = recuperer_info_user($avent[0]["createur"]);
$emailCreator = $infoCreator['email'];
$avent[0]["createur"] = $infoCreator['pseudo'];
//var_dump($avent);
//var_dump($_POST['avent_id']);
require_once 'c_back_url.php';

require '../views/v_afficher_full_avent.php';