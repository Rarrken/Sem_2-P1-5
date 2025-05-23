<?php

//1. Definisikan Variable koneksi database
$host = "localhost";
$db = "dbkampus";
$user = "root";
$pass = "";
$charset = "utf8mb4";

//2. Buat koneksi ke DSN (data source name) dan opsi koneksi database
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

//3. Buat koneksi ke database
$dbh = new PDO($dsn, $user, $pass, $options);


?>