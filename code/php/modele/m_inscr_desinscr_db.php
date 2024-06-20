<?php

function inscription_avent($user_id,$avent_id)
{
    require 'm_connexion_bdd.php';

    $requete = $db->prepare("INSERT INTO inscrit (user_id,avent_id) VALUES (:user_id, :avent_id);");
    $requete->execute(array(
        'user_id' => $user_id,
        'avent_id' => $avent_id
    ));
}

function uninscription_avent($user_id,$avent_id)
{
    require 'm_connexion_bdd.php';

    $requete = $db->prepare("DELETE FROM inscrit WHERE user_id = :user_id AND avent_id = :avent_id;");
    $requete->execute(array(
        'user_id' => $user_id,
        'avent_id' => $avent_id
    ));
}

function is_inscrit($user_id,$avent_id)
{
    require 'm_connexion_bdd.php';

    $requete = $db->prepare("SELECT * FROM inscrit WHERE user_id = :user_id AND avent_id = :avent_id;");
    $requete->execute(array(
        'user_id' => $user_id,
        'avent_id' => $avent_id
    ));
    $res = $requete->fetchAll();

    if (count($res)>0) return true;
    else return false;
}