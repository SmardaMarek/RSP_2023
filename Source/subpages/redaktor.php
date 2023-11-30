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

$sql1 = "SELECT * FROM prispevky where stav != 'Odesláno k recenzi'";
$result1 = $con->query($sql1);

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
        <h3>Nově podané články</h3>
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

<h3>Stav článků</h3>
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
            foreach ($result1 as $row) {
                echo '<tr>';
                echo '<td>' . $row["nazev"] . '</td>';
                echo '<td>' . $row["autor"] . '</td>';
                echo '<td>' . $row["tema"] . '</td>';
                echo '<td>' . $row["obsah_text"] . '</td>';
                echo '<td>' . $row["stav"] . '</td>';
                echo '<td>' . $row["id_recenzenta"] . '</td>';
                echo '</tr>';
            }
        ?>
</table>
<br>
<a href="../index.php">Odhlásit</a>
</body>
</html>
