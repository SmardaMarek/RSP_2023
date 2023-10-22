<?php
$host = "localhost"; // Adresa serveru MySQL
$database = "rsp"; // Název vaší databáze
$username = "root"; // Uživatelské jméno pro přístup k databázi
$password = ""; // Heslo pro přístup k databázi

try {
    $dbh = new PDO("mysql:host=$host;dbname=$database", $username, $password);
} catch (PDOException $e) {
    die("Chyba připojení k databázi: " . $e->getMessage());
}
