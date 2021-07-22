<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>La maisonnée</title>
<?php
    require "ConnexionBdd.php";
    $db = connexionBase();
    $requete = 'SELECT * FROM actualite ';

    $result = $db->query($requete);
    $produit = $result->fetch(PDO::FETCH_OBJ);
    if (!$result) {
        $tableauErreurs = $db->errorInfo();
        echo $tableauErreur[2];
        die("Erreur dans la requête");
    }

    if ($result->rowCount() == 0) {
        // Pas d'enregistrement
        die("La table est vide");
    }

    ?>
</head>
<body>
<br>
<div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card">
            <?php
                while ($row = $result->fetch(PDO::FETCH_OBJ)) 
                    {    
                        echo "<br>";
                        echo "<th class='text-muted'>" . $row->titre . "</th>";
                        echo "<br>";
                        ?>
                        
                        <td><img src="uploads/<?= $row->fichier; ?>" alt="<?= $row->ID . "." . $row->fichier; ?>" width="300" class="order-first"></td>
                        <?php 
                        echo "<br>";
                        echo "<th class='text-muted'>" . $row->texte . "</th>";
                        echo "<br>";                    
                    }
            ?>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
            <?php
                while ($row = $result->fetch(PDO::FETCH_OBJ)) 
                    {    
                        echo "<br>";
                        echo "<th class='text-muted'>" . $row->titre . "</th>";
                        echo "<br>";
                        ?>
                        
                        <td><img src="uploads/<?= $row->fichier; ?>" alt="<?= $row->ID . "." . $row->fichier; ?>" width="300" class="order-first"></td>
                        <?php 
                        echo "<br>";
                        echo "<th class='text-muted'>" . $row->texte . "</th>";
                        echo "<br>";                    
                    }
            ?>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img
                src="./image/btp2.png"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Nos chantier en cours</h5>
                <p class="card-text">
                Texte
                </p>
                <a href="chantier.php" class="btn btn-primary">Voir</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
