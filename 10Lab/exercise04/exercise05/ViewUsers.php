<html>
	<head>
	</head>
	<body>
	<table>
	<tr>
		<b>Usernames</b>
	</tr>
	<?php
	$mysqli = new mysqli("mysql.eecs.ku.edu", "masonhawks", "abeFiek3", "masonhawks");
	$query = "SELECT user_id FROM Users";
	if ($result = $mysqli->query($query)) {
		while ($row = $result->fetch_assoc()) {
			$username = $row['user_id'];
				echo "<tr><td>".$username."</td></tr>";
		}
	$result->free();
	}
	else {
		echo "<tr><td>ERROR</td></tr>";	
	}
	?>
	</table>
	</body>
</html>
