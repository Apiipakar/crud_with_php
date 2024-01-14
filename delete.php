<?php

include('connection.php');
if(isset($_POST['deleteUser'])){
    $id = $_POST['userId'];
    try{
        $sql = "delete from user where id = $id";
        $conn->query($sql);
        echo "user deleted successfully";
    }catch(Exception $e){
        echo "Error: " . $e->getMessage();
    }
    
}



?>