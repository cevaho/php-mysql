<?php

//1
	//$_GET['nom']="Dupont";
	function afficheNom(){
		if(isset($_GET['nom'])){echo "le nom dans l'url est ".$_GET['nom'].", le prénom dans l'url est ".$_GET['prenom'];}
		else{echo "no name parameter in the url";}

		
	}

//2
	function testAge(){
		if(isset($_GET['age'])){echo "l'age de la personne est ".$_GET['age'];}
		else{echo "l'age n'est pas indiqué dans l'url";}
	}

//3
	function dateDebutFin(){
		if(isset($_GET['dateDebut'])){echo "la date de début est ".$_GET['dateDebut']." la date de fin est ".$_GET['dateFin'];}
		else{echo "les dates ne sont pas indiquées dans l'url";}
	}

ini_set('display_errors', 1);
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
                <h1>BeCode / PHP utilisation des paramètres d'urls</h1>
		<p>Copie-colle ceci dans l'url après .php :<br>?nom=Nemare&prenom=Jean</p><br>
            </header>
            <div class="content">
                <section class="explain">
                    	<p><b>Exercice 1</b> : teste si le nom est dans l'url et affiche les valeurs de paramètres<br><br><?php afficheNom();?></p><br>
			<p><b>Exercice 2</b> : affiche l'age ou indique qu'il n'est pas présent dans l'url<br><br><?php testAge();?></p><br>
			<p><b>Exercice 3</b> : ajoute &dateDebut=2/05/2016&dateFin=27/11/2016 à l'url et affiche ces données<br><br><?php dateDebutFin()?></p><br>
			
                </section>
            </div>
        </div>

        <!--script src="script.js"></script-->
    </body>
</html>
