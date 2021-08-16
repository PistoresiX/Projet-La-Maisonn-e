<html>
<head>
  <meta charset="utf-8">
</head>
<body>
<?php

$titre = $_POST["titre"];
if (isset($_FILES['logo']) AND $_FILES['logo']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['logo']['size'] <= 2000000)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['logo']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
        $name = $infosfichier['filename'];
        $file = '' .time(). '' . '.' .$extension_upload;
 
                if (in_array($extension_upload, $extensions_autorisees))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['logo']['tmp_name'], 'uploads/' . $file);
                        echo "L'envoi a bien été effectué !"."\n";

                }
        }
        else
        echo "erreur";
}

    // Preparation de la connexion BDD.
    require_once("ConnexionBdd.php");
    $db = connexionBase("localhost","root","","la_maisonnee");

    // Préparation de la requete.
    $requete = $db->prepare("INSERT INTO partenaire (part_logo, part_name)
    VALUES(:logo,:titre)");
    $requete->bindValue(":logo",$file);
    $requete->bindValue(":titre",$titre);
    


    // Execution de la requête
    $resultat = $requete->execute();
    // var_dump($resultat);


if ($resultat)
echo "<p>Les infos ont été ajoutées</p>";
else
echo "<p>Erreur</p>";


?>
<div class="col-8 p-3 position-absolute" style="right: -100px">
                <form action="Partenaires.php" method="post" enctype="multipart/form-data">
                    <input type="submit" value="Retour à la page des articles">
                </form>
            </div>
</body>
</html>