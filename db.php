<?php
$mysqli = new mysqli("localhost", "2438132", "Eware@507478", "db2438132");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}
?>
