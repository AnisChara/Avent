<?php

require_once '../m_recuperationDB.php';

$pdo = new PDO("mysql:host=localhost;dbname=DB_AVent", "root");     // Le pdo soit le "hook" de connexion.

$query = "SELECT theme_name FROM theme WHERE theme_id = :id";       // Ma query (requête SQL) avec les ":" pour les conditions coté injection
$id = 2;                    
$argument = [[":id",$id]];                                          //les arguments  : [0] -> ou remplacer dans la requête  [1] -> ce qu'il faut mettre à la place

echo var_dump(queryDB($pdo,$query,$argument));                   //affiche en var_dump le résultat

?>

