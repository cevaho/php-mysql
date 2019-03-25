<?php
//1
	$firstNamer="Cedric";
	$lastNamer="Van Hove";
	$ager=34;

	//définir la variable ager comme un nombre entier, même si elle est déjà définie
	settype($ager, "integer"); 
	//echo $ager;
	$phraser="Bonjour ".$firstNamer.", enfant de la famille ".$lastNamer." ayant atteint de level ".$ager." !";
	//echo $phraser;

//2
	function coucou($km = 1) {
	return "kilometre affiché : $km!\n";
	}
	/*echo coucou();
	echo coucou(3);
	echo coucou(125);*/

//3
	// on peut typer avec (string) (int) (bool) (float) mais pas besoin dans un premier temps, juste si besoin de retiper
	$integ=35;
	$stringer= "Check ce string !";
	$booler= TRUE;
	$floater= 10.02;

//4
	$myInt=NULL;
	$intInit=(int)$myInt;

//5
	$addi= 3 + 4;
	$multi= 5 * 20;
	$divi= 45 / 5;
	$numberList=$addi." ".$multi." ".$divi;

//6
	$prixBase=785;
	$reduction=(785/100)*30;
	$prixFinal=$prixBase-$reduction;
	$displayTotal="Prix de base ".$prixBase."euro, réduction de ".$reduction."euro, prix final : ".$prixFinal."euro";
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
                <h1>BeCode / PHP utilisation de variables</h1>
            </header>
            <div class="content">
                <section class="explain">
                    	<p><b>Exercice 1</b> : affiche des valeurs de variable concaténées dans une phrase<br><br><?=$phraser?></p><br>
			<p><b>Exercice 2</b> : utilise une fonction pour afficher des valeurs de variables<br><br><? echo coucou();
				echo coucou(3);
				echo coucou(125);?></p><br>
			<p><b>Exerice 3</b> : affiche des variables typées<br><br><? var_dump($integ,$stringer,$booler,$floater);?></p><br>
			<p><b>Exerice 4</b> : affiche variable typée int vide<br><? echo $intInit;?><br>affiche la même variable avec valeur assignée :<br><? $myInt=32;$intInit=(int)$myInt; echo $intInit;?></p><br>
			<p><b>Exerice 5</b> : Affiche des variables contenant des opérations<br><br><? echo $numberList;?></p><br>
			<p><b>Exerice 6</b> : Affiche le prix d'un objet, sa ristourne, et son prix final<br><br><? echo $displayTotal;?></p>
                </section>
            </div>
        </div>

        <!--script src="script.js"></script-->
    </body>
</html>
