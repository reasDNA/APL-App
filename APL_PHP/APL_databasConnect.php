<?php
//Anslutning till databasen
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "APL";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);