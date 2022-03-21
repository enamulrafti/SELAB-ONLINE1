<?php

	$employee_name = $_GET["employee_name"];

	$leave_start = $_GET["leave_start"];

    $leave_end = $_GET["leave_end"];

    
	require_once('dbconfig.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO leave_enrty VALUES ( '', '$employee_name', '$leave_start','$leave_end','PENDING','' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> Emp name = $employee_name <br> Leave start = $leave_start <br> Leave End = $leave_end ";



	echo "<p><a href=home.html> << Home </a>";

?>