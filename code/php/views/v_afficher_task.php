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
                    <div class="tasks">
                        <div class="task">
                            <p class="description">1 - Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <button class="valide">V</button>
                        <button class="no-valide">X</button>
                    </div>
                    <div class="tasks">
                        <div class="task">
                            <p class="description">2 - Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <button class="valide">V</button>
                        <button class="no-valide">X</button>
                    </div>
                    <div class="tasks">
                        <div class="task">
                            <p class="description">3 - Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <button class="valide">V</button>
                        <button class="no-valide">X</button>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
    <!-- Floating Button -->
    <div class="floating-btn">
        <img src="../views/images/AVent.png" alt="Floating Menu" class="menu_avent">
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const validButtons = document.querySelectorAll('.valide');
            const noValidButtons = document.querySelectorAll('.no-valide');

            validButtons.forEach(button => {
                button.addEventListener('click', function() {
                    this.parentElement.style.backgroundColor = 'green';
                });
            });

            noValidButtons.forEach(button => {
                button.addEventListener('click', function() {
                    this.parentElement.style.backgroundColor = 'darkgray';
                });
            });
        });
    </script>
</body>
</html>
