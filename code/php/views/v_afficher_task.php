<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/css/v_afficher_task.css">
    <title>taches</title>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="nav_options">
        <ul>
            <li><a href="./c_accueil.php">Home</a></li>
            <li><a href="./c_avent.php">Avent</a></li>
            <li><a href="./c_afficher_compte.php">Compte</a></li>
            <li><a href="./c_afficher_create_avent.php">Création</a></li>
        </ul>
    </nav>
    <!-- Affichage des tâches -->
    <div class="container">
        <div class="container-task">
                <h3>Gestionnaires des tâches de l'AVent <?php ?></h3>
                <fieldset>
                    <div class="liste-task">
                        <?php for ($i = 0;$i<count($tasks);$i++)
                        {
                            echo 
                            '<div class="tasks">
                            <div class="task">
                                <p class="description">'.($i+1)." - ".$tasks[$i]['content'].'</p>
                            </div>
                            <button class="valide">V</button>
                            <button class="no-valide">X</button>
                            <button class="supp">SU</button>
                            </div>';
                        }
                        ?>
                    </div>
                </fieldset>
                <div class="add">
                    <form action="./c_add_task.php" method ="POST">
                        <input type="text" name="task" placeholder="Ajouter une tâche" class="add-task-input">
                        <input type="hidden" name="avent_id"value="<?php echo $_POST['avent_id']?>">
                        <input type="submit" value="Ajouter">
                    </form>
                </div>
        </div>
        <form action="./c_afficher_full_avent.php" method="POST">
            <input type="hidden" name="avent_id"value="<?php echo $_POST['avent_id']?>">
            <input type="submit" value="retour" class="retour">
        </form>
    </div>
    <!-- Floating Button -->
    <div class="floating-btn">
        <img src="../views/images/AVent.png" alt="Floating Menu" class="menu_avent">
    </div>
</body>
</html>
