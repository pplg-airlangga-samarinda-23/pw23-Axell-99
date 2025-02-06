<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "jadwal_mangan";

$koneksi = new mysqli ($hostname, $username, $password, $database);

$sql = "SELECT * FROM mangan";
$row = $koneksi->execute_query($sql)->fetch_assoc();
var_dump($row);
?>