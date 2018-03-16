<?php 
include "includes/connect.php";
session_start();
/*<ul class="nav">
				<li><a href="home.php">Home</a></li>
				<li><a href="reg.php">Register</a></li>
				<li><a href="login.php">Login</a></li>
			</ul>*/
?>
<!DOCTYPE html>
<html>
    <head>
            <title>ALL HOUSES</title>
    </head>   
    <body>
            <h1>Houses</h1>
			
			<div class="main-content">
			
             <?php
                $qry = "select * from house_details";
                    $sql = mysqli_query($conn,$qry) or die("error: ".$qry);
                    if(mysqli_num_rows($sql)>0) { 
                        while($row=mysqli_fetch_assoc($sql)) {
                           $imagepath = "images/".$row['image'];
                           $name = $row['h_name'];
                           $description =  $row['descrip'];
                           $phone=$row['phone'];
                           echo "<li>";
                           echo "<img src='$imagepath'>";
                           echo "<h3>$name</h3>";
                           echo "Description:<p>$description</p>";
                           echo "phone:<p>$phone</p>";
                           echo "</li>";
                        } 
                    } else { 
                        echo "<li>No uploads</li>";
                    }
             ?>
            
            </div>
    </body>  
</html>
