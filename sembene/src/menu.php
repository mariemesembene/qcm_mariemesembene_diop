
<?php
session_start();
if(empty($_SESSION['admin'])){
    header('location:pagedeconnexion.php');
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>PAGES accueil admin</title>
	<link rel="stylesheet" href="../asset/css/menu.css">
</head>
<body>
	<div id ="fond1" >
		<div id="logo">
			
		</div>
		<div>
		<p align="center" style="position:relative;display:block; color: white;font-size:35px;margin: auto;top:20px;"><marquee>Le plaisir de jouer</marquee></p>
	</div>
</div>
	<div id="container">
		<div id ="fond2">
		
			<div id="cquizz">
                CREEZ ET PARAMETREZ VOS QUIZZ
                <div id="deconnexion">
                       <a href="deconnexion.php"><input type="button" value="deconnexion"> </a> 
                    
                </div>
				
				</div>
				<div class="fenetre1">
				<div class="avatar">
				
			<div class="nom">	<?php echo $_SESSION["admin"]["prenom"]; echo $_SESSION["admin"]["nom"]; ?></div >
				<div class="cercle">
				<img id="img"  src="../asset/img/babacar/<?php echo $_SESSION["admin"]["FILE"];?>">
				</div>
				</div>
				<div class="liste">
				<a href="menu.php?PAGES=ListeQuestions&p=1"><div class="listequestions">Liste Questions
						<img src="../asset/img/icones/ic-liste.png" >
					</div></a>	
					<a href="menu.php?PAGES=CreerAdmin">	<div class="creeradmin">Creer Admin
					<img src="../asset/img/icones/ic-ajout.png">
					</div></a>
					
					<a href="menu.php?PAGES=ListeJoueurs">	<div class="listejoueurs"> Liste Joueurs
					<img src="../asset/img/icones/ic-liste-active.png">
					</div></a>
					<a href="menu.php?PAGES=CreerQuestions">	<div class="creerquestions">Creer Questions	
					<img src="../asset/img/icones/ic-ajout.png">
					</div></a>
				</div>
				
			</div>
			
			

			</div>
			<div class="">

				<?php
            if (isset($_GET['PAGES'])) {
                if ($_GET['PAGES'] == "ListeQuestions") {
                    include ("droitelistequestions.php");        
                }elseif ($_GET['PAGES'] == "CreerAdmin") {
                    include ("droitecreeradmin.php");
                }elseif($_GET['PAGES'] == "ListeJoueurs") {
                    include ("droitelistejoueurs.php");
                }elseif ($_GET['PAGES'] == "CreerQuestions"){
                    include ("droitecreerquestions.php");
                }
            }
        ?>
		</div>
				

	
</body>
</html>


