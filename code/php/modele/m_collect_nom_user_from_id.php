<?php

function nom_from_user($id)
{

    require 'm_connexion_bdd.php';
    require_once 'm_recuperationDB.php';

    $query = 'SELECT pseudo FROM user WHERE user_id = :id';
    $argument = [[':id',$id]];

    return queryDB($db,$query,$argument)[0]['pseudo'];
}