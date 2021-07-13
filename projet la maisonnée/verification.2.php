<?php

session_start();
//var_dump($_POST);
//var_dump(isset($_POST['Registration_date']));
if(isset($_POST['name']) && isset($_POST['password']) 
{
    // connexion à la base de données
    
    require ("login_bdd.la_maisonnee.php"); // Inclusion de notre bibliothèque de fonctions
    
    $db = connexionBase("localhost","root","","la_maisonnee") // Appel de la fonction de connexion
           or die('could not connect to database');
    //var_dump($db);

   // pour éviter les injections xml et sql, pour qu'il soit interprété en code
    $name = htmlspecialchars($_POST['name']);
    $password = htmlspecialchars($_POST['password']);
   


    
    if($name !== "" && $password !== "")
    {
        $requete = "SELECT count(*)as resultat FROM users where 
              users_Name = '".$name."' and users_password = '".$password."' ;
        $result = $db->query($requete);
        //var_dump($requete);
        //var_dump($result);
        $users=$result->fetch(PDO::FETCH_OBJ);
        //var_dump($users);

      $resultat=$users->resultat;
     // var_dump($resultat);
        if($resultat!=0) // prise en compte de tout les champs renseigné
        {
           $_SESSION['name'] = $name;
           header('Location: accueil2.0.php');
          // var_dump($_SESSION);
        }
        else
        {
           header('Location: connexion.php?erreur=1'); // informations incorrect
        }
    }
    else
    {
       header('Location: connexion.php?erreur=2'); // informations vide
    }
}
else
{
  header('Location: connexion.php');
}

?>