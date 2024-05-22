<?php

function clean_suggestion($user_id)
{
    require "m_connexion_bdd.php";

    $requete = $db -> prepare("DELETE FROM suggestion WHERE user_id = :user_id");
    $requete->execute(array(":user_id" => $user_id));
}