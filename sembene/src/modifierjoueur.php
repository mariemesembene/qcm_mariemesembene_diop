<?php
//var_dump($_POST);
require_once('db.php');


    $req=$pdo->prepare('SELECT * FROM utilisateurs WHERE id_utilisateur=? AND role=?');
    $role='joueur';
    $req->execute([$_POST['recup'],$role]);
    $user=$req->fetch();
    echo json_encode($user);




?>