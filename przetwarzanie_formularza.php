<?php
include 'connect.php';
include 'connect.php';

if(isset($_POST['submit'])){
    $imie=$_POST['imie'];
    $nazwisko=$_POST['nazwisko'];
    $powod_zwolnienia=$_POST['powod'];
    $klasa=$_POST['klasa'];
    $nazwisko=$_POST['nazwisko'];

     $checkEmail="SELECT * From users where email='$email'";
     $result=$conn->query($checkEmail);
     if($result->num_rows>0){
        echo "Email Address Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO users(imie,nazwisko,email,haslo,uzytkownik)
                       VALUES ('$imie','$nazwisko','$email','$haslo','$uzytkownik')";
            if($conn->query($insertQuery)==TRUE){
                header("location: zaloguj.php");
            }
            else{
                echo "Error:".$conn->error;
            }
     }
   

}
?>
