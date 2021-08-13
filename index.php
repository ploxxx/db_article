<?php
    include("connDB/db_connect.php");
    $db = new Database ;
    $db->connect();
    $arr1 = [] ;
    $arr1 = $db->getInformation();
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
        <input type="search" name="query" placeholder="Поиск" required>
        <button type="submit">Найти</button> 
    </form>
    <ul class="border">
        <?php for($i = 0 ; $i < count($arr1) ; $i++){ ?>
        <li><?php  echo '<br> Name NEWS :<a href=page.php?id='.$arr1[$i]['Id'].'>'.$arr1[$i]['Name'].'</a><br>'.'Subject NEWS : '.$arr1[$i]['Subject'].'<br>';?> </li>
        <?php } ?>
    </ul>
</body>
</html>