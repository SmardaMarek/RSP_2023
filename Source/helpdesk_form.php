<?php 
include 'connect.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $surname = mysqli_real_escape_string($con, $_POST['surname']);
  $issue = mysqli_real_escape_string($con, $_POST['issue']);
  $heading = mysqli_real_escape_string($con, $_POST['heading']);
  $date = date("Y-m-d H:i:s");
  $sql = "SELECT email FROM uzivatele WHERE jmeno = '$name' AND prijmeni = '$surname'";
  $result = $con->query($sql);

  // Ověření spojení s databází
  if ($con->connect_error) {
      die("Chyba připojení k databázi: " . $con->connect_error);
  }
  if ($result) {
    // Získávání řádku s výsledky
    $row = $result->fetch_assoc();

    if ($row) {
        $email = $row['email'];
        $sql = "INSERT INTO helpdesk (email, predmet, popis, datum_zalozeni, stav) VALUES ('$email', '$heading', '$issue', '$date', 'Založeno')";
      if ($con->query($sql) === TRUE) {
            header('Location:index.php');
        } 
    } 
    else {
      echo '<script type="text/javascript">alert(\'Uživatel neexistuje\')</script>';
      }
    }
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Helpdesk</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="helpdesk.css">
  </head>
  <body>
    <div class="main-block">
      <div class="left-part">
        <i class="fas fa-envelope"></i>
        <i class="fas fa-at"></i>
        <i class="fas fa-mail-bulk"></i>
      </div>
      <form method="post">
        <h1>Napište nám</h1>
        <div class="info">
          <input class="fname" type="text" name="name" id='name' placeholder="Jméno" required>
          <input class="fname" type="text" name="surname" id="surname" placeholder="Příjmení" required>
        </div>
        <p>S čím můžeme pomoci?</p>
        <div>
          <input class="fname" type="text" name="heading" id="heading" placeholder="Předmět" required>
          <textarea type="text" name="issue" id="issue" rows="4" required></textarea>
        </div>
        <button type="submit" name="send" >Odeslat</button>
      </form>
    </div>
    
  </body>
</html>
<script>
    function closeAlert() {
        var alert = document.querySelector('.alert');
        if (alert) {
            alert.style.display = 'none';
        }
    }
</script>


