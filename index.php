<?php
    include("db_connect.php");
    $db = new Database ;
    $db->connect();
    $arr1 = [] ;
    $arr1 = $db->getInformation();

  /* for($i = 0 ; $i < count($arr1) ; $i++){
        echo '<br> Name NEWS : '.$arr1[$i]['Name'].'____'.'Text NEWS : '.$arr1[$i]['Text'].'<br>'; 
    }*/
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
    <form name="search" method="post" action="search.php">
        <input type="search" name="query" placeholder="Поиск">
        <button type="submit">Найти</button> 
    </form>
    <ul>
        <?php for($i = 0 ; $i < count($arr1) ; $i++){ ?>
        <li><?php  echo '<br> Name NEWS :<a href=page.php?id='.$arr1[$i]['Id'].'>'.$arr1[$i]['Name'].'</a><br>'.'Text NEWS : '.$arr1[$i]['Subject'].'<br>';?> </li>
        <?php } ?>
    </ul>
</body>
</html>