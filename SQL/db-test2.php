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
			$resultat = $GLOBALS['bd']->query('SELECT * FROM Météo');

			//récupération des datas sous forme d'array:
			$donnees = $resultat->fetch();
			//var_dump($donnees);
			
			$vilList=array();

			//afficher les lignes du tableau lorsque les données sont récupérées
			while ($donnees = $resultat->fetch())
			{
				array_push($vilList,$donnees['ville']);

				echo '<tr><td>'.$donnees['ville'].'</td>';
				echo '<td>'.$donnees['haut'].'</td>';
				echo '<td>'.$donnees['bas'].'</td></tr>';
				echo '<td><input type="checkbox" name="'.$donnees['ville'].'" />
					<label for="'.$donnees['ville'].'">Supprimer de la liste</label></td>';


			}
			
			//print_r($vilList);
			

			foreach($vilList as $valeur)
					{
					   echo "La checkbox $valeur est affichée<br>";
						if(isset($_GET['valeur'])){
							echo"checkons la checkbox !";
						}
						else {

						   echo"pas checké bordel !";
						}	
					}

			/*if(isset($_GET[$GLOBALS['namer']])){echo"checkons la checkbox !";

				}
				else {

				   echo"pas checké bordel !";
				}*/

			/*foreach($_GET[$donnees['ville']] as $valeur)
					{
					   echo "La checkbox $valeur a été cochée<br>";
						
					}*/


			//termine le traitement de la requête avec fetch
			$resultat->closeCursor();


};



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
											<form action="#" method="get">
												<tbody>
												<table>
													<tbody>
														<th>
															<td>Villes</td>
															<td>Température max</td>
															<td>Température min</td>
														</th>
														<?php addRowTable();?>
													</tbody>
												</table>
												</tbody>
										</form>
                </section>
								<br><br>
								
            </div>
        </div>

        <!--script src="script.js"></script-->
    </body>
</html>
