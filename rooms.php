<?php
include("connection.php");
include("header.php");

?>

  <body style="margin-top:100px;">
    <center><h4>Available Rooms</h4></center><br>
 <?php 
  $query="SELECT * FROM `rooms` ";
  $run=mysqli_query($conn,$query);
  $row=mysqli_num_rows($run);
  
  if($row>=1)
  {
  ?>
  
<div class ="container">
    <div class="row">
       <?php
        $i=1;
        while($data=mysqli_fetch_assoc($run))
        { 
           
          
            ?>
     <div class="col-md-4">
      
            <div class="card" style="width: 18rem;margin-bottom: 30px;">

                <img src="img/<?php echo $data['pic']; ?>" class="card-img-top" alt="..." style="height: 250px;">
                <div class="card-body">
                  <h5 class="card-title" value="<?php echo $data['name']; ?>"></h5>
                <center> <h6><?php echo $data['name']; ?></h6>
                  <h6>Price: <?php echo $data['price']; ?></h6>
                  <?php
                  if($data['status'] == 'vecant'){
                    ?>
                  <a href="php/add_cart.php?id=<?php echo $data['id'] ?>">Add to Cart</a></center>
                  <?php
                }
              
                else{
                ?>
                <P class="text-danger">Not Available</P>
              <?php }
                ?>
                </div>
            </div>

        </div>      
                    
                       <?php
        }
      }?>