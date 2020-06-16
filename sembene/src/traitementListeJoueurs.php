<?php
$pdo = new PDO('mysql:dbname=quizz_marieme_sembene;host=localhost','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
$req = $pdo->prepare('SELECT * FROM utilisateurs,score WHERE role=? AND utilisateurs.id_utilisateur=score.id_utilisateur AND score.id_score=(SELECT id_score FROM score WHERE utilisateurs.id_utilisateur= score.id_utilisateur ORDER BY score DESC LIMIT 1) ORDER BY score DESC ');

$role="joueur";
$req ->execute([$role]);
$user = $req->fetchAll();


echo json_encode($user); ?>

