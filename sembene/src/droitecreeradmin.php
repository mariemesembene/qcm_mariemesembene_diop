<div class="fenetre2">
			<div class="fond">
            <div class="fonde1">
                <div class="fonde2">
                    <div class="fonde3">
                        <div class="fonde4">
                            <div class="formulaire">
                                <div class="inscrit">S'INSCRIRE</div>
                                <div class="petit"> Pour tester votre niveau de culture générale </div>
                                <form method="post" action="" class="form" enctype="multipart/form-data">
                                    <div class="label"> Prénom </div>
                                    <div class="champ"> <input type="text" name="prenom" required> </div>
                                    <div class="label"> Nom </div>
                                    <div class="champ"> <input type="text" name="nom" required> </div>
                                    <div class="label"> Login </div>
                                    <div class="champ"> <input type="text"name="login" required> </div>
                                    <div class="label"> Password </div>
                                    <div class="champs"> <input type="password" name="password" placeholder="********" required> </div>
                                    <div class="label"> Confirmer Password </div>
                                    <div class="champs"> <input type="password"name="conf_pass" placeholder="********" required> </div>
                                    <div class="texteavatar"></div>
                                    <div class="fichier">
                                        <label for="file" class="label-file"></label> <br>
										<div class="creer"> <button type="submit" name="cree_compte" > Créer compte </button>           <input name="file" accept="image/*" onchange="loadFile(event)" id="file" class="choisir" type="file" ></br>
                                 </div>
                                     
								
									</div>
                                    <?php


	if (isset($_POST['cree_compte'])) {
		$mareme=array();
		
		$mareme['prenom']=$_POST['prenom'];
		$mareme['nom']=$_POST['nom'];
		$mareme['password']=$_POST['password'];
		$mareme['conf_pass']=$_POST['conf_pass'];
		$mareme['login']=$_POST['login'];
		$mareme['profil']='admin';

		$mareme['FILE']=$_FILES['file']['name'];
	
		$data=file_get_contents('../asset/json/inscription.json');
				$data=json_decode($data,true);
				$data[]=$mareme;
				$data=json_encode($data) ;
				file_put_contents('../asset/json/inscription.json',$data);
				
				
		if($_POST['password']==$_POST['conf_pass']){
			if(preg_match("#^[A-Za-z '-]+$#",$_POST['prenom'],$_POST['nom'])){
				$data=file_get_contents('../asset/json/inscription.json');
				$data=json_decode($data,true);
				$data[]=$mareme;
				$data=json_encode($data) ;
				file_put_contents('../asset/json/inscription.json',$data);
				header("location:../src/pageaccueiladmin.php");
			}
			else{
				echo"veuillez commencer par une lettre majuscule ";
			}
			
			
		}else{
			echo" veuillez confirmer le meme mot de passe";
		}
	
		
	}

?><script>
var loadFile = function(event) {
  var output = document.getElementById('output');
  output.src = URL.createObjectURL(event.target.files[0]);
  output.onload = function() {
    URL.revokeObjectURL(output.src) // free memory
  }
};
</script>