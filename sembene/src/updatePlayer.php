<?php
require_once('db.php');
var_dump($_POST);
   // echo json_encode($_POST);
    $avatar='joueur.png';
    $role='joueur';
    $req=$pdo->prepare('UPDATE utilisateurs SET nom=?,prenom=?,login=?,avatar=?,role=?,password=? WHERE id_utilisateur=?');
    $req->execute([$_POST['nom'],$_POST['prenom'],$_POST['login'],$avatar,$role,$_POST['password'],$_POST['idJ']]);

?>