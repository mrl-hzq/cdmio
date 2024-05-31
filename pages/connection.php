<?php
	$con = mysqli_connect("localhost", "root","");

	if(!$con){
		echo "Not Connected to the server!";
	}

	$db = mysqli_select_db($con, "cdmio");

	if(!$db){
		echo "Not Connected to Database";
	}
?>