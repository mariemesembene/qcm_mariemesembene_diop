<?php

function array_sort($array,$on,$order=SORT_ASC)
{
    $new_array = array();
    $sortable_array = array();

    if (count($array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) { 
                        $sortable_array[$k] = $v2;
                    }
                }
            } else {
                $sortable_array[$k] = $v;
            }
        }

        switch ($order) {
            case SORT_ASC:
                asort($sortable_array);
                break;
            case SORT_DESC:
                arsort($sortable_array);
                break;
        }

        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
        }
    }

    return $new_array;
}
function getData($file="inscription"){
    $data=file_get_contents("../asset/json/".$file.".json");
    $data=json_decode($data, true);
    return $data;
  }
$liste = getdata();
    $liste = array_sort($liste, 'score', SORT_DESC);
    foreach ($liste as $key => $value) {
        if ($value['profil'] == 'joueur') {
            $tableau[]=$value;
        }
    }
    $_SESSION['tableau']= $tableau;
    
    $nbrePage=ceil(sizeof($tableau)/4);
    if(!isset($_GET['page'])){
        $page=1;    
    }else{
        $page=$_GET['page'];    
    }
    $min=($page-1)*4; $max=$min+4;
    if($page<=1){
        $page=1;
        $prec='none';
    }elseif($page>$nbrePage){
        $page=$nbrePage;
    }
    if($page==$nbrePage){
        $max=sizeof($tableau);
        $next='none'; 
    }    
?><div class="fenetre2">
			<div class="fonde">
    <div class="teter">LISTE DES JOUEURS PAR SCORE</div>
    <div class="encadre">
<table>
<thead> 
       <tr>
           <th>nom</th >
           <th>prenom</th>
           <th>score</th>
           
       </tr>
   </thead>

 <tbody > 
 <?PHP
 for($i=$min; $i<$max;$i++)
 {
   ?> 
       <tr>
           <td><?=$_SESSION['tableau'][$i]['nom'] ;?></td>
           <td><?=$_SESSION['tableau'][$i]['prenom']; ?></td>
           <td><?=$_SESSION['tableau'][$i]['score'] ;?></td>
           
           
       </tr>
       <?php
    }
    ?>   
           <tbody>
      
</table>       
    </div>
    <button type="submit" class="suivant" ><a href="menu.php?sembene=ListeJoueurs&page=<?=$page+1?>">suivant</a> </button>
    <button type="submit" class="precedent" ><a href="menu.php?sembene=ListeJoueurs&page=<?=$page-1?>">precedent</a> </button>
</div>
	</div>