<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEvolution</title>
    <link rel="stylesheet" href="style.css">

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
            <li class="topnav-li"><a class="topnav-a" href="">Start<div class="underline"></div></a></li>
            <li class="topnav-li"><a class="topnav-a" href="">Jak to działa<div class="underline"></div></a></li>
            <li class="topnav-li"><a class="topnav-a" href="">Twoje zwolnienia<div class="underline"></div></a></li>


            <li style="position: relative;left:20%;background-color: blueviolet;border-radius: 20px;" class="topnav-li"><a class="topnav-a" href="">Utwórz konto<div class="underline"></div></a></li>
            <li style="position: relative;left:20%;background-color: rgb(212, 0, 255);border-radius: 20px;" class="topnav-li"><a class="topnav-a" href="">Zaloguj się<div class="underline"></div></a></li>
        </ul>
    </div>
    <div id="sign-up-container">
        <h1 style="text-align: center;padding:30px">Utwórz konto</h1>
        <form method="post" action="register.php">
            <p id="input-p">Imię</p>
            <input class="input" id="imie" name="imie" type="text">
            <p id="input-p">Nazwisko</p>
            <input class="input" id="nazwisko" name="nazwisko" type="text">
            <p id="input-p">E-mail</p>
            <input class="input" id="email" name="email" type="text">
            <p id="input-p">Hasło</p>
            <input class="input" id="password" name="password" type="password">
            <br>
            <p id="input-p">Jestem:</p>

            <input style="margin-left:25%;" class="checkbox" type="radio" id="Uczen" value="Uczen" name="typ_użytkownika">
            <label class="checkbox" for="typ_użytkownika">Uczen</label>
            <input class="checkbox" type="radio" id="Nauczyciel" value="Nauczyciel" name="typ_użytkownika">
            <label class="checkbox" for="typ_użytkownika">Nauczyciel </label>
            <input class="checkbox" type="radio" id="Lekarz" value="Lekarz" name="typ_użytkownika">
            <label class="checkbox" for="typ_użytkownika" >Lekarz</label><br>
            <input id="submit" type="submit" name="submit" value="zarejestruj się">
        </form>
    </div>
</body>
</html>