<?php 
  include('../connection.php');
  include('header.php');

  session_start();
$id=$_GET['edit'];
?>

<body>
<br><br><br>
<form action="" method="post" enctype="multipart/form-data">
  <div class="container" style="padding: 10px;  background-color: ;margin-left:350px;box-shadow: 5px 5px 5px 5px grey;width: 40%;margin-top: 10px;margin-top: 50px;">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
    <center>
    <h3>Update Empolyee</h3></center>
    <hr>
     <?php      $resultAll = mysqli_query($conn, "SELECT * FROM `employees` where id='$id'");

if(!$resultAll){
    die(mysqli_error($conn));
}

$i=0;

if (mysqli_num_rows($resultAll) > 0) {
    while($row = mysqli_fetch_array($resultAll)) {
            $i++;
      
                    ?>
    <label for="name"><b> Name</b></label>
    <input type="text" value="<?php echo $row["name"]; ?>" name="name"  ><br><br>
    <label for="psw"><b>Email</b></label>
    <input type="text"  name="email"  value="<?php echo $row["email"]; ?>">
    <br><br>
    <label for="psw"><b>Role</b></label>
    <input type="text"  name="role"  value="<?php echo $row["role"]; ?>">
    <br><br>
    <label for="city"><b>Cnic</b></label>
    <input type="text"  name="cnic" id="city" value="<?php echo $row["cnic"]; ?>" ><br> <br>
  <label for="city"><b>Dob</b></label>
    <input type="text"  name="dob" id="city" value="<?php echo $row["dob"]; ?>" ><br> <br>
    <label for="city"><b>address</b></label>
    <input type="text"  name="address" id="city" value="<?php echo $row["address"]; ?>" ><br> <br>
    <hr>
   
<?php }}
?>
    <button type="submit" name="submit" class="btn btn-success">Update</button>
  </div>

 <?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
     $role=$_POST['role'];
    $email=$_POST['email'];
    $cnic=$_POST['cnic'];
    $dob=$_POST['dob'];
    $address=$_POST['address'];

    
    
    $run= mysqli_query($conn, "UPDATE `employees` SET `name`='$name',`email`='$email', `role`='$role', `cnic`='$cnic',`dob`='$dob',`address`='$address' WHERE id='$id' ");
    if($run)
        {
       alert("  update Successfully");
      
        redirect_to("manage_empolyee.php");
        
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
</div>
</div>
</form>
</body>
</html>

