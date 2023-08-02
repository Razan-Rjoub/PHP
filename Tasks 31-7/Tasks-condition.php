<?php
$leapYear = 2400;
if ($leapYear % 4 == 0 && $leapYear % 100 != 0) {
    echo "This year is a leap year<br>";
} else if ($leapYear % 400 == 0) {
    echo "This year is a leap year<br>";
} else {
    echo "This year is not  a leap year<br>";
}

$temp = 19;
if ($temp >= 20) {
    echo "It is a summer time<br>";
} else {
    echo "It is a winter time<br>";
}
$num1 = 15;
$num2 = 15;
if ($num1 == $num2) {
    print((($num1 + $num2) * 3) . '<br>');
} else {
    print(($num1 + $num2) . '<br>');
}
if ($num1 + $num2 == 30) {
    print(($num1 + $num2) . '<br>');
} else {
    print('false <br>');
}
$num=50;
if($num>=20&&$num<=50){
    echo 'true <br>';
}
else{echo 'false<br>';}
$array=[5,10,9];
if($array[0]>$array[1]&&$array[0]>$array[2]){
    echo $array[0].'<br>';
}
if($array[1]>$array[0]&&$array[1]>$array[2]){
    print ($array[1].'<br>');
}
if($array[2]>$array[1]&&$array[2]>$array[0]){
    print ($array[2].'<br>');
}

$age=17;
if($age>=18){
    echo'is eligible to vote<br>';

}
else {echo 'is no eligible to vote<br>';}

$checkNum=0;
if($checkNum>0){
    echo'positive<br>';
}
else if($checkNum<0){
    echo'negative<br>';
}
else{echo'zero<br>';}
$number1=10;
$number2=3;
$operation='*';
switch($operation){
    case '+':echo $number1+$number2.'<br>';
    break;
    case '-':echo $number1-$number2.'<br>';
    break;
    case '*':echo $number1*$number2.'<br>';
    break;
    case '/':echo $number1/$number2.'<br>';
    break;
}
$gradeArr=[80,86,95,80,90,99,79,62,89];
$length=count($gradeArr);
$sum=0;
$Avg;
for($i=0;$i<$length;$i++){
$sum+=$gradeArr[$i];
}
$Avg=$sum/$length;
if($Avg<=100&&$Avg>90){
    echo 'A<br>';
}
else if($Avg>80&&$Avg<=90){
    echo 'B<br>';
}
else if($Avg<70&&$Avg>=80){
    echo 'C<br>';
}
else if($Avg<60&&$Avg>=70){
    echo 'D<br>';
}
else echo 'F<br>';
?>