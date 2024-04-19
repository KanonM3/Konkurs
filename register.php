<?php 

include 'connect.php';

if(isset($_POST['signUp'])){
    $imie=$_POST['fName'];
    $nazwisko=$_POST['lName'];
    $email=$_POST['email'];
    $haslo=$_POST['password'];
    $haslo=md5($haslo);
    $uzytkownik=$_POST['uzytkownik'];

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

if(isset($_POST['signIn'])){
   $email=$_POST['email'];
   $haslo=$_POST['haslo'];
   $haslo=md5($haslo) ;
   
   $sql="SELECT * FROM users WHERE email='$email' and password='$haslo'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']=$row['email'];
    header("Location: homepage.php");
    exit();
   }
   else{
    echo "Not Found, Incorrect Email or Password";
   }

}
?>