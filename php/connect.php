<?php

$user = 'fatecgrupo4';
$password = 'grupo4124';
$host = 'fatecgrupo4.mysql.dbaas.com.br';
$db = 'fatecgrupo4';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOExcpetion $e) {
    echo 'ERROR: ' . $e->getMessage();
}