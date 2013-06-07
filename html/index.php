<?php

    // configuration
    require("../includes/config.php"); 

    // render portfolio
    $latest=query("select id,title,content from news order by timestamp desc limit 5;");
    $categories=query("select * from categories");
    render("home.php", ["title" => "Home Page","latest"=>$latest,"categories"=>$categories]);

?>
