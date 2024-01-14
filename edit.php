<?php

include('connection.php');
if(isset($_POST['updateUser'])){
    $id = $_POST['userId'];
    $sql = "select * from user where id = $id";
    $result = $conn->query($sql); 
    $data = [];
    if($result->num_rows > 0){
       $row = $result->fetch_assoc();
       $data = json_encode($row);
       echo $data;
    }
    else {
        echo "Theres is nodataFound";
    }
}



?>