<?php 

function search_avent($nom) {

require_once 'm_algo_compatibility.php';
require 'm_connexion_bdd.php';

    if (isset($_POST['res'])) 
    {
        $recherche = $_POST['search'];
        $requete = $db->prepare("SELECT * FROM avent");
        $requete->execute();
        $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
        for ($i = 0; $i < COUNT($resultat); $i++)
        {
            $theme_req = $db->prepare("SELECT theme.theme_name FROM theme INNER JOIN theme_for_avent ON theme.theme_id = theme_for_avent.theme_id WHERE theme_for_avent.avent_id = :id"); 
            $theme_req->execute(array(':id' => $resultat[$i]['avent_id']));
            $result_theme = $theme_req->fetchAll(PDO::FETCH_ASSOC);
            $content = [$resultat[$i]['nom'], $resultat[$i]['lieu']];

            for ($j = 0; $j < COUNT($result_theme); $j++){
                $content[COUNT($content)] = $result_theme[$j];
            }

            $sous_theme_req = $db->prepare("SELECT sous_theme.sous_theme_name FROM sous_theme WHERE avent_id = :id");
            $sous_theme_req->execute(array(':id' => $resultat[$i]['avent_id']));
            $sous_theme_result = $sous_theme_req->fetchAll(PDO::FETCH_ASSOC);
            
            for ($j = 0; $j < COUNT($sous_theme_result); $j++){
                $content[COUNT($content)] = $sous_theme_result[$j];
            }

            var_dump($content);
        }
        return $resultat;
    }

}