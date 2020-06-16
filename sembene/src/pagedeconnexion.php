
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href=" ../asset/css/pagedeconnexion.css">
    <title>page de connexion</title>
    
  </head>
  <body>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
<div id='ins'></div>
  <div class="container" >
  <ul id="form-messages"></ul>
  <div class="mx-auto text_center " style="background-color:  rgba(124, 58, 58, 0.7); color:white,width:55%;height:620px">
  <img src="asset/img/logo-QuizzSA.png"  style="width:35px"class="">
  <div id=""  class="col-md-8 form-group mx-auto  ">
<h1 class="text-center mb-3 "style="font-family: Roboto;">se connecter</h1>
  <input type="text" placeholder="LOGIN" id="login"  name="login"class="form-control mb-5 "  style="
background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A;  width:100%; margin-top:200px ;height:90%" img src="../asset/img/icones/ic-login.png"  style="width:35px"class="">
  <input type="password"class="form-control  "  img src="../asset/img/icones/ic-password.png"id="password" placeholder="PASSWORD" name="password" style="
background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #7C3A3A;  width:100%; ;height:90%">

  
 
  <a href="./src/admin.php "><button type="submit" id="btn-submit" class="btn btn-primary"style=" margin-top:60px;background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), rgba(163, 102, 102, 0.17);
" >connexion</button></a>
 <button type="button" id="texte" class="btn btn-primary"style="margin-top:60px; margin-left:500px;background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), rgba(163, 102, 102, 0.17);" >insription</button>
</div>

</div>
</div>

    
  </body>

</html>
<script>
    $( "#texte" ).click( function(){
      $('.container').hide()
      $('#ins').load('src/pageinscription.php')

    } );


const form = {

            
          
            login:$('#login'),
            password: $('#password'),
          
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

            const requestData = `login=${form.login.val()}&password=${form.password.val()}`;

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
        }
</script>

