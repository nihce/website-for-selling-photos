<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/oblikaTKP.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <meta http-equiv="Content-Type" charset="UTF-8">
</head>
<body>
    <?php
        if(isset($_SESSION['uporabnik'])){
            if(isset($_SESSION['izbranaSlika'])){
                if(isset($_SESSION['izbranMaterial'])){
                    switch($_SESSION['izbranMaterial']){
                        case "PLATNO":
                            if(isset($_SESSION['izbranaVelikost'])){
                                header('Location: stran4.php');
                            }else{header('Location: stran3platno.php');}
                            break;
                        case "FOTOPAPIR":
                            if(isset($_SESSION['izbranaVelikost'])){
                                header('Location: stran4.php');
                            }else{header('Location: stran3fotopapir.php');}
                            break;
                        case "ALUMINIJ":
                            if(isset($_SESSION['izbranaVelikost'])){
                                header('Location: stran4.php');
                            }else{header('Location: stran3aluminij.php');}
                            break;
                    }
                }else{header('Location: stran2.php');}
            }else{}
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

    <p class="sredina debelo">NOVO NAROČILO</p>
    <p class="sredina">Izberi sliko, ki jo želiš naročiti!</p>    

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['slika'])){
            $_SESSION['izbranaSlika']=$_POST['slika'];
            header('Location: stran2.php');
        }
    ?>
    <div class="sredina">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <input type="radio" name="slika" value="LJUDJE" checked> <img src="slike/naslovna_ljudje.jpg" style="max-width:300px;"><br>
            <input type="radio" name="slika" value="ZIVALI"> <img src="slike/naslovna_zivali.jpg" style="max-width:300px;"><br>
            <input type="radio" name="slika" value="RASTLINE"> <img src="slike/naslovna_rastline.jpg" style="max-width:300px;"><br>
            <input type="radio" name="slika" value="RAZNO"> <img src="slike/naslovna_razno.jpg" style="max-width:300px;"><br>
            <input name="gumb" type="submit" value="NAPREJ">
        </form>
    </div>
    
    
</body>
</html>