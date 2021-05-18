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
	$titkositott = md5($jelszo);
	$neptunfel = strtoupper($neptun);
	/*$hossz2 = strlen($titkositott);
	print "$hossz2";*/
	
	if($nevhossz > 0 && $vane == 0 && $kodhossz == 6 && $jelszo == $jelszo2 && $jelszohossz>=8 && $jelszohossz<=16){
		mysqli_query($conn, "INSERT INTO felhasznalok VALUES('$nev','$becenev','$neptunfel','$titkositott')");
		print " <div class='not'>Sikeres regisztráció! </div>";
	}
	else if($nevhossz == 0)
		print "<div class='not'>Kérlek add meg a neved! </div>";
	else if($kodhossz != 6)
		print "<div class='not'>A neptunkód nem megfelelő! </div>";
	else if($jelszo != $jelszo2)
		print "<div class='not'>A két jelszó nem egyezik! </div>";
	else if($vane > 0)
		print "<div class='not'>Ez a felhasználó már létezik! </div>";
	else if($jelszohossz<8 || $jelszohossz>16)
		print "<div class='not'>A jelszó 8 és 16 karakter között legyen!</div>";
	
?>