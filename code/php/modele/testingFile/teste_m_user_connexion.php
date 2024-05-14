<?php

require_once '../m_user_connexion.php';

$mail_of_user = 'APfANYAN';
$mdp_of_user = 'PROUT';
/*
$mail_of_user = "APANYAN'--";
$mdp_of_user = '';

$mail_of_user = "APANYAN; SELECT * FROM user";
$mdp_of_user = '';
*/

$response = user_connexion($mail_of_user,$mdp_of_user);

if ($response != false)
{
    var_dump($response);
}
else 
{
    echo "false";
}

?>