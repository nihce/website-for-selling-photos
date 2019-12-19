<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title> RASTLINE </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="css/oblikaRastline.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <meta name="Rastline" http-equiv="Content-Type" charset="UTF-8">
    <script type="text/javascript" src="JS/skripta.js"></script>
</head>
<body onkeypress="domov(event)">
    <div class="odmik_spodaj">
        <ul class="zavihek">
            <li><a class="active" href="Galerija.php">GALERIJA</a></li>
            <li><a href="Projekti.php">PROJEKTI</a></li>
            <li><a href="Cenik.php">CENIK STORITEV</a></li>
            <li class="right"><a href="Kontakt.htphpml">KONTAKT</a></li>
        </ul>
    </div>
    
    <div class="w3-row-padding">

        <div class="w3-panel w3-quarter">
            <img src="slike/rastline/001.jpg" style="width:100%;cursor:pointer;" onclick="onClick(this)" class="w3-hover-opacity w3-hover-grayscale">
        </div>
        <div class="w3-panel w3-quarter">
            <img src="slike/rastline/002.jpg" style="width:100%;cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity w3-hover-grayscale">
        </div>
        <div class="w3-panel w3-quarter">
            <img src="slike/rastline/003.jpg" style="width:100%;cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity w3-hover-grayscale">
        </div>
        <div class="w3-panel w3-quarter">
            <img src="slike/rastline/004.jpg" style="width:100%;cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity w3-hover-grayscale">
        </div>
        <div class="w3-panel w3-quarter">
            <img src="slike/rastline/005.jpg" style="width:100%;cursor:pointer;" onclick="onClick(this)" class="w3-hover-opacity w3-hover-grayscale">
        </div>
        <div class="w3-panel w3-quarter">
            <img src="slike/rastline/006.jpg" style="width:100%;cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity w3-hover-grayscale">
        </div>
        <div class="w3-panel w3-quarter">
            <img src="slike/rastline/007.jpg" style="width:100%;cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity w3-hover-grayscale">
        </div>
        <div class="w3-panel w3-quarter">
            <img src="slike/rastline/008.jpg" style="width:100%;cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity w3-hover-grayscale">
        </div>
        <div class="w3-panel w3-quarter">
            <img src="slike/rastline/009.jpg" style="width:100%;cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity w3-hover-grayscale">
        </div>
        <div class="w3-panel w3-quarter">
            <img src="slike/rastline/010.jpg" style="width:100%;cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity w3-hover-grayscale">
        </div>
        
    </div>

    
    <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
        <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
        <div class="w3-modal-content w3-animate-zoom">
            <img id="img01" style="width:100%">
        </div>
    </div>

    <script>
        function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
        }
    </script>
            
</body>
</html>
