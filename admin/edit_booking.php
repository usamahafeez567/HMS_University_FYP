<?php 
  include('../connection.php');
  include('header.php');

  session_start();
$id=$_GET['edit'];
?>

<body >
<br><br><br>
<form action="" method="post" enctype="multipart/form-data">
  <div class="container" style="padding: 10px;  background-color: ;margin-left:350px;width: 40%;margin-top: 50px;border:1px solid grey;">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
    <center>
    <h1>Update Status of Room</h1></center>
    <hr>
    <?php 
    $query="SELECT * FROM `orders` where id='$id' ";

$sql = mysqli_query($conn, $query);
        $i=0;
        while ($row= mysqli_fetch_array($sql)) {
            $i++;
            $id         = $row['id'];
             $status=         $row['status'];

      
                    ?>
    <label for="psw"><b>Order ID</b></label>
    <input type="text"  name="id"  value="<?php echo $row["id"]; ?>">
    <br><br>
    <label for="status"><b>Status</b></label>
    <input type="text"  name="status" id="city" value="<?php echo $row["status"]; ?>" ><br> <br>
  
    <hr>
   
<?php }
?>
    <button type="submit" name="submit" class="btn btn-success">Add</button>
  </div>

 <?php
if(isset($_POST['submit']))
{
    $status=$_POST['status'];
    
    
    $run= mysqli_query($conn, "UPDATE `orders` SET `status`='$status' WHERE id='$id'");
    if($run)
        {
       alert(" Room Updated Successfully");
      
        redirect_to("booking.php");
        
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

