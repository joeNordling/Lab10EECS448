<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "josephnordling", "ooCh7euL","josephnordling");
/* check connection */
if ($mysqli->connect_errno) {
 printf("Connect failed: %s\n", $mysqli->connect_error);
 exit();
}

$query = "SELECT * FROM Users WHERE user_id ='".$_POST["name"]."'";
$empty = $_POST["content"].trim();
$result = $mysqli->query($query);
while($row = mysqli_fetch_assoc($result)) {
	if ( $empty != '' and $row["user_id"] == $_POST["name"] ) {
		
		$query = "INSERT INTO Posts (content, author_id) VALUES ('".$_POST["content"]."','".$row["user_id"]."')";
		if ($result = $mysqli->query($query)) {
			echo "<p align='center'> The post was added to the database</p>";
		} else {
			echo "<p align='center'> The post was not added to the database due to internal error</p>";
		}
	} else {
		echo "<p align='center'> The post was not added to the database due to a blank message or wrong username</p>";
	}
}
	
$mysqli->close();
?>