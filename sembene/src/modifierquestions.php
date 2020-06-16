<?php
require_once('db.php');
$req=$pdo->prepare("SELECT *FROM questions   WHERE id=? " );
$req->execute([$_POST['id']]);
$questions=$req->fetch();
if($questions->choix=="text"){
    $req2=$pdo->prepare("SELECT *FROM reponse   WHERE id_question=? " );
$req2->execute([$_POST['id']]);
$questions2=$req2->fetch();
$modif="";
$modif.="<input type='text' hidden name='id'  value='$questions->id'><br>";
$modif.="<input type='text' name='intitule' class='form-control' value='$questions->intitule'><br>";
$modif.="<input type='number' name='pts' class='form-control' value='$questions->point'><br>";
$modif.="<input type='text' name='choix' class='form-control' value='$questions->choix'><br>";
$modif.="<input type='text' name='reponse' class='form-control' value='$questions2->reponse'><br>";
$modif.="<input type='text'hidden name='id_reponse' class='form-control' value='$questions2->id'><br>";
$modif.="<button class='btn btn-success' name='submit'type='submit'>modifier</button>";
echo $modif;
}

if($questions->choix=="simple"){
    $req2=$pdo->prepare("SELECT * FROM reponse  WHERE id_question=? " );
$req2->execute([$_POST['id']]);
$questions2=$req2->fetchAll();
$modif='';
$modif.="<input type='text' hidden name='id'  value='$questions->id'><br>";
$modif.="<input type='text' name='intitule' class='form-control' value='$questions->intitule'><br>";
$modif.="<input type='number' name='pts' class='form-control' value='$questions->point'><br>";
$modif.="<input type='text' name='choix' class='form-control' value='$questions->choix'><br>";
$req3=$pdo->prepare("SELECT * FROM bonnereponse  WHERE id_question=? " );
$req3->execute([$_POST['id']]);
$questions3=$req3->fetch();
$j=1;
foreach ($questions2 as $key) {
if($j==$questions3->bonnereponse){
    $modif.="<input type='text' name='reponse[]' class='form-control' value='$key->reponse'>";
$modif.="<input type='radio' name='bonne' checked value='$j'> <br>";
$modif.="<input type='hidden' name='idR[]' class='form-control' value='$key->id'><br>";
}else{
    $modif.="<input type='text' name='reponse[]' class='form-control' value='$key->reponse'>";
    $modif.="<input type='radio' name='bonne'   value='$j'> <br>";
    $modif.="<input type='text'hidden name='idR[]' class='form-control' value='$key->id'><br>";
}
   $j++;
}
$modif.="<button class='btn btn-success' name='submit'type='submit'>modifier</button>";
echo $modif;
}


if($questions->choix=="multiple"){
    $req2=$pdo->prepare("SELECT * FROM reponse  WHERE id_question=? " );
$req2->execute([$_POST['id']]);
$questions2=$req2->fetchAll();
$modif="<input type='text' hidden name='id'  value='$questions->id'><br>";
$modif.="<input type='text' name='intitule' class='form-control' value='$questions->intitule'><br>";
$modif.="<input type='number' name='pts' class='form-control' value='$questions->point'><br>";
$modif.="<input type='text' name='choix' class='form-control' value='$questions->choix'><br>";
$req3=$pdo->prepare("SELECT * FROM bonnereponse  WHERE id_question=? " );
$req3->execute([$_POST['id']]);
$questions3=$req3->fetchAll();
$j=1;
foreach ($questions2 as $key) {
    $non=false;
    foreach ($questions3 as $keys) {
        if($j==$keys->bonnereponse){
            $non=true;
        }
    }
if($non==true){
    $modif.="<input type='text' name='reponse[]' class='form-control' value='$key->reponse'>";
$modif.="<input type='checkbox' name='bonne[]' checked value='$j'> <br>";
$modif.="<input type='hidden' name='idR[]' class='form-control' value='$key->id'><br>";

}else{
    $modif.="<input type='text' name='reponse[]' class='form-control' value='$key->reponse'>";
    $modif.="<input type='checkbox' name='bonne[]'   value='$j'> <br>";
    $modif.="<input type='hidden' name='idR[]' class='form-control' value='$key->id'><br>";
}
   $j++;
}
$modif.="<button class='btn btn-success' name='submit'type='submit'>modifier</button>";
echo $modif;
}

?>