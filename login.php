<?php
        include "connection.php";
		$nc = $_POST["neptuncode"];
		$pw = $_POST["password"];
		
		$sql = mysqli_query($conn, "SELECT * FROM felhasznalok WHERE neptunkod = '$nc' AND jelszo = '$pw'");
		$vane = mysqli_num_rows($sql);

        mysqli_set_charset($conn, "utf8");
		
		if($vane == 1)
		{
			header("Location:?oldal=main");
		}
		else
			echo "Sikertelen bejelentkezés!";
		
        /*if($conn->query($sql)===true){
			echo "Sikeres belépés! <br> ";
        }
		else{
			echo "Sikertelen belépés!";
			echo "Error: " . $sql . "<br>" . $conn->error;
        }*/
		
		mysqli_free_result($vane);
        $conn->close();

?>