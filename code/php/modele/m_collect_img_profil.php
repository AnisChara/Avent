<?php

    function img_profil($UserID)
    {
        require_once 'm_recuperationDB.php';
        require 'm_connexion_bdd.php';

        $query = 'SELECT photo_file FROM photo INNER JOIN user ON photo.photo_id = user.pp  WHERE user_id = :user_id';
        $argument = [[':user_id',$UserID]];
        $brutimg = queryDB($db,$query,$argument);

        $img = $brutimg[0]['photo_file'];

        return base64_encode($img);
    }

?>