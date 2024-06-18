<?php

function insert_sous_theme($sous_theme)
{
    require "m_connexion_bdd.php";
    $req = $db->prepare("INSERT INTO sous_theme (sous_theme_name) VALUES (?)");
    $req->execute(array($sous_theme));

    $req = $db->prepare("SELECT * FROM sous_theme WHERE sous_theme_name = (?)");
    $req->execute(array($sous_theme));
    $res= $req->fetch();

    return $res[0];
}