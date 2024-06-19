<?php

require 'c_verif_cookies.php';

setcookie('email', "", time()-3600);
setcookie('mot_de_passe', "", time()-3600);

verif_cookies();
