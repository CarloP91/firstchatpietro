<?php
$servername = "d3y0lbg7abxmbuoi.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$username = "otxnyvygp21lkomw";
$password = "gezr6w9b05fx3x8i";
$dbname = "rx2te87mm7vnu0ny";

$id_msg = $_GET["id_msg"];

/* echo $id_msg; */

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM tbl_msg WHERE idtbl_msg=$id_msg";

if (mysqli_query($conn, $sql)) {
  header("location: ../home.php");
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>