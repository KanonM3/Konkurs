<?php
session_start();

include 'connect_dane.php';

?>



<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEvolution</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="favicon.png">

    <!--Fonts-->
    <link rel="icon" type="image/png" href="icons/iPhone logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Text:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">

</head>
<body>
    <div id="topnav">
        <ul id="topnav-ul">
            <li style="position: absolute;font-weight: 750;letter-spacing: 5px;left:50px;" class="topnav-li">PEvolution</li>
            <li class="topnav-li"><a class="topnav-a" href="strona ucznia.php">Start<div class="underline"></div></a></li>
            <li class="topnav-li"><a class="topnav-a" href="twoje zwolnienia.php">Twoje zwolnienia<div class="underline"></div></a></li>



            <li style="position: relative;left:20%;background-color: rgb(212, 0, 255);border-radius: 20px;" class="topnav-li"><a class="topnav-a" href="logout.php">Wyloguj się<div class="underline"></div></a></li>
        </ul>
    </div>
    <div id="buttons">
        <a class="button2" href="uczen.php">Uczeń</a>
        <a class="button2" href="dodaj zwolnienie1.php">Dodaj zwolnienie</a>
        <a class="button2" href="twoje zwolnienia.php">Twoje zwolnienia</a>
    </div>
    <div id="main2">
        <h1 id="main2-h1">Zwolnienia</h1>
        <p style="font-weight: 700;" id="main2-p">Uczeń:</p>
        <p id="main2-p">
<?php
echo'Mateusz';
?>


        </p>
        <p style="font-weight: 700;" id="main2-p">Powód zwolnienia:</p>
        <p id="main2-p">

        <?php 
        echo'Złamana noga';
        
        ?>
       
 </p>
        <p style="font-weight: 700;" id="main2-p">Termin:</p>
        <p id="main2-p">
            <?php 
            
            echo'24.04.2024-25.06.2024';
            
            
            ?>
  




        </p><br>
    </div>
</body>
</html>