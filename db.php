<?php
$host = 'mysql-proyecto.mysql.database.azure.com';
$user = 'adminuser';
$pass = 'Contraseña123';
$dbname = 'proyecto';
$port = 3306;

$conn = mysqli_connect($host, $user, $pass, $dbname, $port);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>