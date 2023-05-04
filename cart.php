<?php
include("connection.php");
include("header.php");
session_start();
$id=$_SESSION['id'];





if(isset($_GET['cart']))
{
$room_id=$_GET['cart'];


$query1="DELETE FROM `cart` WHERE `room_id`='$room_id'";
$run1=mysqli_query($conn,$query1);

if(isset($run1)){
    echo "<script>alert('Successfully Removed From Cart!')</script>";
    echo "<script>window.open('cart.php','self')</script>";
  }
  else{
    echo "<script>alert('unknown error!')</script>";
    echo "<script>window.open('index.php','self')</script>";
    exit();
  }


}











?>




<br>


<div class="container alert alert-light">
<h2 style="margin-top: 80px;">My Cart</h2>

        <table align="center" class="table table-bordered">
<thead class="thead-light">          
<tr>
<th>Sr.</th>
<th>Image</th>
<th>Room Name</th>
<th>Price</th>
<th>Action</th>
</tr>
</thead>


<?php 
$query2="SELECT * FROM `cart` WHERE `user_id`='$id'";
$run2=mysqli_query($conn,$query2);

       if ($run2==TRUE)
         {
          $n=0;
          $total_price=0;
       while($data2=mysqli_fetch_array($run2))
       {
        $product_id=$data2['room_id'];
        $query1="SELECT * FROM `rooms` WHERE `id`='$product_id'";
        $run1=mysqli_query($conn,$query1);
        $data1=mysqli_fetch_array($run1);

if (isset($data1)) {
        $total_price=$data1['price'];
        $n=$n+1;

        ?>
            <tr>
              <td><?php echo $n ?></td>
              <td><img style="width: 75px;border-radius: 50%" src="<?php echo "img/".$data1['pic']; ?>"></td>
              <td><?php echo $data1['name']; ?></td>
              <td><?php echo $data1['price']; ?></td>
              <td><a class="btn btn-danger" href="cart.php?cart=<?php echo $data1['id']; ?>">Remove From Cart</a></td>

         </tr>
<?php  

       }
     }
   }
     ?>



<thead class=" text text-black" >          
<tr>
<th colspan="6">Total Items</th>
<th colspan="1"><?php echo $n ?></th>
</tr>
<tr>
<th colspan="6">Total Price</th>
<th colspan="1" class="bg bg-light"><?php echo $total_price ?></th>
</tr>
</thead>

         
      
        </table>
        <a class="btn btn-success" href="order.php?t_items=<?php echo $n ?>&t_price=<?php echo $total_price ?>&p_name=<?php echo $data1['name'] ?>&room_id=<?php echo $data1['id'] ?>" name="done">ChceckOut</a>

</div>



</body>
</html>
