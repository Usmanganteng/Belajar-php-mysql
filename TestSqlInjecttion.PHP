<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "admin";
$password = "admin";
$sql = "SELECT * FROM admin where username = '$username' AND password = '$password';";

$statement = $connection->query($sql);

$success = false;
$find_user = null;
foreach ($statement as $row) {
    //sukses
    $success = true;
    $find_user = $row["username"];
}

if ($success){
    echo "sekse login :" . $find_user . PHP_EOL;
} else {
    echo "gagal login" . PHP_EOL;
}

$connection = null;