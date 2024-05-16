<?php


    function verif_inscription($email,$pseudo)
    {
        require 'm_connexion_bdd.php';
        require_once 'm_recuperationDB.php';

        $queryEmail = 'SELECT * FROM user WHERE email = :email';
        $queryPseudo = 'SELECT * FROM user WHERE pseudo = :pseudo';
        $argumentEmail = [[":email",$email]];
        $argumentPseudo = [[":pseudo",$pseudo]];

        $resEmail = queryDB($db,$queryEmail,$argumentEmail);
        $resPseudo = queryDB($db,$queryPseudo,$argumentPseudo);
        
        $verif = [];
        if(COUNT($resEmail) > 0)
        {
            $verif[0] = false; 
        }
        else
        {
            $verif[0] = true;
        }
        if(COUNT($resPseudo) > 0)
        {
            $verif[1] = false;
        }
        else
        {
            $verif[1] = true;
        }

        return $verif;
    }

    // return array[true,true]  //mail , pseudo
?>