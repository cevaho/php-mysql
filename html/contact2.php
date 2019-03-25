<?php
    //remanié d'un code de MOUNIR cosmoswarez@msn.com 18/08/2008
    //FORMULAIRE PHP + VERIFICATION + ENVOI DU MAIL
    
    // Style pour le input et le textarea, lorsque les valeurs posent problème
    $style_input_blanc = "style = \"color: ##3e3a39\"";
    $style_input_rouge ="style = \"color: #E48028s;background-color: #e48028 \"";
    $style_textarea_blanc = "style = \"color: ##3e3a39\"";
    $style_textarea_rouge = "style = \"border: solid #000000 1px;color: #000000;background-color: #e48028\"";
	$style_msgbck="messagback1";// nom de classe, qui appliquera visibility: hidden; en css
	$stole_msgbck="messagback2";// nom de classe, qui appliquera visibility :visible; en css

	
    // verifie si une action "envoyer" est faite par l'utilisateur alors:
    if(isset($_POST['envoyer'])){

	//variable contenant l'action du button envoyer
    	$alerte = $_POST['envoyer'];
	$webmaster = "info@cevaho-creation.be";

	//récupère les valeurs des champs et ajoute une validation sur le nombre de caractère
	//htmlspecialchars convertit les caractères spéciaux en entité html

    	$nom = htmlspecialchars($_POST['nom'], ENT_NOQUOTES); 
	$nom = substr($nom, 0, 49);
    	$adresse = htmlspecialchars($_POST['adresse'], ENT_QUOTES);
	$adresse = substr($adresse, 0, 49);
    	$spam = htmlspecialchars($_POST['spam'], ENT_QUOTES);
	$spam = substr($spam, 0, 14);
    	$sujet = htmlspecialchars($_POST['sujet'], ENT_QUOTES);
	$sujet = substr($sujet, 0, 49);
    	$demande = htmlspecialchars($_POST['demande'], ENT_QUOTES);
	$sujet = substr($sujet, 0, 499);
    }

    // fonction qui verifie si le champs est vide, 
    //$var signifie n'importe quelle variable a qui on attribuera la fonction
    function verif_null($var){
	
	//si valeur de variable différente de :
    	if($var!="" && $var!="Inscrivez votre nom ici" && $var!="inscrivez le sujet de votre message" && $var!="Inscrivez votre message ici"){ 
		//renvoie la valeur de $var pour être utilisée ailleur
    		return $var;
    		}
    }


    // fonction qui verifie si le mail est correct et si le champs est vide
    function verif_adresse($var){

	// variable contenant la syntaxe mail valide
    	$code_syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,5}$#';

	// si la comparaison entre la syntaxe mail valide et l'email saisi est true envoie la valeur de variable email
    	if(preg_match($code_syntaxe,$var)){
    			return $var;
    	}
    }


    // fonction qui verifie si le n° de spam est correct
    function verif_spam($var){
    	// var contenant la syntaxe spam valide
    	$code_syntaxe='#^7$#';
	
	// si la comparaison entre la syntaxe spam valide et la réponse saisie est true envoie la valeur de variable spam
   	 if(preg_match($code_syntaxe,$var)){
    		return $var;
    	}
    }


    //fonction qui envoie le mail
    function envoi_mail($webmaster,$nom,$adresse,$sujet,$spam,$demande){

	//message html dans l'email :
    	$contenu_message = "Nom : ".$nom."\n<br/>Mail : ".$adresse."\n<br/>Sujet : ".$sujet."\n<br/>Demande : ".$demande;
    	$entete = "From: ".$nom." <".$adresse."> \nContent-Type: text/html;  charset=utf-8";

	//fonction par défaut de php pour envoyer un mail
    	mail($webmaster,$sujet,$contenu_message,$entete);
    }


    //fonction qui verifie si le formulaire est pret a etre envoyer	
    function verif_form($webmaster,$nom,$adresse,$sujet,$spam,$demande){

	// verifie si toute les fontions sont a true
    	if(verif_null($nom) && verif_null($sujet) && verif_null($demande) && verif_spam($spam)&& verif_adresse($adresse)){

			//active la fonction envoi_mail
    			envoi_mail($webmaster,$nom,$adresse,$sujet,$spam,$demande);
    			}
    }
?>
<?php 
	// verifie si l'utilisateur a fait l'action d'envoyer
	if(isset($alerte)){
    				verif_form($webmaster,$nom,$adresse,$sujet,$spam,$demande);
			  }
