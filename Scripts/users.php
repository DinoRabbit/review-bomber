<?php
	if($_GET["username"] || $_GET["password"])
	{
		$conn = mysqli_connect("localhost", "user", "pass", "db");
						
		if(!$conn)
		{
			die("Connection failed: " . mysqli_connect_error());
		}
	
		$sql = "SELECT username, pass FROM users WHERE username = \"" . $_GET["username"] . "\"";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0)
		{
			$row = mysqli_fetch_assoc($result);
			if($_GET["password"] == $row["pass"])
			{
				echo"Success";
				setcookie("username", $row["username"], time() + 10800, "/", "", 0);
			}	
			else
			{
				echo"Error";
			}
			mysqli_close($conn);
		}
		else
			echo"Error";
	}
?>