<html>
<head>
  <meta charset="utf-8">
</head>
<body>
<?php
require "ConnexionBdd.php"; // Inclusion de notre bibliothèque de fonctions
$db = connexionBase();// Appel de la fonction de connexion
$fichier = basename($_FILES['image']['name']);
$texte = $_POST["text"];
if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['image']['size'] <= 2000000)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['image']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
        $name = $infosfichier['filename'];
        $file = '' .time(). '' . '.' .$extension_upload;
 
                if (in_array($extension_upload, $extensions_autorisees))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . $file);
                        echo "L'envoi a bien été effectué !"."\n";
                        echo $texte;
                }
        }
        else
        echo "erreur";
}

?>
<div class="col-8 p-3 position-absolute" style="right: -100px">
                <form action="PageActualité.php" method="post" enctype="multipart/form-data">
                    <input type="submit" value="Retour à la page des articles">
                </form>
            </div>
</body>
</html>