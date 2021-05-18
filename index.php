<html>

<head>
    <title>United Unies</title>
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
		<?php
			session_start();
			if(!isset($_SESSION["id"]))
			{	
				print
				'<li><a href="index.php?oldal=reg">Regisztráció</a></li>
				<li><a href="index.php?oldal=belep">Belépés</a></li>';
			}
		
			if(isset($_SESSION["id"]))
			{
				print
				'<li><a href="index.php?oldal=Orarend">Órarend</a></li>
				<li><a href="index.php?oldal=kilep">Kilépés</a></li>';
			}
		?>
        </ul>
    </nav>
	
</head>

<body>
	<?php 
		if(isset($_SESSION["id"]))
			print "<div class='not'>Üdvözlünk: " . $_SESSION["id"]."</div>";
	?>
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