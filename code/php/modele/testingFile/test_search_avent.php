<?php 

require '../m_search_avent.php'; 



echo '<form method="POST" action="">
            <input type="text" name="search" placeholder="Mots-clés">
            <input type="submit" name="res" value="Rechercher">
        </form>';
        
if (isset($_POST['res']))
    {
        $nom = $_POST['search'];
        var_dump(search_avent($nom));

    }
    /*
    $ex = [[1,12],[2,23],[3,0]];
    $ex2 = [12,13,14,28];

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
            }*/

    //var_dump(quickSort($ex));