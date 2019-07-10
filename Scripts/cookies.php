<?php
	if(isset($_COOKIE["username"]))
	{
		echo "Welcome, <a href = \"#\">" . $_COOKIE["username"] . "</a>";
		echo " | <a href = \"Scripts/signout.php\">Sign Out</a>";
	}
	else
	{
		echo "<button type=\"button\" class = \"btn btn-info\" data-toggle=\"modal\" data-target=\"#loginmodal\" style=\"margin:5px;\">Login</button>";
		echo "<button type=\"button\" class = \"btn btn-primary\">Sign Up</button>";
	}
?>