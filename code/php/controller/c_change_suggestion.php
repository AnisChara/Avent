<?php

require 'c_verif_cookies.php';

verif_cookies();

require_once "../modele/m_getID_from_mail.php";
require_once '../modele/m_get_suggestion.php';
require '../modele/m_gen_suggestion.php';

$expect = $_POST['action'];
$suggestion = get_suggestion(get_userID($_COOKIE['email']));
$avent = $suggestion[$_COOKIE['suggestion']]['avent_id'];
var_dump($expect);

if($expect == "like") //fonctionne plus toucher   1
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

else if($expect == "minus") //                     2
{
    require '../modele/m_insert_in_views.php';
    insertviews(get_userID($_COOKIE["email"]), $avent);

    if($_COOKIE['suggestion']+1 >= COUNT($suggestion))
    {
        require '../modele/m_collect_avent_notseen.php';
        if(COUNT(avent_notseen(get_userID($_COOKIE["email"]))) == 0)
        {
            setcookie('suggestion',$_COOKIE['suggestion']+1);
        }
        else
        {
            gen_suggestion(get_userID($_COOKIE["email"]));
            setcookie('suggestion',0);
        }
    }
    else
    {
        setcookie('suggestion',$_COOKIE['suggestion']+1);
    }
}

else if($expect == "plus") //                     3
{
    if($_COOKIE['suggestion']-1 <= 0)
    {
        gen_suggestion(get_userID($_COOKIE["email"]));
        setcookie('suggestion',0);

    }
    else
    {
        setcookie('suggestion',$_COOKIE['suggestion']-1);
    }
}

//require 'c_accueil.php';
header("Location:./c_accueil.php");