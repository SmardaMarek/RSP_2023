<?php 
if (isset($_GET['status']) && $_GET['status'] === 'success') {
    echo '<div class="alert" onclick="closeAlert()">
    <span class="closebtn">&times;</span> 
    <strong>Úspěšně odesláno!</strong>
  </div>';
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
      <form method="post" action="Function/send-mail.php">
        <h1>Napište nám</h1>
        <div class="info">
          <input class="fname" type="text" name="name" placeholder="Jméno" required>
          <input class="fname" type="text" name="surname" placeholder="Příjmení" required>
        </div>
        <p>S čím můžeme pomoci?</p>
        <div>
          <textarea type="text" name="issue" rows="4" required></textarea>
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


