<?php
    	$accept_id = $_GET["id"];

        require_once('dbconfig.php');

        $connect = mysqli_connect( HOST, USER, PASS, DB )
    
            or die("Can not connect");
        
        	$query 	= "UPDATE leave_enrty SET STATUS1='ACCPETED' WHERE ID = $accept_id";

	        echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>ACCEPTED!";



	echo "<p><a href=home.html> << HOME </a>";


?>