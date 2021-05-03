<?php
    include "connection.php";
    $nev = $_POST['name'];
    $becenev = $_POST['nick'];
    $neptun = $_POST['neptun'];
    $jelszo = $_POST['psw'];

    $sql = "INSERT INTO felhasznalok VALUES('$nev','$becenev','$neptun','$jelszo')";
    mysqli_set_charset($conn,"utf8");
    if($conn->query($sql)===true){
        echo "Sikeres regisztráció! <br> ";
    }else{
        echo "Sikertelen regisztráció!";
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>