<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/css/v_avent_manager.css">
    
    <!--Pie -->
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
    <!--Pie -->


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
            <h2 class="line">Statistique</h2>
            <a href="./c_avent_manager.php"><h2 class="underline unline">Organisation</h2></a>
            <a href="./c_avent_manager.php"><h2 class="underline unline">Info Partager</h2></a>
        </div>

        <!-- Floating Button -->
        <div class="floating-btn">
            <img src="../views/images/AVent.png" alt="Floating Menu" class="menu_avent">
        </div>
    </div>
    
    <!-- Main Content -->
    <div class="list_avent_container">

      <div id="pie" style="width: 900px; height: 500px;"></div>
      <div id="views"><?php echo $statsGlobal[2];?></div>
      <div id="favories"><?php echo $statsGlobal[0];?></div>
      <div id="Inscrit"><?php echo $statsGlobal[1];?></div>
      <div id="Search"><?php echo $statsGlobal[3];?></div>
    
    </div>
</body>
</html>