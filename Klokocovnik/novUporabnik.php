<?php
session_start();
$povezava = mysqli_connect("localhost","root","","TKPsql") or die("Povezava ni uspela. " . mysqli_error());
mysqli_set_charset($povezava, "utf8");
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ime']) && isset($_POST['geslo'])){
    $novU=$_POST['ime'];
    $novG=$_POST['geslo'];
    $SQLstavek1="INSERT INTO uporabniki (u, g)
        VALUES ('$novU', '$novG')";
    if (!mysqli_query($povezava, $SQLstavek1)){
        die('Napaka: ' . mysqli_error());
    }
    header('Location: prijava.php');
}
mysqli_close($povezava);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>	Nov uporabnik! </title>
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
        <div class="odmik_spodaj">
            <ul class="zavihek">
                <li><a href="Galerija.php">GALERIJA</a></li>
                <li><a href="Projekti.php">PROJEKTI</a></li>
                <li><a href="Cenik.php">CENIK STORITEV</a></li>
                <li class="right"><a href="Kontakt.php">KONTAKT</a></li>
            </ul>
        </div>
		<h1>Registracija novega uporabnika:</h1>
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<b>Uporabniško ime: </b>
			<br/>
			<input type="text" name="ime" required>
			<br/>
			<b>Geslo: </b>
			<br/>
			<input type="password" name="geslo" required>
			<br/>
			<input type="submit" value="Pošlji">
		</form>
	</body>
</html>