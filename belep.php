<html>
<body>
    <h1>Belépés</h1>    
        <form class="registration" method="POST">
        <h3>Neptunkód:</h3>
        <div class="input-container">
            <i class="icon"></i>
            <input class="input-field" type="text" placeholder="Neptunkód" name="neptuncode">
        </div>
        <h3>Jelszó:</h3> 
        <div class="input-container">
            <i class="icon"></i>
            <input class="input-field" type="password" placeholder="Jelszó" name="password">
        </div>
        <button type="submit" class="bttn" name = 'be'>Login</button>
        </form>
</body>
</html>

<?php
	include "connection.php";
	if(isset($_POST["be"]))
	{
		include_once("login.php");
	}
?>