<?php
include("includes/config.php");
include("includes/classess/User.php");
include("includes/classess/Artist.php");
include("includes/classess/Album.php");
include("includes/classess/Song.php");
include("includes/classess/Playlist.php");

//session_destroy();  LOGOUT

if(isset($_SESSION['userLoggedIN'])) {
	$userLoggedIN = new User($con, $_SESSION['userLoggedIN']);
	$username = $userLoggedIN->getUsername();
	echo "<script>userLoggedIN = '$username';</script>";
}
else {
	header("Location: register.php");
}

?>

<html>

<head>
	<title>Welcome to Slotify</title>

	<link rel="stylesheet" type="text/css" href="assests/css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="assests/js/script.js"></script>

	<div id="mainViewContainer">

		<div id="mainContent">