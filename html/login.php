<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["username"]))
        {
            apologize("You must provide your username.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }

        // query database for user
        $rows = query("SELECT * FROM accounts WHERE uname = ? and passwd=password(?)", $_POST["username"],$_POST["password"]);

        // if we found user, check password
        if (count($rows) == 1)
        {
        	$row=$rows[0];
                $_SESSION["uname"] = $row["uname"];
                // redirect to admin page
                redirect("authorized.php");
        }

        // else apologize
        apologize("Invalid username and/or password.");
    }
    else
    {
        // else render form
        render("login_form.php", ["title" => "Log In"]);
    }

?>
