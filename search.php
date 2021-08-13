<?php
      include("db_connect.php");
    

      function search($query){
        $db = new Database ;
        $ser = $db->connect() ;
        $query = trim($query); 
      //  $query = mysql_real_escape_string($query);
        $query = htmlspecialchars($query); 
        if(!empty($query)){
            if(strlen($query) < 3){
                $text = '<p>The request is too short</p>';
            }
            else if (strlen($query) > 30){
                $text = '<p>The request is too long</p>';
            }
            else{
                $q =   "SELECT * FROM article WHERE Name LIKE '%$query%' OR
                        Subject LIKE '%$query%' OR Text LIKE '%$query%'";
                $result = mysqli_query($ser,$q);
                while ($row = mysqli_fetch_assoc($result)){
                    $text = '<br> Name NEWS : '.$row['Name'].'<br> Subject NEWS : '.$row['Subject'].'<br>'.'Text NEWS : '.$row['Text']; 

                }
            }
        }
        else{
            $text = '<p>Задан пустой поисковый запрос.</p>';
        }
        return $text ;
    }
    if (!empty($_POST['query'])) { 
        $search_result = search ($_POST['query']); 
        echo $search_result; 
    }
      
?>