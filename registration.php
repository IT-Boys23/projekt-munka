<?php
    $nev = $_POST['name'];
    $becenev = $_POST['nick'];
    $neptun = $_POST['neptun'];
    $jelszo = $_POST['psw'];
	$jelszo2 = $_POST['pswag'];

	$sql = mysqli_query($conn, "SELECT * FROM felhasznalok WHERE neptunkod = '$neptun'");
	$vane = mysqli_num_rows($sql);
	$nevhossz = strlen($nev);
	$kodhossz = strlen($neptun);
	$jelszohossz = strlen($jelszo);


	//jelszó titkosítás
	$titkositott = md5($password,false);
	$neptunfel = strtoupper($neptun);


	
	if($nevhossz > 0 && $vane == 0 && $kodhossz == 6 && $jelszo == $jelszo2 && $jelszohossz>=8 && $jelszohossz<=16){
		mysqli_query($conn, "INSERT INTO felhasznalok VALUES('$nev','$becenev','$neptunfel','$titkositott')");
		echo "Sikeres regisztráció!";
		unset ($nev);
		unset ($becenev);
		unset ($neptun);
		unset ($jelszo);
		unset ($jelszo2);
		unset ($nevhossz);
		unset ($kodhossz);
		unset ($jelszohossz);
		unset ($titkositott);
		unset ($neptunfel);

	}
	else if($nevhossz == 0)
		echo "Kérlek add meg a neved!";
	else if($kodhossz != 6)
		echo "A neptunkód nem megfelelő!";
	else if($jelszo != $jelszo2)
		echo "A két jelszó nem egyezik!";
	else if($vane > 0)
		echo "Ez a felhasználó már létezik!";
	else if($jelszohossz<8 || $jelszohossz>16)
		echo "A jelszó 8 és 16 karakter között legyen!";
	
?>