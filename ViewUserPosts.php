<?php
		if(_POST['submit']){
			$mysqli = new mysqli("mysql.eecs.ku.edu", "josephnordling", "ooCh7euL","josephnordling");
			$query = "SELECT content FROM Posts WHERE author_id ='".$_POST["selected"]."'";
			$result = $mysqli->query($query);
			echo "<p> Posts: </p>";
			while($row = mysqli_fetch_assoc($result)) {
				echo "<p>".$row['content']."\n</p>";
			}
		}
		$mysqli->close();
?>