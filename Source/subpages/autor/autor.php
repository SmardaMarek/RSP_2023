<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./autorStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" type="image/x-icon" href="fav.png" class="fav">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Handjet:wght@300&family=Press+Start+2P&family=Roboto&display=swap" rel="stylesheet">
    <title>| Autor</title>
</head>
<body>
   <center>
   <div class="container">
      <div>
   <img src="./text.png" alt="">
   Jste přihlášen jako <b>autor</b>
   <a  href="../../index.php">Odhlásit</a> <br>
</div>
   <hr>
    <h1>Mé příspěvky</h1>
    <hr>
    <br>
    <div style="overflow-x:auto;">
    <table>
        <tr>
           <th>Téma</th>
           <th>Název</th>
           <th>Článek</th>
           <th>Stav</th>
           <th>Vytvořeno dne</th>
           <th>Recenze</th>
        </tr>
        <tr>
           <td>IT</td>
           <td>Distribuce Linuxu</td>
           <td><button>Zobrazit článek</button></td>
           <td>K recenzi</td>
           <td>2023-12-15</td>
           <td>0</td>
        </tr>
        <tr>
         <td>Ekonomie</td>
         <td>Daně</td>
         <td><button>Zobrazit článek</button></td>
         <td>K recenzi</td>
         <td>2023-12-10</td>
         <td>0</td>
      </tr>
      <tr>
         <td>IT</td>
         <td>JavaScript</td>
         <td><button>Zobrazit článek</button></td>
         <td>Hodnoceno</td>
         <td>2023-11-27</td>
         <td>2</td>
      </tr>
      <tr>
         <td>Cestovní ruch</td>
         <td>Amerika a její tradice</td>
         <td><button>Zobrazit článek</button></td>
         <td>K recenzi</td>
         <td>2023-12-20</td>
         <td>0</td>
      </tr>
       </table>
       <a href="./autorAdd.php">
       <button class="add">Přidat článek</button>
      </a>
      </div>
   </div> 
   <br>
   <hr>
   <h2>Téma</h2>
   Vyberte téma, které chcete zobrazit: <br>
   <select name="tema">
      <option value="IT" selected="selected">IT</option>
      <option value="CR">Cestovní ruch</option>
      <option value="EK">Ekonomie</option>
      </select>
      <button>Zobraz</button>
</center>
</body>
</html>