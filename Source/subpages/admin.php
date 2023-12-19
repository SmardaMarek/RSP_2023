<?php
include '../connect.php';
$sql = "SELECT * FROM helpdesk where stav='Založeno'";
$result = $con->query($sql);

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["schvalit"])) {
    $id_ticketu = $_POST["id_ticketu"];
    $sqlVratit = "UPDATE helpdesk SET stav = 'Vyřízeno' WHERE id_ticketu = $id_ticketu";
    $resultVratit = $con->query($sqlVratit);
    if($result){
        echo "<script>alert('Vyřízeno!');</script>";
        header("Location: admin.php");
        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recenzent/recenzentStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Handjet:wght@300&family=Press+Start+2P&family=Roboto&display=swap" rel="stylesheet">
<title>| Admin</title>
</head>
<body>
<center>
<div class="container">
      <div style="display: flex; flex-flow:row">
   <img src="../../images/text.png" alt="">
   <div class="idk" style="display: flex; flex-flow:row; margin-top:auto; margin-bottom:auto">
   <div style="margin-right: 5px; margin-top:8px">Jste přihlášen jako <b>admin</b></div>
   <a  href="../../index.php"><div class="logout">Odhlásit</div></a></div>
</div>
<br>
<table border="1">
    <tr>
        <th>Email</th>
        <th>Předmět</th>
        <th>Popis</th>
        <th>Datum založení</th>
        <th>Akce</th>
    </tr>
    <?php foreach ($result as $row){ ?>
        <tr>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['predmet']; ?></td>
            <td><?php echo $row['popis']; ?></td>
            <td><?php echo $row['datum_zalozeni']; ?></td>
            <td><?php
                echo '<form method="post">';
                echo '<input type="hidden" name="id_ticketu" value="' . $row["id_ticketu"] . '">';
                echo '<button type="submit" name="schvalit">Vyřízeno</button>';
                echo '</form>';
                ?></td>
            </td>
            
        </tr>
    <?php }; ?>
</table>
<body>
</html>