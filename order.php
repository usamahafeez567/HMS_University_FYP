
<?php
include('connection.php');

include('header.php');
if(isset($_GET['t_price']))
{
  $total=$_GET['t_price'];
  if(isset($_GET['room_id']))
{
  $room_id=$_GET['room_id'];
  if(isset($_GET['p_name']))
  {
    $p_name=$_GET['p_name'];

    session_start();
    $id=$_SESSION['id'];

    if (isset ($_POST['submit']))
    {
      
      $user = $_SESSION['id'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $mobile = $_POST['room'];
      $bill = $_POST['bill'];
      $account = $_POST['account'];
      $date_to = $_POST['date_to'];
       
     


      $update = "insert into `orders` (user_id, room_id, total_bill, account, booking_date, status) values ('$user', '$room_id', '$bill', '$account','$date_to','Pending')";
      $set = mysqli_query ($conn, $update);


      if ($set) {
        $delete ="DELETE from `cart` where user_id='$id' ";
        $run = mysqli_query($conn, $delete);
        if($run){
         $run1= mysqli_query($conn, "UPDATE `rooms` SET `status`='Booked' WHERE id='$room_id'");
         echo "<script>alert(' order is Successfully send! ')</script>";
         echo "<script>window.open('view_order.php','_self')</script>";


     }    
     }

     else {
       echo "Error: " . $set . "<br>" . mysqli_error($conn);
       
       
     }



     
   }


   ?>
   <div class="container">
    <div class="row">
      <div class="col-lg-3">
      </div>

      <div class="col-lg-6"  style="border: 1px solid grey;margin-top: 120px;">
        <form class="form-horizontal" method="post">
          <br>
          <fieldset>

            <!-- Form Name -->
            <center><legend><h1>Book Your Room</h1></legend></center>

            <!-- Text input-->

            <div class="container" >
              
              <div class="form-group">
                <label class="col-md-8 control-label" for="textinput">Full Name</label>  
                <div class="col-md-8">
                  <input id="textinput" name="name" type="text" value="<?php echo $_SESSION['name']; ?>" class="form-control input-md"  readonly>
                  
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-8 control-label" for="textinput">Email</label>  
                <div class="col-md-8">
                  <input id="textinput" name="email" type="text" class="form-control input-md" value="<?php echo $_SESSION['email']; ?>" required readonly>
                  
                </div>
              </div>

              <!-- Text input-->

            </div>

            <div class="form-group" >
              <label class="col-md-8 control-label" for="textinput">Booked Room</label>  
              <div class="col-md-8">
                <input id="textinput" name="item" type="text" value="<?php echo $p_name ?>" class="form-control input-md"  required readonly>
                
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-8 control-label" for="textinput">Total Bill</label>  
              <div class="col-md-8">
                <input id="textinput" name="bill" type="text" class="form-control input-md" readonly value="<?php echo $total ; ?>">
                
              </div>
            </div>


            <div class="form-group">
              <label class="col-md-8 control-label" for="textinput">Bank Account</label>  
              <div class="col-md-8">
                <input id="textinput" name="account" type="text" class="form-control input-md" >
                
              </div>
              <div class="form-group">
                <label class="col-md-8 control-label" for="textinput">Booking Date</label>  
                <div class="col-md-8">
                  <input type="date" name="date_to" type="text" class="form-control input-md">
                  
                </div>
                





                <br>



                <div class="form-group">  
                  <div class="col-md-8"></div>
                  <div class="col-md-8">
                    <center> <input name="submit" type="submit" value="Submit" class=" input-md btn btn-success">
                    </center>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
      </div>



      


      <?php 
    }
  }
}
?>