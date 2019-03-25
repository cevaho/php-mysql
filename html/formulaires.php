<?php

	//$hider="nothide";
 	//si l'action d'envoyer est faite
	if(isset($_POST["envoyeri"])){


		// convertit la valeur de nom avec des entités html pour les caractères spéciaux 
		//ainsi que les quotes et double quotes
		$nomi = htmlspecialchars($_POST["nomi"], ENT_NOQUOTES);

		//limite le nombre de caractère envoyé-> contre hacker
		$nomi = substr($nomi, 0, 20);

		$prenomi = htmlspecialchars($_POST["prenomi"], ENT_NOQUOTES);
		$prenomi = substr($prenomi, 0, 20);
		
		$optionSelect = htmlspecialchars($_POST["selector"], ENT_NOQUOTES);
		$optionSelect = substr($optionSelect, 0, 20);

		$namefile = $_FILES["fileToUpload"]["name"];
		$extentionFile = $_FILES['userfile']['type'];

		// fonction qui verifie si le champs est vide, ou placeholder par défaut
		function verif_null($var){
	
			//si valeur de variable différente de :
		    	if($var!="" && $var!="Inscrivez ici votre prénom" && $var!="Inscrivez ici votre nom"){ var_dump($var);
				//renvoie la valeur de $var pour être utilisée ailleur
		    		return $var;
		    		}
		}

		if(verif_null($nomi) && verif_null($prenomi)){
			//$GLOBALS["hider"]="tohide";
			//$html = preg_replace('#<form id="exe3">(.*?)</form>#', '', $html);
			$message = "Bonjour ".$optionSelect." ".$nomi." ".$prenomi."<br>Nom du fichier à uploader: ".$namefile." d'extention : ".$extentionFile;
		}
		else{$message ="Vueillez remplir les champs";}

	}

	/*function hiderOuPas(){
			echo $hider;
			if($hider=="tohide"){
				echo "hider";			
			}
			else{
				echo "nothide";
			}
	}*/

	//else{echo "rien envoyé";}
	
//ini_set('display_errors', 1);
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
                <h1>BeCode / PHP utilisation du Formulaire</h1>
            </header>
            <div class="content">
                <section class="explain">
                    	<!--p><b>Exercice 1</b> : Création de formulaire renvoyant le résultat en get vers user.php<br><br>
			<form  action="user.php" method="get">
				<div>
					<label for="prenom">Prénom :</label>		
					<input class="form-control" name="prenom" type="text" placeholder="Inscrivez ici votre prénom">
				</div>
				<div>
					<label for="nom">Nom :</label>		
					<input class="form-control" name="nom" type="text" placeholder="Inscrivez ici votre nom">
				</div>
				<button type="submit" id="envoyer">Envoyer</button>
			</form>
			</p><br>
			<p><b>Exercice 2</b> : Création de formulaire renvoyant le résultat en post vers user.php<br><br>
			<form  action="user.php" method="post">
				<div>
					<label for="prenoma">Prénoma :</label>		
					<input class="form-control" name="prenoma" type="text" placeholder="Inscrivez ici votre prénom">
				</div>
				<div>
					<label for="noma">Noma :</label>		
					<input class="form-control" name="noma" type="text" placeholder="Inscrivez ici votre nom">
				</div>
				<button type="submit" id="envoyera">Envoyera</button>
			</form>
			</p><br-->
			<p><b>Exercice 3</b> : Création de formulaire renvoyant le résultat en post vers formulaires.php<br><br>
			<form action="#" method="post" id="exe3" 
						<?php 
						if(isset($_POST["envoyeri"])){ 
							if(verif_null($nomi) && verif_null($prenomi) && verif_null($optionSelect)){ 
								echo "class=\"hider\""; 
							}
							else { echo "class=\"nothider\""; }
						} ?> 
			>
				<div>
	    				<label for="selector">Civilités :</label>
		    			<select name="selector">
		      				<option>Mr</option>
		      				<option>Mme</option>
						<option>Autre</option>
		    			</select>
	  			</div>
				<div>
					<label for="prenomi">Prénomi :</label>		
					<input class="form-control" name="prenomi" type="text" placeholder="Inscrivez ici votre prénom">
				</div>
				<div>
					<label for="nomi">Nomi :</label>		
					<input class="form-control" name="nomi" type="text" placeholder="Inscrivez ici votre nom">
				</div>
				<div>
					<label for="fileToUpload">Uploader un fichier</label>
					<input type="file" name="fileToUpload" id="fileToUpload">
				</div>
				<button type="submit" name="envoyeri">Envoyer</button>
			</form>
			</p><br>
			<?php echo $message; ?>
                </section>
            </div>
        </div>
<style>
.hider{display:none;visibility:hidden;}
.nothider{display:block;visibility:visible;}
</style>
        <!--script src="script.js"></script-->
    </body>
</html>
