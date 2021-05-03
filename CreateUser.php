<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "josephnordling", "ooCh7euL","josephnordling");
/* check connection */
if ($mysqli->connect_errno) {
 printf("Connect failed: %s\n", $mysqli->connect_error);
 exit();
}
$query = "INSERT INTO Users VALUES ('".$_POST["name"]."')";
$empty = $_POST["name"].trim();
if ( $empty != '' and $result = $mysqli->query($query)) {
	echo "<p align='center'> The user was added to the database </p>";
} else {
	echo "<p align='center'> The user was not added to the database </p>";
}
/* close connection */
$mysqli->close();
?>