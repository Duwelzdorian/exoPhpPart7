<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice6</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
        <?php
        if (isset($_GET) AND ! empty($_GET)) {
            echo 'Formulaire envoyé';
            ?>
            <p><?= print_r($_GET) ?></p>
            <?php } else {
            ?>

            <form action="index.php" method="GET">
                <label for="gender">Civilité : </label>
                <select name="gender" id="gender">
                    <option>Mr</option>
                    <option>Mme</option>
                </select>

                <label for="lastName">Nom : </label><input type="text" name="lastName" id="lastName" />
                <label for="firstName">Prénom : </label><input type="text" name="firstName" id="firstName" />
                <button type="submit">envoyer</button>               
            </form>
            <?php
        }
        ?>
    </body>
</html>