<?php

    require_once 'm_recuperationDB.php';

    function user_connexion($email,$mdp)
    {
        require 'm_connexion_bdd.php';

        $query = "SELECT * FROM user WHERE email = :email AND mot_de_passe = :mdp";
        $argument = [[":email",$email],[":mdp",$mdp]];

        $res = queryDB($db,$query,$argument);
        
        if(COUNT($res) > 0)
        {
            return $res;
        }
        else
        {
            return false;
        }
    }