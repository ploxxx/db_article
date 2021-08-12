<?php
    include("db_connect.php");
    $db = new Database ;
    $db->connect();
    print_r($db->getInformation()) ;
    /*$link = mysqli_connect('localhost','root','');
    if(!mysqli_select_db($link,'article_db')) 
        die(mysqli_error());
    $res = mysqli_query($link,"SELECT Name,Text FROM article");
    $row = mysqli_fetch_array($res);
    echo $row['Text']; */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    <h1>hello,world!!!</h1>
</body>
</html>