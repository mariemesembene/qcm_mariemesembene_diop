<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href=" ../asset/css/pagedeconnexion.css">
    <title>creeradmin</title>
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
 <a href="listequestions.php"> <div id='' class="btn btn-primary  "style="margin:50px; margin-top:60px;background:   linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A;width: 130px;
height: 52px;" ><a href="listequestions.php" class="navbar-brand"  style="color: #000000;font-family: Rasa;  ">Listquestion</a></div></a>



<a href="creeradmin.php"><div id='' class="btn btn-primary" id=""style=" margin:50px;margin-top:60px;background:   linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A;width: 130px;
height: 52px;" ><a  href="creeradmin.php"class="navbar-brand" style="color: #000000;font-family: Rasa; ">Creer admin</a></div></a>




<a href="listejoueurs.php"><div id="" class="btn btn-primary"style="margin:50px; margin-top:60px;background:   linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A;width: 130px;
height: 52px;
" ><a class="navbar-brand"  href="listejoueurs.php" style="color: #000000;font-family: Rasa; ">Liste joueur</a></div></a>


<a href="creerquestions.php"><div id="" class="btn btn-primary"style="margin:50px; margin-top:60px;background:   linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A;width: 130px;
height: 52px;" ><a class="navbar-brand"href="creerquestions.php" style="color: #000000;font-family: Rasa; " >Creequestions</a></div></a>
  
  </nav>
  <div class="container col-md-10 mr-2" id="creeradmin"style="
background: rgba(124, 58, 58, 0.49); margin-top:-35px; height:500px">
<form action="" method="post" id="form">
<div class="form-control"style="
background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A; width:100% ;magin-top=-90px; height:50px ;"  ><div class="inscription"> INSCRIPTION</div></div>

   <input type="text" placeholder="PRENOM" id="prenom" class="form-control mb-5 "  style="
background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A;  width:60%; margin-top:50px ;height:7%" img src="../asset/img/icones/ic-login.png"  style="width:35px"class="">
 
 <input type="text"  class="form-control  "  img src="../asset/img/icones/ic-password.png" placeholder="NOM " id="nom" style="
background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A;  margin-top:50px ; width:60%; ;height:7%">
 <input type="text"  class="form-control  "  img src="../asset/img/icones/ic-password.png" placeholder="LOGIN " id="login" style="
background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A;  margin-top:50px ; width:60%; ;height:7%">
 <input type="password"  class="form-control  "  img src="../asset/img/icones/ic-password.png" placeholder="PASSWORD " id="password" style="
background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A; margin-top:50px ;  width:60%; ;height:7%">
<input type="password"  class="form-control  "  img src="../asset/img/icones/ic-password.png" placeholder="CONF-PASSWORD " id="confirm" style="
background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A; margin-top:50px ;  width:60%; ;height:7%">


<input  type="file" name="file" id='file'  onchange="loadFile(event) " accept="image/*"style="  margin-top:10px;background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), rgba(163, 102, 102, 0.17); ">
 
 

  <button type="submit" id="btn-submit" class="btn btn-primary"style="margin-top:-100px; margin-left:540px;background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), rgba(163, 102, 102, 0.17);" >CREER-COMPTE</button> 
  <div class="IMG"><img class="rounded-circle" src="../asset/img/IMG-20171231-WA0079.jpg "  id="output" style="width:80px; margin-top:-800px; margin-left:700px ;"></div>
  </form>

 
  </div>
  
  
  
 
  <button type="submit" id="btn-submit" class="btn btn-primary"style="margin-left:10px; margin-top:-795px;background:   linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A;width: 75px;
height: 52px;
" >

 <div class="" style="font-family: Rasa; font-size: 16px;  margin-left:-11px;color: #000000;
" >5</div></button>

</div>


<a href="../pagedeconnexion.php"> <button type="submit" id="btn-submit" class="btn btn-primary"style="margin-left:10px; margin-top:-100px;background:   linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A;width: 95px;
height: 32px;
" >

 <div class="" style="font-family: Rasa; font-size: 16px;margin-top:-11px;  margin-left:-9px;color: #000000;
" >deconnexion</div></button></a>
<div class="" style=" margin-top:-480px;font-family: Rasa; "> NBR QST/JEU</div>
</div>
</div>

    
  </body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<!-- <script>
$('#Listquestion').click(
  function(){
    //$('#creeradmin').text('')
    $('#creeradmin').load('listequestions.php')
  
  }
 // 
)
$('#Creeradmin').click(
  function(){
    //$('#creeradmin').text('')
    $('#creeradmin').load('creerquestions.php')
  
  }
 // 
)
</script> -->
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
$(document).ready(function () { 
$('#form').submit(function(e){
     e.preventDefault();
   
    var fd = new FormData();
    var files = $('#file')[0].files[0];
    var nom=$('#nom').val();
    var prenom=$('#prenom').val();
    var login=$('#login').val();
    var password=$('#password').val();
    var confirm=$('#confirm').val();
var role="admin";
    
    fd.append('file',files);
    fd.append('nom',nom);
    fd.append('prenom',prenom);
    fd.append('login',login);
    fd.append('password',password);    
    fd.append('confirm',confirm);
    fd.append('role',role);
      
     $.ajax({  
      url:"traitementinscription.php",  
      method:"POST",  
      data:fd,  
      contentType: false,
        processData: false,
      success:function(data){  
       
        $("form").trigger("reset");  
           $('#success_message').fadeIn().html(data);  
           setTimeout(function(){  
                $('#success_message').fadeOut("Slow");  
           }, 2000);  
      }  
 });  
 
})

})
</script>