<?php
    ob_start();
    session_start();

    $timezone = date_default_timezone_set("Europe/London");

    $con = mysqli_connect("database.c100jh4vmti7.us-east-1.rds.amazonaws.com", "admin", "admin123", "slotifyfree");

    if(mysqli_connect_errno()) {
    	echo "Failed to connect:" . mysqli_connect_errno();
    }



?>
