<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <title>Login</title>
</head>
<body>
  <h1>Login page</h1>
  <form name="input" action="" method="post">
    <label>Email:</label><input type="text" value="" id="email" name="email" />
    <label>Heslo:</label><input type="password" value="" id="password" name="password" /><br><br>
    <input type="submit" value="Přihlásit" name="sub" />
  </form>
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