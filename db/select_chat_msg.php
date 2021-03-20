<?php 
$servername = "d3y0lbg7abxmbuoi.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$username = "otxnyvygp21lkomw";
$password = "gezr6w9b05fx3x8i";
$dbname = "rx2te87mm7vnu0ny";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM tbl_msg";
$result = $conn->query($sql);

$result = mysqli_query($conn, $sql);

$string = "[";
	while ($row = mysqli_fetch_array($result)) {
		$string = $string . '{"mittente": "'. $row["msg_mitt"] .'", "testo": "' . $row["msg_mess"]  .'" , "avatar": "' . $row["default_img"]  .'", "id_msg": "' . $row["idtbl_msg"]  .'"},';
	}
	mysqli_close($conn);
	$string = rtrim($string, ",");
	$string = $string . ']';
	echo $string;

	?>