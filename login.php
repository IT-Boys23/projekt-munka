<?php
		$nc = $_POST['neptuncode'];
		$pw = $_POST['password'];

		$titkositott = md5($pw);
		$ncfel = strtoupper($nc);
		
		$sql = mysqli_query($conn, "SELECT * FROM felhasznalok WHERE neptunkod = '$ncfel' AND jelszo = '$titkositott'");
		$becenev = mysqli_query($conn, "SELECT becenev FROM felhasznalok WHERE neptunkod = '$ncfel' AND jelszo = '$titkositott'");
		$vane = mysqli_num_rows($sql);
		
		//ellenörzés
	
		if($vane == 1)
		{
			$_SESSION["id"] = $nc;
			header("Location:?oldal=main");
		}
		else
			print "Hibás neptunkód vagy jelszó!";
?>