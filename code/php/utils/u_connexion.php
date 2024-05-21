<?php

require "../modele/m_user_connexion.php";

function confirm_connexion() {

    if (isset($_COOKIE["email"]) && isset($_COOKIE["mot_de_passe"]))
    {
        $connexion = user_connexion($_COOKIE["email"], $_COOKIE["mot_de_passe"]);
    }
    else if (isset($_POST["email"]) && isset($_POST["mot_de_passe"]))
    {
        $connexion = user_connexion($_POST["email"], $_POST["mot_de_passe"]);

        if ($connexion ==! false)
        {
            setcookie("mot_de_passe", $_POST["mot_de_passe"]);
            setcookie("email", $_POST["email"]);
        }
    }

    if (isset($connexion))
    {
        return $connexion;
    }
    else return null;
}