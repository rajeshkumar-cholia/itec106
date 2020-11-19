<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "canossa";

$conn = mysqli_connect ($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
  die("Connect failed: " . mysqli_connect_error());
}
