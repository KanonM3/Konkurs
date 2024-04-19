<?php
require_once('connect_dane.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    $klasa = $_POST["klasa"];
    $termin_zwolnienia = $_POST["termin_zwolnienia"];
    $powod_zwolnienia = $_POST["powod_zwolnienia"];

    
    $query = "INSERT INTO dane_uczniow (imie, nazwisko, klasa, termin_zwolnienia, powod_zwolnienia) VALUES ('$imie', '$nazwisko', '$klasa', '$termin_zwolnienia', '$powod_zwolnienia')";

    if (mysqli_query($conn, $query)) {
        echo "Dane zostały dodane poprawnie.";
    } else {
        echo "Błąd: " . $query . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
