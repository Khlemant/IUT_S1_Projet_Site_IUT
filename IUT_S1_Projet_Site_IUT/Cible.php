<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Titre</title>
        <link rel="stylesheet" type="text/css" href="acceuil.css"/>
        <link rel="stylesheet" type="text/css" href="ppps1jpo.css"/>
        <link rel="stylesheet" href="aos.css" />
        <link rel="stylesheet" href="cible.css">
    </head>
    <body>
        <nav>
        <p><img id="logo"  src="1200px-Université_de_Bourgogne_Logo.svg.png" alt="Logo de l'université de Bourgogne" title="Logo de l'université de Bourgogne"/></p>
        <ul>
            <li>    <a class="geo" href="PageAccueilJpo.html">Accueil</a> </li>
            <li>    <a class="geo" href="présentation.html"> Presentation</a>  </li>
            <li>    <a class="geo" href="filière.html">Contenu des cours</a>   </li>
            <li>    <a class="geo" href="plan.html">Plan de l'IUT</a>   </li>
            <li>    <a class="geo" href="vie campus.html">Vie au Campus</a>   </li>
            <li>    <a class="geo" href="covid.html">Mesures Covid</a>   </li>
            <li>    <a class="geo" id="active7" href="formulaire.php">Réservation</a>   </li>
        </ul>
    </nav>
        </br></br></br>
        <h1 class="titrehoraires">Votre inscription</h1>
        <h2>Votre inscription à la journée des portes ouvertes a bien été prise en compte.</h2>
        <p>Voici le récapitulatif de votre inscription : </p>
        <?php
             
                $bdd = new PDO("mysql:host=localhost;dbname=localdb;charset=utf8", 'root', '');
        
        
                    if (isset ($_POST ['g-recaptcha-response']) &&! empty ($_POST ['g-recaptcha-response'])) 
                    {$secret = '6Lds6CgaAAAAAIyXdNHlO5qMmWDiGiQujXLwDbQI';
                    $verifyResponse = file_get_contents ('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST ['g-recaptcha-response']);
                    $responseData = json_decode ($verifyResponse);
                    if ($responseData-> success) 
                        
                    {    
                    echo $_POST['Nom'];
                        echo "<br/>";
                    echo $_POST['Prenom'];
                        echo "<br/>";
                    echo $_POST['tel'];
                        echo "<br/>";
                    echo $_POST['mail'];
                        echo "<br/>";
                    echo $_POST['heure'] ;
                
                try {
                    $requete = $bdd->prepare("INSERT INTO `visiteur`(`nomVis`, `prenomVis`, `telVis`, `mailVis`, `heureVis`) VALUES (?,?,?,?,?)");
                    $requete->execute(array($_POST['Nom'], $_POST['Prenom'], $_POST['tel'], $_POST['mail'], $_POST['heure']));
                }
                catch(EXCEPTION $e) { 
                    die('Erreur : '.$e->getMessage());
                }}
                    else { $invalide = 'Captcha non valide, veuillez essayer à nouveau'; echo $invalide; }}
                    else { $invalide = 'Captcha non valide, veuillez essayer à nouveau'; echo $invalide; }
                    
              ?>
        </br>
        </br>
        </br>
        </br>
        <a href="PageAccueilJpo.html">Cliquez ici pour un retour à la page d'accueil</a>

<div class="navEnd">
        <ul>
            <li><a class="lienNavEnd" href="Contact.html">Coordonnées et contact</a></li>
            <li><a class="lienNavEnd" href="localisation.html">Nous localiser</a></li>
            <li><a class="lienNavEnd" href="Mentions_légales.html">Mentions légales</a></li>
            <li><a class="lienNavEnd" href="confidentialité.html">Charte de confidentialité</a></li>
        </ul>
    </div>

    <script src="aos.js"></script>
    <script>
      AOS.init();
    </script>
    </body>
</html>