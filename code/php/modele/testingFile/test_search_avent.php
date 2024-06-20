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