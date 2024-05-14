<?php
    /**
     * @param PDO - Hook (new PDO) servant a faire la connexion avec la base de données.
     * @param string - requête SQL les conditions doivent être sous forme -> :condition.
     * @param array - si il y'a des conditions marqueurs ? sous forme d'une liste avec a chaque élément une liste indice 0 la string et indice 1 la variable. 
     * @return array - array du résultat de la requête.
     */
    function TakeFromDB($pdo,$requete,$argument = false)
    {
        $give = $pdo ->prepare("$requete");
        
            if($argument == false)
            {
                $give ->execute();
            }
            else
            {
                for($i = 0; $i < COUNT($argument); $i++)
                {
                    $give ->bindParam($argument[$i][0],$argument[$i][1]);  // $argument = [[":nom",$nom],[":id",$id]]
                }
                $give ->execute();
            }
        
        if(($requete[0] = "S" || $requete[0] = "s") && ($requete[1] = "E" || $requete[1] = "e") && ($requete[2] = "L" || $requete[2] = "l") && ($requete[3] = "E" || $requete[3] = "e") && ($requete[4] = "C" || $requete[4] = "c") && ($requete[5] = "T" || $requete[5] = "t"))
        {
            $donnee = $give -> fetchAll(PDO::FETCH_ASSOC);
            return $donnee;
        }
        
    }

?>