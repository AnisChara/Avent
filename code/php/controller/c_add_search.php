<?php
require_once 'c_verif_cookies.php';

verif_cookies();

require_once '../modele/m_getID_from_mail.php';
require_once '../modele/m_insert_search.php';

insert_search(get_userID($_COOKIE['email']),$_POST['avent_id']);

require_once 'c_afficher_full_avent.php';