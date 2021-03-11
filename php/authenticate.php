<?php 
session_start();

include "config.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (!isset($_POST['username'], $_POST['password'])) {
    exit("Devi compilare entrambi i campi");
}

$sql = "SELECT id, password, username FROM accounts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["password"]. $row["username"] . $row["id"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

?>