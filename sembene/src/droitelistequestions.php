<div class="fenetre2">
				
                <div class="fond">
                    <div class="haut">
                        <form method="POST" action="">
                            <div class="tete">Nombre de questions/jeu</div>
                            <input class="field" type="text" name="" id="">
                            <input type="submit" value="OK" class="ok" name="" id="">
                        </form>
                    </div>
                    <div class="">
                    <?php

$file="questions"    ;
$mareme=file_get_contents("../asset/json/".$file.".json");
$mareme=json_decode($mareme, true);

$max=$_GET['page']*5;
$min=$max-5;
$page=$_GET['page'];

for($i=$min;$i<$max;$i++){
  
    if(array_key_exists($i,$mareme)){

if($mareme[$i]['typereponse']=='text'){
    echo $mareme[$i]['questions']."<br>";
    $x=$mareme[$i]['simpl'];
echo "<input type='text' value='$x' style=' border : solid 2px' readonly>";
}
if($mareme[$i]['typereponse']=='simple'){

$k=1;
    echo $mareme[$i]['questions']."<br>";
    foreach($mareme[$i]['reponse']as $key){
      
        
        if($mareme[$i]['vrais']==$k){
            echo "<input type='radio' name='sembene' style=' width:25px; height:30px;' checked disabled >";
            echo $key."<br><br>";
        }else {
            echo "<input type='radio' name='sembene' style=' width:25px; height:30px;'  disabled >";
            echo $key."<br><br>";
        }
       $k++;

    }
    

}
if($mareme[$i]['typereponse']=='multiple'){

    echo $mareme[$i]['questions']."<br>";
    $o=0;  
    $k=1; 
     foreach($mareme[$i]['reponse']as $key){
        $yt=$mareme[$i]['vrais'];
        $babs=false;
foreach($yt as $moi){
    if($moi==$k){
        $babs=true;
    }
}
        if($babs==true){
            echo "<input type='checkbox' name='sembene' style=' width:25px; height:30px;' checked disabled >";
            echo $key."<br><br>";
        }
        else{
            echo "<input type='checkbox name='sembene' style=' width:25px; height:30px;'  disabled >";
            echo $key."<br><br>";
        }
        
       $k++;

    }

}
}
}


    ?>
                    </div>
                 <button type="submit" class="suivant" ><a href="menu.php?sembene=ListeQuestions&page=<?=$page+1?>">suivant</a> </button>
    <button type="submit" class="precedent" ><a href="menu.php?sembene=ListeQuestions&page=<?=$page-1?>">precedent</a> </button>
                </div>
                            </div>
                           
