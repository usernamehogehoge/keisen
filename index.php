<?php
$a=array(1,2,3,1,1,2,1);
//数分リピート
for($i=0;$i<count($a);$i++){
    $hoge="";
    for($k=1;$k<$a[$i];$k++){
        $start=false;
        for($j=$i+1;$j<count($a);$j++){
            if($a[$j]<$k){
                break;
            }
            if($a[$j]==$k){
                $start=true;
                break;
            }
        }
        if($start){
            $hoge.= "┃";
        }else{
            $hoge.= " ";
        }
    }
    $fin=false;
    for($j=$i+1;$j<count($a);$j++){
        if($a[$i]>$a[$j]){
            break;
        }
        if($a[$i]==$a[$j]){
            $fin=true;
        }
    }
    if($fin){
        $hoge.= "┣";
    }else{
        $hoge.=  "┗";
    }
    echo " ".$hoge."hogehoge\n";
}
?>
