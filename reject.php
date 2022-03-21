<?php
    	$reject_id = $_GET["id"];

        require_once('dbconfig.php');

        $connect = mysqli_connect( HOST, USER, PASS, DB )
    
            or die("Can not connect");
        
        	$query 	= "UPDATE leave_enrty SET STATUS1='REJECTED' WHERE ID = $reject_id";

	        echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>REJECTED!";



	echo "<p><a href=home.html> << HOME </a>";


?>