<?php 

function search_avent($recherche) 
{
    require_once 'm_algo_compatibility.php';
    require 'm_connexion_bdd.php';

        $requete = $db->prepare("SELECT * FROM avent");
        $requete->execute();
        $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
        $content = [];
        for ($i = 0; $i < COUNT($resultat); $i++)
        {
            $theme_req = $db->prepare("SELECT theme.theme_name FROM theme INNER JOIN theme_for_avent ON theme.theme_id = theme_for_avent.theme_id WHERE theme_for_avent.avent_id = :id"); 
            $theme_req->execute(array(':id' => $resultat[$i]['avent_id']));
            $result_theme = $theme_req->fetchAll(PDO::FETCH_ASSOC);

            if($resultat[$i]['lieu'] !== null)
            {
                $lieu = str_replace(",", " ", $resultat[$i]['lieu']);
                $lieu = str_replace(";", " ", $lieu);
                $lieu = explode(" ",$lieu);
                
                $content[$i][0] = [$resultat[$i]['avent_id'], $resultat[$i]['nom'], $lieu];
            }
            else
            {
                $content[$i][0] = [$resultat[$i]['avent_id'], $resultat[$i]['nom']];
            }

            for ($j = 0; $j < COUNT($result_theme); $j++)
            {
                $content[$i][1][$j] = $result_theme[$j]['theme_name'];
            }

            $sous_theme_req = $db->prepare("SELECT sous_theme.sous_theme_name FROM sous_theme WHERE avent_id = :id");
            $sous_theme_req->execute(array(':id' => $resultat[$i]['avent_id']));
            $sous_theme_result = $sous_theme_req->fetchAll(PDO::FETCH_ASSOC);
            
            for ($j = 0; $j < COUNT($sous_theme_result); $j++)
            {
                $content[$i][2][$j] = $sous_theme_result[$j]['sous_theme'];
            }

            $pseudo_req = $db->prepare("SELECT user.pseudo FROM user INNER JOIN avent ON avent.createur = user.user_id WHERE avent_id = :id");
            $pseudo_req->execute(array(':id' => $resultat[$i]['avent_id']));
            $pseudo_result = $pseudo_req->fetchAll(PDO::FETCH_ASSOC);

            //var_dump($pseudo_result);
            if(COUNT($pseudo_result) > 0)
            {
                $content[$i][COUNT($content[$i])] = $pseudo_result[0]['pseudo'];
            }
        }
        
        $order = [];
        $recherche = str_replace(","," ",$recherche);
        $recherche = explode(" ", $recherche);

        for($i = 0; $i < COUNT($content); $i++)
        {
            $given = [];
            /*
            for($j = 0; $j < COUNT($content[$i][0]); $j++)
            {
                $given[COUNT($given)] = $content[$i][0][$j];
            }

            if(is_array($content[$i][1]))
            {
                for($j = 0; $j < COUNT($content[$i][1]); $j++)
                {
                    if($content[$i][1][$j] !== "")
                    {
                        $given[COUNT($given)] = $content[$i][1][$j];
                    }
                }
            }

            if(COUNT($content[$i]) > 2)
            {
                if(is_array($content[$i][2]))
                {
                    for($j = 0; $j < COUNT($content[$i][2]); $j++)
                    {
                        if($content[$i][2][$j] !== "")
                        {
                            $given[COUNT($given)] = $content[$i][2][$j];
                        }
                    }
                }
            }
            */
            $index = 0;
            //var_dump($content[$i]);
            for($j = 0; $j < COUNT($content[$i]); $j++)
            {
                    if(is_array($content[$i][$j]))
                    {
                        for($k = 0; $k < COUNT($content[$i][$j]); $k++)
                        {
                            if($k == 0 && $j == 0)
                            {
                                $index = $content[$i][$j][$k];
                            }
                            else
                            {
                                $given[COUNT($given)] = $content[$i][$j][$k];
                            }
                        }
                    }
                    else
                    {
                        $given[COUNT($given)] = $content[$i][$j];
                    }
                
            }

            //$given[COUNT($given)] = $content[$i][COUNT($content[$i])-1];
            
            //ajouter la partie calcul de compatibilité ici
            //var_dump($content[$i]);
            //var_dump($index);
            var_dump($given);
            //var_dump($recherche);
            $order[$i] = [$index, compatibility($recherche, $given)];
            //var_dump($order[$i]);
        }
            
            function quickSort($array) { 
                $length = count($array); 
              
                if ($length <= 1) { 
                    return $array; 
                } else { 
                    $pivot = $array[0]; 
                    $left = $right = array(); 
              
                    for ($i = 1; $i < $length; $i++) { 
                        if ($array[$i][1] > $pivot[1]) { 
                            $left[] = $array[$i]; 
                        } else { 
                            $right[] = $array[$i]; 
                        } 
                    } 
              
                    return array_merge( 
                        quickSort($left),
                        array($pivot),  
                        quickSort($right) 
                    ); 
                } 
            }


        

        return quickSort($order);

        //return $content;

}