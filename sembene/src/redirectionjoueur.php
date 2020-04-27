<?PHP
session_start();
?>
	

<html>
<head>
<title>page joueur</title>
<link rel="stylesheet" href="../asset/css/redirectionjoueur.css">
</head>
<div class="cadre">
    <div class="enteter">
        <div class="joueurr">
            <div class="images"><img id="img"  src="../asset/img/babacar/<?php echo $_SESSION["joueur"]["FILE"];?>"> </div>
           
            <div class="nomm"> <?php echo $_SESSION["joueur"]["prenom"]; echo $_SESSION["joueur"]["nom"]; ?> </div> 
        </div>
        <div class="titler"> BIENVENUE SUR LA PLATEFORME DE JEU QUIZZ<br>JOUEZ ET TESTEZ VOTRE NIVEAU DE CULTURE GÉNÉRALE </div>
        <a href="deconnexion.php"> <button type="submit" class="buttonn">Déconnexion</button></a>
    </div>
    <div class="fonds">
        <div class="question"></div>
        <div class="score">
            <a class="top" href="topscore.php"> <div class="topp"> Top scores </div> </a>
            <a class="top" href="monscore.php"> <div class="tope"> Mon meilleur score </div> </a>
            <div class="liste">
                <?php
                 
                ?>
            </div>
        </div>
    </div>
</div>
</html>