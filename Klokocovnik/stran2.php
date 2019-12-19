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
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nazaj'])){
            unset($_SESSION['izbranaSlika']);
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
                    }else{}
                }else{header('Location: stran1.php');}
            }else{header('Location: prijava.php');}
        }
    ?>
    <div class="odmik_spodaj">
        <ul class="zavihek">
            <li><a href="Galerija.php">GALERIJA</a></li>
            <li><a href="Projekti.php">PROJEKTI</a></li>
            <li><a href="Cenik.php">CENIK STORITEV</a></li>
            <li class="right"><a href="Kontakt.php">KONTAKT</a></li>
        </ul>
    </div>

    <p class="sredina debelo">Izberi material!</p>
    <p>&nbsp</p>
    
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['material'])){
            $_SESSION['izbranMaterial']=$_POST['material'];
            switch($_SESSION['izbranMaterial']){
                case "PLATNO":
                    header('Location: stran3platno.php');
                    break;
                case "FOTOPAPIR":
                    header('Location: stran3fotopapir.php');
                    break;
                case "ALUMINIJ":
                    header('Location: stran3aluminij.php');
                    break;
                default:
            }
        }
    ?>
    <div class="sredina">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <input type="radio" name="material" value="ALUMINIJ" checked> <img src="slike/platno.jpg" style="max-width:300px;"><br>
            <input type="radio" name="material" value="FOTOPAPIR"> <img src="slike/fotopapir.jpg" style="max-width:300px;"><br>
            <input type="radio" name="material" value="PLATNO"> <img src="slike/aluminij.jpg" style="max-width:300px;"><br>
            <input name="gumb" type="submit" value="NAPREJ">
        </form>
    </div>
    <div class="sredina">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <input name="nazaj" type="submit" value="NAZAJ">
        </form>
    </div>
</body>
</html>