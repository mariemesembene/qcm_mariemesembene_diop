<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href=" ../asset/css/pagedeconnexion.css">
    <title>page inscription</title>
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

  <div class="mx-auto text_center " style="background-color:  rgba(124, 58, 58, 0.7); color:white,width:55%;height:620px">
  <img src="../asset/img/logo-QuizzSA.png"  style="width:35px"class="">
  <div class="IMG"><img class="rounded-circle" src="../asset/img/IMG-20171231-WA0079.jpg "  id="output" style="width:80px ;margin-top:-60px;margin-left:1000px;"class=""></div>
  <div id='success_message'></div>


  <form class="col-md-8 form-group mx-auto  "  enctype="multipart/form-data" method='POST'id='form'>
<div class="form-control"style="
background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A; width:100% ;magin-top=-70px; height:50px ;"  ><div class="inscription"> INSCRIPTION</div></div>
  <input type="text" placeholder="PRENOM" id='prenom' name="prenom" class="form-control mb-5 "  style="
background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A;  width:50%; margin-top:50px ;height:90%" img src="../asset/img/icones/ic-login.png"  style="width:35px"class="">
 
 <input type="text" id='nom' class="form-control  "  img src="../asset/img/icones/ic-password.png" placeholder="NOM " name="nom" style="
background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A;  margin-top:50px ; width:50%; ;height:90%">
 <input type="text" id='login'   class="form-control  "  img src="../asset/img/icones/ic-password.png" placeholder="LOGIN " name="login" style="
background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A;  margin-top:50px ; width:50%; ;height:90%">
 <input type="password"  id='password' class="form-control  "  img src="../asset/img/icones/ic-password.png" placeholder="PASSWORD " name="password" style="
background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A; margin-top:50px ;  width:50%; ;height:90%">
<input type="password" id='confirm'  class="form-control  "  img src="../asset/img/icones/ic-password.png" placeholder="CONF-PASSWORD " name="conf_password" style="
background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A; margin-top:50px ;  width:50%; ;height:90%">


<input  type="file" name="file" id='file'  onchange="loadFile(event) " accept="image/*"style="  margin-top:10px;background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), rgba(163, 102, 102, 0.17); ">
 
 

  <button type="submit" id="btn-submit" class="btn btn-primary"style="margin-top:-90px; margin-left:500px;background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), rgba(163, 102, 102, 0.17);" >CREER-COMPTE</button> 
</form>

</div>
</div>

    
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
    var role="joueur";
    
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
/*

const form = {

  prenom:$('#prenom'),
  nom:$('#nom'),  
            login:$('#login'),
            password: $('#password'),
            conf_password: $('#conf_password'),
            avatar: $('#avatar'),
            submit: $('#btn-submit'),
            messages: $('#form-messages')
        };

        form.submit.click( () => {
            const request = new XMLHttpRequest();

            request.onload = () => {
                let responseObject = null;

                try {
                    responseObject = JSON.parse(request.responseText);
                } catch (e) {
                    console.error(e);
                }

                if (responseObject) { 
                    handleResponse(responseObject);
                }
            };

            const requestData = `nom=${form.nom.val()}prenom=${form.prenom.val()}avatar=${form.avatar.val()}&password=${form.password.val()}`;

            request.open('post', 'traitementinscription.php');
            request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            request.send(requestData);
        });

        function handleResponse (responseObject) {
            if (responseObject.ok) {
               // location.href = 'dashboard.html';
            } else {
                while (form.messages.firstChild) {
                    form.messages.removeChild(form.messages.firstChild);
                }

                responseObject.messages.forEach((message) => {
                    const li = document.createElement('li');
                    li.textContent = message;
                    form.messages.append(li);
                });

                form.messages.show();
            }
        }*/
</script>

