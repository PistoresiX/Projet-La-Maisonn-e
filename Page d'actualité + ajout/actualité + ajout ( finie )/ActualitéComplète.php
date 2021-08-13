<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="ActuCompleteCSS.css" type="text/css" media="screen" />
    <title>Page d'actualité</title>
    <?php
    require "ConnexionBdd.php";
    $db = connexionBase();
    $requete = 'SELECT * FROM media ORDER BY med_id DESC ';

    $result = $db->query($requete);
    

    ?>
</head>
<header>
    <div class="container shadow rounded"> 
        <div class="row">
            <div class="col-12">
                <img src="Images/logo-maisonnee.png" class="rounded mx-auto d-block w-25" alt="Image responsive" title="Image responsive" id="test">
                <a href="http://www.lamaisonnee.dvp:8095/PageActualit%C3%A9.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Page d'acceuil</a>
            </div>
        </div>       
    </div>
</header> 
<body>

<div class="container shadow rounded">

        <div class="row">
            <div class="col-12">
                <?php
                    while ($row = $result->fetch(PDO::FETCH_OBJ))            
                    {
                        echo "<br>";
                        ?>
                            
                                <h4>
                                    <?= $row->med_titre; ?>
                                </h4>
                        <?php
                        echo "<br>";
                        ?>     
                        
                                               
                                <img src="uploads/<?= $row->med_files; ?>" alt="<?= $row->med_id . "." . $row->med_files; ?>">
                                
                            
                        <?php
                        echo "<br>";
                        echo "<br>";
                        echo $row->med_texte;
                        ?>
                        <hr>
                        
                        <?php
                    
                    }
                ?>
            </div>
        </div>
          
    </div>


  
</body>

</html>

<!--Script boostrap 5.0 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>