<?php
        include "connection.php";
		$fn = $_POST["neptuncode"];
		$pw = $_POST["password"];
		
		$sql = mysqli_query($conn, "SELECT * FROM felhasznalok WHERE nev = '$fn' AND pw = '$pw'");
        mysqli_set_charset($conn,"utf8");
        if($conn->query($sql)===true){
        echo "Sikeres belépés! <br> ";
        }else{
        echo "Sikertelen belépés!";
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();

?>