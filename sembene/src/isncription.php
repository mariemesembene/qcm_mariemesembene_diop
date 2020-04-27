<script language='javascript'>
function filegetname(){
	var name=document.getnamefile.file.value;
	location.href="?namefile="+name;
}

</script>
<?php

session_start();
	if (isset($_POST['cree_compte'])) {
		$mareme=array();
		$mareme['prenom']=$_POST['prenom'];
		$mareme['nom']=$_POST['nom'];
		$mareme['password']=$_POST['password'];
		$mareme['conf_pass']=$_POST['conf_pass'];
		$mareme['login']=$_POST['login'];
		$mareme['profil']='joueur';
	

		$mareme['FILE']=$_FILES['file']['name'];
		$file_tmp_name = $_FILES['file']['tmp_name'];

		$file_dest='../asset/img/babacar/'.$mareme['FILE'];
		$extension_autorises=array('.jpeg','.png','.JPEG','.PNG');
		if(move_uploaded_file($file_tmp_name,$file_dest)){
			echo"ok";
		}
		if($_POST['password']==$_POST['conf_pass']){
			if(preg_match("#^[A-Za-z '-]#",$_POST['prenom'])){

				$data=file_get_contents('../asset/json/inscription.json');
				$data=json_decode($data,true);
				foreach($data as $value){
					if(!($mareme['login']==$value['login'])){
						
				$data[]=$mareme;
				$data=json_encode($data) ;
				file_put_contents('../asset/json/inscription.json',$data);
				header("location:../src/pagedeconnexion.php");
			}
	else{
				echo"ce login existe deja";
			}
			
			
				}	
		
	
		
	}else{
		echo"veuillez commencer par une lettre majuscule ";
	}
}else{
	echo" veuillez confirmer le meme mot de passe";
}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Interface d'inscription du joueur</title>
	<link rel="stylesheet" href="../asset/css/inscription.css">
	
	<script src="../asset/js/inscription.js"></script>
</head>
<body> <div id='erreur'></div>

	<div id ="fond1" >
		<div id="logo">
			
		</div>
		<div>
		<p align="center" style="position:relative;display:block; color: white;font-size:35px;margin: auto;top:20px;"><marquee>Le plaisir de jouer</marquee></p>
	</div>
</div>
	<div id="container">
		<div id ="fond2">
			<h1>S'INSCRIRE</h1>
	<p>Pour tester votre niveau de culture générale</p>
			<div id="container_formulaire">
				<form  id='form'enctype="multipart/form-data" method="post" action="" name="getnamefile">
				<label for="prenom">Prenom</label>
				<input type="text" name="prenom" placeholder="Aaaa" style="background-color:#F8F8FF;"id="prenom"  required pattern="^[A-Za-z '-]+$" maxlength="10" ><br><br>
				
				<label for="nom">Nom</label>
				<input type="text" name="nom" placeholder="Aaaa" style="margin-top: 1%;background-color:#F8F8FF;"id="nom" required><br>
				<label for="login">Login</label><br><br>
				
				<input type="text" name="login" placeholder="Bbbb" style="margin-top: 1%;background-color:#F8F8FF;"id="login" required>
				<br>

			<br>
			<label for="password">Password</label>
			<input id="pasword" type="password" name="password" placeholder="aabb" style="margin-top: 1%;background-color:#F8F8FF; border:2px solid skyblue;"required>
			<br><br>
			<label for="conf_pass">Confirmer Password</label>
		<input id='conf' type="password" name="conf_pass" placeholder="Aaaa" style="margin-top: 1%;background-color:#F8F8FF;border:2px solid skyblue;"required>
		<br><br>
		<input  type="file" name="file"  onchange="loadFile(event) " accept="image/*" />		
		
		<img id="output" alt="" src="" class="containerimage">

				
				
			<div>
				<p style="position: absolute;display:block;bottom: 11%;font-size:25px;"></p>
			</div>
				<input  id="submit"type="submit" name="cree_compte" value="Créer un compte" style="background-color:skyblue;margin-top: 1%;">
		
			</div>

			</form>
		</div>
	</div>
	<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) 
    }
  }; 
</script>
</body>
</html>



