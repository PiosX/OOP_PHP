<?php
    declare(strict_types = 1);
    require_once ("vendor/autoload.php");
    use \Classes\def\UsersContr;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
</head>
<body>
    <form action="#" method="post">
        <p>Calculator</p>
        <input type="number" name="num1" placeholder="First number">
        <select name="oper">
            <option value="add">Addition</option>
            <option value="sub">Substraction</option>
            <option value="div">Division</option>
            <option value="mul">Multiplication</option>
        </select>
        <input type="number" name="num2" placeholder="Second number">
        <input type="submit" name="submit" value="Calculate">
    </form>
    <?php
        $testObj2 = new UsersContr();
        $testObj2->createUser("Marie","annn@gmail.com", "password12");

        $testObj3 = new \Classes\def\Person("Pios", "brown", "20");
        echo $testObj3->getName("Macc");
        unset($testObj3);

        echo \Classes\def\Person::$drinkingAge;
        \Classes\def\PERSON::setDrinkingAge(18);
        echo \Classes\def\Person::$drinkingAge;

        require_once("includes/calc.inc.php");
    /*
        $testObj4 = new Person();
        try
        {
            $testObj4->setName(2);
            echo $testObj4->getName();
        }catch(TypeError $e)
        {
            echo $e->getMessage();
        }
    */
        
    ?>
</body>
</html>