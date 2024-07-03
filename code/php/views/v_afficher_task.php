<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/css/v_afficher_task.css">
    <title>Gestionnaire de Tâches</title>
</head>
<body>
    <nav class="nav_options">
        <ul>
            <li><a href="./c_accueil.php">Home</a></li>
            <li><a href="./c_avent.php">Avent</a></li>
            <li><a href="./c_afficher_compte.php">Compte</a></li>
            <li><a href="./c_afficher_create_avent.php">Création</a></li>
            <li><a href="./c_deconnexion.php">deco</a></li>
        </ul>
    </nav>

    <div class="task-manager">
        <h1>Gestionnaire de Tâches</h1>
        <form class="task-form" action="./c_add_task.php" method ="POST">
            <input type="text" name="task" class="task-input" placeholder="Nouvelle tâche">
            <input type="hidden" name="avent_id"value="<?php echo $_POST['avent_id']?>">
            <button type="submit" class="add-task-button">Ajouter</button>
        </form>
        <ul class="task-list">
        <?php 
                    if(count($tasks) > 0)
                    {
                        for ($i = 0;$i<count($tasks);$i++)
                        {
                            if(empty($tasks[$i]['finisseur']))
                            {
                            echo   '<div class="task">
                                <li>
                                        <p>'.($i+1)." - ".$tasks[$i]['content'].'</p>
                                
                                <form action="./c_remove_task.php" method ="POST">
                                    <input type="hidden" name="avent_id" value="'.$_POST["avent_id"].'">
                                    <input type="hidden" name="task_id" value="'.$tasks[$i]['task_id'].'">
                                    <input type="submit" value="Supprimer">
                                </form>
                                </li>
                                 <div class="unfinish">
                                 <form action="./c_finish_task.php" method ="POST" style="height:100%">
                                    <input type="hidden" name="avent_id" value="'.$_POST["avent_id"].'">
                                    <input type="hidden" name="task_id" value="'.$tasks[$i]['task_id'].'">
                                    <input type="submit" value=""class="task_switch">
                                </form>
                                </div>
                                </div>';
                            }

                            else
                            {
                            echo   '<div class="task">
                            <li>
                                        <p>'.($i+1)." - ".$tasks[$i]['content'].' - fini par '.$tasks[$i]['pseudo'].'</p>
                                
                                <form action="./c_remove_task.php" method ="POST" >
                                    <input type="hidden" name="avent_id" value="'.$_POST["avent_id"].'">
                                    <input type="hidden" name="task_id" value="'.$tasks[$i]['task_id'].'">
                                    <input type="submit" value="Supprimer">
                                </form>
                               
                                </li>
                                 <div class="finish">
                                 <form action="./c_unfinish_task.php" method ="POST" style="height:100%" >
                                    <input type="hidden" name="avent_id" value="'.$_POST["avent_id"].'">
                                    <input type="hidden" name="task_id" value="'.$tasks[$i]['task_id'].'">
                                    <input type="submit" value=""class="task_switch">
                                </form>
                                </div>
                                </div>';
                            }
                            
                        }
                    }
                    else echo "Vous n'avez pas encore de taches."
                ?>
                


        </ul>
    </div>
                <form action="./c_afficher_full_avent.php" method="POST">
                    <input type="hidden" name="avent_id"value="<?php echo $_POST['avent_id']?>">
                    <input type="submit" value="retour" class="retour">
                </form>
</body>
</html>
