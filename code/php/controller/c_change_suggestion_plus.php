
<?php

if($_COOKIE['suggestion'] > COUNT(get_suggestion(get_userID($_COOKIE['email']))))
{
    gen_suggestion(get_userID($_COOKIE['email']));
}
else
{
    setcookie("suggestion", $_COOKIE['suggestion']+1);
}

require 'c_accueil.php';