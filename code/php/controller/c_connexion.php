<?php

require "../modele/m_user_connexion.php";


if (isset($_COOKIE["email"]) && isset($_COOKIE["mot_de_passe"]))
{
    $connexion = user_connexion($_COOKIE["email"], $_COOKIE["mot_de_passe"]);
}
else if (isset($_POST["email"]) && isset($_POST["mot_de_passe"]))
{
    $connexion = user_connexion($_POST["email"], $_POST["mot_de_passe"]);

    if ($connexion == true)
    {
        setcookie("mot_de_passe", $_POST["mot_de_passe"]);
        setcookie("email", $_POST["email"]);
    }
}