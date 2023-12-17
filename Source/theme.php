<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Téma</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <link rel="stylesheet" href="../homepage.css">
</head>
<body>
    <div class="header">
        <a onclick="history.back()" style="margin-top: auto; margin-bottom: auto; display: flex; margin-inline: auto; text-decoration: none; cursor: pointer;"><div class="login"><div class="login-text">Zpět</div></div></a>
        <a href="../login.php" style="margin-top: auto; margin-bottom: auto; display: flex; margin-inline: auto; text-decoration: none;"><div class="login"><div class="login-text">Login</div></div></a>
        </div>
        <div id="#home" class="logo"></div>
        <div class="content" style="margin-bottom: 20px;">
            <div class="text-box">
                <div class="intro-text" style="margin-bottom: 20px;"> </div>
            </div>
            <?php
include 'connect.php';
if($_GET['id'] == 1){
echo '<h1 style="color: #bc4242; font-weight: bold;">Věda</h1>';
$sql = "SELECT * FROM prispevky WHERE tema = 'Věda'";
$result = $con->query($sql);
foreach ($result as $row) {
    echo '<h3 style="color: #bc4242;">' . $row["nazev"] . '</h3>';
    echo '<p style="color: #D3D3D3;">' . $row["obsah_text"] . '</p>';
}
}
else if($_GET['id'] == 2) {
    echo '<h1 style="color: #bc4242; font-weight: bold;">Technika</h1>';
$sql = "SELECT * FROM prispevky WHERE tema = 'Technika'";
$result = $con->query($sql);
foreach ($result as $row) {
    echo '<h3 style="color: #bc4242;">' . $row["nazev"] . '</h3>';
    echo '<p style="color: #D3D3D3;">' . $row["obsah_text"] . '</p>';
}
}
else if($_GET['id'] == 3) {
    echo '<h1 style="color: #bc4242; font-weight: bold;">Školní sportovní úspěchy</h1>';
    $sql = "SELECT * FROM prispevky WHERE tema = 'školní sportovní úspěchy'";
    $result = $con->query($sql);
    foreach ($result as $row) {
        echo '<h3 style="color: #bc4242;">' . $row["nazev"] . '</h3>';
        echo '<p style="color: #D3D3D3;">' . $row["obsah_text"] . '</p>';
    }
    }
else if($_GET['id'] == 4) {
        echo '<h1 style="color: #bc4242; font-weight: bold;">Pomoc prvákům</h1>';
        $sql = "SELECT * FROM prispevky WHERE tema = 'Pomoc prvákům'";
        $result = $con->query($sql);
        foreach ($result as $row) {
            echo '<h3 style="color: #bc4242;">' . $row["nazev"] . '</h3>';
            echo '<p style="color: #D3D3D3;">' . $row["obsah_text"] . '</p>';
        }
        }
?>
        </div>
        <div class="footer"> </div>
</body>
</html>