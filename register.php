<?php 

include 'connect.php';

if(isset($_POST['submit'])){
    $imie=$_POST['imie'];
    $nazwisko=$_POST['nazwisko'];
    $email=$_POST['email'];
    $haslo=$_POST['password'];
    $haslo=md5($haslo);
    $uzytkownik=$_POST['typ_użytkownika'];

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