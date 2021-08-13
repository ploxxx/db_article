<?php
      include("connDB/db_connect.php");
    
      echo "<link rel='stylesheet' href='style/style.css'>";
      function search($query){
        $db = new Database ;
        $ser = $db->connect() ;
        $text = "";
        $query = trim($query); 
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
                $text = "<ul class='border'>";
                while ($row = mysqli_fetch_assoc($result)){
                    $text .= '<li><br> Name NEWS :<a href=page.php?id='.$row['Id'].'>'.$row['Name'].'</a><br>'.'Text NEWS : '.$row['Subject'].'<br></li>'; 
                }
            }
        }
        return $text."</ul>";
    }
    echo "<button type='button' style='font-size : 20px'><a href='index.php'>Back</a></button>";
    if (!empty($_POST['query'])) { 
        $search_result = search ($_POST['query']); 
        echo $search_result; 
    }
      
?>