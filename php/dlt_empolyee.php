<?php

include ('../connection.php');

$delete= $_GET['delete'];

$abc = "delete from `employees` where id= '$delete'";

$sql = mysqli_query($conn, $abc);

if ($sql) {
	
		echo "<script>alert('Record deleted successfully')</script>";
	echo "<script>window.open('../admin/manage_empolyee.php', '_self')</script>";
}

else {
	
	echo "not";
}


?>