<?php

require_once 'c_verif_cookies.php';

verif_cookies();

require_once '../modele/m_inscr_desinscr_db.php';
require_once '../modele/m_collect_info_display_full.php';
require_once '../modele/m_getID_from_mail.php';
require_once '../modele/m_recuperation_info_user.php';
require_once '../modele/m_collect_avent_is_like.php';

$inscrit = is_inscrit(get_userID($_COOKIE['email']),$_POST['avent_id']);
$avent = get_info_avent_full_display($_POST['avent_id']);
$infoCreator = recuperer_info_user($avent[0]["createur"]);
$owner = ($infoCreator['email'] === $_COOKIE['email']);
$emailCreator = $infoCreator['email'];
$avent[0]["createur"] = $infoCreator['pseudo'];
$like = islike(get_userID($_COOKIE["email"]),$_POST['avent_id']);

if(isset($_POST['action']))
{
    if($_POST['action'] == "like") //fonctionne plus toucher   1
    {
        require_once '../modele/m_fav_unfav_db.php';
        require_once '../modele/m_collect_avent_is_like.php';

        if($like === true)
        {
            unfav(get_userID($_COOKIE['email']),$_POST['avent_id']);
        }
        else
        {
            fav(get_userID($_COOKIE['email']),$_POST['avent_id']);
        }

    }
}
$like = islike(get_userID($_COOKIE["email"]),$_POST['avent_id']);

//var_dump($avent);
//var_dump($_POST['avent_id']);
require_once 'c_back_url.php';

require '../views/v_afficher_full_avent.php';