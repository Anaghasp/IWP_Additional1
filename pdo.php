<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";

$pdo = new PDO("mysql:host=$servername;dbname=misc", $username,$password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
