<?php
include_once "includ/connect.php";
?>

<!DOCTYPE html>
<html>

<body>
    <h1> This site is just for demonstration proposes <br> and should not be used for entering sensitive info </h1>

    <h3> log in </h3>

    <form action="includ/login.php" method="POST">
    <input type="text" name="name" placeholder="user name">
    <br>
    <input type="password" name="password" placeholder="user name">
    <br>
    <button type="submit" name="submit"> log in</button>
    </form>

    <br>
    <br> 

    <h3> sign up </h3>

<form action="includ/signup.php" method="POST">
<input type="text" name="name" placeholder="user name">
<br>
<input type="password" name="password" placeholder="user name">
<br>
<button type="submit" name="submit2"> sign up</button>
</form>

<?php
// sites 

//https://www.geeksforgeeks.org/how-to-convert-array-to-string-in-php/
// https://www.youtube.com/playlist?list=PL0eyrZgxdwhwBToawjm9faF1ixePexft-
// https://www.youtube.com/watch?v=Qq96ZgiY1dY
   

     

    

?>

</body>



</html>