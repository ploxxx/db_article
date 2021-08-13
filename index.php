<?php
    include("db_connect.php");
    $db = new Database ;
    $db->connect();
    $arr1 = [] ;
    $arr1 = $db->getInformation();

    for($i = 0 ; $i < count($arr1) ; $i++){
        echo 'Name NEWS : '.$arr1[$i]['Name'].'<br>'.'Text NEWS : '.$arr1[$i]['Text'].'<br>'; 
    }
    //var_dump($obj);
    //print_r($arr1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
    <script type="text/javascript">
    </script>
</head>
<body>
    <h1></h1>
</body>
</html>