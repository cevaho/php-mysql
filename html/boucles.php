<?php
//1
	$increma1=0;
	function jusqua10(){
		for($increma1;$increma1<11;$increma1++){
			echo $increma1." ";
			}

	
	}

//2
	
	function jusqua20(){
		
		$randoNumber=rand(1,100);

		for($increma2=0;$increma2<21;$increma2++){
			//var_dump($randoNumber);
			//var_dump($increma2);
			// ceci ne marcherait pas en php mais bien en js: $randoNumber=$randoNumber*$increma2;
			$randoNumber2=$randoNumber*$increma2;
			var_dump($randoNumber2);
			}
		
	}

//3
	function aumoin10(){
		
		$randoNumber=rand(1,100);

		for($increma3=100;$increma3>10;$increma3--){
			$randoNumber2=$randoNumber*$increma3;
			echo $randoNumber2." ";
			}
		
	}
	

//4
	function petitque10(){

		for($increma3=1;$increma3<10;$increma3+=0.5){
			echo $increma3." ";
			}
		
	}
	

//5
	function de1a15(){

		for($increma3=1;$increma3<=15;$increma3++){
			echo "On y arrive presque  ";
			}
		echo "- affiché : ".($increma3-1)." fois";
	}	

//6
	function de20a0(){
		$numberFois=0;
		for($increma3=20;$increma3>=0;$increma3--){
			echo "On y arrive presque  ";
			$numberFois++;
			}
		echo "- affiché : ".$numberFois." fois";
	}

//7
	function de1a100par15(){
		$numberFois=0;
		for($increma3=1;$increma3<100;$increma3+=15){
			echo "On tient le bon bout ";
			$numberFois++;
			}
		echo "- affiché : ".$numberFois." fois";
	}

//8
	function de200a0par12(){
		$numberFois=0;
		for($increma3=200;$increma3>=0;$increma3-=12){
			echo "Enfin !!!! ";
			$numberFois++;
			}
		echo "- affiché : ".$numberFois." fois";
	}	
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
                <h1>BeCode / PHP utilisation des boucles</h1>
            </header>
            <div class="content">
                <section class="explain">
                    	<p><b>Exercice 1</b> boucle qui affiche les nombres de 1 à 10 : <br><br><? print(jusqua10());?></p><br>
			<p><b>Exercice 2</b> boucle qui multiplie une valeur aleatoire entre 1 et 100 avec le numero de la boucle jusqu'à ce que ce numéro egal 20 : <br><br><? print(jusqua20());?></p><br>
			<p><b>Exercice 3</b> boucle qui multiplie une valeur aleatoire entre 1 et 100 avec le numero de la boucle jusqu'à ce que ce numéro egal 10  : <br><br><? print(aumoin10());?></p><br>
			<p><b>Exercice 4</b> : affiche valeur incrémentée de moitié<br><br><? print(petitque10());?></p><br>
			<p><b>Exercice 5</b> : affiche un message selon incrémentation et afficher le nombre de message<br><br><?=de1a15();?></p><br>
			
			<p><b>Exercice 6</b> : affiche un message selon décrémentation et afficher le nombre de message<br><br><?=de20a0();?></p><br>
			<p><b>Exercice 7</b> : affiche un message selon incrémentation de 15 et afficher le nombre de message<br><br><?=de1a100par15();?></p><br>
			<p><b>Exercice 8</b> : affiche un message selon décrémentation de 12 et afficher le nombre de message<br><br><?=de200a0par12();?></p><br>
                </section>
            </div>
        </div>

        <!--script src="script.js"></script-->
    </body>
</html>
