<?php
include 'connect.php'; 

if(isset($_POST['submit'])){ 
    $email=$_POST['email'];
    $haslo=$_POST['password'];
    $haslo=md5($haslo) ;
    

    $sql="SELECT * FROM users WHERE email='$email' and haslo='$haslo'";
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
          header("Location: lekarz1.php");
       } else {
        echo "Error nieznany uzytkownik:".$conn->error;
       }
       exit();
    }
    else{
       echo "Wprowadziłeś błędny e-mail lub hasło";
    }
 }
?>
