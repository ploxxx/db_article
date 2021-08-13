<?php
    include("connDB/db_connect.php");
    $db = new Database ;
    $ser = $db->connect() ;
    $page = $_GET['id'];
    $query = mysqli_query($ser,"SELECT * FROM article WHERE Id='$page'");
    $res = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Page</title>
</head>
<body>
    <button type='button' style='font-size : 20px'><a href='index.php'>Back</a></button>
    <h1><?php echo 'Name NEWS : '.$res['Name']?><h1>
    <h2><?php echo 'Subject NEWS : '.$res['Subject']?><h2> 
    <h3><?php echo 'Text NEWS : '.$res['Text']?><h3>
</body>
</html>