<?php
// Create connection local
$servername = "localhost";
$username = "root";
$password = "";
$db = "moms";
$conn = new mysqli($servername, $username, $password,$db);
//create connection server
$servername1 = "sql212.epizy.com";
$username1 = "epiz_25191969";
$password1 = "DPaz4JqT1qzsU";
$db1 = "epiz_25191969_landreform";
// $conn = new mysqli($servername1, $username1, $password1,$db1);
// Check connection
$conn-> set_charset("utf8");
if ($conn->connect_error) {
  echo "Connected failed";
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 