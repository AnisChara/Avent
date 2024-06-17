<?php

function insert_img($file,$name = null,$uniqid)
{
    require 'm_connexion_bdd.php';
    require_once 'm_recuperationDB.php';

    if($name === null)
    {
        $name = "myFile";
    }

    $value = file_get_contents($_FILES[$name]['tmp_name']);

    $query = "INSERT INTO photo(photo_file,image_key) VALUES (:val,:uniqid)";
    $argument = [[":val",$value],[":uniqid",$uniqid]];
    queryDB($db,$query,$argument);

    return $value;
}