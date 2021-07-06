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
    require_once("classes/dbh.class.php");
    require_once("classes/test.class.php");
    require_once("classes/users.calss.php");
    require_once("classes/userscontr.class.php");
    require_once("classes/usersview.class.php");
        $testObj = new UsersView();
        $testObj->showUser("Pios");
    
        $testObj2 = new UsersContr();
        $testObj2->createUser("Marie","annn@gmail.com", "password12");
    ?>
</body>
</html>