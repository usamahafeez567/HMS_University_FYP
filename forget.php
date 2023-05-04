
<?php 
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <title>Hotel Management System </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
 <body >
  <div class="container">
    <div class="row">
    <div class="col-md-3"></div>

    <div class="col-md-5">
      <br><br><br><br><br>
      <div class="card" >
        <div class="card-header" >
          <h3>Recover Password
        </div>
        <div class="card-body">
          <div class="mb-3">
            <form method="post" action="#">
  <label for="exampleFormControlInput1" class="form-label">Enter Registered Email</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" name="email" name="email">
</div>
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Enter New Password</label>
  <input type="password" class="form-control"  name="password" >
</div>

<button type="submit" class="btn btn-info" name="done">Done</button>
</form>
</div>
</div>
</div>
</div>
</div>

<?php 
if(isset($_POST['done'])){
  $email=$_POST['email'];
  $xyz="select * from `user` where email='$email'";
  $run1=mysqli_query($conn,$xyz);
   $row=mysqli_num_rows($run1);

  if($row>=1)
  {
  $password=$_POST['password'];
  $query="UPDATE `user` SET `password`='$password' WHERE email='$email'";
  $run=mysqli_query($conn,$query);
  if($run){
  
    echo "<script>alert('Password  was changed successfully')</script>";
 

 }
}
  else{
    echo "<script>alert('Given email was not registered in system')</script>";
  }
}
?>