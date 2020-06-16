<?php

$pdo = new PDO('mysql:dbname=quizz_marieme_sembene;host=localhost','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

//$req = $pdo->prepare('SELECT id, id_user, MAX(score) AS scoe FROM score GROUP BY id_user ORDER BY score DESC ');
$limit = $_POST['limit'];
    $offset = $_POST['offset'];
    $sql ="
            SELECT * 
            FROM  questions
            LIMIT {$limit} 
            OFFSET {$offset}
    ";
//$req = $pdo->prepare('SELECT * FROM tbl_form LIMIT {$limit} OFFSET {$offset}');
$req = $pdo->prepare($sql);

$reponses=array();
$req ->execute([]);
$user = $req->fetchAll();
foreach($user as $qus){
    if($qus->choix=="text"){
        $text['id']=$qus->id;

        $text['intitule']=$qus->intitule;
        $text['choix']=$qus->choix;

        
        $req = $pdo->prepare('SELECT reponse.reponse FROM reponse WHERE id_question=?');
        $req ->execute([$qus->id]);  
        $repon=$req->fetch();
        $text['reponse']=$repon->reponse;
        $reponses[]=$text;

    }


    if($qus->choix=="simple"){
        $text['id']=$qus->id;

        $text['intitule']=$qus->intitule;
        $text['choix']=$qus->choix;
        $req = $pdo->prepare('SELECT reponse.reponse FROM reponse WHERE id_question=?');
        $req ->execute([$qus->id]);  
        $repon=$req->fetchAll();
        $text['reponse']=array();
        foreach ($repon as $key) {
            $text['reponse'][]=$key;
           

        }
      //  $reponses[]=$text['reponse'];
        $reqs = $pdo->prepare('SELECT bonnereponse.bonnereponse FROM bonnereponse WHERE id_question=?');
        $reqs ->execute([$qus->id]);  
        $repons=$reqs->fetch();
        $text['good']=$repons->bonnereponse;
        $reponses[]=$text;

    }

    if($qus->choix=="multiple"){
        $text=array();
        $text['id']=$qus->id;

        $text['intitule']=$qus->intitule;
        $text['choix']=$qus->choix;
        $req = $pdo->prepare('SELECT reponse.reponse FROM reponse WHERE id_question=?');
        $req ->execute([$qus->id]);  
        $repon=$req->fetchAll();
        $text['reponses']=array();
        foreach ($repon as $key) {
            $text['reponses'][]=$key;
           
        }
        $reqs = $pdo->prepare('SELECT bonnereponse.bonnereponse FROM bonnereponse WHERE id_question=?');
        $reqs ->execute([$qus->id]);  
        $reponss=$reqs->fetchAll();
        $text['goods']=array();
        foreach ($reponss as $keys) {
            $text['goods'][]=$keys;
        }
        $reponses[]=$text;

    }
}

echo json_encode($reponses); ?>