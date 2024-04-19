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
            <li class="topnav-li"><a class="topnav-a" href="strona ucznia.html">Start<div class="underline"></div></a></li>
            <li class="topnav-li"><a class="topnav-a" href="Jak to działa.html">Jak to działa<div class="underline"></div></a></li>
            <li class="topnav-li"><a class="topnav-a" href="twoje zwolnienia.html">Twoje zwolnienia<div class="underline"></div></a></li>


            <li style="position: relative;left:20%;background-color: blueviolet;border-radius: 20px;" class="topnav-li"><a class="topnav-a" href="">Utwórz konto<div class="underline"></div></a></li>
            <li style="position: relative;left:20%;background-color: rgb(212, 0, 255);border-radius: 20px;" class="topnav-li"><a class="topnav-a" href="">Zaloguj się<div class="underline"></div></a></li>
        </ul>
    </div>
    <div id="buttons">
        <a class="button2" href="uczeń.html">Uczeń</a>
        <a class="button2" href="#">Dodaj zwolnienie</a>
        <a class="button2" href="twoje zwolnienia.html">Twoje zwolnienia</a>
    </div>
    <div id="main2" style="width: 50%;">
        <form method="post">
            <h1 style="font-size: 20px;padding:20px;text-align: center;margin-bottom:40px">Dodaj zwolnienie poprzez formularz do wychowawcy</h1>
            <p id="dodajZwolnienie-p" id="main2-p">Imię</p>
            <input class="input2" id="imie" name="imie" type="text">
            <p id="dodajZwolnienie-p" id="main2-p">Nazwisko</p>
            <input class="input2" id="nazwisko" name="nazwisko" type="text">
            <p id="dodajZwolnienie-p" id="main2-p">Powód</p>
            <input class="input2" id="powód" name="powód" type="text">
            <p id="dodajZwolnienie-p" id="main2-p">Klasa</p>
            <input class="input2" id="klasa" name="klasa" type="text">
            <p id="dodajZwolnienie-p" id="main2-p">Początek i koniec zwolnienia<span style="font-size:12px;color:grey">( np. 24.04.2024-24.05.2024)</span></p>
            <input class="input2" id="data" name="data" type="text">
            <input id="submit" type="submit" value="wyślij">
        </form>
    </div>
</body>
</html>