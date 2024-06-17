<?php

function insert_img_for_avent($avent_id,$photo_id)
{
    require 'm_connexion_bdd.php';
    require_once 'm_recuperationDB.php';

    $req = $db->prepare('INSERT INTO photo_for_avent (photo_id,avent_id) VALUES (:photo_id,:avent_id);');
    $req->execute(array(
        ':photo_id' => $photo_id,
        ':avent_id' => $avent_id
    ));

}