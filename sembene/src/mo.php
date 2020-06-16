<?php
require_once('db.php');
if($_POST['choix']=="text"){
$req=$pdo->prepare( "UPDATE questions SET intitule=?, point=?,choix=? WHERE id=? ");
$req->execute([$_POST['intitule'],$_POST['pts'],$_POST['choix'],$_POST['id']]);
$req2=$pdo->prepare( "UPDATE reponse SET reponse=? WHERE id=?  ");
$req2->execute([$_POST['reponse'],$_POST['id_reponse']]);

}
if($_POST['choix']=="simple"){
    var_dump($_POST);
    $req=$pdo->prepare( "UPDATE questions SET intitule=?, point=?,choix=? WHERE id=? ");
    $req->execute([$_POST['intitule'],$_POST['pts'],$_POST['choix'],$_POST['id']]);

    for( $i=0;$i<count($_POST['reponse']);$i++){
         $req2=$pdo->prepare( "UPDATE reponse SET reponse=? WHERE id=?  ");
    $req2->execute([$_POST['reponse'][$i],$_POST['idR'][$i]]); 
    }
    $req=$pdo->prepare( "UPDATE bonnereponse SET bonnereponse=?  WHERE id_question=? ");
    $req->execute([$_POST['bonne'],$_POST['id']]);
 
    
    }
    if($_POST['choix']=="multiple"){
        var_dump($_POST);
        $req=$pdo->prepare( "UPDATE questions SET intitule=?, point=?,choix=? WHERE id=? ");
        $req->execute([$_POST['intitule'],$_POST['pts'],$_POST['choix'],$_POST['id']]);
    
        for( $i=0;$i<count($_POST['reponse']);$i++){
             $req2=$pdo->prepare( "UPDATE reponse SET reponse=? WHERE id=?  ");
        $req2->execute([$_POST['reponse'][$i],$_POST['idR'][$i]]); 
        }
        $req=$pdo->prepare( "DELETE FROM  bonnereponse  WHERE id_question=? ");
        $req->execute([$_POST['id']]);
        foreach ($_POST['bonne'] as $key ) {
            $req=$pdo->prepare( "INSERT INTO  bonnereponse SET bonnereponse=?  , id_question=? ");
        $req->execute([$key,$_POST['id']]);
     
        }
    }
?>