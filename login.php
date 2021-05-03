<?php
    include "connection.php";
		$fn = $_POST["neptuncode"];
		$pw = $_POST["password"];
		
		$sql = mysqli_query($conn, "SELECT * FROM felhasznalok WHERE nev = '$fn' AND pw = '$pw'");
		$vane = mysqli_num_rows($sql);
		
		if($vane == 1)
		{
			$_SESSION["id"] = $fn;
			
		}
		else
			print "Sikertelen bejelentkezés";
?>