<?php

//1
	// Définit le fuseau horaire par défaut à utiliser. Disponible depuis PHP 5.1
	//date_default_timezone_set('UTC');
	//setlocale(LC_TIME, "be_FR");
	setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
	echo (strftime("%A %d %B")); 
	//%A jour semaine, %e jour du mois, %B nom du mois complet,%G année à 4 chiffres
	
//setlocale(LC_TIME, 'fr','fr_FR','fr_FR@euro','fr_FR.utf8','fr-FR','fra');
//print strftime("%A %d %B %Y %T");


	// Affichage de quelque chose comme : Monday
	//echo date("l");
	//affiche 03/15/19 : $todaySlash = date("m/d/y");
	$todaySlash = strftime("%d / %m / %y");

//2
	//$todayTiret = date("m-d-y");
	$todayTiret = strftime("%d - %m - %y");

//3	
	//$todayTouteLettre= date("j F Y");
	$todayTouteLettre = strftime("%A %e %B %G");

//4
		
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
                <h1>BeCode / PHP utilisation des Dates</h1>
            </header>
            <div class="content">
                <section class="explain">
                    	<p><b>Exercice 1</b> : <br>Afficher la date courante en respectant la forme jj/mm/aaaa<br><?=$todaySlash; ?></p><br>
			<p><b>Exercice 2</b> : <br>Afficher la date courante en respectant la forme jj-mm-aa<br><?=$todayTiret; ?></p><br>
			<p><b>Exercice 3</b> : <br>Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)<br><?=$todayTouteLettre; ?></p>
                </section>
            </div>
        </div>

        <!--script src="script.js"></script-->
    </body>
</html>
