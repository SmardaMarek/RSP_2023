<?php
include '../connect.php';
$id_uzivatele = isset($_GET['id']) ? intval($_GET['id']) : 0;
$sql = "SELECT * FROM prispevky WHERE id_recenzenta = '$id_uzivatele' AND stav = 'Posláno recenzentovi'";
$result = $con->query($sql);

?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./autorStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" type="image/x-icon" href="fav.png" class="fav">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Handjet:wght@300&family=Press+Start+2P&family=Roboto&display=swap" rel="stylesheet">
    <title>| Recentent</title>
</head>
<body>
<h3>Clanky k recenzi</h3>
<table border="1">
    <tr>
        <th>Autor</th>
        <th>Název</th>
        <th>Téma</th>
        <th>Text obsahu</th>
        <th>Posudek</th>
    </tr>
    <?php foreach ($result as $row){ ?>
        <tr>
            <td><?=$row["autor"]?></td>
            <td><?php echo $row['nazev']; ?></td>
            <td><?php echo $row['tema']; ?></td>
            <td><?php echo $row['obsah_text']; ?></td>
            <td><a href="recenzent/posudek.php?id_prispevku=<?php echo $row['id_prispevku']; ?>&id_uzivatele=<?php echo $id_uzivatele; ?>">Recenzní posudek</a></td>

        </tr>
    <?php }; ?>
</table>
<br>
<a href="../index.php">Odhlásit</a>
</html>