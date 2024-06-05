
<?php

if($_COOKIE['suggestion']-1 < 0)
{
    gen_suggestion(get_userID($_COOKIE['email']));
}
else
{
    setcookie("suggestion", $_COOKIE['suggestion']-1);
}

require 'c_accueil.php';