?>
<!DOCTYPE HTML><!--DTD html 5-->
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="googlebot" content="index,archive,follow,noodp" />
<meta name="robots" content="all,index,follow" /><meta name="msnbot" content="all,index,follow" />
<meta name="keywords" content="cevaho creation contactez moi referencement site image de marque, mobile email" />
<meta name="description" content="Page de contact, n° de tel., email, Cevaho Creation" />
<meta name="author" content="Cédric Van Hove, Cevaho Creation">
<title>Cevaho Creation, page de contact, n° de tel., email</title>
<link rel="icon" type="image/x-icon" href="images/cevaho_creation.ico">
<link rel='home' title="Cevaho Creation" href="http://cevaho-creation.be/">
<link rel='previous' title="a propos" href="http://cevaho-creation.be/apropos.html">
<link href="css/cevaho2.css" rel="stylesheet" type="text/css">
<!--[if IE 7]><link href="css/cevaho_ie7.css" rel="stylesheet" type="text/css"><![endif]-->
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:700italic' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" ></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/cevaho.js" charset="utf-8"></script>
<script type="text/javascript" src="js/jquery.validate.js" charset="utf-8"></script>
<script type="text/javascript" src="js/contact_validate.js" charset="utf-8"></script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23884293-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<noscript>
    <div id="ie_pourri">
    <p>L'activation de javascript est nécéssaire pour visonner ce site, il est optimisé pour les navigateurs modernes.<br /> 
    Pour visualiser ce site de manière optimum,<br /> avez-vous installé la dernière version de l'un de ces navigateurs ?</p>
     <div id="pourria"><a href="http://www.mozilla.com/firefox" id="brows_fire" target="blank">Firefox</a><a href="http://www.google.com/chrome" id="brows_chrom" target="blank">Chrome</a> 
       <a href="http://www.opera.com" id="brows_oper" target="blank">Opera</a><a href="http://www.apple.com/safari/" id="brows_safa" target="blank">Safari</a> 
       <a href="http://www.microsoft.com/windows/Internet-explorer" id="brows_inte" target="blank">Internet Explorer</a></div>
    </div>
</noscript>
</head>

