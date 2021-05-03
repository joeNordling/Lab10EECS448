<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "josephnordling", "ooCh7euL","josephnordling");
/* check connection */
if ($mysqli->connect_errno) {
 printf("Connect failed: %s\n", $mysqli->connect_error);
 exit();
}

$query = "SELECT user_id FROM Users";
$empty = $_POST["content"].trim();
$result = $mysqli->query($query);
while($row = mysqli_fetch_assoc($result)) {
	echo "<p>".$row['user_id']."\n</p>";
}
	
$mysqli->close();
?>