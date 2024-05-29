<?php

require '../modele/m_verif_cookies.php';

verif_cookies();

require '../modele/m_collect_info_display_full.php';

$avent = get_info_avent_full_display(get_userID($_COOKIE['email']));

require 'c_afficher_page_full_avent.php';