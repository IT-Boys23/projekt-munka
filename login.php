<?php
		$nc = $_POST['neptuncode'];
		$pw = $_POST['password'];
		
		$sql = mysqli_query($conn, "SELECT * FROM felhasznalok WHERE neptunkod = '$nc' AND jelszo = '$pw'");
		$vane = mysqli_num_rows($sql);

		//ellenörzés
	


		if($vane == 1)
		{
			$_SESSION["id"] = $nc;
			header("Location:?oldal=main");
		}
		else
			print "Sikertelen bejelentkezés!";
?>