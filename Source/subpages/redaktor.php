<?php
include '../connect.php';
$sql = "SELECT * FROM prispevky WHERE stav = 'Odesláno k recenzi' AND id_recenzenta IS NULL";
$result = $con->query($sql);

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["priradit"])) {
    // Zpracování odeslaného formuláře
    $id_recenzenta = $_POST["id_recenzenta"];
    $id_prispevku = $_POST["id_prispevku"];
    $sql_update = "UPDATE prispevky SET id_recenzenta = $id_recenzenta, stav = 'Posláno recenzentovi' WHERE id_prispevku = $id_prispevku";
    $result_update = $con->query($sql_update);
    if($result){
        echo "<script>alert('Rececenze úspěšná!');</script>";
        header("Location: redaktor.php");
        }
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["vratitAutorovi"])) {
    $id_prispevku = $_POST["id_prispevku"];
    $sqlVratit = "UPDATE prispevky SET stav = 'Vráceno autorovi' WHERE id_prispevku = $id_prispevku";
    $resultVratit = $con->query($sqlVratit);
    if($result){
        echo "<script>alert('Vráceno autorovi!');</script>";
        header("Location: redaktor.php");
        }
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["schvalit"])) {
    $id_prispevku = $_POST["id_prispevku"];
    $sqlVratit = "UPDATE prispevky SET stav = 'Schváleno' WHERE id_prispevku = $id_prispevku";
    $resultVratit = $con->query($sqlVratit);
    if($result){
        echo "<script>alert('Schváleno!');</script>";
        header("Location: redaktor.php");
        }
}

$sql1 = "SELECT p.*, (r.aktualnost + r.zajimavost_prinosnost + r.originalita + r.odborna_uroven + r.jazykova_a_stylova_uroven) / 5 as prumer_hodnoceni FROM prispevky p left join recenze r on p.id_prispevku = r.id_prispevku where p.stav not in ('Odesláno k recenzi', 'Vráceno autorovi', 'Schváleno')";
$result1 = $con->query($sql1);

?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./autorStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="./recenzent/recenzentStyle.css">
    <link rel="icon" type="image/x-icon" href="./recenzent/fav.png" class="fav">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Handjet:wght@300&family=Press+Start+2P&family=Roboto&display=swap" rel="stylesheet">
<title>| Redaktor</title>
</head>
<body>
    <center>
<div class="container">
      <div style="display: flex; flex-flow:row">
   <img src="../images/text.png" alt="">
   <div class="idk" style="display: flex; flex-flow:row; margin-top:auto; margin-bottom:auto">
   <div style="margin-right: 5px; margin-top:8px">Jste přihlášen jako <b>autor</b></div>
   <a  href="../index.php"><div class="logout">Odhlásit</div></a></div>
</div>
    <hr>
    <br>
    <div style="overflow-x:auto;">
        <h1>Nově podané články</h1>
        <table border="1">
            <tr>
                <th>Název</th>
                <th>Autor</th>
                <th>Téma</th>
                <th>Obsah</th>
                <th>Stav</th>
                <th>ID Recenzenta</th>
            </tr>
            <?php 
                foreach ($result as $row) {
                    echo '<tr>';
                    echo '<td>' . $row["nazev"] . '</td>';
                    echo '<td>' . $row["autor"] . '</td>';
                    echo '<td>' . $row["tema"] . '</td>';
                    echo '<td>' . $row["obsah_text"] . '</td>';
                    echo '<td>' . $row["stav"] . '</td>';
                    echo '<td>';
                    // Formulář pro každý příspěvek
                    echo '<form method="post">';
                    echo '<select name="id_recenzenta">';
                    for ($i = 1; $i <= 5; $i++) {
                        echo '<option value="' . $i . '">' . $i . '</option>';
                    }
                    echo '</select>';
                    // Přidání skrytého pole pro id_prispevku
                    echo '<input type="hidden" name="id_prispevku" value="' . $row["id_prispevku"] . '">';
                    // Tlačítko Přiřadit pro tento příspěvek
                    echo '<button type="submit" name="priradit">Přiřadit</button>';
                    echo '</form>';
                    echo '</td>';
                    echo '</tr>';
                }
            ?>
        </table>
<hr>
<h1>Stav článků</h1>
<table border="1">
        <tr>
            <th>Název</th>
            <th>Autor</th>
            <th>Téma</th>
            <th>Obsah</th>
            <th>Stav</th>
            <th>ID Recenzenta</th>
            <th>Hodnocení</th>
            <th>Vrátit</th>
            <th>Schválit</th>
        </tr>
        <?php
            foreach ($result1 as $row) {
                echo '<tr>';
                echo '<td>' . $row["nazev"] . '</td>';
                echo '<td>' . $row["autor"] . '</td>';
                echo '<td>' . $row["tema"] . '</td>';
                echo '<td>' . $row["obsah_text"] . '</td>';
                echo '<td>' . $row["stav"] . '</td>';
                echo '<td>' . $row["id_recenzenta"] . '</td>';
                echo '<td>' . round($row["prumer_hodnoceni"], 2) . '</td>';
                echo '<td>';
                echo '<form method="post">';
                echo '<input type="hidden" name="id_prispevku" value="' . $row["id_prispevku"] . '">';
                echo '<button type="submit" name="vratitAutorovi">Vrátit autorovi</button>';
                echo '</form>';
                echo '</td>';
                echo '<td>';
                echo '<form method="post">';
                echo '<input type="hidden" name="id_prispevku" value="' . $row["id_prispevku"] . '">';
                echo '<button type="submit" name="schvalit">Schválit</button>';
                echo '</form>';
                echo '</td>';
                echo '</tr>';
            }
        ?>
</table>
<br>
<hr>
</body>
</html>
