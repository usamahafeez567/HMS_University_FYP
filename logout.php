<?php
session_start();
include('connection.php');
unset($_SESSION['name']);
session_destroy();

header("Location: index.php");
exit;
?>