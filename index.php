<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice 6</title>
    </head>
    <body>

        <p>
            <?php
            //grâce a la condition on va pouvoir recuperer week 
            if (isset($_GET['week'])) {
                echo $_GET['week'];
            }
            ?>

        </p>
    </body
</html>