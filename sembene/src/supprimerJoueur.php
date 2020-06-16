<?php
require_once('db.php');
$req1=$pdo->prepare('DELETE FROM score WHERE id_utilisateur=?');
$req1->execute([$_POST['delete']]);

$req=$pdo->prepare('DELETE FROM utilisateurs WHERE id_utilisateur=?');
//$role='joueur';
$req->execute([$_POST['delete']]);
?>