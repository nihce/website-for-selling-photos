<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>	Kontakt </title>
    <link rel="stylesheet" type="text/css" href="css/oblikaKontakt.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <meta name="Kontakt" http-equiv="Content-Type" charset="UTF-8">
    <script type="text/javascript" src="JS/skripta.js"></script>
    <script type="text/javascript" src="AJAX/osebe.js"></script>
</head>
<body onkeypress="domov(event)">
    <div>
        <ul class="zavihek">
            <li><a href="Galerija.php">GALERIJA</a></li>
            <li><a href="Projekti.php">PROJEKTI</a></li>
            <li><a href="Cenik.php">CENIK STORITEV</a></li>
            <li class="right"><a class="active" href="Kontakt.php">KONTAKT</a></li>
        </ul>
    </div>
    
    <div class="sredina" style="margin-top:10ch;">
        <a onclick="naloziMiha()" style="cursor:pointer">DIREKTOR</a>
        &nbsp;ali&nbsp;
        <a onclick="naloziDanusa()" style="cursor:pointer">FOTOGRAFINJA</a>
    </div>
    <div class="sredina" id="menjaj">
        <!--tu notri se bo menjavala koda ki se klice iz streznika-->
    </div>
    
</body>
</html>