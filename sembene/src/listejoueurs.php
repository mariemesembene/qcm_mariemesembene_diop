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
  <div id="btn-submit" class="btn btn-primary  "style="margin:50px; margin-top:60px;background:   linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A;width: 130px;
height: 52px;
" ><a class="navbar-brand" href="listequestions.php" style="color: #000000;font-family: Rasa;  ">Listquestion</a></div>
<div id="btn-submit" class="btn btn-primary"style=" margin:50px;margin-top:60px;background:   linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A;width: 130px;
height: 52px;" >
<a class="navbar-brand" href="creeradmin.php" style="color: #000000;font-family: Rasa; ">Creer admin</a></div>
<div id="btn-submit" class="btn btn-primary"style="margin:50px; margin-top:60px;background:   linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A;width: 130px;
height: 52px;" >
<a class="navbar-brand" href="listejoueurs.php" style="color: #000000;font-family: Rasa; ">Liste joueur</a></div>
<div id="btn-submit" class="btn btn-primary"style="margin:50px; margin-top:60px;background:   linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A;width: 130px;
height: 52px;" >
<a class="navbar-brand" style="color: #000000;font-family: Rasa; " href=creerquestions.php>Creequestions</a></div>
  
  </nav>
  <div class="container col-md-10 mr-2" id='mareme'style="
background: rgba(124, 58, 58, 0.49); margin-top:-35px; height:500px">

<div class="form-control"style="
background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A; width:100% ;magin-top=-90px; height:50px ;"  ><div class="inscription"> joueurs</div></div>
  
  
  </form>
  
  <div class="col-md-6 mx-auto table table-striped">
<table id="table">
<thead>
    <tr>
      <th scope="col">NOM</th>
      <th scope="col">PRENOM</th>
      <th scope="col">SCORE</th>
      <th scope="col">MODIFIER</th>
      <th scope="col">SUPPRIMER</th>
    </tr>
  </thead>
</table>
</div>
 
  </div>
  
  
  

</div>


<a href="../pagedeconnexion.php"><button type="submit" id="btn-submit" class="btn btn-primary"style="margin-left:10px; margin-top:-100px;background:   linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A;width: 95px;
height: 32px;
" >
 <div class="" style="font-family: Rasa; font-size: 16px;margin-top:-11px;  margin-left:-9px;color: #000000;
" >deconnexion</div></button></a>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
  Launch static backdrop modal
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="" alt="">
      <form action=""id='modifjoueur' enctype="multipart/form-data">
      <img class="rounded-circle" src="../asset/img/IMG-20171231-WA0079.jpg " width='100px'height='100px'  id="output"class="">
      
      <input type="text" class='form-control' name="prenom" id="prenom">
      <input type="text" class='form-control'  name="nom" id="nom">
      <input type="text"  class='form-control' name="login" id="login">
      <input type="text" class='form-control'  name="password" id="password">
      <input type="text" class='form-control'  name="confirm" id="confirm">
      <input type="text"  id='idJ' name='idJ'>
      <input  type="file" name="file" id='file'  onchange="loadFile(event) " accept="image/*"style="  margin-top:10px;background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), rgba(163, 102, 102, 0.17); ">
      <button class='btn btn-primary' type='submit'>Modifier</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
$("#modifjoueur").submit(function(e){
e.preventDefault()
var fd = new FormData();
    var files = $('#file')[0].files[0];
    var nom=$('#nom').val();
    var prenom=$('#prenom').val();
    var login=$('#login').val();
    var password=$('#password').val();
    var confirm=$('#confirm').val();
    var idJ=$('#idJ').val();
    var role="joueur";
    
    fd.append('file',files);
    fd.append('nom',nom);
    fd.append('prenom',prenom);
    fd.append('login',login);
    fd.append('password',password);    
    fd.append('confirm',confirm);
    fd.append('role',role);
    fd.append('idJ',idJ);
$.ajax({
  url:"updatePlayer.php",
  method :'POST',
  data:fd,
  contentType: false,
    processData: false,
  success:function(data){
    console.log(data)
  }
})
})
listeJoueurs()
    function listeJoueurs(){
 
        var b='e'
        $.ajax({
    url:"traitementListeJoueurs.php",  
      method:"POST",  
      data: b,
     dataType: "JSON",
      success:function(data){
       console.log(data)
       for(let i=0;i<data.length;i++){
         var tr=document.createElement('tr')
         var td=document.createElement('td')
         var td1=document.createElement('td')
         var td2=document.createElement('td')
         var td3=document.createElement('td')
         var td4=document.createElement('td')
         var modifier=document.createElement("button")
         modifier.setAttribute('type','button')
         modifier.setAttribute('data-toggle','modal')
         modifier.setAttribute('data-target','#staticBackdrop')
        
         modifier.setAttribute('onclick','modifier(this)')
         modifier.setAttribute('class','btn btn-success modifi')
         modifier.setAttribute('id',data[i].id_utilisateur)
         var supprimer=document.createElement("button")
         supprimer.setAttribute('type','button')
         supprimer.setAttribute('class','btn btn-danger suppri')
         supprimer.setAttribute('onclick','supprimer(this)')
         supprimer.setAttribute('id',data[i].id_utilisateur)
         
         supprimer.innerText='Supprimer'
         modifier.innerText='Modifier'
         td.innerText=data[i].prenom
         td1.innerText=data[i].nom
         td2.innerText=data[i].score
         td3.append(modifier)
         td4.append(supprimer)
         tr.append(td)
         tr.append(td1)
         tr.append(td2)
         tr.append(td3)
         tr.append(td4)
         $('#table').append(tr)
        
       }
       }

})

}
function supprimer(e){
  f= e.getAttribute('id')  
  alert(f)
  if (confirm("Supprimer le joueur?")) {
    $.ajax({
    url:"supprimerJoueur.php",
 method:"POST" ,
 data:{delete:f},
 dataType:"JSON",
 success:function(data){

 }
  })
} else {
  txt = "You pressed Cancel!";
}
  
}


function modifier(e){
 f= e.getAttribute('id')
$.ajax({
 url:"modifierjoueur.php",
 method:"POST" ,
 data:{recup:f},
 dataType:"JSON",
 success:function(data){
   $("#nom").attr('value',data.nom)
   $("#idJ").attr('value',data.id_utilisateur)
   $("#prenom").attr('value',data.prenom)
   $("#password").attr('value',data.password)
   $("#confirm").attr('value',data.password)
   $("#login").attr('value',data.login)
   console.log(data)
 }

})
}

    </script>

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
</script>