<body>
	<div id="wrapper">
        
    <header id="one" role="banner">
    		<h1><a name="o2page">Cevaho Creation</a></h1>
            
            <img src="images/cevaho_creation_logo.jpg" alt="CEVAHO CREATION logo" width="900" height="143" id="logo">
            <div id="headerfirst">
                <ul>
                	<li><a href="index.html" title="vers la page d'accueil">Accueil</a></li>
                    <li><a href="plansite.html" title="vers le plan du site">Plan du site</a></li>
                    <li><a href="http://www.linkedin.com/pub/cedric-van-hove/26/509/992" title="vers la page Linkedin" target="blank">Linkedin</a></li>
                </ul>
             </div>
			 <nav role="navigation">
            	<ul>
                	<li id="nav_wb"><a href="web.html" title="page : projet web">Web</a></li>
                	<li id="nav_pr"><a href="print.html" title="page : projet print">Print</a></li>
                    <li id="nav_rf"><a href="references.html" title="page : références">R&#233;f&#233;rences</a></li>
                    <li id="nav_ap"><a href="apropos.html" title="page : à propos de Cevaho">&#192; propos de Cevaho</a></li>
                    <li id="nav_ct"><a href="#" title="page : contact">Contact</a></li>
                </ul>
      </nav>
    </header>

    <section id="method" class="minheght1">
                <header>
                        <h2 id="h_contact">Contactez-moi</h2>
                </header>
                <div id="first_conta">
                    <div id="conta_block"> 
                   		<h3>Cédric Van Hove</h3>
                        <ul>
                        	<li>Mobile :</li>
                        	<li class="f14">0032 474 260 349</li> 
                        	<li>email :</li>
                        	<li class="f14"><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#99;&#101;&#118;&#97;&#104;&#111;&#46;&#99;&#114;&#101;&#97;&#116;&#105;&#111;&#110;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;">&#99;&#101;&#118;&#97;&#104;&#111;&#46;&#99;&#114;&#101;&#97;&#116;&#105;&#111;&#110;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;</a></li>
                        </ul>
                    </div>
                    <p>Si vous desirez un nouveau site,<br />
                        un nouveau design,<br />
                        une révison de votre référencement, <br />
                        une nouvelle image de marque,<br /><br />
                        je serais honoré de travailler avec vous</p>
      			</div>
                <div id="messageneg" class="<?php if(isset($alerte)){ //si verif_adresse est juste, affiche pas autrement affiche via les classes renvoyant aux css
                                    if(verif_null($nom) && verif_null($sujet) && verif_null($demande) && verif_spam($spam)&& verif_adresse($adresse)){echo $style_msgbck;}else {echo $stole_msgbck;}}?>">Veuillez saisir correctement<br /> tous les champs</div>
        <div id="messagepos" class="<?php if(isset($alerte)){ //si verif_adresse est false on background en rouge
                                    if(verif_null($nom) && verif_null($sujet) && verif_null($demande) && verif_spam($spam)&& verif_adresse($adresse)){echo $stole_msgbck;}else {echo $style_msgbck;}}?>">Tous les champs sont validés,<br /> le mail est envoyé, Merci</div>
                <div id="second_conta">
                <form action="contact.php" method="post" id="formjs">
        
                        <p><label for="name"><span class="label_clas">Nom :</span>requis</label>
                        <input type="text" name="nom" size="24" maxlength="50" id="name" class="valueVide" 
                        <?php if(isset($alerte)){ //si verif_null est false on background en rouge
                                    if(verif_null($nom)){echo $style_input_blanc;}else {echo $style_input_rouge;}} ?>
                        placeholder="<?php if(isset($alerte)){ echo $nom; }else{ echo 'Inscrivez votre nom ici'; } ?>" autocomplete="off"></p>
                        
                        <p><label for="adresse"><span class="label_clas">Email :</span>requis</label>
                        <input type="email" name="adresse" size="24" maxlength="50" id="adresse" class="valueVide" 
                        <?php if(isset($alerte)){ //si verif_adresse est false on background en rouge
                                    if(verif_adresse($adresse)){echo $style_input_blanc;}else {echo $style_input_rouge;}} ?>
                        placeholder="<?php if(isset($alerte)){ echo $adresse; }else{ echo 'Inscrivez votre email'; } ?>" autocomplete="on"></p> 
                        
                        <p><label for="sujet"><span class="label_clas">Sujet :</span>requis</label>
                        <input type="text" name="sujet" size="24" maxlength="50" id="sujet" class="valueVide" 
						<?php if(isset($alerte)){ //si verif_null est false on background en rouge
                                    if(verif_null($sujet)){echo $style_input_blanc;}else {echo $style_input_rouge;}} ?>
                        placeholder="<?php if(isset($alerte)){ echo $sujet; }else{ echo 'inscrivez le sujet de votre message'; } ?>" autocomplete="off"></p>
                
                        <p id="texta"><span class="p_semble"><span class="label_clas">Message :</span>requis</span><textarea name="demande" cols="36" rows="3" id="demande" 
                        class="text valueVide" placeholder="<?php if(isset($alerte)){ echo $demande; }else{ echo 'Inscrivez votre message ici'; } ?>" 
                        <?php if(isset($alerte)){ if(verif_null($demande)){ echo $style_textarea_blanc; }else { echo $style_textarea_rouge; }} ?> autocomplete="off" ></textarea></p>
                        
                        <p><label for="spam" id="reponss"><span class="label_clas repons">Anti-spam : 5 + 2 =&nbsp;&nbsp;</span>requis</label> 
                        <input type="text" name="spam" size="20" maxlength="15" id="spam" class="valueVide"
                        <?php if(isset($alerte)){ //si verif_spam est false on background en rouge
                                    if(verif_spam($spam)){echo $style_input_blanc;}else {echo $style_input_rouge;}} ?>
                        placeholder="<?php if(isset($alerte)){ echo $spam; }else{ echo 'Inscrivez votre réponse ici'; } ?>" autocomplete="off"></p>
                        
                        <p><input type="submit" name="envoyer" value="Envoyer" id="envoyer"></p>
        			</form>
                </div>
    </section>
    </div>
	<!-- fin div wrapper -->
<footer>
		<div class="center">
		  <h3><a href="http://www.cevaho-creation.be/">2011 &#169; Cevaho Creation</a></h3>
		 <!-- <div id="linko"><a href="#o2page" title="vers le haut de la page">Haut de la page</a></div>-->
	  </div>
</footer>

</body>
</html>
