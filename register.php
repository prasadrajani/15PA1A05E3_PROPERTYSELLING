<?php 
include "includes/connect.php";
session_start();

if(isset($_POST['sub'])) {
        $first=$_POST['first'];
        $last=$_POST['last'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $qry = "INSERT INTO `register` ( `first`, `last`, `email`, `pass`) VALUES ('$first','$last', '$email', '$pass')";
        mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Register page</title>
    <style>
       .man{
   text-align:center;
   border:1;
   background-color:grey;
    </style>
  </head>
  <body>
  <div class="man">
     <form action="" method="POST">
        <h2>Register</h2>
        First name:<input type="text" name="first"></input></br></br>
        Last name:<input type="text" name="last"></input></br></br>
        email:<input type="text" name="email"></input></br></br>
        Password:<input type="password" name="pass"></input></br></br>
        <input type="submit" name="sub"></input>
     </form>
    </div>
  </body>
</html>
