<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

        $results = mysqli_query( $connect, "SELECT * FROM leave_enrty" )
		or die("Can not execute query");

        echo "<table border> \n";
        echo "<th>Name</th> <th>Start</th> <th>End</th> <th>Status</th> <th>Remarks</th> <th>Accept</th>  \n";
    
        while( $rows = mysqli_fetch_array( $results ) ) {
            extract( $rows );
            echo "<tr>";
            echo "<td> $EMPLOYEE_NAME </td>";
            echo "<td> $LEAVE_START </td>";
            echo "<td> $LEAVE_END </td>";
            echo "<td> $STATUS1 </td>";
            echo "<td> $REMARKS </td>";
            echo "<td> <a href = 'accept.php?id=$ID'> Accept </a> </td>";
            // echo "<td> <a href = 'update_input.php?id=$id&f0=$f0&f1=$f1'> Update </a> </td>";
            echo "</tr> \n";
        }
    
        echo "</table> \n";
    
        echo "<p><a href=home.html> << Home </a>";

?>