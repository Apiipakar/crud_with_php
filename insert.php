<?php 
// include database.
include "connection.php";
if(isset($_POST['fullnameText']) && isset($_POST['usernameText']) && isset($_POST['emailText']) && isset($_POST['passwordText'])){

    $fullname = $_POST['fullnameText'];
    $username = $_POST['usernameText'];
    $email = $_POST['emailText'];
    $password = $_POST['passwordText'];
    // echo  $fullname . "<br />". $username . "<br />". $email . "<br />" . $password . "<br />";
    $sql = "insert into user(fullname,username,email,password) values('$fullname','$username','$email','$password')";
    // Execute query
if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?>