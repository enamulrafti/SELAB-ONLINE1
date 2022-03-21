<?php
    	$id = $_GET["id"];
        $remarks = $_GET["remarks"];

        require_once('dbconfig.php');

        $connect = mysqli_connect( HOST, USER, PASS, DB )
    
            or die("Can not connect");
    
    
    
        mysqli_query( $connect, "UPDATE leave_enrty SET REMARKS=$remarks WHERE ID = $id" )
    
            or die("Can not execute query");

            echo "UPDATED!";

?>