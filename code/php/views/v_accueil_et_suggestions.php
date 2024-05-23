<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil et Suggestions</title>
    <link rel="stylesheet" href="v_accueil_et_suggestions.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="nav_options">
        <ul>
            <li><a href="./c_accueil.php">Home</a></li>
            <li><a href="#">Avent</a></li>
            <li><a href="#">Compte</a></li>
            <li><a href="#">Création</a></li>
        </ul>
    </nav>
    
    <!-- Search Bar -->
    <div class="navbar">
        <form method="GET" action="">
            <input type="text" placeholder="Mots-clés">
            <input type="submit" value="Rechercher">
        </form>
        <!-- Floating Button -->
        <div class="floating-btn">
            <img src="AVent.png" alt="Floating Menu" class="menu_avent">
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Suggestions Section -->
        <div class="container_sug">
            <div class="suggestion">
                <div class="card">
                    <div class="image">
                        <img src="fond_oasis.jpg" alt="Fond Oasis" class="suggestion-image">
                    </div>
                    <div class="contente">
                        <div class="content">
                            <h2 class="titre">Je suis un titre</h2>
                            <p class="description">Description détaillée ici...</p>
                        </div>
                    </div>
                </div>
                <!-- Ajout d'autres cartes si nécessaire -->
            </div>
            <!-- Boutons de navigation -->
            <div class="nav-buttons left">
                <button class="nav-button">1</button>
                <button class="nav-button">2</button>
                <button class="nav-button">3</button>
            </div>
            <div class="nav-buttons right">
                <button class="nav-button">1</button>
                <button class="nav-button">2</button>
                <button class="nav-button">3</button>
            </div>
        </div>
    </div>
</body>
</html>
