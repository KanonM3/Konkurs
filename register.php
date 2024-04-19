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
                header("location: index.php");
            }
            else{
                echo "Error:".$conn->error;
            }
     }
   

}


if(isset($_POST['submit2'])){ 
    $email=$_POST['email'];
    $haslo=$_POST['password'];
    $haslo=md5($haslo) ;
    
    $sql="SELECT * FROM users WHERE email='$email' and password='$haslo'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
       session_start();
       $row=$result->fetch_assoc();
       $_SESSION['email']=$row['email'];
       $uzytkownik = $row['uzytkownik'];
       if($uzytkownik == 'Uczen') {
          header("Location: uczen.php");
       } elseif ($uzytkownik == 'Nauczyciel') {
          header("Location: nauczyciel.php");
       } elseif ($uzytkownik == 'Lekarz') {
          header("Location: lekarz.php");
       } else {
        echo "Error nieznany uzytkownik:".$conn->error;
       }
       exit();
    }
    else{
       echo "Not Found, Incorrect Email or Password";
    }
 }
 
?>