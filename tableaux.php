<?php

//1
	$mois = array("janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre");


//2
	function correction(){
		//$moiser=$GLOBALS["mois"];var_dump($moiser);
		$counter=count($GLOBALS["mois"]);var_dump($counter);
		echo "résultat troisième ligne : ".($GLOBALS["mois"][($counter/4)-1]);
		echo " | valeur index 5 : ".($GLOBALS["mois"][5]);
		$keyAout = array_search("aout", $GLOBALS["mois"]);echo "<br> aout position dans array: ".$keyAout;
		$GLOBALS["mois"][$keyAout]="août";
		var_dump($GLOBALS["mois"]);
	}

//3	
	$departements = array(
		"01"=>"Ain",
		"03"=>"Allier",
		"07"=>"Ardèche",
		"15"=>"Cantal",
		"26"=>"Drôme",
		"38"=>"Isère", 
		"42"=>"Loire", 
		"43"=>"Haute-Loire", 
		"63"=>"Puy-de-Dôme", 
		"69"=>"Rhône", 
		"73"=>"Savoie", 
		"74"=>"Haute-Savoie");
	
	function indexDisplay(){
		//$tabler = $GLOBALS["departements"];
		//echo "tableau associatif : ".$tabler."<br>";
		echo "valeur index 69 : ".($GLOBALS["departements"]["69"])."<br>";
		$GLOBALS["departements"]["57"]="Metz";
		ksort($GLOBALS["departements"]);
		//var_dump($GLOBALS["departements"]);

		foreach($GLOBALS["departements"] as $key => $value){
			echo "Le département n° ".$key." a pour nom ".$value." | ";
		}


	}
	

//4
	function emailEach(){
		$mesAmis=array("Alex", "Max", "Dominique", "Claude", "Leslie", "Charlie", "Lou");
		foreach($mesAmis as $value){
			echo "Salut ".$value.", devine quoi ! Je me marie dans samedi dans deux semaines ! J'espère te compter parmi les invités ! Gros bisous | <br>";
		}	
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
                <h1>BeCode / PHP utilisation des tableaux</h1>
            </header>
            <div class="content">
                <section class="explain">
                    	<p><b>Exercice 1</b> : Créations du tableau<br><br><?php var_dump($mois);?></p><br>
			<p><b>Exercice 2</b> : afficher la valeur de la 3eme ligne, de l'index 5 et corrige le mois d'aout<br><br><?php print(correction());?></p><br>
			<p><b>Exercice 3</b> : Affiche la valeur de l'index 69 du tableau associatif, ajoute Metz à la bonne position, affiche une phrase descriptive de chaque case <br><br><?php print(indexDisplay());?></p><br>
			<p><b>Exercice 4</b> : affiche un texte d'email personnalisé en fct du nom de la personne dans le tableau<br><br><?php print(emailEach());?></p><br>
                </section>
            </div>
        </div>

        <!--script src="script.js"></script-->
    </body>
</html>
