<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="v_creation_avent.css">
    <title>Création AVent</title>
</head>
<body>
<div class = "nav_options ">
        <ul>
            <li class = "active"><a href="#">Home</a></li>
            <li class = "active"><a href="#">Avent</a></li>
            <li class = "active"><a href="#">Compte</a></li>
            <li class = "active"><a href="#">Création</a></li>
        </ul>
    </div>  
    <nav class = "navbar">
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
        <li>
        Évènement publique 
        <input type="checkbox" name="interest" value="" />
        </li>
            <label for="description">Description :</label>
            <li>
            <textarea id="description" name="description" placeholder="Décrivez votre évènement ! " required></textarea>
            </li>
            <label for="tag">Autre Tag :</label>
            <li>
            <textarea id="tag" name="tag" placeholder="Ajouter d'autre tag pour d'écrire votre évènement ! " required></textarea>
            </li>
    </nav>
    <div class="logo">
        <img src="AVent.png" alt="menu" class="menu_avent">
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