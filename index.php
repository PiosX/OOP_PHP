<?php
    include "includes/autoloader.inc.php";
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
    <?php
        $testObj = new UsersView();
        $testObj->showUser("Pios");
    
        $testObj2 = new UsersContr();
        //$testObj2->createUser("Marie","annn@gmail.com", "password12");

        $testObj3 = new Person("Pios", "brown", "20");
        echo $testObj3->getName("Macc");
        unset($testObj3);
    ?>
</body>
</html>