<?php 
session_start();
$usr = $_SESSION['login_user'];

$servername = "d3y0lbg7abxmbuoi.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$username = "otxnyvygp21lkomw";
$password = "gezr6w9b05fx3x8i";
$dbname = "rx2te87mm7vnu0ny";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM accounts WHERE `username` = '$usr'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   $id = $row["id"];
   
   echo include "settings.php";
   
  }
} else {
  echo "0 results";
}
$conn->close();
?>