<?php
  include "includes/connect.php";
  session_start();
  if(isset($_POST['sub'])){
    $name=$_POST['email'];
    $pass=$_POST['pass'];
    $qry="select * from `register` where `email`='$name' and `pass`='$pass'";
    $sql=mysqli_query($conn,$qry) or die("connection failed:".mysqli_connect());
    if(mysqli_num_rows($sql)>0) {
            $row=mysqli_fetch_assoc($sql);
            $_SESSION["email"] = $row['email'];
            $_SESSION["pass"] = $row['pass'];
            header('location:index1.php');
        } else {
            $warning = "Invalid login"; 
        }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Register page</title>
  </head>
  <body>
     <form action="" method="POST">
        <h2>Login</h2>
        
        email:<input type="text" name="email"></input></br></br>
        Password:<input type="password" name="pass"></input></br></br>
        <input type="submit" name="sub"></input>
     </form>
  </body>
</html>
