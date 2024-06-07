<?php

    function gen_suggestion($userID)
    {
        require_once 'm_recuperationDB.php';
        require 'm_connexion_bdd.php';

        require 'm_collect_theme_user.php';
        require 'm_collect_avent_notseen.php';
        require_once 'm_get_suggestion.php';

        require 'm_algo_compatibility.php';

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
          
        
        $brutContent = avent_notseen($userID);
        $queryThemeContent = 'SELECT theme.theme_name FROM theme INNER JOIN theme_for_avent ON theme.theme_id = theme_for_avent.theme_id WHERE avent_id = :avent_id';
        $themelist = collectThemeUser($userID);
        $order = [];

        for($content = 0; $content < COUNT($brutContent); $content++)
        {
            $idContent = $brutContent[$content]['avent_id'];
        
            $data = queryDB($db,$queryThemeContent,[[':avent_id',$idContent]]);
           
            $givendata = [];
            for($n = 0; $n < COUNT($data); $n++)
            {
                $givendata[COUNT($givendata)] = $data[$n]['theme_name']; 
            }
            
            $order[$content] = [$idContent,compatibility($themelist,$givendata)];
        }

        $order = quickSort($order);

        $queryADDSuggestion = 'INSERT INTO suggestions (user_id,avent_id) VALUES (:user_id,:avent_id);';
        $genNumber = 25;

        if(get_suggestion($userID) ==! false && COUNT($order) !== 0)
        {
            $query = 'DELETE FROM suggestions WHERE user_id = :id';
            $argument = [[':id',$userID]];
            queryDB($db,$query,$argument);
        }
        else
        {
            return false;
        }
        
        if(COUNT($order) < $genNumber)
        {
            $genNumber = COUNT($order);
            $notenought = true;
        }

        for($y = 0; $y < $genNumber; $y++)
        {
            $random = rand(0,100); 
            if(!(isset($notenought)) && ($random > 50 && $random < 85))
            {
                $argument = [[':user_id',$userID],[':avent_id',$order[rand($genNumber,COUNT($order)-1)][0]]];
            }
            else
            {
                $argument = [[':user_id',$userID],[':avent_id',$order[$y][0]]];
            }
            
            queryDB($db,$queryADDSuggestion,$argument);
        }
    }