<?php

//1
	$bool=TRUE;
	function returnTrue(){

		$myWord="";
		//obligation d'utiliser la syntaxe $GLOBALS["nomVarSans$"] pour accéder à une variable hors de la fct
		if($GLOBALS["bool"]){$myWord="TRUE";}
		else{$myWord="FALSE";}
		return $myWord;
	}

//2
	function paramCharac($charac="mon texte en parametre"){
		return $charac;
	}

//3
	function multiParamCharac($charac1="mon nom",$charac2=" mon prénom"){
		return $charac1.$charac2;
	}
	

//4
	function numberSize($number1,$number2){
		if($number1>$number2){echo "Le premier nombre est plus grand";}
		elseif($number1<$number2){echo "Le premier nombre est plus petit";}
		else{echo "Les deux nombres sont identiques";}	
	}
	

//5
	function concatNumberCharac($number1,$charac3){
		return $number1.$charac3;
	}	

//6
	function phraseName($firstNamer,$lastNamer,$ager){
		return "Bonjour ".$firstNamer." ".$lastNamer." "." vous avez ".$ager." ans";
	}

//7
	function ageArray($ager=34,$genre=array("homme","femme")){

		switch(TRUE){
			//case TRUE: echo $ager.$genre[0].$genre[1];
			case ($ager<18 && $genre[0]=="homme"):echo "vous êtes un homme mineur ";
				//break;
			case ($ager>18 && $genre[0]=="homme"):echo "vous êtes un homme majeur ";
				//break;
			case ($ager<18 && $genre[1]=="femme"):echo "vous êtes une femme mineur ";
				//break;
			case ($ager>18 && $genre[1]=="femme"):echo "vous êtes une femme majeur ";
				//break;
			}
	}

//8,
	function numberTrois($number1=2,$number2=3,$number3=4){
		$sommer= $number1+$number2+$number3;
		return $sommer;
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
                <h1>BeCode / PHP utilisation des Fonctions</h1>
            </header>
            <div class="content">
                <section class="explain">
                    	<p><b>Exercice 1</b> : Affiche valeur de booléenne renvoyée par la fonction<br><br><?php print(returnTrue());?></p><br>
			<p><b>Exercice 2</b> : Affiche paramètre d'une fonction<br><br><?php print(paramCharac());?></p><br>
			<p><b>Exercice 3</b> : Affiche plusieurs paramètres d'une fonction<br><br><?php print(multiParamCharac());?></p><br>
			<p><b>Exercice 4</b> : Prend 2 nombres en parametre et affiche des messages en fct de ceux-ci<br><br><?php print(numberSize(12,12));?></p><br>
			<p><b>Exercice 5</b> : Prend un nombre et une chaine de caractère et affiche leur concaténation<br><br><?php print(concatNumberCharac(3,"Cédric"));?></p><br>
			
			<p><b>Exercice 6</b> : Affiche une phrase avec 3 paramètres de fonction<br><br><?php print(phraseName("Cédric","Van Hove",34));?></p><br>
			<p><b>Exercice 7</b> : Affiche une phrase selon un argument age et un argument array<br><br><?php print(ageArray());?></p><br>
			<p><b>Exercice 8</b> : Affiche la somme de 3 nombres en argument de fonction<br><br><?php print(numberTrois());?></p><br>
                </section>
            </div>
        </div>

        <!--script src="script.js"></script-->
    </body>
</html>
