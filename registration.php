<?php
			mb_internal_encoding("utf-8");
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "szoftverfejltesztes";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			}
			$sql = "SELECT Nev, SzuletesiIdo, Foglalkozas, HaviKereset, SzemIgSzam FROM szemelyek";
			mysqli_set_charset($conn,"utf8");
			$result = $conn->query($sql);
			if ($result->num_rows > 0) 
			{
				// output data of each row
				while($row = $result->fetch_assoc()) 
				{
					print('<tr><td>'.$row["Nev"].'</td><td>'.$row["SzuletesiIdo"].'</td><td>'.$row["Foglalkozas"].'</td><td>'.$row["HaviKereset"].'</td><td>'.$row["SzemIgSzam"].'</td><td><button onclick=modosit("'. $row["SzemIgSzam"] .'")>Modosit</button><button onclick=torles("'. $row['SzemIgSzam'] .'")>Töröl</button></td></tr>');
				}
			}
			$conn->close();
		?>