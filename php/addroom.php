<?php
include('../connection.php');
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $price=$_POST['price'];
     $img=$_FILES['pic']['name'];
  move_uploaded_file($_FILES['pic']['tmp_name'],"../img/$img");
       $date=$_POST['date'];
  
    $run= mysqli_query($conn, "INSERT INTO `rooms`(`id`, `name`, `price`,`date` , `pic`,`status`) ". "VALUES ('','$name','$price','$date','$pic','vecant')");
    if($run)
    {
      
        alert( "Room Added Successfully");
        redirect_to("../admin/managRoom.php");
        
    }
 else {
        alert("Error");    
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

