<?php

        $dbhost = 'localhost';                // db host
	   $dbuser = 'id20634690_iot';            // my sql user name
	   $dbpass = 'u19QCArJCU(i/1)4';            // db password
	   $dbname = "id20634690_project";
	   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
		$query = "SELECT * FROM parking";
		if (!$result = mysqli_query($conn, $query)) {
		    exit(mysqli_error($con));
		}
		 
		$users = array();
		if (mysqli_num_rows($result) > 0) {
		    while ($row = mysqli_fetch_assoc($result)) {
		        $users[] = $row;
		    }
		}
		 
		header('Content-Type: text/csv; charset=utf-8');
		header('Content-Disposition: attachment; filename=parking.csv');
		$output = fopen('php://output', 'w');
		fputcsv($output, array('id', 'SLOT1', 'SLOT2','SLOT3','Date & Time'));
		 
		if (count($users) > 0) {
		    foreach ($users as $row) {
		        fputcsv($output, $row);
		    }
		}
?>