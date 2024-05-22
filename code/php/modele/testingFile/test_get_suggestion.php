<?php 

require 'C:\xampp\htdocs\exercices\avent\code\PHP\modele\m_get_suggestion.php';

$avents = get_suggestion(1);

foreach ($avents as $avent) {
    echo $avent['avent_id'];
}