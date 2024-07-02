<?php


    function insert_search($idUser,$idAvent)
    {
        require "m_connexion_bdd.php";
        $requeteSearch = $db->prepare("INSERT INTO search (user_id,avent_id) VALUES (:user_id,:avent_id)");
        $requeteSearch->execute(array(":user_id" => $idUser,":avent_id" => $idAvent));
    };