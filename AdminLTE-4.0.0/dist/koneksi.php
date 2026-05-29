<?php
$host = "localhost";
$username = "root";
$password = "";
$namaDB = "sistem1";
$mysqli = new mysqli($host, $username, $password, $namaDB);

// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}
