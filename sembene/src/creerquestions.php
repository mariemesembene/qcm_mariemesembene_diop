<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href=" ../asset/css/pagedeconnexion.css">
    <title>creer questions</title>
  </head>
  <body>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 

  <div class="container" >
  <ul id="form-messages"></ul>

  <div class="mx-auto text_center " style="color:white,width:55%;height:620px">
  <img src="../asset/img/logo-QuizzSA.png"  style="width:35px"class="">
  <div class="container" style="background: rgba(124, 58, 58, 0.46);" >
  <nav class="navbar navbar-expand-lg" style="margin-top:-100px;margin-left:100px;">
  <div id="btn-submit" class="btn btn-primary  "style="margin:50px; margin-top:60px;background:   linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A;width: 130px;
height: 52px;
" ><a class="navbar-brand" href="listequestions.php" style="color: #000000;font-family: Rasa;  ">Listquestion</a></div>
<div id="btn-submit" class="btn btn-primary"style=" margin:50px;margin-top:60px;background:   linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A;width: 130px;
height: 52px;
" ><a class="navbar-brand" href="creeradmin.php" style="color: #000000;font-family: Rasa; ">Creer admin</a></div>
<div id="btn-submit" class="btn btn-primary"style="margin:50px; margin-top:60px;background:   linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A;width: 130px;
height: 52px;
" ><a class="navbar-brand" href="listejoueurs.php" style="color: #000000;font-family: Rasa; ">Liste joueur</a></div>
<div id="btn-submit" class="btn btn-primary"style="margin:50px; margin-top:60px;background:   linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A;width: 130px;
height: 52px;
" ><a class="navbar-brand" style="color: #000000;font-family: Rasa; " href=creerquestions.php>Creequestions</a></div>
  
  </nav>
  <div class="container col-md-10 mr-2" id='creradm'style="
background: rgba(124, 58, 58, 0.49); margin-top:-35px; height:500px">

<form id="form" method="post">


			<textarea  name="questions" cols="50px" rows="7px" style="margin-top:20px; margin-left:140px;background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), rgba(163, 102, 102, 0.17);"id="textarea-questions">
				
			</textarea>
      <div class="type-reponse" style="margin-top:30px; margin-left:170px">
      
				<label>Type de réponses</label>
				<select name="typereponse"  style="background:linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A;width: 135px;
height: 52px;" id="select" >
					<option value="simple">Choix SIMPLE</option>
					<option value="text" >Choix TExT</option>
					<option value="multiple">Choix Multiple</option>
				</select>
     
			</div>
      <div id="generer">
      <input type="number" name="pts" type="submit" id="nb-points" class="btn btn-primary"style="margin-left:10px; margin-top:-295px;background:   linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A;width: 75px;
height: 52px;
" >

</div>

		<button type='button' name="sembene" id="SEMBENE" style="margin-left:440px;margin-top:-150px;
background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #000000;" >+</button><br>
	

 <div> <button type='submit'  id="btn&" name='envoyer' style="background:linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A;width: 135px;
height: 52px; margin-top:100px;" >enregistrer</button></div>

</div>

			</div>

   
  
  
 
  </div>
  
  
  
 
  <input type="number" type="submit" id="nb-points" class="btn btn-primary"style="margin-left:10px; margin-top:-795px;background:   linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A;width: 75px;
height: 52px;
" >


</div>


 <button type="submit"  id="btn-submit" class="btn btn-primary"style="margin-left:150px; margin-top:-200px;background:   linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A;width: 95px;
height: 32px;
" ><a href="../pagedeconnexion.php"><div class="" style="font-family: Rasa; font-size: 16px;  margin-left:-9px;color: #000000;
" >deconnexion</div></button></a>
<div class="" style=" margin-top:-480px; margin-left:170px;font-family: Rasa; "> NBR QST/JEU</div>
</form>

</div>
</div>

    
  </body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
$('#form').submit(
    function(e){
      e.preventDefault();
      alert('okkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk')
        $.ajax({
    url:"traitementcreerquestions.php",  
      method:"POST",  
      data:$(this).serialize(),
     dataType: "JSON",
      success:function(data){
        
       }

})
    })
</script>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) 
    }
  }; 
</script>
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
				
				var newInput='<div id="miel'+newDiv+'"><input type="text" id="news" style="background:linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A; border: solid 5PX;" name="reponse[]"><br><input value="'+i+'" type="radio" id="radio1"  style=" witdh=25px height=30PX" name="vrai">	<button type="button" id="mareme"  onclick="marema('+newDiv+')">x</button></div>'
				ajout.innerHTML=ajout.innerHTML+newInput;
			}
			if (choise.value=='multiple') {
				var newInput='<div id="miel'+newDiv+'"><input type="text"id="news" style=" background:linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A;border: solid 5PX;" name="reponses[]"><br><input value="'+i+'" type="checkbox"id="radio1"style=" witdh=25px height=30PX" name="vrais['+i+']">	<button type="button" id="mareme" onclick="marema('+newDiv+')"  >x</button></div>'
				ajout.innerHTML=ajout.innerHTML+newInput;
			}
			if (choise.value=='text') {
				
				var newInput1='<div id="mielle"><input type="text"id="news" style="background:linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A; border: solid 5PX;" name="simpl"></div>'
				ajout.innerHTML=ajout.innerHTML+newInput1;
			}

	};
		function marema(plus){
			
			var suppre=document.getElementById('miel'+plus);
				suppre.remove();
		}
		
		</script>
