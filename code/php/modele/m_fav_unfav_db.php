<?php

function fav($user_id,$avent_id)
{
    require 'm_connexion_bdd.php';

    $requete = $db->prepare("INSERT INTO fav_avent_for_user (user_id,avent_id) VALUES (:user_id, :avent_id);");
    $requete->execute(array(
        'user_id' => $user_id,
        'avent_id' => $avent_id
    ));
}

function unfav($user_id,$avent_id)
{
    require 'm_connexion_bdd.php';

    $requete = $db->prepare("DELETE FROM fav_avent_for_user WHERE user_id = :user_id AND avent_id = :avent_id;");
    $requete->execute(array(
        'user_id' => $user_id,
        'avent_id' => $avent_id
    ));
}