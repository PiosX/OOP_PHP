<?php
    declare(strict_types = 1);
    require ("../vendor/autoload.php");

    $oper = $_POST['oper'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $calc = new \Classes\abc\Calc($oper,(int)$num1,(int)$num2);

    try
    {
        echo $calc->calculate();
    }catch(TypeError $e)
    {
        echo $e->getMessage();
    }
?>