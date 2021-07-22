<?php

if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
	include("includes/config.php");
	include("includes/classess/User.php");
	include("includes/classess/Artist.php");
	include("includes/classess/Album.php");
	include("includes/classess/Song.php");
	include("includes/classess/Playlist.php");

	if(isset($_GET['userLoggedIN'])) {
		$userLoggedIN = new User($con, $_GET['userLoggedIN']);
	}
	else {
		echo "Username variable not passed into page. Check the openPage JS function";
		exit();
	}
}
else {
	include("includes/header.php");
	include("includes/footer.php");

	$url = $_SERVER['REQUEST_URI'];
	echo "<script>openPage('$url')</script>";
	exit();

}

?>



