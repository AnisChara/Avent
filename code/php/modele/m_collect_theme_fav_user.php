<?php

    function getThemeUser($userID)
    {
        require_once 'm_recuperationDB.php';
        require_once 'm_connexion_bdd.php';

        $query = 'SELECT theme.theme_name FROM theme INNER JOIN fav_theme_for_user ON theme.theme_id = fav_theme_for_user.theme_id WHERE fav_theme_for_user.user_id = :user_id';
        $arguments = [[":user_id",$userID]];

        $brutdata = TakeFromDB($db,$query,$arguments);

        $res = [$brutdata[0]['theme_name'],$brutdata[1]['theme_name'],$brutdata[2]['theme_name']];
        return $res;
    }

?>