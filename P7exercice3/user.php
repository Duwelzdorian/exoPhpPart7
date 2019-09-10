<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice3</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
        <p>Bonjour !</p>

        <p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo $_GET['lastName'] . ' ' . $_GET['firstName']; ?> !</p>

        <p>Si tu veux changer de prénom, <a href="index.php">clique ici</a> pour revenir à la page formulaire.php.</p>
    </body>
</html>