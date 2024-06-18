<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>taches</title>
    </head>
    <body>
        <h1>liste des taches</h1>
        <ol>
            <?php foreach ($taches as $tache): ?>
            <li>
                <?= $tache["description"] ?>
                (<a href="c_remove_task.php?id=<?= $tache["id"] ?>">supprimer</a>)
            </li>
            <?php endforeach ?>
        </ol>

        <?php if (isset($erreur)): ?>
        <p style="color: red; font-weight: bold"><?= $erreur ?></p>
        <?php endif ?>
        
        <!-- <?php if (isset($erreur)) {
            echo "<p style=\"color: red; font-weight: bold\">" . $erreur . "</p>";
        } ?> -->

        <form action="c_add_task.php" method="POST">
            <input type="text" name="description">
            <input type="submit" value="Ajouter">
        </form>
    </body>
</html>
