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
    <h1>Room  Info</h1></center>
    <hr>
    <?php 
    $query="SELECT * FROM `rooms` where id='$id' ";

$sql = mysqli_query($conn, $query);
        $i=0;
        while ($row= mysqli_fetch_array($sql)) {
            $i++;
            $id         = $row['id'];
            $name       = $row['name'];
             $rent=          $row['price'];
             $date=         $row['date'];

      
                    ?>
    <label for="name"><b> Name</b></label>
    <input type="text" value="<?php echo $row["name"]; ?>" name="name"  ><br><br>
    <label for="psw"><b>Price</b></label>
    <input type="text"  name="rent"  value="<?php echo $row["price"]; ?>">
    <br><br>
    <label for="city"><b>Post Date</b></label>
    <input type="text"  name="date" id="city" value="<?php echo $row["date"]; ?>" ><br> <br>
  
    <hr>
   
<?php }
?>
    <button type="submit" name="submit" class="btn btn-success">Add</button>
  </div>

 <?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $rent=$_POST['rent'];
    $date=$_POST['date'];
    
    
    $run= mysqli_query($conn, "UPDATE `rooms` SET `name`='$name',`price`='$rent', `date`='$date' WHERE id='$id'");
    if($run)
        {
       alert(" Room Updated Successfully");
      
        redirect_to("managRoom.php");
        
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

