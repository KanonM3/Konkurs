
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
            <li class="topnav-li"><a class="topnav-a" href="">Start<div class="underline"></div></a></li>
            <li class="topnav-li"><a class="topnav-a" href="">Jak to działa<div class="underline"></div></a></li>
            <li class="topnav-li"><a class="topnav-a" href="">Twoje zwolnienia<div class="underline"></div></a></li>


            <li style="position: relative;left:20%;background-color: blueviolet;border-radius: 20px;" class="topnav-li"><a class="topnav-a" href="sing-up.html">Utwórz konto<div class="underline"></div></a></li>
            <li style="position: relative;left:20%;background-color: rgb(212, 0, 255);border-radius: 20px;" class="topnav-li"><a class="topnav-a" href="zaloguj.html">Zaloguj się<div class="underline"></div></a></li>
        </ul>
    </div>
    <div id="main">
        <table id="table1">
                <tr>
                    <th class="tableHeader">Nr:</th>
                    <th class="tableHeader">Imię:</th>
                    <th class="tableHeader">Nazwisko:</th>
                    <th class="tableHeader">Klasa:</th>
                    <th class="tableHeader">Termin zwolnienia:</th>
                    <th class="tableHeader">Powód:</th>
                </tr>
                <?php
while($row=mysqli_fetch_array($result)) 
{
    ?>
    <td><?php echo $row["id"];?></td>
    <td><?php echo $row["imie"];?></td>
    <td><?php echo $row["nazwisko"];?></td>
    <td><?php echo $row["klasa"];?></td>
    <td><?php echo $row["termin_zwolnienia"];?></td>
    <td><?php echo $row["powod_zwolnienia"];?></td>
    
</tr>
<?php
}
?>
        </table>
    </div>
</body>
</html>
