<?php
session_start();
include ('../connection.php');
$id=$_SESSION['id'];
$get= $_GET['id'];

$abc = "INSERT INTO cart (id, user_id, room_id)
VALUES ('', '$id', '$get')";

$sql = mysqli_query($conn, $abc);

if ($sql) {
	
		echo "<script>alert('Successfully Added to Cart')</script>";
	echo "<script>window.open('../cart.php', '_self')</script>";
}

else {
	
	echo "Error: " . $abc . "<br>" . mysqli_error($conn);
}


?>