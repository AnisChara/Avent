<?php

    function timeAvent($id)
    {
        require "m_connexion_bdd.php";
        $requeteTime = $db->prepare("SELECT avent.date_creation, avent.date_fin FROM avent WHERE avent_id = :avent_id");
        $requeteTime->execute(array(":avent_id" => $id));

        return $requeteTime->fetchAll();
    }