<?php
    include "connection.php";
		$fn = $_POST["neptuncode"];
		$pw = $_POST["password"];
		
		$sql = mysqli_query($c, "SELECT * FROM felhasznalok WHERE nev = '$fn' AND pw = '$pw'");
		$vane = mysqli_num_rows($sql);
		
		if($vane == 1)
		{
			$_SESSION["id"] = $fn;
			header("Location:?oldal=main");
		}
		else
			print "Sikertelen bejelentkezés";
?>