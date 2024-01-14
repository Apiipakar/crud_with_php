<?php

include('connection.php');
if(isset($_POST['updateUser'])){
    $id = $_POST['userId'];
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
  
    // $sql = "update user
    //         SET fullname = '$fullname', 
    //             username = '$username',
    //             email = '$email',
    //             password = '$password'
    //         WHERE id = $id";
    $sql = "update user set fullname = '$fullname', username='$username', email='$email', password='$password' where id = $id";
    $conn->query($sql);

    if ($conn->query($sql) === TRUE) {
        echo "user updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
   
   
}

?>