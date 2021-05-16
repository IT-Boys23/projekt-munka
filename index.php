<html>

<head>
    <title>UNI</title>
    <meta charset="UTF-8">
    <link href="design.css" rel="stylesheet" type="text/css">
    <script src="menu.js"></script>
    <img src="Images/log.png" width="750">
    <nav>
        <div class="dot"></div>
        <ul>
            <li><a href="index.php?oldal=main">Kezdőlap</a></li>
            <li><a href="index.php?oldal=Epuletek">Épületek</a></li>
            <li><a href="index.php?oldal=Nev">Nevezetességek</a></li>
            <li><a href="index.php?oldal=reg">Regisztráció</a></li>
            <li><a href="index.php?oldal=belep">Belépés</a></li>
            <li><a href="index.php?oldal=Orarend">Órarend</a></li>
        </ul>
    </nav>

</head>

<body>

    <div id="lap">
    <?php
			if(isset($_GET["oldal"]))
			{
				$o = $_GET["oldal"];
				$o .= ".php";
				include($o);
			}
			else
				include("main.php");
			?>
    </div>

</body>




</html>