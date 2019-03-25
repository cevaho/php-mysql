<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=phpmyadmin;charset=utf8', 'phpmyadmin', 'user');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}


$resultat = $bd->query('SELECT * FROM Météo');

//récuération des datas sous forme d'array:
$donnees = $resultat->fetch();

//afficher les lignes du tableau
while ($donnees = $resultat->fetch())
{
  echo $donnees[ville];
}

//termine le traitement de la requête
$resultat->closeCursor();


?>
