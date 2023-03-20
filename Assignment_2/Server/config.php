<?php
	$host = "localhost";
	$user = "X33314961";
	$passwd = "X33314961";
	$dbname = "X33314961";
	$dbc = mysqli_connect($host, $user,
	$passwd, $dbname);
	// check connection
	if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: "
	. mysqli_connect_error()
	. "<br/>Error number:"
	. mysql_connect_errno();
	}

?>