<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice7</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
        <?php
        if (isset($_POST['gender']) && isset($_POST['lastName']) && isset($_POST['firstName'])) {

            if (isset($_FILES['fileUser']) && !empty($_FILES['fileUser'])) {
                $fileInfos = pathinfo($_FILES['fileUser']['name']);
                $fileName = $fileInfos['filename'];
                $fileExtension = $fileInfos['extension'];
                echo 'Nom : ' . $_POST['lastName'];
                ?>
                <p><?= 'Prénom : ' . $_POST['firstName']; ?></p>
                <p><?= 'Le fichier envoyé s\'appel ' . $fileName . ' et son extension est ' . $fileExtension; ?></p>
                <?php
            }
        } else {
            ?>

            <form method="POST" enctype="multipart/form-data">
                <label for="gender">Civilité : </label>
                <select name="gender" id="gender">
                    <option>Mr</option>
                    <option>Mme</option>
                </select>

                <label for="lastName">Nom : </label><input type="text" name="lastName" id="lastName" />
                <label for="firstName">Prénom : </label><input type="text" name="firstName" id="firstName" />
                <input type="file" name="fileUser" /><br />

                <button type="submit">envoyer</button>               
            </form>
            <?php
        }
        ?>
    </body>
</html>

