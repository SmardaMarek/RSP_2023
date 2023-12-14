<?php
include '../../connect.php';
$id_uzivatele = isset($_GET['id']) ? intval($_GET['id']) : 0;
$sql = "SELECT p.*, (r.aktualnost + r.zajimavost_prinosnost + r.originalita + r.odborna_uroven + r.jazykova_a_stylova_uroven) / 5 as prumer_hodnoceni FROM prispevky p left join recenze r on p.id_prispevku = r.id_prispevku WHERE p.autor = '$id_uzivatele'";
$result = $con->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./autorStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" type="image/x-icon" href="../../images/fav.png" class="fav">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Handjet:wght@300&family=Press+Start+2P&family=Roboto&display=swap" rel="stylesheet">
    <title>| Autor</title>
</head>
<body>
   <center>
   <div class="container">
      <div style="display: flex; flex-flow:row">
   <img src="../../images/text.png" alt="">
   <div class="idk" style="display: flex; flex-flow:row; margin-top:auto; margin-bottom:auto">
   <div style="margin-right: 5px; margin-top:5px">Jste přihlášen jako <b>autor</b></div>
   <a  href="../../index.php"><div class="logout">Odhlásit</div></a></div>
</div>
   <hr>
    <h1>Mé příspěvky</h1>
    <hr>
    <br>
    <div style="overflow-x:auto;">
    <table>
    <tr>
        <th>Název</th>
        <th>Téma</th>
        <th>Text obsahu</th>
        <th>Stav</th>
        <th>Hodnocení</th>
    </tr>
    <?php foreach ($result as $row){ ?>
        <tr>
            <td><?php echo $row['nazev']; ?></td>
            <td><?php echo $row['tema']; ?></td>
            <td><?php echo $row['obsah_text']; ?></td>
            <td><?php echo $row['stav']; ?></td>
            <td><?php echo round($row['prumer_hodnoceni'], 2); ?></td>
        </tr>
    <?php }; ?>
       </table>
       <a href="./autorAdd.php">
       <button class="add">Přidat článek</button>
      </a>
      </div>
   </div> 
   <br>
   <hr>
</center>
</body>
</html>