<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="PageActuCSS" type="text/css" media="screen" />
    <title>Page d'actualité</title>
    <?php
    require "ConnexionBdd.php";
    $db = connexionBase();
    $requete = 'SELECT * FROM actualite ORDER BY ID DESC ';

    $result = $db->query($requete);
    

    ?>
</head>
<header>
    <div class="container shadow rounded"> 
        <div class="row">
            <div class="col-12">
                <img src="Images/logo-maisonnee.png" class="rounded mx-auto d-block w-25" alt="Image responsive" title="Image responsive" id="test">
                <a href="http://www.xn--lamaisonne-j7a.fr/Page%20d'ajout.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ajouter un arcticle</a>
            </div>
        </div>       
    </div>
</header> 
<body>

<br>
<div class="carousel-item active">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 position-relative" style="left: 200px">
            <div class="card">
            <?php
                while ($row = $result->fetch(PDO::FETCH_OBJ)) 
                    {    
                        ?>
                        
                        <img src="uploads/<?= $row->fichier; ?>" alt="<?= $row->ID . "." . $row->fichier; ?>">

                        <?php 


                   
            ?> 
          
            <div class="card-body">
                <h5 class="card-title"><?php   
                    
                        echo "<br>";
                        echo "<th class='text-muted'>" . $row->titre . "</th>";
                        echo "<br>";
                        if ($row != "")
                        {
                            break;
                        }
                      }
                     

                    ?></h5>
              
              <a href="ActualitéComplète.php" class="btn btn-primary">Voir</a>
                    
                    </div> 
                    
            </div>         
            </div>
        </div>
    </div>
</div>

<br>
<div class="carousel-item active">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 position-relative" style="left: 700px ; bottom: 20px">
            <div class="card">
            <?php
                while ($row = $result->fetch(PDO::FETCH_OBJ)) 
                    {    
                        ?>
                        
                        <img src="uploads/<?= $row->fichier; ?>" alt="<?= $row->ID . "." . $row->fichier; ?>">

                        <?php 


                   
            ?> 
          
            <div class="card-body">
                <h5 class="card-title"><?php   
                    
                        echo "<br>";
                        echo "<th class='text-muted'>" . $row->titre . "</th>";
                        echo "<br>";
                        if ($row != "")
                        {
                            break;
                        }
                      }
                     

                    ?></h5>
              
              <a href="ActualitéComplète.php" class="btn btn-primary">Voir</a>
                    
                    </div> 
                    
            </div>         
            </div>
        </div>
    </div>
</div>

<br>
<div class="carousel-item active">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 position-relative" style="left: 200px ; top: 420px">
            <div class="card">
            <?php
                while ($row = $result->fetch(PDO::FETCH_OBJ)) 
                    {    
                        ?>
                        
                        <img src="uploads/<?= $row->fichier; ?>" alt="<?= $row->ID . "." . $row->fichier; ?>">

                        <?php 


                   
            ?> 
          
            <div class="card-body">
                <h5 class="card-title"><?php   
                    
                        echo "<br>";
                        echo "<th class='text-muted'>" . $row->titre . "</th>";
                        echo "<br>";
                        if ($row != "")
                        {
                            break;
                        }
                      }
                     

                    ?></h5>
              
                <a href="ActualitéComplète.php" class="btn btn-primary">Voir</a>
                    
                    </div> 
                    
            </div>         
            </div>
        </div>
    </div>
</div>

<br>
<div class="carousel-item active">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 position-relative" style=" left: 700px ; top: 400px">
            <div class="card">
            <?php
                while ($row = $result->fetch(PDO::FETCH_OBJ)) 
                    {    
                        ?>
                        
                        <img src="uploads/<?= $row->fichier; ?>" alt="<?= $row->ID . "." . $row->fichier; ?>">

                        <?php 


                   
            ?> 
          
            <div class="card-body">
                <h5 class="card-title"><?php   
                    
                        echo "<br>";
                        echo "<th class='text-muted'>" . $row->titre . "</th>";
                        echo "<br>";
                        if ($row != "")
                        {
                            break;
                        }
                      }
                     

                    ?></h5>
              
                <a href="ActualitéComplète.php" class="btn btn-primary">Voir</a>
                    
                    </div> 
                    
            </div>         
            </div>
        </div>
    </div>
</div>


  
</body>

</html>

<!--Script boostrap 5.0 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>