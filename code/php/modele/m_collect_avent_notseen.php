<?php

    function avent_notseen($UserID)
    {
        require_once 'm_recuperationDB.php';
        require 'm_connexion_bdd.php';

        $query = 'SELECT avent_id FROM avent WHERE avent.etat <> 0 EXCEPT SELECT avent_id FROM views WHERE user_id = :user_id';
        $argument = [[':user_id',$UserID]];
        
        $brutdata = queryDB($db,$query,$argument);

        return $brutdata;
    }

?>