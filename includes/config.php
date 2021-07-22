<?php
    ob_start();
    session_start();

    $timezone = date_default_timezone_set("Europe/London");

    $con = mysqli_connect("database-1.c100jh4vmti7.us-east-1.rds.amazonaws.com", "admin", "WordpressCreation", "slotify");

    if(mysqli_connect_errno()) {
    	echo "Failed to connect:" . mysqli_connect_errno();
    }



?>
