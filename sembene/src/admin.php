
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href=" ../asset/css/pagedeconnexion.css">
    <title>page Admin</title>
    
  </head>
  <body>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
<div id='sems'></div>
<div id="cree"></div>
<div id="babacar"></div>
<div id="mareme"></div>
  <div class="container" >
  <ul id="form-messages"></ul>
  <div class="mx-auto text_center " style="background-color:  rgba(124, 58, 58, 0.7); color:white,width:55%;height:620px">
  <img src="../asset/img/logo-QuizzSA.png"  style="width:35px"class="">
 
<h1 class="text-center mb-3 "style="font-size: 36px;;font-family: Redressed;line-height: 42px;">PRENOM NOM</h1>
  
<div class="IMG"><img class="rounded-circle" src="../asset/img/IMG-20171231-WA0079.jpg "  id="output" style="width:80px ;margin-top:0px;margin-left:510px;"class=""></div>
 <a href="../pagedeconnexion.php"><button type="submit" id="btn-submit" class="btn btn-primary"style="font-family: Redressed;
font-style: normal;
font-weight: normal;
font-size: 26px;
line-height: 42px;
margin-left:850px;
margin-top:-300px;

color: #000000; background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), rgba(163, 102, 102, 0.17);" >DECONNEXON</button></a> 
 <div id="listequestions"class="mt-5"style="
background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A; width:100% ; margin-top:50px; height:50px ;"><div class="inscription"style="font-family: Redressed;
font-style: normal;
font-weight: normal;
font-size: 38px;
line-height: 56px;

color: #000000;"> LISTE QUESTIONS</div></div>
 <div id="creeradmin"class="mt-5"style="
background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A; width:100% ;mt-5; height:50px ;"><div class="inscription"style="font-family: Redressed;
font-style: normal;
font-weight: normal;
font-size: 38px;
line-height: 56px;

color: #000000;"> CREER ADMIN</div></div>
 <div id="listejoueurs"class="mt-5"style="
background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A; width:100% ;magin-top:50px; height:50px ;"><div class="inscription" style="font-family: Redressed;
font-style: normal;
font-weight: normal;
font-size: 38px;
line-height: 56px;

color: #000000;"> LISTE JOUEURS </div></div>
  <div id="creerquestions" class="mt-5"style="
background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A; width:100% ;magin-top:50px; height:50px ;"><div class="inscription"style="font-family: Redressed;

font-size: 38px;
line-height: 56px;

color: #000000;"> CREER QUESTIONS</div></div>
</body>
</html>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) 
    }
  }; 
</script><script>
    $( "#creerquestions" ).click (function(){
      $("#sems").load("creerquestions.php");
      $(".container").hide()
    }
    ) 
    $( "#creeradmin" ).click (function(){
      alert('rrrr')
      $("#cree").load("creeradmin.php");
      $(".container").hide()
    }
    ) 
    $( "#listequestions" ).click (function(){
      $("#babacar").load("listequestions.php");
      $(".container").hide()
    }
    ) 
    $( "#listejoueurs" ).click (function(){
      alert('ggg')
      $("#mareme").load("listejoueurs.php");
      $(".container").hide()
    }
    ) 
    </script>