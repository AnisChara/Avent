<?php

function get_image_id($uniqid)
{
    require 'm_connexion_bdd.php';

    $req = $db->prepare('SELECT photo_id FROM photo WHERE image_key = :uniqid');
    $req->execute(array(':uniqid' => $uniqid));
    $result = $req->fetchAll();

    echo ($result[0]['photo_id']);

    return $result[0]['photo_id'];
}

get_image_id('image_667007936b71d');