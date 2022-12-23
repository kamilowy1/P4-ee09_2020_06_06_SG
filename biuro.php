<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wycieczki krajoznawcze</title>
    <link rel="stylesheet" type="text/css" href="styl4.css"/>
</head>
<body>
    <div id="baner">
     <h1> WITAMY W BIURZE PODRÓŻY </h1>
    </div>

      <div id="dane">
      <h3> ARCHIWUM WYCIECZEK </h3>
<?php
// utworzenie zmiennych

$server = "localhost";
$user = "root";
$passwd = "";
$dbname = "egzamin4";

$conn = mysqli_connect($server,$user,$passwd,$dbname);

/*
if (!$conn){
    die ("fatal error:".mysqli_error($conn));
} echo "jest okej";
*/

$zapytanie = "SELECT id, cel, cena FROM wycieczki WHERE dostepna = '0'";
$sql = mysqli_query($conn,$zapytanie);

while ($wynik = mysqli_fetch_row($sql)){
    echo $wynik[0] ."." . " ". $wynik[1] . " ". "cena:". " ". $wynik[2] . "<br>";
}

?>
      </div>
         
         <div id="lewy">
        <h3> NAJTANIEJ... </h3>
        <table>
            <tr>
                <td>Włochy</td>
                <td> od 1200 zł </td>
            </tr>
            <tr>
                <td> Francja </td>
                <td> od 1200 zł </td>
            </tr>
            <tr>
                <td> Hiszpania </td>
                <td> od 1400 zł </td>
            </tr>
        </table>
         </div>

           <div id="srodkowy">
            <h3> TU BYLIŚMY </h3>
<?php

$zapytanie2 = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis DESC";
$sql2 = mysqli_query($conn,$zapytanie2);

while($wynik2 = mysqli_fetch_row($sql2)){
    echo "<img src='$wynik2[0]' alt='$wynik2[1]'/>";
}

mysqli_close($conn);

?>
           </div>

             <div id="prawy">
             <h3> SKONTAKTUJ SIĘ </h3>
             <a href="wycieczki@wycieczki.pl">napisz do nas</a>
             <p>telefon: 555666777</p>
             </div>

               <div id="stopka">
               <p>Stronę wykonał: 000000000</p>
               </div>

</body>
</html>