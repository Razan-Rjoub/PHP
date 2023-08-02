<?php
$sum=0;
for($i=0;$i<=30;$i++){
    $sum+=$i;

}
echo $sum.'<br>';
for($i=1;$i<=5;$i++){
    for($j=1;$j<=5;$j++){
        if($i==$j){
            echo $i;
        }
        else echo 0;
    }
    echo '<br>';
}
echo '<br>';
$num=5;
$factorial=1;
for($i=$num;$i>0;$i--){
    $factorial*= $i;
}
echo $factorial;

?>