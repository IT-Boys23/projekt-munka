<?php
    include "connection.php";
    $nev = $_POST['name'];
    $becenev = $_POST['nick'];
    $neptun = $_POST['neotun'];
    $jelszo = $_POST['psw'];

    $sql = "INSERT INTO szemelyek VALUES('$nev','$becenev','$neptun','$jelszo')";
    mysqli_set_charset($conn,"utf8");
    if($conn->query($sql)===true){
        echo "Sor siekresen hozzáadva! <br> <a href='alap.php'>Vissza a főoldalra</a>";
    }else{
        echo "Nem sikerült hozzáadni a sort!";
    }
    $conn->close();
?>