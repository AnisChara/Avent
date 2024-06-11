<?php


function verif_cookies()
{
    require_once "../modele/m_user_connexion.php";
    
    if (isset($_COOKIE["email"]) && isset($_COOKIE["mot_de_passe"]))
    {
        $connexion = user_connexion($_COOKIE["email"], $_COOKIE["mot_de_passe"]);

        if ($connexion === false)
        {
            header("Location:./c_afficher_page_de_co.php");
        }
    }
    else
    {
        header("Location:./c_afficher_page_de_co.php");
    }
    
}