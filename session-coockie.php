<?php

//initie la session pour pouvoir utiliser $_SESSION
	session_start();

	setcookie("logPasArray", "" , time() - 84600);
	setcookie("logPasArray2", "" , time() - 84600);
//1

	function userAgent(){
		echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";
	}

	function get_client_ip(){
		    $ipaddress = '';
		    if (isset($_SERVER['HTTP_CLIENT_IP']))
			{$ipaddress = $_SERVER['HTTP_CLIENT_IP'];}
		    elseif(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			{$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];}
		    elseif(isset($_SERVER['HTTP_X_FORWARDED']))
			{$ipaddress = $_SERVER['HTTP_X_FORWARDED'];}
		    elseif(isset($_SERVER['HTTP_FORWARDED_FOR']))
			{$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];}
		    elseif(isset($_SERVER['HTTP_FORWARDED']))
			{$ipaddress = $_SERVER['HTTP_FORWARDED'];}
		    elseif(isset($_SERVER['REMOTE_ADDR']))
			{$ipaddress = $_SERVER['REMOTE_ADDR'];}
		    else
			{$ipaddress = 'UNKNOWN';}//var_dump($ipaddress);
		    echo $ipaddress;
	}

	function nomServer(){
		//echo $_SERVER['SERVER_NAME']; donne le nom de domaine
		echo $_SERVER['HTTP_HOST'];//pareil sauf si c'est localhost
		echo $_SERVER['PHP_SELF'];//affiche le domaine et le chemin jusqu'à la page actuelle
	}

//2 données dans session

	if (isset($_POST["gotosess"])){
		echo "gotosess";

		$arrayInfo = array("Nom"=>"Van Hove","Prénom"=>"Cédric","Age"=>34);
		$_SESSION["arrayInfo"]=$arrayInfo;
		print_r($_SESSION["arrayInfo"]);

		/*$name="Van Hove";
		$firstname="Cedric";
		$age=34;*/	
	}

//3 données dans cookies
/*les coockies ne sont accessibles qu'à la prochaine session avec php, 
il faut faire un rechargement de page pour y arriver mieux vaut générer un cookie avec javascript/ajax depuis php*/

	function createCookie(){
		//echo "gotocook";

		$login = htmlspecialchars($_POST["login"], ENT_NOQUOTES);
		$login = substr($login, 0, 20);

		$password = htmlspecialchars($_POST["password"], ENT_NOQUOTES);
		$password = substr($password, 0, 20);
	
		$logPasArray = array("login"=>$login,"password"=>$password);
		$cookieValjson= json_encode($logPasArray);
		//echo "mon arrayJson egal "; var_dump($cookieValjson);

		$cookie_name2= "logPasArray2";

		// avec les problèmes d'array qui ne sont pas des string 
		// il faut coder l'array en json et le decoder quand on en aura besoin
		setcookie($cookie_name2, $cookieValjson, time() + (86400 * 2), "/");

		sleep(2);echo "text after sleep 2 sec ";
		var_dump($_COOKIE['logPasArray2']);
		//var_dump($_COOKIE[$cookie_name2]);
		//return $_COOKIE[$cookie_name2];
		
	}

	if (isset($_POST["gotocook"])){

		//setcookie("logPasArray2", "" , time() - 84600);
		$newCook=createCookie();
		
		
		//if(sleep()==0){var_dump($_COOKIE['logPasArray2']['login']);}		

		//var_dump($newCook);

		/*sleep(2);
		var_dump($_COOKIE['logPasArray2'][0]);
		if(!isset($_COOKIE['logPasArray2'])) {
    			echo "Cookie named '" . $cookie_name2 . "' is not set!";
		} else {
    			echo "Cookie '" . $cookie_name2 . "' is set!<br>";
    			echo "Value is: " . $_COOKIE[$cookie_name];
		}*/
		//sleep(3);
		/*if(isset($_POST["gotocook"])){
			$URL="http://www.cevaho-creation.be/becode/session-recup.php";echo $URL;sleep(3);
			echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";	
		}*/

		//header('Location:http://www.cevaho-creation.be/becode/session-recup.php');
		
	}



//4
	

//5
	

//6
	

//7
	

//8
		
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
                <h1>BeCode / PHP utilisation des Sessions,cookies et superGlobales</h1>
            </header>
            <div class="content">
                <section class="explain">
                    	<p><b>Exercice 1</b> : Affiche user Agent de l'utilisateur, les infos du browser<br><br><?php userAgent();?>
			<br><br>Affiche l'adresse IP de l'utilisateur<br><?php get_client_ip();?>
			<br><br>Affiche le nom du server et le chemin vers la page<br><?php nomServer();?>
			</p><br>
			<p><b>Exercice 2</b> : passage de nom, prenom, age dans une session  vers une autre page<br>
				<form action="session-recup.php" method="post">
					<button type="submit" name="gotosess">goToSession</button>
				</form>
			</p><br>
			<p><b>Exercice 3</b> : passage de login, password dans un cookie  vers une autre page<br>
				<form action="#" method="post">
				<div>
					<label for="login">Login :</label>		
					<input name="login" type="text" placeholder="Inscrivez ici votre login">
				</div>
				<div>
					<label for="password">Mot de passe :</label>		
					<input name="password" type="text" placeholder="Inscrivez ici votre mot de passe">
				</div>
					<button type="submit" name="gotocook">goToCookie</button>
				</form>
			</p><br>
                </section>
            </div>
        </div>

        <!--script src="script.js"></script-->
    </body>
</html>
