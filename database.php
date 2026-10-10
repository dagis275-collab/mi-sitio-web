<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "wms_dbwp";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>