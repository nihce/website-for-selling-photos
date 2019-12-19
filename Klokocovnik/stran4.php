<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/oblikaTKP.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <meta http-equiv="Content-Type" charset="UTF-8">
    <script type="text/javascript" src="JS/skripta.js"></script>
</head>
<body onkeypress="domov(event)">
    <?php
        if(isset($_SESSION['uporabnik'])){
            if(isset($_SESSION['izbranaSlika'])){
                if(isset($_SESSION['izbranMaterial'])){
                    switch($_SESSION['izbranMaterial']){
                        case "PLATNO":
                            if(isset($_SESSION['izbranaVelikost'])){
                                unset($_SESSION['izbranaSlika'],$_SESSION['izbranMaterial'],$_SESSION['izbranaVelikost']);
                            }else{header('Location: stran3platno.php');}
                            break;
                        case "FOTOPAPIR":
                            if(isset($_SESSION['izbranaVelikost'])){
                                unset($_SESSION['izbranaSlika'],$_SESSION['izbranMaterial'],$_SESSION['izbranaVelikost']);
                            }else{header('Location: stran3fotopapir.php');}
                            break;
                        case "ALUMINIJ":
                            if(isset($_SESSION['izbranaVelikost'])){
                                unset($_SESSION['izbranaSlika'],$_SESSION['izbranMaterial'],$_SESSION['izbranaVelikost']);
                            }else{header('Location: stran3aluminij.php');}
                            break;
                    }
                }else{header('Location: stran2.php');}
            }else{header('Location: stran1.php');}
        }else{header('Location: prijava.php');}
    ?>
    <div class="odmik_spodaj">
        <ul class="zavihek">
            <li><a href="Galerija.php">GALERIJA</a></li>
            <li><a href="Projekti.php">PROJEKTI</a></li>
            <li><a href="Cenik.php">CENIK STORITEV</a></li>
            <li class="right"><a href="Kontakt.php">KONTAKT</a></li>
        </ul>
    </div>

    <p class="sredina debelo">Naročilo je bilo uspešno odposlano!</p>
    <p class="sredina">
        <a href="PHPskripte/odjava.php" style="cursor:pointer" class="oranzno">Za izhod in odjavo pritisni tukaj!</a>
    </p>
    <p class="sredina">
        <a href="stran1.php" style="cursor:pointer" class="oranzno">Za novo naročilo pritisni tukaj!</a>
    </p>
    
</body>
</html>