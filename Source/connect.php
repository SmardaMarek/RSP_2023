<?php
$host = "localhost"; // Adresa serveru MySQL
$database = "rsp"; // Název vaší databáze
$username = "root"; // Uživatelské jméno pro přístup k databázi
$password = ""; // Heslo pro přístup k databázi

$con = mysqli_connect($host,$username,$password,$database);

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}