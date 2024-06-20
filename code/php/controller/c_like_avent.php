
<?php

require '../modele/m_fav_unfav_db.php';

if($_GET("action") == 0)
{
    fav(get_userID($_COOKIE['email']),$AventDisplay['avent_id']);
}
else if($_GET("action") == 1)
{
    unfav(get_userID($_COOKIE['email']),$AventDisplay['avent_id']);
}

require 'c_accueil.php';