<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/css/v_avent.css">
    <title>AVENT</title>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="nav_options">
        <ul>
            <li><a href="./c_accueil.php">Home</a></li>
            <li><a href="./c_avent.php">Avent</a></li>
            <li><a href="./c_afficher_compte.php">Compte</a></li>
            <li><a href="./c_afficher_create_avent.php">Création</a></li>
            <li><a href="./c_deconnexion.php">deconnexion</a></li>
        </ul>
    </nav>
    
    <!-- link Bar -->
    <div class="link_container">
        <div class="link">
            <a href="./c_avent.php"><h2 class="underline unline">My AVent</h2></a>
            <a href="./c_avent_fav.php"><h2 class="underline unline">My AVent Favoris</h2></a>
            <h2 class="line">My inscription</h2>
        </div>

        <!-- Floating Button -->
        <div class="floating-btn">
            <img src="../views/images/AVent.png" alt="Floating Menu" class="menu_avent">
        </div>
    </div>

    <!-- Main Content -->
    <div class="list_avent_container">
        <!-- Suggestions Section -->
        <div class="list_avent_content">
            <?php
                // mettre dans un controller
                $avent_page = 6;
                $page_affiche = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                $debut = ($page_affiche - 1) * $avent_page;

                if(COUNT($list_avent_inscrit) < 1)
                {
                    echo "<p class = 'nothing'> Vous n'êtes pas encore inscrit à un AVENT ! </p>";
                }
                else
                {
                    echo '<div class="list_avent">';
                    for($a = 0; $a < COUNT($list_avent_inscrit); $a++)
                    {
                        echo '
                        <form action="./c_avent_manager.php" method="post">
                            <fieldset>
                                <div class="avent">
                                    <div class="image">
                                    <img src=data:image/jpg;base64,'.img_avent($list_avent_inscrit[$a]['avent_id']).' alt="" class="suggestion-image">
                                    </div>
                                    <div class="content">
                                        <strong><p class="titre">'.$list_avent_inscrit[$a]['nom'].'</p></strong>
                                        <p class="createur">'.nom_from_user($list_avent_inscrit[$a]['createur']).'</p>
                                        <p class="description">'.$list_avent_inscrit[$a]['information'].'</p>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        ';
                    }
                    echo '</div>';
                }
            ?>
            <?php
                echo '<div class="pagination">';
                    // a mettre dans le controller 
                    $total_page = ceil(count($list_avent_inscrit) / $avent_page);
                
                    // view 
                    for ($i = 1; $i <= $total_page; $i++) {
                        echo '<a href="?page=' . $i . '" class="' . ($i === $page_affiche ? 'active' : '') . '">' . $i . '</a>';
                    }
                echo'</div>';
            ?>
        </div>
    </div>
</body>
</html>