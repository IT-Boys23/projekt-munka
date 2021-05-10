<?php
    include "connection.php";
    $nev = $_POST['name'];
    $becenev = $_POST['nick'];
    $neptun = $_POST['neptun'];
    $jelszo = $_POST['psw'];
	$jelszo2 = $_POST['pswag'];

	$sql = "SELECT 'neptunkod' FROM felhasznalok WHERE neptunkod = '$neptun'";
	$kodhossz = strlen($neptun);
	$vane = mysqli_num_rows($sql);
    mysqli_set_charset($conn, "utf8");
	
	if($vane == 0 && $kodhossz == 6 && $jelszo == $jelszo2){
		mysqli_query($conn, "INSERT INTO felhasznalok VALUES('$nev','$becenev','$neptun','$jelszo')");
		echo "Sikeres regisztráció!";
	}
	else if($kodhossz != 6)
		echo "A neptunkód nem megfelelő!";
	else if($jelszo != $jelszo2)
		echo "A két jelszó nem egyezik!";
	else if($vane > 0)
		echo "Ez a felhasználó már létezik!";
	
    $conn->close();
?>