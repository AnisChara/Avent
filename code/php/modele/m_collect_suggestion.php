<?php

    function collect_suggestion($UserID)
    {
        require_once 'm_recuperationDB.php';
        require 'm_connexion_bdd.php';

        $query = 'SELECT avent_id FROM suggestions WHERE user_id = :user_id ORDER BY indice ASC LIMIT 1';
        $argument = [[":user_id",$UserID]];

        $brutdata = queryDB($db,$query,$argument);

        if($brutdata ==! false)
        {
            return $brutdata[0]['avent_id'];
        }
        else
        {
            return false;
        }
    }

?>