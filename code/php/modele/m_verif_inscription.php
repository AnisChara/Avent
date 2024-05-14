<?php

    require_once 'm_recuperationDB.php';

    function verif_inscription($email,$pseudo)
    {
        require_once 'm_connexion_bdd.php';

        $queryEmail = 'SELECT * FROM user WHERE email = :email';
        $queryPseudo = 'SELECT * FROM user WHERE pseudo = :pseudo';
        $argumentEmail = [[":email",$email]];
        $argumentPseudo = [[":pseudo",$pseudo]];

        $resEmail = TakeFromDB($db,$queryEmail,$argumentEmail);
        $resPseudo = TakeFromDB($db,$queryPseudo,$argumentPseudo);
        
        $verif = [];
        if(COUNT($resEmail) > 0)
        {
            $verif[0] = true; 
        }
        else
        {
            $verif[0] = false;
        }
        if(COUNT($resPseudo) > 0)
        {
            $verif[1] = true;
        }
        else
        {
            $verif[1] = false;
        }

        return $verif;
    }

    // return array[true,true]  //mail , pseudo
?>