<?php

require 'c_verif_cookies.php';

unset($_COOKIE['email']);
unset($_COOKIE['mot_de_passe']);

verif_cookies();
