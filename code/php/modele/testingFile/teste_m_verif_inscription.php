<?php

    require_once '../m_verif_inscription.php';

    $email = "APANYAN";
    $pseudo = "COUBEH";
    
    echo var_dump(verif_inscription($email,$pseudo));

?>