<?php require 'header.php';

try{
//////////////////////////////ON SE CONNECTE A MySQL
$bdd = new PDO('mysql:host=localhost;dbname=becode;charset=utf8', 'phpmyadmin','user');

//////////////////////////////REQUETE POUR SUPPRIMER LIGNE SQL
if(isset($_POST["boutonEfface"])){

$new = $_POST["cocher"];

foreach ($new as $key => $val){

$sql = "DELETE FROM Meteo WHERE ID = '$val'";
$rq = $bdd->query($sql);

}}
;

///////////////////////////////AJOUT LIGNE BASE DE DONNEES
if(!empty($_POST["ville"]) && !empty($_POST["haut"]) && !empty($_POST["bas"])){//si post rempli
$newVille = $_POST["ville"];//on met les valeurs dans des variables
$newHaut = $_POST["haut"];
$newBas = $_POST["bas"];
////////////////////////////ON FAIT REQUETE A SQL POUR AJOUTER LIGNE
$req = $bdd->prepare('INSERT INTO Meteo(ville, haut, bas)
VALUES(:ville, :haut, :bas)');
echo "salut";
$req->execute(array(

'ville' => $newVille,
'haut' => $newHaut,
'bas' => $newBas,

));};

/////////////////////////////////CODE VISIBLE
?>
<h1 class="text-center">La méteo des villes</h1>
<form action="exercice1.php" method="post">
<table class="table table-striped">
<tr>
<th>cle</th>
<th>Villes</th>
<th>Haut</th>
<th>Bas</th>
</tr>

        <?php
        $resultat = $bdd->query('SELECT * FROM Meteo');//Le contenu de la BD est stocké sous forme d'objet dans la variable $resultat.
        while ($donnees = $resultat->fetch())//tant qu'il y a un resultat
        {
        ?>
<tr>

    <?php

    echo "<td><input type='checkbox' name='cocher[]' value=".$donnees['ID']." ></td>"?>

    <td><?php echo $donnees ['ville'].' '.$donnees['ID'] ?></td>
    <td><?php echo $donnees ['haut']?></td>
    <td><?php echo $donnees ['bas']?></td>
</tr>

<?php
}
$resultat->closeCursor();//termine le traitement de la demande
?>
</table>
<div class="container form-group mt-5 ">
<label for="ville">Entrer ville</label>
<input type="text" name="ville" value="">
<label for="temp">Entrer maxima</label>
<input type="number" name="haut" value="">
<label for="temp">Entrer minima</label>
<input type="number" name="bas" value="">
<button type="submit" class="btn btn-primary">Envoyer</button>
<button type="submit" class="btn btn-primary" name="boutonEfface">Effacer</button>
</div>
</form>
