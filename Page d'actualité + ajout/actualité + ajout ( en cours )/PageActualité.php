<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css" type="text/css" media="screen" />
    <title>Page d'actualité</title>
    <?php
    require "ConnexionBdd.php";
    $db = connexionBase();
    $requete = 'SELECT * FROM actualite ';

    $result = $db->query($requete);
    $produit = $result->fetch(PDO::FETCH_OBJ);
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
    <div class="container shadow rounded ">
        <div class="row m-auto">

            <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="vertical-nav" id="sidebar">
                    <div class="py-4 px-3 mb-4t">
                        <h4 class="m-0">La maisonnée</h4></div>
                            <p class="text-secondary font-weight-bold text-uppercase">Principale</p>
                                <ul class="nav flex-column bg-white mb-0">
                                    <li class="nav-item">
                                      <a href="#" class="nav-link text-dark font-italic bg-light">Acceuil</a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="#" class="nav-link text-dark font-italic">Notre activité</a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="#" class="nav-link text-dark font-italic bg-light">Notre actualité</a>
                                    </li>
                                </ul>
                                <br>
                            <p class="text-secondary font-weight-bold text-uppercase">Qui sommes-nous ?</p>
                                <ul class="nav flex-column bg-white mb-0">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link text-dark font-italic bg-light">Partenaires</a>
                                    </li> 
                                    <li class="nav-item">
                                        <a href="#" class="nav-link text-dark font-italic">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link text-dark font-italic  bg-light">Nos réseaux sociaux</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link text-dark font-italic">Mention légales</a>
                                    </li>
                                </ul>
                                <div class="vertical-line"></div>
    
                </div>
            </div>
            <div class="col-8 p-3 position-absolute" style="right: -200px">
            titre :
            <?php echo $produit->titre ?> <br>
            <img src="uploads/ <?php $produit->ID?>"  />

            </div>
        </div>       
    </div>
</body>
<footer>
    <div class="container shadow"> 
        <div class="row">
            <div class="col-12">
                <img src="Images/FSE_2.png" class="position-relative" style="right : 12px" Position : sticky alt="Image responsive" title="Image responsive">
                <img src="Images/B_CREDIT_MUTUEL2014_Q.png" class="w-25" alt="Image responsive" title="Image responsive">
                <img src="Images/Crédit_Agricole.png" height="100" width="120" class="position-relative" style="left : 20px;" Position : sticky alt="Image responsive" title="Image responsive">
                <img src="Images/Fond_Vinci_logo.jpg" width="256" class="position-relative" style="left : 600px; bottom : 137px; " Position : sticky alt="Image responsive" title="Image responsive">
                <img src="Images/caisse-depargne-logo copy.png" height="140" width="170" class="position-relative" style="right : 240px; bottom : 5px;" Position : sticky alt="Image responsive" title="Image responsive">               
            </div>    
        </div>
    </div>
</footer>
</html>

<!--Script boostrap 5.0 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>