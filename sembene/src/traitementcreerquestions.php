<?php
//var_dump($_POST);exit();


$pdo = new PDO('mysql:dbname=quizz_marieme_sembene;host=localhost','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);



$req=$pdo->prepare('INSERT INTO questions SET intitule=?,point=?,choix=?');
$req->execute([$_POST['questions'],$_POST['pts'],$_POST['typereponse']]);


$req2=$pdo->prepare('SELECT * FROM questions ORDER BY id  DESC LIMIT 1');
$req2->execute([]);
$user=$req2->fetch();


if($_POST['typereponse']=='text'){
    
$req=$pdo->prepare('INSERT INTO reponse SET reponse=?,id_question=?');
$req->execute([$_POST['simpl'],$user->id]);

   
}
if($_POST['typereponse']=='simple'){
    foreach ($_POST['reponse'] as $key ) {
        $req=$pdo->prepare('INSERT INTO reponse SET reponse=?,id_question=?');
        $req->execute([$key,$user->id]);
        
    }
    $req=$pdo->prepare('INSERT INTO bonnereponse SET bonnereponse=?,id_question=?');
        $req->execute([$_POST['vrai'],$user->id]);
       
    }
    if($_POST['typereponse']=='multiple'){
        foreach ($_POST['reponses'] as $key ) {
            $req=$pdo->prepare('INSERT INTO reponse SET reponse=?,id_question=?');
            $req->execute([$key,$user->id]);
            
        }
        foreach ($_POST['vrais'] as  $value) {
            $req=$pdo->prepare('INSERT INTO bonnereponse SET bonnereponse=?,id_question=?');
            $req->execute([$value,$user->id]);
        }
        
           
        }
    
?>
 


