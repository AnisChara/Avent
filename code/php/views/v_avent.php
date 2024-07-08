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
            <li><a href="./c_accueil.php"><img src="../views/images/home.png" class="nav_image">Home</a></li>
            <li><a href="./c_avent.php"><img src="../views/images/my_avent.png" class="nav_image">Avent</a></li>
            <li><a href="./c_afficher_compte.php"><img src="../views/images/compte.png" class="nav_image">Compte</a></li>
            <li><a href="./c_afficher_create_avent.php"><img src="../views/images/creation.png" class="nav_image">Création</a></li>
            <li><a href="./c_deconnexion.php"><img src="../views/images/deconnexion.png" class="nav_image">deconnexion</a></li>
        </ul>
    </nav>
    
    <!-- link Bar -->
    <div class="link_container">
        <div class="link">
            <h2 class="line">My AVent</h2>
            <a href="./c_avent_fav.php"><h2 class="underline unline">My AVent Favoris</h2></a>
            <a href="./c_avent_inscription.php"><h2 class="underline unline">My inscription</h2></a>
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

                if(COUNT($list_avent) < 1)
                {
                    echo ("<p class = "."nothing".">Vous n'avez pas encore crée d'AVENT !".'</p>');
                }
                else
                {
                    echo '<div class="list_avent">';
                    for($i = $debut; $i < min($debut + $avent_page, COUNT($list_avent)); $i++)
                    {
                        echo'
                        <form action="./c_afficher_full_avent.php" method="post">
                            <button type="submit" name="avent_id" value="'.$list_avent[$i]['avent_id'].'" class="card">
                                <fieldset>
                                    <div class="avent">
                                        <div class="image">
                                            <img src=data:image/jpg;base64,'.img_avent($list_avent[$i]['avent_id']).' alt="" class="suggestion-image">
                                        </div>
                                        <div class="content">
                                            <strong><p class="titre">'.$list_avent[$i]['nom'].'</p></strong>
                                            <p class="createur">'.nom_from_user($list_avent[$i]['createur']).'</p>
                                            <p class="description">'.$list_avent[$i]['information'].'</p>
                                        </div>
                                    </div>
                                </fieldset>
                            </button>
                        </form>
                        ';
                    }
                    echo '</div>';
                }
            ?>
            <?php
            echo '<div class="pagination">';
                
                // a mettre dans le controller 
                $total_page = ceil(count($list_avent) / $avent_page);
            
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