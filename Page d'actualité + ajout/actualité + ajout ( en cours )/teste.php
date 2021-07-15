<html>
<head>
  <meta charset="utf-8">
</head>
<body>
<?php
//Premiere partie tu récupère le nom de l'image :
$fichier = basename($_FILES['image']['name']);
//Ensuite tu fais ton système d'upload
//Tu vérifie d'abord, si c'est bien une image comme suis :
$dossier = '/uploads';
$extensions = array('.png', '.gif', '.jpg', '.jpeg');
$extension = strrchr($_FILES['image']['name'], '.');
//Tu fais les vérifications nécéssaires
if(!in_array($extension, $extensions))
 //Si l'extension n'est pas dans le tableau
{
     $erreur = 'Vous devez uploader un fichier de type png, gif, jpg ou jpeg...';
}
//S'il n'y a pas d'erreur
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
     //On formate le nom du fichier ici...
     $fichier = strtr($fichier,
          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
     if(move_uploaded_file($_FILES['image']['tmp_name'], $dossier . $fichier));
 //Si la fonction renvoie TRUE, c'est que ça a fonctionné...


}
?>