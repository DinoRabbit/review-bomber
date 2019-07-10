<?php
	setcookie("username", "DinoRabbit", time() - 60, "/", "", 0);
	header("Location: http://localhost");
?>