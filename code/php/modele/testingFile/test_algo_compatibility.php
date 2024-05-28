<?php

    require_once '..\m_algo_compatibility.php';

    $User1 = ['Cinéma'];
    $User2 = ['Cinema'];
    $User3 = ['Plage','Mer'];
    $User4 = ['Cuisine','Viande','Féculent','Riz','Poulet',"mim","aaa","JDZFA", "apanyer",'Encore','Encore','Encore','Encore','Encore','Encore'];

    $Content1 = ['CîémA'];
    $Content2 = ['Action','Film','Cinéma'];
    $Content3 = ['Voile','Mer','Bateau'];
$Content4 = ['Aventure','Nature','Montagne','Roche','Falaise','Hauteur','Cuisine','ETencore','ecoire','Viande','apanyer','test',"sport","qiuo","coubeh","coubeh","coubeh","coubeh","coubeh","coubeh","coubeh","coubeh","coubeh","coubeh"];

    $Expect1 = compatibility($User1,$Content1);
    $Expect2 = compatibility($User2,$Content2);
    $Expect3 = compatibility($User3,$Content3);
    $Expect4 = compatibility($User4,$Content4);


    echo ('Résultat 1 : '.$Expect1);
    echo (' Résultat 2 : '.$Expect2);
    echo (' Résultat 3 : '.$Expect3);
    echo (' Résultat 4 : '.$Expect4);

?>