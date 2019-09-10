<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice5</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
        <form action="index.php" method="POST">
            <label for="gender">Civilité : </label>
            <select name="gender" id="gender">
                <option>Mr</option>
                <option>Mme</option>
            </select>

            <label for="lastName">Nom : </label><input type="text" name="lastName" id="lastName" />
            <label for="firstName">Prénom : </label><input type="text" name="firstName" id="firstName" />
            <button type="submit">envoyer</button>               
        </form>

        <p>
            <?php echo '========> ' . $_POST['firstName'] . ' ' . $_POST['lastName'] . ' ' . $_POST['gender']; ?>
        </p>

    </body>
</html>