<?php

    function img_avent($aventID)
    {
        require_once 'm_recuperationDB.php';
        require 'm_connexion_bdd.php';

        $query = 'SELECT photo_file FROM photo INNER JOIN photo_for_avent ON photo.photo_id = photo_for_avent.photo_id WHERE photo_for_avent.avent_id = :avent_id';
        $argument = [[':avent_id',$aventID]];
        $brutimg = queryDB($db,$query,$argument);

        $img = $brutimg[0]['photo_file'];

        return base64_encode($img);
    }

?>