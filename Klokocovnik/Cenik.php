<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>	Cenik </title>
    <link rel="stylesheet" type="text/css" href="css/oblikaCenik.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <meta name="Cenik" http-equiv="Content-Type" charset="UTF-8">
    <script type="text/javascript" src="JS/skripta.js"></script>
</head>
<body onkeypress="domov(event)">
    <div>
        <ul class="zavihek">
            <li><a href="Galerija.php">GALERIJA</a></li>
            <li><a href="Projekti.php">PROJEKTI</a></li>
            <li><a class="active" href="Cenik.php">CENIK STORITEV</a></li>
            <li class="right"><a href="Kontakt.php">KONTAKT</a></li>
        </ul>
    </div>
    <div id="cenik">
       <table id="tabela">
           <tr>
               <th class="levo">Storitev</th>
               <th class="desno">Cena</th> 
           </tr>
           <tr>
               <td class="levo">Družinska fotografija na prostem</td>
               <td class="desno">4€/h *
               </td>
           </tr>
           <tr>
               <td class="levo">Družinska fotografija na domu
               </td>
               <td class="desno">5 €/h *
               </td>
           </tr>
           <tr>
               <td class="levo">Fotografiranje parov na prostem
               </td>
               <td class="desno">4€/h *
               </td>
           </tr>
           <tr>
               <td class="levo">Fotografiranje parov v studiu
               </td>
               <td class="desno"> 7 €/h *
               </td>
           </tr>
           <tr>
               <td class="levo">Fotografiranje dojenčkov  (15 obdelanih slik)
               </td>
               <td class="desno">50€ *
               </td>
           </tr>
           <tr>
               <td class="levo">Fotografiranje športnih/družabnih dogodkov
               </td>
               <td class="desno">4 €/h *
               </td>
           </tr>
           <tr>
               <td class="levo">Fotografiranje zabav
               </td>
               <td class="desno">9 €/h + kavcija **
               </td>
           </tr>
           <tr>
               <td class="levo">Fotografiranje domačih živali
               </td>
               <td class="desno">4 €/h *
               </td>
           </tr>
           <tr>
               <td class="levo">Obdelava slik (ki ste jih posneli vi)
               </td>
               <td class="desno">po dogovoru
               </td>
           </tr>
        </table> 
    </div>
    <div class="opomba">
        <p>
            * Vse cene so okvirnega značaja, saj lahko dejanska cena odstopa glede na lokacijo, čas in zahtevnost izvedbe. Informativni izračun in končna cena se določi preko pisnega kontakta s ponudnikom. V ceno je že vključena obdelava slik.
        </p>
        <p>
            * * Kavcija se po opravljeni izvedbi povrne naročniku. To se ne zgodi v primeru, če je poškodovana fotografska oprema in je za to kriv naročnik. Naročnik prevzema odgovornost za vse udeležene pri dogodku.
        </p>
    </div>
    <p class="TKPprotokol">
        <a class="TKP" href="prijava.php">Pritisnite tu za naročilo!</a>
    </p>
    <p class="TKPprotokol">
        <a class="TKP" href="PHPskripte/odjava.php" style="cursor:pointer">Za odjavo iz računa pritisni tu!</a>
    </p>
    <p class="TKPprotokol">
        <a class="TKP" href="novUporabnik.php" style="cursor:pointer">Nov uporabnik.</a>
    </p>
</body>
</html>