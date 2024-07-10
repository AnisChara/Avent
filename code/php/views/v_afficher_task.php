<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/css/v_afficher_task.css">
    <title>Gestionnaire de Tâches</title>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
            ['Task', 'Count type'],
            <?php 
            $non = 0;
            $oui = 0;
            for($i = 0; $i < COUNT($list_taches); $i++)
            {
                if($list_taches[$i]['finisseur'] == null)
                {
                    $non++;
                }
                else
                {
                    $oui++;
                }
            }
            echo  '["Réalisées", '.$oui.'],';
            echo  '["Inachevés", '.$non.']';
            ?>
            ]);

            var options = {
            title: 'Tâches'
            };

            var chart = new google.visualization.PieChart(document.getElementById('pie'));

            chart.draw(data, options);
        }
    </script>

</head>
<body>
    <nav class="nav_options">
        <ul>
            <li><a href="./c_accueil.php"><img src="../views/images/home.png" class="nav_image">Home</a></li>
            <li><a href="./c_avent.php"><img src="../views/images/my_avent.png" class="nav_image">Avent</a></li>
            <li><a href="./c_afficher_compte.php"><img src="../views/images/compte.png" class="nav_image">Compte</a></li>
            <li><a href="./c_afficher_create_avent.php"><img src="../views/images/creation.png" class="nav_image">Création</a></li>
            <li><a href="./c_deconnexion.php"><img src="../views/images/deconnexion.png" class="nav_image">deconnexion</a></li>
        </ul>
    </nav>

    <div class="gestion">
        <div class="task-manager">
            <h1>Gestionnaire de Tâches</h1>
            <form class="task-form" action="./c_add_task.php" method="POST">
                <input type="text" name="task" class="task-input" placeholder="Nouvelle tâche">
                <input type="hidden" name="avent_id" value="<?php echo $_POST['avent_id']?>">
                <button type="submit" class="add-task-button">Ajouter</button>
            </form>
            <div class="task-list-container">
                <ul class="task-list">
                <?php 
                    if(count($tasks) > 0)
                    {
                        for ($i = 0;$i<count($tasks);$i++)
                        {
                            if(empty($tasks[$i]['finisseur']))
                            {
                                echo '<div class="task">
                                        <li>
                                            <div class="task-content">
                                                <p>'.($i+1)." - ".$tasks[$i]['content'].'</p>
                                            </div>
                                            <form action="./c_remove_task.php" method="POST" class="delete-task-form">
                                                <input type="hidden" name="avent_id" value="'.$_POST["avent_id"].'">
                                                <input type="hidden" name="task_id" value="'.$tasks[$i]['task_id'].'">
                                                <button type="submit" class="delete"><img src="../views/images/poubelle-de-recyclage.png" class="image"></button>
                                            </form>
                                        </li>
                                        <div class="unfinish">
                                            <form action="./c_finish_task.php" method="POST" class="switch-task-form">
                                                <input type="hidden" name="avent_id" value="'.$_POST["avent_id"].'">
                                                <input type="hidden" name="task_id" value="'.$tasks[$i]['task_id'].'">
                                                <input type="submit" value="" class="task_switch">
                                            </form>
                                        </div>
                                      </div>';
                            }
                            else
                            {
                                echo '<div class="task">
                                        <li>
                                            <div class="task-content">
                                                <p>'.($i+1)." - ".$tasks[$i]['content'].' - fini par '.$tasks[$i]['pseudo'].'</p>
                                            </div>
                                            <form action="./c_remove_task.php" method="POST" class="delete-task-form">
                                                <input type="hidden" name="avent_id" value="'.$_POST["avent_id"].'">
                                                <input type="hidden" name="task_id" value="'.$tasks[$i]['task_id'].'">
                                                <button type="submit" class="delete"><img src="../views/images/poubelle-de-recyclage.png" class="image"></button>
                                            </form>
                                        </li>
                                        <div class="finish">
                                            <form action="./c_unfinish_task.php" method="POST" class="switch-task-form">
                                                <input type="hidden" name="avent_id" value="'.$_POST["avent_id"].'">
                                                <input type="hidden" name="task_id" value="'.$tasks[$i]['task_id'].'">
                                                <input type="submit" value="" class="task_switch">
                                            </form>
                                        </div>
                                      </div>';
                            }
                        }
                    }
                    else 
                    {
                        echo "Vous n'avez pas encore de taches.";
                    }
                ?>
                </ul>
            </div>
        </div>
        <!-- Main Content -->
        <div class="list-container">
            <!--Pie -->
            <div id="pie" class="chart"></div>
            <div class="stat">
                <div id="views">
                    <p>Nombre de vues : </p>
                    <?php echo $statsGlobal[2];?>
                </div>
                <div id="favories">
                    <p>Nombre de favoris : </p>
                    <?php echo $statsGlobal[0];?>
                </div>
                <div id="Inscrit">
                    <p>Nombre d'inscrits : </p>
                    <?php echo $statsGlobal[1];?>
                </div>
                <div id="Search">
                    <p>Nombre de recherches : </p>
                    <?php echo $statsGlobal[3];?>
                </div>
            </div>
            <form action="./c_afficher_full_avent.php" method="POST">
                <input type="hidden" name="avent_id" value="<?php echo $_POST['avent_id']?>">
                <input type="submit" value="retour" class="retour">
            </form>
        </div>
    </div>            
</body>
</html>
