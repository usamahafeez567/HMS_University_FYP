<?php

include ('../connection.php');

$delete= $_GET['delete'];

$abc = "delete from `orders` where id= '$delete'";

$sql = mysqli_query($conn, $abc);

if ($sql) {
	
		echo "<script>alert('Booking Cancelled Successfully')</script>";
	echo "<script>window.open('../admin/booking.php', '_self')</script>";
}

else {
	
	echo "not";
}


?>