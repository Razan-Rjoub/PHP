<?php 
session_start();
if(isset($_GET['submit']))
{
    $op= $_GET['op'];
    $_SESSION['operation'] = $op;
    $num1= $_GET['num1'];
    $num2= $_GET['num2'];

    $_SESSION['number1'] = $num1;
    $_SESSION['number2'] = $num2;
    
switch($_SESSION['operation'])
{
    case '+' : 
        $result = $num1 + $num2;
        $_SESSION['result'] = $result;
        header("location:calculat.php");
        break;

    case '-' :
        $result = $num1 - $num2;
        $_SESSION['result'] = $result;
        header("location:calculat.php");
        break;
        
        
    case '*' : 
        $result = $num1 * $num2;
        $_SESSION['result'] = $result;
        header("location:calculat.php");
        break;

    case '/' : 
        if($num2 !=0 )
        {
        $result = $num1 / $num2;
        $_SESSION['result'] = $result;
        header("location:calculat.php");
        }
        else 
        {
            $result = "Can not divide by 0";
            $_SESSION['result'] = $result;
            header("location:calculat.php");
        }
        break;
}}
?>