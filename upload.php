<?php 
include "includes/connect.php";
session_start();
if(isset($_POST['sub'])) {
        $hname=$_POST['name'];
        $value=$_POST['value'];
        $des=$_POST['des'];
        $phone=$_POST['phone'];
        $userid=$_SESSION['email'];
        $uploadOk = 0;
        if(isset($_FILES['image'])){
        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $tmp = explode('.', $file_name);
        $file_ext=strtolower(end($tmp));
        $expensions= array("jpeg","jpg","png","gif");
        if(in_array($file_ext,$expensions)=== false){
           array_push($errors, "please choose a JPEG or PNG file.");
        }
        if(empty($errors)==true) {
           move_uploaded_file($file_tmp,"images/".$file_name) or die("error moving file");
           $uploadOk = 1;
        }else{
           print_r($errors);
        }
     
    if ($uploadOk == 1) {
        $qry = "INSERT INTO `house_details` ( `username`,`h_name`,`value`, `descrip`, `phone`,`image`) VALUES ('$userid','$hname','$value', '$des','$phone', '$file_name')";
        echo "prasad ";
        mysqli_query($conn,$qry)  or die("error: ");
        header('location:index1.php');
    }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
            <title>HOUSE DETAILS</title>
    </head>   
    <body>
               
             <form class="form" method="post" action="" enctype="multipart/form-data">
                HouseName:<input type="text" name="name"></input></br></br>
                Value:<input type="text" name="value"></input></br></br>
                Description:
                <textarea  name="des" rows="3" cols="15"></textarea></br></br>
                Phone:<input type="text" name="phone"></input></br></br>
                image<input type="file" name="image"></br></br>
                <input type="submit" name="sub" value="Click to Submit">
            </form>
    </body>  
</html>

