<?php
		if(_POST['submit']){
			$mysqli = new mysqli("mysql.eecs.ku.edu", "josephnordling", "ooCh7euL","josephnordling");
			if(!empty($_POST['check_list'])) {
				foreach($_POST['check_list'] as $check) {
					$query = "DELETE FROM Posts WHERE post_id ='".$check."'";
					if ($result = $mysqli->query($query)) {
						echo "Deleted: ".$check;
					} else {
						echo "Failed to Deleted: ".$check;

					}
				}
			}
		}
		$mysqli->close();
?>