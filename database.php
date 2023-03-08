<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "floteq";

//$conn = new PDO ("mysql:host =$server; databasename=$database", $username, $password);
$conn =mysqli_connect($server, $username, $password, $database);

?>
