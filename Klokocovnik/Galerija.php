<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>	Galerija </title>
    <link rel="stylesheet" type="text/css" href="css/oblikaGalerija.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <meta name="Galerija" http-equiv="Content-Type" charset="UTF-8">
</head>
<body>
    <div class="odmik_spodaj">
        <ul class="zavihek">
            <li><a class="active" href="Galerija.php">GALERIJA</a></li>
            <li><a href="Projekti.php">PROJEKTI</a></li>
            <li><a href="Cenik.php">CENIK STORITEV</a></li>
            <li class="right"><a href="Kontakt.php">KONTAKT</a></li>
        </ul>
    </div>




    <div class="gallery responsive">
        <a href="Ljudje.php">
            <div class="desc">LJUDJE</div>
            <img src="slike/naslovna_ljudje.jpg" alt="LJUDJE" width="1100" height="733">
        </a>
    </div>

    <div class="gallery responsive">
        <a href="Zivali.php">
            <div class="desc">ŽIVALI</div>
            <img src="slike/naslovna_zivali.jpg" alt="ŽIVALI" width="1100" height="733">
        </a>
    </div>

    <div class="gallery responsive">
        <a href="Rastline.php">
            <div class="desc">RASTLINE</div>
            <img src="slike/naslovna_rastline.jpg" alt="RASTLINE" width="1100" height="733">
        </a>
    </div>

    <div class="gallery responsive">
        <a href="Razno.php">
            <div class="desc">RAZNO</div>
            <img src="slike/naslovna_razno.jpg" alt="RAZNO" width="1100" height="733">
        </a>
    </div>



    <div class="clearfix"></div>
</body>
</html>