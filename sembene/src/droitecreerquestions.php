<?php

	if (!empty($_POST)) {
		$tab=[];
		unset($_POST['envoyer']);
		$tab=$_POST;
		
if($_POST['nb-points']>=1){


	

	$data=file_get_contents('../asset/json/questions.json');
	$data=json_decode($data,true);	

	$data[]=$tab;
	$data=json_encode($data) ;
	
	
	file_put_contents('../asset/json/questions.json',$data);



}else{ 	echo"veuillez saisir un nombre >=1";
 }
				
			}

		

?>
<div class="fenetre2">
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet"  href="style.css">
	<script src="../asset/js/questions.js"></script>
	<title>Menu Creation questions</title>
</head>
<div id ="erreur"></div>
<body>

<div class="header-container-creation-question">
		PARAMETRER VOTRE QUESTION
	</div>

<div class="container-creation-question">
	<div class="form-creation-question">
		<form id="form" method="post">
			<div>
			<label id="label-questions">Questions</label>
			<textarea  name="questions" cols="50px" rows="7px" id="textarea-questions" required>
				
			</textarea>
			</div>

			<div class="nb-point">
				<label for="nb-points">Nbre de Points</label>
				<input type="number" name="nb-points" id="nb-points" required>

			<div class="type-reponse">
				<label>Type de réponses</label>
				<select name="typereponse"  id="select" required >
					<option  value="simple">Choix SIMPLE</option>
					<option value="text" >Choix TExT</option>
					<option value="multiple">Choix Multiple</option>
				</select>

			</div>

		<button type='button' id="SEMBENE"required  >+</button><br>
		<button type='submit' id="btn&" name='envoyer' >enregistrer</button>

	
</div>

<div id="generer">

</div>

</body>
</html>
	</div>

			<script>
			var newDiv=0;
			var reponse=0;
			var i=0;
		var choise=document.getElementById('select');
		var ajout=document.getElementById('generer');
		var bnt=document.getElementById('SEMBENE');
		bnt.addEventListener('click',recuperation);
		function recuperation(e){
			e.preventDefault();
			newDiv++;
            reponse++;
            i++;
			
			if (choise.value=='simple') {
				
				var newInput='<div id="miel'+newDiv+'"><input type="text" id="news" style=" border: solid 5PX;" name="reponse['+i+']"><br><input value="'+i+'" type="radio" id="radio1"  style=" witdh=25px height=30PX" name="vrais">	<button type="button" id="mareme"  onclick="marema('+newDiv+')">x</button></div>'
				ajout.innerHTML=ajout.innerHTML+newInput;
			}
			if (choise.value=='multiple') {
				var newInput='<div id="miel'+newDiv+'"><input type="text"id="news" style=" border: solid 5PX;" name="reponse['+i+']"><br><input value="'+i+'" type="checkbox"id="radio1"style=" witdh=25px height=30PX" name="vrais['+i+']">	<button type="button" id="mareme" onclick="marema('+newDiv+')"  >x</button></div>'
				ajout.innerHTML=ajout.innerHTML+newInput;
			}
			if (choise.value=='text') {
				
				var newInput1='<div id="mielle"><input type="text"id="news" style=" border: solid 5PX;" name="simpl"></div>'
				ajout.innerHTML=ajout.innerHTML+newInput1;
			}

		};
		function marema(plus){
			
			var suppre=document.getElementById('miel'+plus);
				suppre.remove();
		}
		
		</script>