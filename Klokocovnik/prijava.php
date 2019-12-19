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
    <style>
        input[type=password]{
            border: 3px solid #df7a00;
            border-radius: 10px;
            margin: 10px;
            padding: 3px;
            width: 20ch;
            background-color: #232324;
        }
        input[type=password]:focus{
            background-color: #df7a00;
        }
    </style>
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
            }else{header('Location: stran1.php');}
        }else{}
    ?>
    <div class="odmik_spodaj">
        <ul class="zavihek">
            <li><a href="Galerija.php">GALERIJA</a></li>
            <li><a href="Projekti.php">PROJEKTI</a></li>
            <li><a href="Cenik.php">CENIK STORITEV</a></li>
            <li class="right"><a href="Kontakt.php">KONTAKT</a></li>
        </ul>
    </div>
    
<?php
    $napaka=0;
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['pass'])){
        $up=$_POST['username'];
        $ge=$_POST['pass'];
        $povezava = mysqli_connect("localhost","root","","TKPsql")
        or die("Povezava ni uspela. " . mysqli_error());
        mysqli_set_charset($povezava, "utf8");
        $SQLstavek2="SELECT * FROM uporabniki WHERE u='$up' AND g='$ge'";
        $rezultat=mysqli_query($povezava, $SQLstavek2) or die("Povezava ni uspela. ".mysql_error());
        if(mysqli_num_rows($rezultat)!=0){
            $_SESSION['uporabnik']=$up;
            $napaka=0;
            header('Location: stran1.php');
        }else{$napaka=1;}
        mysqli_close($povezava);
    }
?>
<div>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <b>Vnesi uporabnisko ime: </b><input name="username" type="text" required>
        <b>Vnesi geslo: </b><input name="pass" type="password" required>
        <input name="gumb" type="submit" value="POTRDI">
    </form>
</div>
<div>
    <?php
        if($napaka==1){
            echo "Napacno ime ali geslo! Prosim ponovno vnesi.";
            }
    ?>
</div>
    
</body>
</html>