<?php 
  include('../connection.php');
  include('header.php');

  session_start();
$id=$_GET['edit'];
?>

<body >
<br><br><br>
<form action="" method="post" enctype="multipart/form-data">
  <div class="container" style="padding: 10px;  background-color: ;margin-left:350px;;width: 40%;margin-top: 50px;margin-top: 50px;border: 1px solid grey;">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
    <center>
    <h1>Update User  Info</h1></center>
    <hr>
    <?php 
    $query="SELECT * FROM `user` where id='$id' ";

$sql = mysqli_query($conn, $query);
        $i=0;
        while ($row= mysqli_fetch_array($sql)) {
            $i++;
            $id         = $row['id'];
            $name       = $row['name'];
             $email=          $row['email'];
             $password=         $row['password'];

      
                    ?>
    <label for="name"><b> Name</b></label>
    <input type="text" value="<?php echo $row["name"]; ?>" name="name"  ><br><br>
    <label for="psw"><b>Email</b></label>
    <input type="text"  name="email"  value="<?php echo $row["email"]; ?>">
    <br><br>
    <label for="city"><b>Pswrd</b></label>
    <input type="text"  name="pass" id="city" value="<?php echo $row["password"]; ?>" ><br> <br>
  
    <hr>
   
<?php }
?>
    <button type="submit" name="submit" class="btn btn-success">Update</button>
  </div>

 <?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    
    
    $run= mysqli_query($conn, "UPDATE `user` SET `name`='$name',`email`='$email', `password`='$pass' WHERE id='$id' ");
    if($run)
        {
       alert(" profile update Successfully");
      
        redirect_to("user.php");
        
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
</div>
</div>
</form>
</body>
</html>

