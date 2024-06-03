<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/css/v_creation.css">
    <title>Création AVent</title>
</head>
<body>
    <!-- partie de redirection vers différentes pages -->
    <div class="nav_options">
        <ul>
            <li><a href="./c_accueil.php">Home</a></li>
            <li><a href="./c_avent.php">Avent</a></li>
            <li><a href="./c_afficher_compte.php">Compte</a></li>
            <li><a href="./c_create_avent.php">Création</a></li>
        </ul>
    </div>
    <!-- partie de la création -->
    <section class="container_colon">
        <div class="first_colon">
            <form action="" method="GET">
                <select name="Nom">
                    <option>Nom de référence</option>
                    <option value="">a</option>
                    <option value="">b</option>
                    <option value="">c</option>
                    <option value="">d</option>
                </select>
                <select name="theme1">
                    <option>Thématique 1</option>
                    <option value="">a</option>
                    <option value="">b</option>
                    <option value="">c</option>
                    <option value="">d</option>
                </select>
                <select name="theme2">
                    <option>Thématique 2</option>
                    <option value="">a</option>
                    <option value="">b</option>
                    <option value="">c</option>
                    <option value="">d</option>
                </select>
                <select name="theme3">
                    <option>Thématique 3</option>
                    <option value="">a</option>
                    <option value="">b</option>
                    <option value="">c</option>
                    <option value="">d</option>
                </select>
                <select name="ajouter">
                    <option>Ajouter organisateur</option>
                    <option value="">a</option>
                    <option value="">b</option>
                    <option value="">c</option>
                    <option value="">d</option>
                </select>
                <label><input type="checkbox" name="interest" value="" /> Évènement publique</label>
                <label>Titre :</label>
                <textarea name="titre"></textarea>
                <label>Description :</label>
                <textarea name="information"></textarea>
                <label>Autre Tag :</label>
                <textarea name="tag"></textarea>
                <input type="submit" value="Soumettre">
            </form>
        </div>
        <div class="second_colon">
            <form action="" method="GET">
                <label>Ajouter une image</label>
                <input type="file" name="image">
                <div class="image">
                    <div class="image-prod">
                        <img src="../views/images/fond_oasis.jpg" alt="">
                    </div>
                </div>
                <input type="submit" value="Ajouter" name="btn-ajouter">
            </form>
        </div>
    </section>
    <!-- logo -->
    <div class="logo">
        <img src="../views/images/AVent.png" alt="menu" class="menu_avent">
    </div>
    <script>
        const menu_avent = document.querySelector(".menu_avent");
        const nav_options = document.querySelector(".nav_options");

        menu_avent.addEventListener("click", () => {
            nav_options.classList.toggle("mobile_menu")
        })
    </script>
</body>
</html>
