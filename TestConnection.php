<?php

$host = "localhost";
$port = "3306";
$database = "belajar-php-database";
$username = "root";
$password = "";

try {
        $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
        echo "sukses terkoneksi ke database" . PHP_EOL;

        // menutup koneksi
        $connection = null;
} catch (PDOException $exception){
    echo "Gagal terkoneksi ke database Mysql : " . $exception->getMessage() . PHP.EOL;
}