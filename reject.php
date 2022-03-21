<?php
    	$reject_id = $_GET["id"];

        require_once('dbconfig.php');

        $connect = mysqli_connect( HOST, USER, PASS, DB )
    
            or die("Can not connect");
        
        	$query 	= "UPDATE leave_enrty SET STATUS1='REJECTED' WHERE ID = $reject_id";

	        echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");


?>
        <form method=get action=remarks_add.php>
        
        id: <input type=hidden name=id> <br>
        Remarks: <input type=textfield name=remarks> <br>
        <input type=submit value=Insert>

        </form>
<?php


	echo "<p><a href=home.html> << HOME </a>";


?>