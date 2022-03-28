<?php
// start session so you can acses the logedin var in other pages
session_start(); 
include_once "connect.php";

    // get the vars from the form 
$name = mysqli_real_escape_string($_POST['name']);
$password = mysqli_real_escape_string($_POST['password']);

    //make session var to track if they are logged in 
$_SESSION['logedin'] = false; 

    // see if the user is logged in 
$sql = "SELECT * FROM users;";
    $res = mysqli_query($conn, $sql); 
    $resCheck = mysqli_num_rows($res);
    if($resCheck > 0){
        while($row = mysqli_fetch_assoc($res)){
            if( $row["username"] == $name ){
                    // check the hash 
                if( password_verify($password, $row["userpassword"]) == 1){ 
                    $_SESSION['logedin'] = true;
                    break; 
                } 
            }
        }
        
        
    }
        // go to apropriat page based on if the password an user name match database 
    if($_SESSION['logedin']){
        header("Location: ../pressButton.php");
    }else{
        header("Location: ../index.php");
    }
    


?>