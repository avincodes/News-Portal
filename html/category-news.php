<?php

    // configuration
    require("../includes/config.php"); 
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        if(empty($_GET["category"]))
        {
        	//print "empty category";
        	redirect('./');
        }
        else
        {
      		$head=query("select name from categories where id=?",$_GET["category"]);
        	$head=$head[0]["name"];
        	//print 'going to render';
        	$news=query("select * from news where category=? order by timestamp desc limit 10",$_GET["category"]);
        	render("list-category-news.php",["title"=>$head,"news"=>$news]);
        }
    }
    else
    {
        redirect('./');
    }

?>
