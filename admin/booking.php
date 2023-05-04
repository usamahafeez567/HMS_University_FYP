<?php 
include("header.php");
include("../connection.php");
?>

<body >
<div class="container" style="padding-top: 20px;margin-top: 120px;">
    <center>
        <h3> Manage Bookings</h3>
        <hr>
    </center>
    <br>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-8">                        
<table align="center" style="margin-top:10px; margin-left: 20px;width:100%; color:black; text-align: center;" class="table table-striped table-bordered" id="myTable">
  <tr>
    <th>SR No</th>
    <th>User Name</th>
    <th>Booked Room</th>
    <th>Bill</th>
    <th>Booking date</th>
    <th>Room Picture</th>
    <th>Status</th>
    <!-- <th colspan="2">Action</th> -->
  </tr>
    <?php       
                $query = "SELECT * FROM `orders` " ;


$sql = mysqli_query($conn, $query);
        $i=0;
        while ($row= mysqli_fetch_array($sql)) {
            $user_id=$row['user_id'];
            $room_id=$row['room_id'];
             $query1 = "SELECT * FROM `user` where id='$user_id' " ;
$sql1 = mysqli_query($conn, $query1);
        while ($row1= mysqli_fetch_array($sql1)) {
            $query2 = "SELECT * FROM `rooms` where id='$room_id' " ;
$sql2 = mysqli_query($conn, $query2);
        while ($row2= mysqli_fetch_array($sql2)) {
            $i++;
                    ?>
                        
                        
                        <td> <?php echo $i; ?> </td>
                       
            
                
                        <td> <?php echo $row1['name']; ?> </td>
                    <td> <?php echo $row2['name']; ?> </td>
                    <td> <?php echo $row['total_bill']; ?> </td>
                    <td> <?php echo $row['booking_date']; ?> </td>
                     <td><img src="../img/<?php echo $row2['pic']; ?>" style="width: 60px;height: 50px;" /></td>
                     <td> <?php echo $row['status']; ?> </td>
                     <!-- <td>    <a href="../php/dlt_booking.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="material-icons">Cancel</i></a> </td>
                
             <td>    <a href="edit_booking.php?edit=<?php echo $row['id']; ?>" class="btn btn-primary">Confirm</a> </td> -->
                     
                
                    
                
                    
                        
                    
                    
                </tr>
                
                <?php 
                }} }?>
</table>
</div>
</div>
</div>
</body>
</html>
