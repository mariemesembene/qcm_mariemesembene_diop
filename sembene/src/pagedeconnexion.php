
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagedeconnexion</title>
    <link rel="stylesheet" href=" ../asset/css/integration.css">
    <script defer src="../asset/js/pagedeconnexion.js"></script>

</head>
<div id ="fond1" >
		<div id="logo">
			
		</div>
		<div>
		<p align="center" style="position:relative;display:block; color: white;font-size:35px;margin: auto;top:20px;"><marquee>Le plaisir de jouer</marquee></p>
	</div>
</div>
<div class="couleur">

<div class="interrogation"  > 
<div class="interface">
 <div class="loginform">
    <h1> login Form</h1>
    </div>
    <div id='erreur'></div>
    <form action="" method="post" id="form"> 
        <label for="login"></label><br>
        <img src="../asset/img/icones/ic-login.png">
        <input type="text" ID="login"  name="login" placeholder="login" required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          ><br>

        <label for="password"></label><br>
        <img src="../asset/img/icones/ic-password"/>
        <input type="password"  name="password" ID="pwd" placeholder="password" required> 
        <input type="submit" name="connexion" value="Connexion" id="connexion">
       <a  href="isncription.php"id="texte" >  s'inscrire pour jouer?</a>

   </form>

</div>

    
</div>
</div>

</html>

<?php
session_start();

if (isset($_POST['connexion'])){
   $fichier = '../asset/json/inscription.json';
                $js = file_get_contents($fichier); 
                $js = json_decode($js,true);
                if (!(empty($_POST['login'] && $_POST['password'])))
                {
                foreach($js as $mareme){
                  
                    if($mareme['login']==$_POST['login'] && $mareme['password']==$_POST['password']){
if($mareme['profil']=='joueur'){
    $_SESSION['joueur']=$mareme;
    header("Location:redirectionjoueur.php")  ;

}

                    }
                }
        
                   
                    
            }else{
                echo"veuillez remplir tous les champs";
            }
        }else{
            echo"veuillez remplir rous les champs";
        }
        if (isset($_POST['connexion'])){
            $fichier = '../asset/json/admin.json';
                         $js = file_get_contents($fichier); 
                         $js = json_decode($js,true);
                         if (!(empty($_POST['login'] && $_POST['password'])))
                         {
                         foreach($js as $mareme){
                             if($mareme['login']==$_POST['login'] && $mareme['password']==$_POST['password']){
         if($mareme['profil']=='admin'){
             $_SESSION['admin']=$mareme;
             header("Location:menu.php?sembene=ListeQuestions")  ;
         
         }
         
                             }
                         }
                 
                            
                             
                     }else{
                         echo"veuillez remplir tous les champs";
                     }
                 }else{
                     echo"veuillez remplir rous les champs";
                 }
         
           
    
    

?>