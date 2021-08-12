<?php
    include("db_connect.php");
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
    <title>Page</title>
</head>
<body>
    <h1><?php echo '<br> Name NEWS : '.$res['Name'].'<br> Subject NEWS : '.$res['Subject'].'<br>'.'Text NEWS : '.$res['Text']; ?><h1>
</body>
</html>