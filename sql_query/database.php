<?php

$hostname="localhost";
$username= "root";
$password= "";
$dbname= "assaignment";
$conn = new mysqli($hostname, $username, $password, $dbname);
if (!$conn) {
die( mysqli_error($conn));
}
?>