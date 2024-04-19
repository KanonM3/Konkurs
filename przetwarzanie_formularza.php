<?php

include 'connect.php';

if(isset($_POST['submit'])){
    $imie=$_POST['imie'];
    $nazwisko=$_POST['nazwisko'];
    $powod_zwolnienia=$_POST['powod'];
    $klasa=$_POST['klasa'];
    $termin_zwolnienia=$_POST['termin_zwolnienia'];

        $insertQuery="INSERT INTO dane_uczniow(imie,nazwisko,powod,klasa,termin_zwolnienia)
                       VALUES ('$imie','$nazwisko','$powod_zwolnienia','$klasa','$termin_zwolnienia')";
     }
   


?>
