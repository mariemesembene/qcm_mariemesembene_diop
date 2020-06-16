 

<?php

$pdo = new PDO('mysql:dbname=quizz_marieme_sembene;host=localhost','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

$avatar=$_FILES['file']['name'];
$file_tmp_name = $_FILES['file']['tmp_name'];

$file_dest='../asset/img/'.$avatar;
$extension_autorises=array('.jpeg','.png','.JPEG','.PNG');
if(move_uploaded_file($file_tmp_name,$file_dest)){
    echo"ok";
}

$req=$pdo->prepare('INSERT INTO utilisateurs SET nom=?,prenom=?,login=?,avatar=?,role=?,password=?');
$req->execute([$_POST['nom'],$_POST['prenom'],$_POST['login'],$avatar,$_POST['role'],$_POST['password']]);

?>



