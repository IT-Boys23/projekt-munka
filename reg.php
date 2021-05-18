<html>
<body>
    <h1>Regisztráció</h1>
    </br>
    <form class="registration" method="POST">
        <h3>Név:</h3>
        <div class="input-container">
            <i class="icon"></i>
            <input class="input-field" type="text" placeholder="Név" name="name">
        </div>
            <h3>Becenév:</h3>
            <div class="input-container">
                <i class="icon"></i>
                <input class="input-field" type="text" placeholder="Bencenév" name="nick">
            </div>

            <h3>Neptun kód:</h3>
            <div class="input-container">
                <i class="icon"></i>
                <input class="input-field" type="text" placeholder="Neptun kód" name="neptun">
            </div>
            <h3>Jelszó:</h3>
            <div class="input-container">

                <i class="icon"></i>
                <input class="input-field" type="password" placeholder="Jelszó" name="psw">
            </div>
            <h3>Jelszó megerősítése:</h3>
            <div class="input-container">

                <i class="icon"></i>

                <input class="input-field" type="password" placeholder="Jelszó megerősítése" name="pswag">
            </div>

            <button type="submit" class="bttn" name="reg">Regisztráció</button>
        </form>

</body>

</html>

<?php
	include "connection.php";
	if(isset($_POST["reg"]))
	{
		include_once("registration.php");
	}
?>