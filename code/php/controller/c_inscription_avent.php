<?php

require_once '../modele/m_inscr_desinscr_db.php';
require_once "../modele/m_getID_from_mail.php";

if(is_inscrit(get_userID($_COOKIE["email"]),$_POST['avent_id']))
{
    uninscription_avent(get_userID($_COOKIE['email']),$_POST['avent_id']);
}
else
{
    inscription_avent(get_userID($_COOKIE['email']),$_POST['avent_id']);
}

require "c_afficher_full_avent.php";