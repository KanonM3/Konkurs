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
            <li  id="PElogo"style="position: absolute;font-weight: 750;letter-spacing: 5px;left:50px;" class="topnav-li">PEvolution</li>
            <li class="topnav-li"><a class="topnav-a" href="">Start<div class="underline"></div></a></li>
            <li class="topnav-li"><a class="topnav-a" href="">Jak to działa<div class="underline"></div></a></li>
            <li class="topnav-li"><a class="topnav-a" href="">Twoje zwolnienia<div class="underline"></div></a></li>


            <li style="position: relative;left:20%;background-color: blueviolet;border-radius: 20px;" class="topnav-li"><a class="topnav-a" href="">Utwórz konto<div class="underline"></div></a></li>
            <li style="position: relative;left:20%;background-color: rgb(212, 0, 255);border-radius: 20px;" class="topnav-li"><a class="topnav-a" href="">Zaloguj się<div class="underline"></div></a></li>
        </ul>
    </div>
    <div id="login-container">
        <form method="post" action="login.php">
            <h1 id="login-h1">Zaloguj się</h1>
            <p style="margin-top:50px">E-mail</p>
            <input class="input2" id="email" name="email" type="text">
            <p style="margin-top:50px">Hasło</p>
            <input class="input2" id="password" name="password" type="password" >
            <input id="submit" style="width: 60%;margin-left:5%" name="submit" type="submit" value="zaloguj-się">
        </form>
    </div>
</body>
</html>