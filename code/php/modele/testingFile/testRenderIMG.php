<?php

    /*
    require_once '../m_recuperationDB.php';
    require '../m_connexion_bdd.php';

    $query = 'SELECT photo_file FROM photo WHERE photo_id = :photoID';
    $ID = 1;
    $argument = [[':photoID',$ID]];
    $brutimage  = queryDB($db,$query,$argument);
    //echo var_dump($brutimage);
    $image = $brutimage[0]['photo_file'];
    
    echo '<img src="data:image/png;base64,' . base64_encode($image) . '" />';
    */

    require_once '../m_collect_img_profil.php';
    require_once '../m_collect_img_avent.php';

    $ID = 1;
    $img = img_profil($ID);
    echo '<img src="data:image/png;base64,' . img_profil($ID) . '" />';
    echo '<img src="data:image/png;base64,' . img_avent($ID) . '" />';
?>
