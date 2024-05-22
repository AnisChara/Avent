<?php

require "../modele/m_user_connexion.php";

    
    if (isset($_POST["email"]) && isset($_POST["mot_de_passe"]))
    {
        $connexion = user_connexion($_POST["email"], $_POST["mot_de_passe"]);

        if ($connexion !== false)
        {
            setcookie("mot_de_passe", $_POST["mot_de_passe"]);
            setcookie("email", $_POST["email"]);
            header("Location:./c_afficher_TL.php");
        }
        else if ($connexion === false)
        {
            $error_connexion_msg = "Mot de passe ou email non trouvé";
            require "./c_afficher_page_de_co.php";
        }
    }
    else
    {
        $error_connexion_msg = "Veuillez remplir tous les champs";
        require "./c_afficher_page_de_co.php";
    };