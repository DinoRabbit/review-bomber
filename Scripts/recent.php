<?php
	$conn = mysqli_connect("localhost", "user", "pass", "db");
						
	if(!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}
	
	echo "<p>Recently Bombed Games</p>";
	$sql = "SELECT game_id, img_path FROM games ORDER BY game_id DESC LIMIT 3";
	$result = mysqli_query($conn, $sql);
						
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<img src = " . $row["img_path"] . " class = game-img-icon>";
			echo "<br />";
			echo "<button type=\"button\" class=\"btn btn-success\" style=\"margin:5px;\">View</button>";
			echo "<button type=\"button\" class=\"btn btn-primary\">Bomb</button>";
			echo "<br />";
		}
	}
	else
	{
		echo "0 results";
	}
	mysqli_close($conn);
?>