<?php

include_once "connect.php";

    // get the vars from the form 
$name = mysqli_real_escape_string($_POST['name']);
$password = mysqli_real_escape_string($_POST['password']);
    // use hash 
$password = password_hash($password, PASSWORD_DEFAULT); 

    // add new user to database 
$sql = "INSERT INTO users( username, userpassword, score) VALUES ( '$name', '$password', 0);";

    // test query for dev perpuses 
if(mysqli_query($conn, $sql)){
echo "it workd";
} else{
echo "ERROR: " . mysqli_error($conn);
} 

header("Location: ../index.php");   
?>