<?php

function insert_img($file,$name = null)
{
    require '../m_connexion_bdd.php';
    require_once '../m_recuperationDB.php';

    if($name === null)
    {
        $name = "myFile";
    }

    $value = file_get_contents($_FILES[$name]['tmp_name']);

    $query = "INSERT INTO photo(photo_file) VALUES (:val)";
    $argument = [[":val",$value]];
    queryDB($db,$query,$argument);
}