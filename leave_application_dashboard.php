<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

        $results = mysqli_query( $connect, "SELECT * FROM leave_enrty" )
		or die("Can not execute query");

?>