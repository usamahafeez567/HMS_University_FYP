<?php 	
include('../connection.php');
if(isset($_POST['register']))
{
    $name=$_POST['name'];
    $pass=$_POST['role'];
    $email=$_POST['email'];
  $img=$_FILES['pic']['name'];
  $cnic=$_POST['cnic'];
  $dob=$_POST['dob'];
  $address=$_POST['address'];
 
    $run= mysqli_query($conn, "INSERT INTO `employees`(`id`, `email`,`name`, `role`, `cnic`,`dob`,`address`,`pic`) "
            . "VALUES ('','$email','$name','$pass', '$cnic','$dob','$address','$img')");
    if($run)
    {

    	
      
       echo "<script>
        alert( 'User Added Successfully');
        </script>";

    	 redirect_to("../admin/manage_empolyee.php");
        
        
    }
 else {
 echo "Error: " . $run . "<br>" . mysqli_error($conn);
 
    }
}

 ?>

<?php
function alert($text)
{
    echo"<script>alert(\"$text\");</script>";
}
function redirect_to($path)
{
    echo"<script>location=\"$path\";</script>";
}
?>
