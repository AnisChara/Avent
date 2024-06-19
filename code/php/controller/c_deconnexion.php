<?php

setcookie('email', "", time()-3600);
setcookie('mot_de_passe', "", time()-3600);

require 'c_afficher_page_de_co.php';
