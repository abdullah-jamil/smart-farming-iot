<!-- PHP code to establish connection with the localserver -->
<?php

        $dbhost = 'localhost';                // db host
	   $dbuser = 'id20634690_iot';            // my sql user name
	   $dbpass = 'u19QCArJCU(i/1)4';            // db password
	   $dbname = "id20634690_project";
	   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

// SQL query to select data from database
$sql = " SELECT * FROM parking ";
$retval =mysqli_query( $conn,$sql );
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Parking</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table 
		{
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		} 
		

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			color:black;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>Parking Slot Status</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>ID</th>
				<th>SLOT 1</th>
				<th>SLOT 2</th>
				<th>SLOT 3</th>
				<th>Updated Time</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=mysqli_fetch_assoc($retval))
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['ID'];?></td>
				<td><?php echo $rows['s1'];?></td>
				<td><?php echo $rows['s2'];?></td>
				<td><?php echo $rows['s3'];?></td>
				<td><?php echo $rows['updated_on'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
		<center> <div class="form-group">
        <button onclick="Export()" class="btn btn-primary">Export to CSV File</button>
    </div>
    <!--  /Content   -->

    <script>
        function Export()
        {
            var conf = confirm("Export users to CSV?");
            if(conf == true)
            {
                window.open("backup.php", '_blank');
            }
        }
    </script> </center>
<center><a href="index.php"><button class="button button1">EXIT</button></a></center>

	</section>
</body>

</html>
