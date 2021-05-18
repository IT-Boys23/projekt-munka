<?php
$servername = "localhost";
$username = "szoft";
$password = "pokerarc1999asD@@";
$dbname = "szoft";
// Kapcsolat létrehozása
$conn = new mysqli($servername, $username, $password, $dbname);
// Kapcsolat ellenőrzése
if ($conn->connect_error)
    die("Sikertelen kapcsolódás: " . $conn->connect_error);
?>