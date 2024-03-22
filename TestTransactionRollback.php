<?php

require_once __DIR__ . '/GetConnection.php';

//RollBack
$connection = getConnection();
$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, comment) VALUES ('lulu@test.com', 'hi lagi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('salsabila@test.com', 'hi juga')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('aldizar@test.com', 'hi')");

$connection->rollBack();
$connection = null;