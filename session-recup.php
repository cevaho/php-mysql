<?php 
//initie la session pour pouvoir utiliser $_SESSION
	session_start();

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
                <h1>BeCode / PHP session pour tester les infos passées dans session et les récupérer</h1>
            </header>
            <div class="content">
                <section class="explain">
                    	<p><b>Données en session :</b><br><br></p>
			<p>
			<?php echo $_SESSION['arrayInfo']['Nom']; ?>
			<br><?php echo $_SESSION['arrayInfo']['Prénom']; ?>
			<br><?php echo $_SESSION['arrayInfo']['Age']; ?>			
			</p>
                </section>
            </div>
        </div>

        <!--script src="script.js"></script-->
    </body>
</html>
