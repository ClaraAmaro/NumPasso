<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'NumPasso';

$con = mysqli_connect($host, $user, $password, $database);

if (!$con) {
    die('Erro ao conectar ao MySQL: ' . mysqli_connect_error());
}

mysqli_set_charset($con, "utf8mb4");

?>