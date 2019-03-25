<?php

//1
	// Définit le fuseau horaire par défaut à utiliser. Disponible depuis PHP 5.1
	//date_default_timezone_set('UTC');
	//setlocale(LC_TIME, "be_FR");
	setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
	echo (strftime("%A %d %B")); 
	
//setlocale(LC_TIME, 'fr','fr_FR','fr_FR@euro','fr_FR.utf8','fr-FR','fra');
//print strftime("%A %d %B %Y %T");


	// Affichage de quelque chose comme : Monday
	//echo date("l");
	$todaySlash = date("m/d/y");

//2
	$todayTiret = date("m-d-y");

//3	
	$todayTouteLettre= date("j F Y");

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
