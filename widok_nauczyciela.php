
<?php
require_once('config/db.php');
$query="selest * from users";

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<tabel>
<tr>
    <tr>
        <td>Nr.</td>     
        <td>Imie</td>
        <td>Nazwisko</td>
        <td>Klasa</td>
        <td>Termin zwolnienia</td>
        <td>Powod zwolnienia</td>
        
    </tr>
<?php
while($row=mysqli_fetch_array($result)) 
{
    ?>
    <td><?php echo $row["id"];?></td>
    <td><?php echo $row["imie"];?></td>
    <td><?php echo $row["nazwisko"];?></td>
    <td><?php echo $row["termin_zwolnienia"];?></td>
    <td><?php echo $row["powod_zwolnienia"];?></td>
    
</tr>
<?php
}
?>
</tabel>
</body>
</html>