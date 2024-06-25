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

            $nom = str_replace(",", " ", $resultat[$i]['nom']);
            $nom = str_replace(";", " ", $nom);
            $nomArray = explode(" ", $nom);

            if($resultat[$i]['lieu'] !== null)
            {
                $lieu = str_replace(",", " ", $resultat[$i]['lieu']);
                $lieu = str_replace(";", " ", $lieu);
                $lieuArray = explode(" ",$lieu);

                $content[$i][0] = [$resultat[$i]['avent_id']];

                for($j = 0; $j < COUNT($nomArray); $j++)
                {
                    $content[$i][0][COUNT($content[$i][0])] = $nomArray[$j]; 
                }

                for($j = 0; $j < COUNT($lieuArray); $j++)
                {
                    if($lieuArray[$j] !== "")
                    {
                        $content[$i][0][COUNT($content[$i][0])] = $lieuArray[$j];
                    }
                }

            }
            else
            {
                $content[$i][0] = [$resultat[$i]['avent_id']];

                for($j = 0; $j < COUNT($nomArray); $j++)
                {
                    $content[$i][0][COUNT($content[$i][0])] = $nomArray[$j]; 
                }

                $content[$i][0][COUNT($content[$i][0])] = 0;
            }

            if(COUNT($result_theme) > 0)
            {
                for ($j = 0; $j < COUNT($result_theme); $j++)
                {
                    $content[$i][1][$j] = $result_theme[$j]['theme_name'];
                }
            }
            else
            {
                $content[$i][1] = 0;
            }

            $sous_theme_req = $db->prepare("SELECT sous_theme.sous_theme_name FROM sous_theme WHERE avent_id = :id");
            $sous_theme_req->execute(array(':id' => $resultat[$i]['avent_id']));
            $sous_theme_result = $sous_theme_req->fetchAll(PDO::FETCH_ASSOC);
            
            if(COUNT($sous_theme_result) > 1)
            {
                for ($j = 0; $j < COUNT($sous_theme_result); $j++)
                {
                    $content[$i][2][$j] = $sous_theme_result[$j]['sous_theme'];
                }
            }
            else
            {
                $content[$i][2] = 0;
            }

            $pseudo_req = $db->prepare("SELECT user.pseudo FROM user INNER JOIN avent ON avent.createur = user.user_id WHERE avent_id = :id");
            $pseudo_req->execute(array(':id' => $resultat[$i]['avent_id']));
            $pseudo_result = $pseudo_req->fetchAll(PDO::FETCH_ASSOC);

            //var_dump($pseudo_result);
            if(COUNT($pseudo_result) > 0)
            {
                $content[$i][COUNT($content[$i])] = $pseudo_result[0]['pseudo'];
            }
            else
            {
                $content[$i][3] = 0;
            }
        }
        
        $order = [];
        $recherche = str_replace(","," ",$recherche);
        $recherche = explode(" ", $recherche);
        /*$recherche = [];
        for($j = 0; $j < COUNT($recherchelist); $j++)
        {
            if($recherchelist[$j] !== "")
            {
                $recherche[COUNT($recherche)] = $recherchelist[$j];
            }
        }*/


        for($i = 0; $i < COUNT($content); $i++)
        {
            $given = [];
           
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
                        if($content[$i][$j] !== 0)
                        {
                            $given[COUNT($given)] = $content[$i][$j];
                        }
                    }
                
            }

            //$given[COUNT($given)] = $content[$i][COUNT($content[$i])-1];
            
            //ajouter la partie calcul de compatibilité ici
            //var_dump($content[$i]);
            //var_dump($index);
            //var_dump($given);
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