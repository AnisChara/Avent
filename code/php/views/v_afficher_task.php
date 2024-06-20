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
                        <?php 
                            if(count($tasks) > 0)
                            {
                                for ($i = 0;$i<count($tasks);$i++)
                                {
                                    if(empty($tasks[$i]['finisseur']))
                                    {
                                    echo   '<div class="tasks">
                                            <div class="task">
                                                <p class="description">'.($i+1)." - ".$tasks[$i]['content'].'</p>
                                            </div>
                                        <form action="./c_finish_task.php" method ="POST">
                                            <input type="hidden" name="avent_id" value="'.$_POST["avent_id"].'">
                                            <input type="hidden" name="task_id" value="'.$tasks[$i]['task_id'].'">
                                            <input type="submit" value="V">
                                        </form>
                                        <form action="./c_remove_task.php" method ="POST">
                                            <input type="hidden" name="avent_id" value="'.$_POST["avent_id"].'">
                                            <input type="hidden" name="task_id" value="'.$tasks[$i]['task_id'].'">
                                            <input type="submit" value="Supprimer">
                                        </form>
                                        </div>';
                                    }

                                    else
                                    {
                                    echo   '<div class="finish_tasks">
                                            <div class="task">
                                                <p class="description">'.($i+1)." - ".$tasks[$i]['content'].'</p>
                                            </div>
                                        <form action="./c_unfinish_task.php" method ="POST">
                                            <input type="hidden" name="avent_id" value="'.$_POST["avent_id"].'">
                                            <input type="hidden" name="task_id" value="'.$tasks[$i]['task_id'].'">
                                            <input type="submit" value="X">
                                        </form>
                                        <form action="./c_remove_task.php" method ="POST">
                                            <input type="hidden" name="avent_id" value="'.$_POST["avent_id"].'">
                                            <input type="hidden" name="task_id" value="'.$tasks[$i]['task_id'].'">
                                            <input type="submit" value="Supprimer">
                                        </form>
                                        </div>';
                                    }
                                    
                                }
                            }
                            else echo "Vous n'avez pas encore de taches."
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
