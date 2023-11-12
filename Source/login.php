<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="loginPage/styleLogin.css" />
</head>
<body>
<div class="back">
  <form name="input" action="" method="post">
  <img src="loginPage/image/text.png" alt="" /><br />
   <input type="text" placeholder="Email" id="email" name="email" class="inputSize" />
  <input type="password" placeholder="Heslo" id="password" name="password" class="inputSize"/><br><br>
    <button type="submit" name="sub"/>Přihlásit</button>
  </form>
</div>
</body>
</html>

<?php
session_start();
$statement = $con->query('SELECT * FROM uzivatele');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
foreach ($statement as $row) {
    // Zpracujte data
   
    if ($email == $row['email']) {
      $role = $row['role'];
      switch ($role) {
          case 'autor':
              header("Location: subpaiges/autor.php");
              break;
          case 'recenzent':
              header("Location: subpaiges/recenzent.php");
              break;
          case 'redaktor':
              header("Location: subpaiges/redaktor.php");
              break;
          case 'sefredaktor':
              header("Location: subpaiges/sefredaktor.php");
              break;
          case 'admin':
              header("Location: subpaiges/admin.php");
              break;
          default:
              echo 'Neco se nepovedlo.';
      }
  }
}
}
 ?>