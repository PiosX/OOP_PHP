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
        $testObj = new Test();
        $testObj->setUsersStmt("Master", "nikki@op.pl", "amazing123");
    ?>
</body>
</html>