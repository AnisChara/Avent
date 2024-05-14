<?php

require "../modele/m_user_connexion.php";


if (isset($_COOKIE["mail"]) && isset($_COOKIE["mot_de_passe"]))
{
    $connexion = user_connexion($_COOKIE["mail"], $_COOKIE["mot_de_passe"]);
}
else if (isset($_POST["mail"]) && isset($_POST["mot_de_passe"]))
{
    $connexion = user_connexion($_POST["mail"], $_POST["mot_de_passe"]);
}