<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accueil et suggestions</title>
    <link rel="stylesheet" href="../views/v_accueil_et_suggestions.css">
</head>
<body>
    <div class = "nav_options ">
        <ul>
            <li class = "active"><a href="./c_afficher_TL.php">Home</a></li>
            <li class = "active"><a href="#">Avent</a></li>
            <li class = "active"><a href="#">Compte</a></li>
            <li class = "active"><a href="#">Création</a></li>
        </ul>
    </div>  
    <nav class = "navbar">
        <form name="fo" method="GET" action="">
            <input type="text" name="words" placeholder="Mots-clés">
            <input type="submit" name="valider" value="Rechercher">
        </form>
    </nav>
    <div class="logo">
        <img src="AVent.png" alt="menu" class="menu_avent">
    </div>
    <div class = "bouton">
        <img src="bouton.jpg" alt="menu" class="bouton_avent">
    </div>
    <div class = "suggestions">
        <div class = "suggestions_prod">
            <img src="fond_oasis.jpg" alt="">
        </div>
    </div>
</body>
   <script>
        const menu_avent = document.querySelector(".bouton_avent");
        const nav_options = document.querySelector(".nav_options");

        menu_avent.addEventListener("click", () => {
        nav_options.classList.toggle("mobile_menu")
        })
    </script>
</html>