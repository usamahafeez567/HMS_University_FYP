<?php
 
include("connection.php");
include("header.php");
session_start();
$id=$_SESSION['id'];
?>
<style type="text/css">
body{
    
}

    .card {
  background: green;
    padding: 30px;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 500px;
    border: 1px solid grey;
    margin-top: 100px;
}

.card .text{
    display: flex;
    flex-direction: column;
    align-items: center;
    color: white;
}

.card .text img{
    height: 170px;
    border-radius: 50%;
  margin-bottom:10px;
}

.card .text h3{
    font-size: 40px;
    font-weight: 400;
}

.card .text p:nth-of-type(1){
    color: black;
    font-size: 15px;
    margin-top: -5px;
}

.card .text p:nth-of-type(2){
    margin: 10px;
    width: 90%;
    text-align: center;
}

.card .links{
    width: 30%;
    display: flex;
    justify-content: space-evenly;
}

.card .links i{
    color: rgb(35, 182, 219);
    font-size: 20px;
    cursor: pointer;
}

.card .links i:hover{
    color:rgb(29, 157, 189) ;
}
</style>
<br>
<?php 
//session_start();
//$id=session_id();

$sql="SELECT * FROM `user` where id='$id' ";
$data=mysqli_query($conn,$sql);
$select= mysqli_fetch_assoc($data);

 ?>
       <center>
            <div class="card" style="background: rgb(0,0,0,0.0);">
            <div class="text">

                <img src="assets/img/<?php echo $select["image"]; ?>" alt="">
                <h3 style="color:black;"><?php echo $select["name"]; ?></h3>
                <!-- <h5 class="text-bold" style="color: black;">More Details</h5> -->
                <form method="post">
                <table class="table" style="color:black">

                    <tr>
                        <th class="text-black">Name:</th>
                      <td ><input type="text" name="name" value="<?php echo $select["name"]; ?>"></td>
                    </tr>
                    <tr>
                        <th class="text-black">Email:</th>
                        <td><input type="text" name="email" value="<?php echo $select["email"]; ?>"></td>
                    </tr>
                      <tr>
                        <th class="text-black">Password:</th>
                        <td><input type="text" name="pass" value="<?php echo $select["password"]; ?>"></td>
                    </tr>
                   
                    
                </table>
            <button class="btn btn-success " name="done">
                Update</button>
            </div>
        </div>
    </form>
       </center>
       <?php
if(isset($_POST['done']))
{
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $email=$_POST['email'];
    
    
    $run= mysqli_query($conn, "UPDATE `user` SET `name`='$name',`password`='$pass', `email`='$email' ");
    if($run)
        {
       alert(" profile update Successfully");
      
        redirect_to("profile.php");
        
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