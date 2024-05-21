<?php
    /**
     * @param PDO - Hook (new PDO) servant a faire la connexion avec la base de données.
     * @param string - requête SQL les conditions doivent être sous forme -> :condition.
     * @param array - si il y'a des conditions marqueurs ? sous forme d'une liste avec a chaque élément une liste indice 0 la string et indice 1 la variable. 
     * @return array - array du résultat de la requête.
     */

    function queryDB($pdo,$requete,$argument = false)
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
                    if(COUNT($argument[$i]) == 3)
                    {
                        if(($argument[$i][2][0] == "S" || $argument[$i][2][0] == "s") && ($argument[$i][2][1] == "T" || $argument[$i][2][1] == "t") && ($argument[$i][2][2] == "R" || $argument[$i][2][2] == "r"))
                        {
                            $give ->bindParam($argument[$i][0],$argument[$i][1],PDO::PARAM_STR);
                        }
                        else if(($argument[$i][2][0] == "I" || $argument[$i][2][0] == "i") && ($argument[$i][2][1] == "N" || $argument[$i][2][1] == "n") && ($argument[$i][2][2] == "T" || $argument[$i][2][2] == "t"))
                        {
                            $give ->bindParam($argument[$i][0],$argument[$i][1],PDO::PARAM_INT);
                        }
                        else
                        {
                            $give ->bindParam($argument[$i][0],$argument[$i][1]); 
                        }
                    }
                    else
                    {
                        $give ->bindParam($argument[$i][0],$argument[$i][1]);   // $argument = [[":nom",$nom],[":id",$id]]
                    }
                }
                $give ->execute();
            };
        
        if(($requete[0] = "S" || $requete[0] = "s") && ($requete[1] = "E" || $requete[1] = "e") && ($requete[2] = "L" || $requete[2] = "l") && ($requete[3] = "E" || $requete[3] = "e") && ($requete[4] = "C" || $requete[4] = "c") && ($requete[5] = "T" || $requete[5] = "t"))
        {
            $donnee = $give -> fetchAll(PDO::FETCH_ASSOC);
            return $donnee;
        }
        else return [];
    };
