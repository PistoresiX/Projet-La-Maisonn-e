<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"/>


    <title>La Maisonnée</title>
</head>

<body>

<br>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

        <p class="flotte">
            <a class="navbar-brand" href="<?php base_url(); ?>">
                <img src="<?php echo base_url("asset/image/logo-maisonnee.png"); ?>" alt="" title="Logo_la_maisonnée"
                     width="15%" height="15%">
            </a>

        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-link disabled">Accueil</li>

            <li class="nav-item">
                <a class="nav-link" href="">Activités</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">Actualités</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="contact.php">Historique</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>

        </ul>
        </p>

        <form class="form-inline my-2 my-lg-0" action="connexion.php">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Accès utilisateur</button>
        </form>
    </div>
</nav>