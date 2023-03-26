<?php

$USERNAME = $_ENV['DB_USERNAME'];
$DB_PASSWORD = $_ENV['DB_PASSWORD'];
$DB_DATABASE_NAME = $_ENV['DB_DATABASE_NAME'];
$DB_HOST = $_ENV['DB_HOST'];

define('DB_HOST', $DB_HOST);
define('DB_USERNAME', $USERNAME );
define('DB_PASSWORD', $DB_PASSWORD);
define('DB_DATABASE_NAME', $DB_DATABASE_NAME);

$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);

if(!$conn){

    die("Connection Failed: " . mysqli_connect_error());
}


?>
