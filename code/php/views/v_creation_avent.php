<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="v_creation_avent.css">
    <title>Création AVent</title>
</head>
<body>
    <!-- partie de redirection vers différentes pages -->
    <div class = "nav_options ">
        <ul>
            <li class = "active"><a href="#">Home</a></li>
            <li class = "active"><a href="#">Avent</a></li>
            <li class = "active"><a href="#">Compte</a></li>
            <li class = "active"><a href="#">Création</a></li>
        </ul>
    <!-- partie de la création -->
    <section class="container_colon">
        <div class="first_colon">
            <form action="" method="POST">
                <Select name="Nom">
                    <option>Nom de référence</option>
                    <option value="">a</option>
                    <option value="">b</option>
                    <option value="">c</option>
                    <option value="">d</option>
                </Select>
                <Select name="theme">
                    <option>Thématique 1</option>
                    <option value="">a</option>
                    <option value="">b</option>
                    <option value="">c</option>
                    <option value="">d</option>
                </Select>
                <Select name="theme">
                    <option>Thématique 2</option>
                    <option value="">a</option>
                    <option value="">b</option>
                    <option value="">c</option>
                    <option value="">d</option>
                </Select>
                <Select name="theme">
                    <option>Thématique 3</option>
                    <option value="">a</option>
                    <option value="">b</option>
                    <option value="">c</option>
                    <option value="">d</option>
                </Select>
                <Select name="ajouter">
                    <option>Ajouter organisateur</option>
                    <option value="">a</option>
                    <option value="">b</option>
                    <option value="">c</option>
                    <option value="">d</option>
                </Select>
                    <label><input type="checkbox" name="interest" value="" /> Évènement publique</label>
                    <label>Titre :</label>
                    <textarea name="titre"></textarea>
                    <label>Description :</label>
                    <textarea name="information"></textarea>
                    <label>Autre Tag :</label>
                    <textarea name="tag"></textarea>
            </form>
        </div>
        <div class="second_colon">
            <form action="" method="POST">
                <label>Ajouter une image</label>
                <input type="file" name="image">
                    <div class="image">
                        <div class="image-prod">
                            <img src="fond_oasis.jpg" alt="">
                        </div>
                    </div>
                <input type="submit" value="Ajouter" name="btn-ajouter">
            </form> 
        </div>
    </section>
      <!-- logo -->
        <div class="logo">
            <img src="AVent.png" alt="menu" class="menu_avent">
        </div>
    </div>

    <!-- <div class = "bouton">
        <img src="bouton.jpg" alt="menu" class="bouton_avent">
    </div>
</body>
   <script>
        const menu_avent = document.querySelector(".bouton_avent");
        const nav_options = document.querySelector(".nav_options");

        menu_avent.addEventListener("click", () => {
        nav_options.classList.toggle("mobile_menu")
        })
    </script> -->
</body>
</html>