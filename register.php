<?php
include("connection.php");

error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Registration Panel</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
      ul li{
        margin-left: 20px;
      }
      label{
color: white;
font-weight: 20px;
      }
  </style>
</head>

<body  style="background-image: url(img/bg.jpg);background-size: cover;background-repeat: no-repeat;">
   
<br>
    <div class="container-fluid">
  <div class="row">
    <div class="col-md-5" style="margin-left: 400px;">
      <div class="card" style="background: rgb(0,0,0,0.7);">
         <div class="card-header" >
    <img src="assets/img/reg5.png" class="mx-auto d-block img-fluid" style="height: 65px;border-radius: 55px;">
    </div>
    <br>
        <h4 style="text-align: center; color: white;">Create an account to register yourself in our Hotel</h4>
        <div class="card-body">
        

          <form action="" method="post" enctype="multipart/form-data">
            <label>Email:</label>
            <div class="input-group">
              <span class="input-group-text">Email</span>
              <input type="email" class="form-control" placeholder="Enter your email address" required="required" value="" name="email">
            </div>
            <label >Name:</label>
             <div class="input-group">
              
                <input type="text" required placeholder="Enter Name" name="name" class="form-control"  pattern="[A-Za-z]{3,10}" title="enter only alphabetic characters">
            </div>
            <label >Password:</label>
             <div class="input-group">
              <span class="input-group-text">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
              </svg>
              </span>
              <input type="password" class="form-control" placeholder="Enter Password" required="required" value="" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 5 or more characters">
            </div>
             <label >Contact:</label>
            <div class="input-group">
                
                <input type="text" required placeholder="Enter Contact number" name="contact" class="form-control" pattern="[0-9]{11}" title="enter 11 digits number">
            </div>
           <label >Address:</label>
            <div class="input-group">
                
                <input type="text" required placeholder="Enter City Name" name="city" class="form-control" pattern="[A-Za-z]{3,10}" title="enter city name only alphabetic characters">
            </div>
            <label >Image:</label>
             <div class="input-group">
               <input type="file" class="form-control" name="pic">
                
            </div>
              <br>
              <input type="submit" class="btn   btn-lg w-100 mb-2"  name="submit" value="Next" style="background-color: lightskyblue;">
               <center>
        <a href="login.php" class="item-link btn text-white"> Already Registered? <i style="margin-right: 5px;color: skyblue;">Login Now</i></a>
        </center>
      </form>
      
            
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>



<?php
session_start();
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $pass=$_POST['password'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $city=$_POST['city'];
  $img=$_FILES['pic']['name'];
  move_uploaded_file($_FILES['pic']['tmp_name'],"img/$img");
    $run= mysqli_query($conn, "INSERT INTO `user`(`id`, `name`, `password`, `email`,`contact`, `address`, `image`) "
            . "VALUES ('','$name','$pass','$email','$contact', '$city', '$img')");
    if($run)
    {
      
        alert( "User Added Successfully");
        redirect_to("login.php");
        
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















    
</body>
</html>














