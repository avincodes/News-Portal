
<?php
    // configuration
	require("../includes/config.php");
	if (!preg_match("{(?:login|logout|register)\.php$}", $_SERVER["PHP_SELF"]))
	{
		if (empty($_SESSION["uname"]))
		{
			redirect("login.php");
		}
    	}
	render("edit.php",["title"=>"Control Panel"]);
?>
