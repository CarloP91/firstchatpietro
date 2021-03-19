<?php
$servername = "d3y0lbg7abxmbuoi.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$username = "otxnyvygp21lkomw";
$password = "gezr6w9b05fx3x8i";
$dbname = "rx2te87mm7vnu0ny";

$mod_pass = $_GET["modify_pass"];

$id_usr = $_GET["id_usr"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE accounts SET password='$mod_pass' WHERE id=$id_usr";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>