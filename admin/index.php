<?php
include("../connection.php");
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
      ul li{
        margin-left: 20px;
      }
  </style>
</head>

<body  style="background-image: url(../img/bg.jpg);background-size: cover;background-repeat: no-repeat;">
    

    
    <div class="container-fluid" >
<div class="row">
   
 <div class="col-lg-5  mt-5" style="margin-left: 400px;">
  <div class="card" style="background: rgb(0,0,0,0.7);">
   <div class="card-header" >
    <img src="../img/user.png" class="mx-auto d-block img-fluid" style="height: 100px;border-radius: 65px;">
    </div>
    <br>
    <h4 style="text-align: center; color:white; ">Admin Login</h4>
     <div class="card-body">
      
      <form action="" method="post">
      <div class="input-group">
      <span class="input-group-text">Email</span>
      <input type="text" class="form-control" placeholder="Enter your email address" required="required" value="" name="email">
      </div>
      <br>
      <div class="input-group">
      <span class="input-group-text">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
      <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
      </svg>
      </span>
      <input type="password" class="form-control" placeholder="Enter your password" required="required" value="" name="password">
      </div>
      <br><br>
      <input type="submit" class="form-control"  name="submit" style="background-color: lightskyblue;" ><br>

     
        <br>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>



<?php 
ob_start();



if (isset($_POST['submit']))
 
{
    
    $email=$_POST['email'];
    $pass=$_POST['password'];
    
    
    $xyz="select * from admin where email='$email' and password='$pass'  ";
    
    $sql=mysqli_query($conn, $xyz);
    
    $row=mysqli_num_rows($sql);
    
    $rows = mysqli_fetch_array($sql);
    


    
    
    
    if ($row>0) {
        // $_SESSION['id']= $rows['id'];
        // $_SESSION['email']= $rows['email'];
        // // $_SESSION['Password']= $pass;
        // $_SESSION['name']= $rows['name'];;
        
        header("location:home.php");
                 ob_end_flush();
    }
    
    else {
        echo "Error: " . $row . "<br>" . mysqli_error($conn);
        echo "<script>alert('Email/Password Invalid try again')</script>";
    }
    
    
    
}
?>

    
</body>
</html>














