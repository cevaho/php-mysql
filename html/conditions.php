<?php
//1
	$age=34;
	if($age>18){
			$majorite="vous êtes majeur";	
			}
	else{
		$majorite="vous êtes mineur";
		}

//2
	$IsEasy=TRUE;
	//$boolText="C'est difficile";
	if($IsEasy){
		$boolText="C'est facile";		
		}
	else{$boolText="C'est difficile";}

//3
	$agea=16;
	$genre=["homme","femme"];

//4
	function myMagnitude($magnitude){
		switch($magnitude){
			case 1:$monTremblement="Micro-séisme impossible à ressentir.";break;
			case 2:$monTremblement="Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";break;
			case 3:$monTremblement="Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";break;
			case 4:$monTremblement="Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";break;
			case 5:$monTremblement="Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";break;
			case 6:$monTremblement="Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";break;
			case 7:$monTremblement="Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";break;
			case 8:$monTremblement="Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";break;
			case 9:$monTremblement="Séisme capable de tout détruire sur une très vaste zone.";
		}
		return $monTremblement;
	}

//5
	$maVariable = $genre[0];

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
                <h1>BeCode / PHP utilisation des conditions</h1>
            </header>
            <div class="content">
                <section class="explain">
                    	<p><b>Exercice 1</b> : Affiche la majorité en fonction de la valeur de variable age : <?=$age?><br><br><?=$majorite?></p><br>
			<p><b>Exercice 2</b> : Affiche une phrase en fonction de valeur de booléenne : <?=$IsEasy?><br><br><?=$boolText?></p><br>
			<p><b>Exercice 3</b> : Affiche le genre et la majorité en fonction de la valeur d'age, 4 possibilités<br><br>
			<?
			foreach ($genre as $valeur) {
							if($valeur=="femme"){
								echo "Vous êtes une ".$valeur.", vous êtes majeure. ";
								}
							if($valeur=="homme")
								{echo "Vous êtes un ".$valeur.", vous êtes majeur. ";}
							if($agea<18 && $valeur=="femme")
								{echo "Vous êtes une ".$valeur.", vous êtes mineure. ";}
							if($agea<18 && $valeur=="homme")
								{echo "Vous êtes un ".$valeur.", vous êtes mineur. ";}
							}
							
			?></p><br>
			<p><b>Exercice 4</b> : Affiche un texte selon un valeur dépendant d'un switch <br><br><? print(myMagnitude(6));?></p><br>
			<p><b>Exercice 5</b> : ($maVariable != 'Homme') ? 'C'est une développeuse !!!' : 'C\'est un développeur !!!'; en if et else <br><br>
			<? 
			if($maVariable != "homme"){echo"C'est une développeuse !!!";}
			else{echo "C'est un développeur !!!";}
			?></p><br>
			<p><b>Exercice 6</b> : echo ($monAge >= 18) ? 'Tu es majeur' : 'Tu n'es pas majeur';<br><br>
			<? 
			if($age >= 18){echo"Tu es majeur";}
			else{echo"Tu n'es pas majeur";}
			?></p><br>
			<p><b>Exercice 7</b> : echo ($maVariable == false) ? 'c'est pas bon !!!' : 'c'est ok !!'; 
			en if else<br><br>
			<? 
			if($IsEasy != TRUE){echo"c'est pas bon !!!";}
			else{echo"c'est ok !!";}
			?>
			</p><br>
			<p><b>Exercice 8</b> : echo ($maVariable) ? 'c'est ok !!' : 'c'est pas bon !!!'; en if else<br><br>
			<? 
			if($IsEasy){echo"C'est ok !!";}
			else{echo"c'est pas bon !!!";}
			?>
			</p><br>
                </section>
            </div>
        </div>

        <!--script src="script.js"></script-->
    </body>
</html>
