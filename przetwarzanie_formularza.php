<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $imie=$_POST['imie'];
    $nazwisko=$_POST['nazwisko'];
    $powod_zwolnienia=$_POST['powod_zwolnienia'];
    $klasa=$_POST['klasa'];
    $termin_zwolnienia=$_POST['termin_zwolnienia'];


    $insertQuery="INSERT INTO dane_uczniow(imie,nazwisko,klasa,termin_zwolnienia,powod_zwolnienia)
                VALUES ('$imie','$nazwisko','$klasa','$termin_zwolnienia','$powod_zwolnienia')";

                        if($conn->query($insertQuery)==TRUE){
                             header("location: lekarz1.php");
                                        }
                                        else{
                            echo "Error:".$conn->error;
    }


}


?>
