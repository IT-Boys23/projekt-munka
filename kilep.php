<?php
	include_once "connection.php";
	session_destroy();
	$_SESSION = array();
	mysqli_close($conn);
	header("Location:?oldal=main");
?>