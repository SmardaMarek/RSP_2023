<?php
include '../../connect.php';
$id_prispevku = isset($_GET['id_prispevku']) ? intval($_GET['id_prispevku']) : 0;
$id_uzivatele = isset($_GET['id_uzivatele']) ? intval($_GET['id_uzivatele']) : 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Získání hodnot z formuláře
    $aktualnost = isset($_POST['aktualnost']) ? intval($_POST['aktualnost']) : null;
    $zajimavost = isset($_POST['zajimavost']) ? intval($_POST['zajimavost']) : null;
    $originalita = isset($_POST['originalita']) ? intval($_POST['originalita']) : null;
    $uroven = isset($_POST['uroven']) ? intval($_POST['uroven']) : null;
    $styl = isset($_POST['styl']) ? intval($_POST['styl']) : null;
    $vyjadreni = isset($_POST['vyjadreni']) ? htmlspecialchars($_POST['vyjadreni']) : null;
    $datum = date("Y-m-d H:i:s");

    $sql_insert = "INSERT INTO recenze (id_prispevku, id_recenzenta, id_recenze, aktualnost, zajimavost_prinosnost, 
    originalita, odborna_uroven, jazykova_a_stylova_uroven, datum, vyjadreni) 
    VALUES ('$id_prispevku', '$id_uzivatele', null,'$aktualnost', '$zajimavost','$originalita', '$uroven', '$styl','$datum','$vyjadreni')";
                  $result = mysqli_query($con, $sql_insert);

                  if (!$result) {
                      echo mysqli_error($con);
                  }
                  $sql_update = "UPDATE prispevky SET stav = 'Zrecenzováno' WHERE id_prispevku = $id_prispevku";
                  $result2 = mysqli_query($con, $sql_update);
                  if($result && $result2){
                    echo "<script>alert('Rececenze úspěšná!');</script>";
                    header("Location: ../recenzent/recenzent.php");
                  }
}
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="posudek.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" type="image/x-icon" href="fav.png" class="fav">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Handjet:wght@300&family=Press+Start+2P&family=Roboto&display=swap" rel="stylesheet">
    <title>| Recenzent - posudek</title>
</head>
<body>
<div class="container">
      <div>
   <img src="./text.png" alt="">
   Jste přihlášen jako <b>recenzent</b>
   <a  href="../../index.php">Odhlásit</a> <br>
</div>
<hr>
<h1 class="text-center">Recenzní formulář</h1>
<div class="posudek">
<div class="frame">
    <br>
<form method="post">
        <label for="hodnoceni1" style="margin-top: 10px;">Aktuálnost</label>
        <input class="autorN" type="number" name="aktualnost" id="aktualnost" min="1" max="5" required><br><br>

        <label for="hodnoceni2">Zajímavost/Přínosnost</label>
        <input class="autorN" type="number" name="zajimavost" id="zajimavost" min="1" max="5" required><br><br>

        <label for="hodnoceni3">Originalita</label>
        <input class="autorN" type="number" name="originalita" id="originalita" min="1" max="5" required><br><br>

        <label for="hodnoceni4">Odborná úrověň</label>
        <input class="autorN" type="number" name="uroven" id="uroven" min="1" max="5" required><br><br>

        <label for="hodnoceni4">Jazyková a stylová úroveň</label>
        <input class="autorN" type="number" name="styl" id="styl" min="1" max="5" required><br><br>
        <label for="komentar">Vyjádření:</label>
        <textarea name="vyjadreni" id="vyjadreni" rows="4" cols="50" required></textarea><br><br><br><br>
        <button type="submit">Odeslat hodnocení</button>
        </div>
    </form>
    </div><br>
<hr>
</body>
</html>