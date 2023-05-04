<?php 
include("header.php");
include("connection.php");
session_start();
$id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<body>
</head>

  <style>
        
		table, th, td {
	text-align: center;
}
    </style>

<script>
	$(document).ready( function () {
    $('#sTable').DataTable();
} );
</script> 	
  <body>
<div class="container" style="margin-top: 100px">
 <div class="row">
  <div class="col-lg-12">
 <div class="col-md-12">
	<center>
	<h2>My Bookings</h2></center>
	<br>
	
		<table id="sTable" class="table table-bordered">
		    <thead>
		        <tr>
    		        <th>Serial Number</th>
					 <th>Booked Room</th>
					<th>Paid Bill</th>
					<th>Bank Account</th>
					<th>Booking Date</th>
					<th>Booking Status</th>
				
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
			<?php      $resultAll = mysqli_query($conn, "SELECT * FROM `orders` where user_id=$id");
			

if(!$resultAll){
    die(mysqli_error($conn));
}

$i=0;

if (mysqli_num_rows($resultAll) > 0) {
    while($row = mysqli_fetch_array($resultAll)){ 
        	$i++;  
        	$room_id=$row['room_id'];
        	$result = mysqli_query($conn, "SELECT * FROM `rooms` where id='$room_id' "); 
        	while($row2 = mysqli_fetch_array($result)){          
						?>
						<td> <?php echo $i; ?> </td>
				
						<td> <?php echo $row2['name']; ?> </td>
					
					<td> <?php echo $row['total_bill']; ?> </td>
					
					<td> <?php echo $row['account']; ?> </td>
					
					<td> <?php echo $row['booking_date']; ?> </td>
					<td> <?php echo $row['status']; ?> </td>
						
					
	
					
				
				
			
					
				
					
						
					
					
				</tr>
				
				<?php 
				}}} ?>
		    </tbody>
		</table>
	</div>
</div>
</div>