<?php

    function getThemeUser($userID)
    {
        require_once 'm_recuperationDB.php';
        require 'm_connexion_bdd.php';

        $query = 'SELECT theme.theme_name FROM theme INNER JOIN fav_theme_for_user ON theme.theme_id = fav_theme_for_user.theme_id WHERE fav_theme_for_user.user_id = :user_id';
        $arguments = [[":user_id",$userID]];

        $brutdata = queryDB($db,$query,$arguments);

        
        $res = [];
        for($i = 0; $i < COUNT($brutdata); $i++)
        {
            $res[COUNT($res)] = $brutdata[$i]['theme_name'];
        }
        
        return $res;
        
    }