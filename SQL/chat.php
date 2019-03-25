<?php
	try
	{
	// On se connecte à MySQL
		$bd = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','');
	}
	catch(Exception $e)
	{
	// En cas d'erreur, on affiche un message et on arrête tout
        	die('Erreur : '.$e->getMessage());
	}

function addRowTable(){

			//contient tous les user.userName, message.content, message.id
			$resultat = $GLOBALS['bd']->query('
SELECT user.userName as noma, message.content as contena
FROM `user` 
LEFT JOIN `user_has_message` ON user.id = user_has_message.userId 
LEFT JOIN `message` ON user_has_message.messageId = message.id;');

			//récupération des datas sous forme d'array:
			//$donnees = $resultat->fetch();
			//var_dump($donnees);
			//afficher les lignes du tableau lorsque les données sont récupérées
			while ($donnees = $resultat->fetch())
			{
				//echo $donnees['ville'];

				echo '<tr><td>'.$donnees['noma'].'</td>';
				echo '<td>'.$donnees['contena'].'</td>';
			}			
			
			//termine le traitement de la requête avec fetch
			$resultat->closeCursor();


};

if(isset($_POST['envoyeri'])){

	if($GLOBALS['bd']){
				echo('ok connecté');
				// convertit la valeur de nom avec des entités html pour les caractères spéciaux
				//ainsi que les quotes et double quotes
				/*
				$villei = htmlspecialchars($_POST['villei'], ENT_NOQUOTES);
				$villei = substr($villei, 0, 20);

				$hauti = htmlspecialchars($_POST['hauti'], ENT_NOQUOTES);
				$hauti = substr($hauti, 0, 20);

				$basi = htmlspecialchars($_POST['basi'], ENT_NOQUOTES);
				$basi = substr($basi, 0, 20);
				echo ' '.$villei.' '.$hauti.' '.$basi;
				*/

				/* mysqli doit etre remplacé par la méthode PDO
				//préparer les valeur afin d'éviter les hacks d'injection sql, les ? sont des placeholder en attendant les valeurs
				$addVille = 'INSERT INTO Météo (`ville`,`haut`,`bas`) VALUES (?,?,?)';

				//préparation du statement
				$stmtAddVille = mysqli_prepare($addVille);

				//lier les valeurs d'inputs aux variables
				$stmtAddVille->bind_param("sss", $_POST['villei'], $_POST['hauti'], $_POST['basi']);

				//execute l'injection dans la db
				$stmtAddVille->execute();
				*/

				$stmtAddVille = $bd->prepare("INSERT INTO Météo (`ville`,`haut`,`bas`) VALUES (:ville, :haut, :bas)");
				$stmtAddVille->bindParam(':ville', $ville);
				$stmtAddVille->bindParam(':haut', $haut);
				$stmtAddVille->bindParam(':bas', $bas);

				// insert one row
				$ville= $_POST['villei'];
				$haut = $_POST['hauti'];
				$bas=$_POST['basi'];
				$stmtAddVille->execute();

	}

}

if(isset($_POST['supprim'])){
				echo"bon alors c'est checké !";
				/*foreach($_POST['viller'] as $valeur)
					{
					   echo "La checkbox $valeur a été cochée<br>";
					}*/
				$new = $_POST["viller"];

				foreach ($new as $key => $vali){
						echo 'valeur à supprimer : '.$vali;

					//$sqler='"DELETE FROM Météo WHERE ville = "'.$vali.'"';
						//echo $sqler;
					$sqlDelete = $GLOBALS['bd']->prepare("DELETE FROM Météo WHERE ville = ?");

					$response = $sqlDelete->execute(array($vali));

					//$sqlDelete->bindParam(':val', $val);var_dump($sqlDelete);
					//$sqlDelete->execute();
				}
				//$stmtDeleteVille = $GLOBALS['bd']->query($sqlDelete);
	}

/*else {

   echo"pas checké bordel !";
}*/

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>BeCode/ PHP exercices de base</title>
    </head>
    <body>
        <div class="container">
            <header>
                <h1>BeCode / PHP & SQL</h1>
            </header>
            <div class="content">
                <section class="explain">
                    	<p><b>Exercice 1</b> : Affiche la liste des valaures de la DB dans un tableau</p><br>
											<form action="#" method="post">
												<tbody>
												<table>
													<tbody>
														<th>
															<td>Villes</td>
															<td>Température max</td>
															<td>Température min</td>
														</th>
														<?php addRowTable();?>
														<tr colspan="3"><td><button  type="submit" name="supprim">Effacer de la liste</button></td></tr>
													</tbody>
												</table>
												</tbody>
										</form>
                </section>
								<br><br>
								<form enctype="multipart/form-data" action="#" method="post" id="exe3">

									<div>
											<label for="villei">Villes :</label>
											<input class="form-control" name="villei" type="text" placeholder="Inscrire une ville">
									</div>
									<div>
											<label for="hauti">Haut :</label>
											<input class="form-control" name="hauti" type="text" placeholder="Inscrire une T max">
									</div>
									<div>
											<label for="basi">Bas :</label>
											<input class="form-control" name="basi" type="text" placeholder="Inscrire une T min">
									</div>

									<button type="submit" name="envoyeri">Envoyer</button>
								</form>
            </div>
        </div>

        <!--script src="script.js"></script-->
    </body>
</html>
