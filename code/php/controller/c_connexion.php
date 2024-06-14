<?php

require_once "../modele/m_user_connexion.php";
require_once "../modele/m_gen_suggestion.php";
require_once "../modele/m_getID_from_mail.php";

    if(empty($_POST["email"]) || empty($_POST["mot_de_passe"]))
    {
        $error_connexion_msg = "Veuillez remplir tous les champs";
        require "./c_afficher_page_de_co.php";
    }
    else if (isset($_POST["email"]) && isset($_POST["mot_de_passe"]))
    {
        $connexion = user_connexion($_POST["email"], $_POST["mot_de_passe"]);

        if ($connexion !== false)
        {
            setcookie("mot_de_passe", $_POST["mot_de_passe"]);
            setcookie("email", $_POST["email"]);
            gen_suggestion(get_userID($_POST["email"]));
            setcookie("suggestion", 0);

            header("Location:./c_accueil.php");
        }
        else if ($connexion === false)
        {
            $error_connexion_msg = "Mot de passe ou email non trouvé";
            require "./c_afficher_page_de_co.php";
        }
    };