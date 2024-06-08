<?php

require 'c_verif_cookies.php';

verif_cookies();

require_once "../modele/m_getID_from_mail.php";
require_once '../modele/m_get_suggestion.php';

$expect = $_POST['action'];
$avent = get_suggestion(get_userID($_COOKIE['email']))[$_COOKIE['suggestion']]['avent_id'];
var_dump($expect);

if($expect == "like") //fonctionne plus toucher
{
    require '../modele/m_fav_unfav_db.php';
    require '../modele/m_collect_avent_is_like.php';

    if(islike(get_userID($_COOKIE["email"]),$avent))
    {
        unfav(get_userID($_COOKIE['email']),$avent);
    }
    else
    {
        fav(get_userID($_COOKIE['email']),$avent);
    }

}
else if($expect == "plus")
{
    insertviews(get_userID($_COOKIE["email"]), $avent);

    
}
else if($expect == "minus")
{

}

require 'c_accueil.php';