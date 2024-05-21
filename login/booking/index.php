<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>

  <head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
    <meta http-equiv="refresh" content="5">    
   <title>Parking</title>
   <style>
   
   body
   {  
    
    background-color: powderblue;
    
    background-size: 50% 20%;
    background-repeat: no-repeat;
    background-position: center;
    margin-bottom: 100px;
  
    
   }
  
h1 
{
    text-align: center;
      color: RED;
}

h2
{
 text-align: center;
color: blue;
}

h3 {
    text-align: center;
color: Green;
     

} 
p
{
 color:blueviolet;
}
}
</style>

  </head>

  


<?php      // start php script
// ********************************************database connection *****************************************************  
 	   $dbhost = 'localhost';                // db host
	   $dbuser = 'id20634690_iot';            // my sql user name
	   $dbpass = 'u19QCArJCU(i/1)4';            // db password
	   $dbname = "id20634690_project";
	   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
	   
	   if(! $conn ) 
	   {
		  die('Could not connect: ' . mysqli_error());//mysqli_connect_error()onnection not established the generate erro
	   }
 	//   echo 'Database Connection successful.<br> ';              // messege for connection successful
  // ****************************************database access*************************************     
     
       $sql = "SELECT * from parking order by id desc limit 1";     // access sql      
      // mysqli_select_db('iot_appliances' );                 // myiot1 is user name of selected database
	  $retval =mysqli_query( $conn,$sql );
       
       if(! $retval) 
       {
		  die('Could not enter data: ' . mysqli_connect_error());
	   }
       else
  //      		echo 'Table Retrieval successful.<br> ';
       		
 // ************************display/ show***************************       		
   
       echo " <h1>PROJECT: IOT BASED SMART ARRANGEMENT FOR VEHICLE PARKING</h1> ";
       echo "<h2> <center>COLLEGE:GURU TEGH BAHADUR INSTITUTE OF TECHNOLOGY </center></h2>";
	   
       while($row = mysqli_fetch_assoc($retval))
        {
       echo 
            
            "<h3>LOCATION 1 SLOT STATUS:              {$row['s1']} </h3> ".
            "<h3>LOCATION 2 SLOT STATUS:              {$row['s2']} </h3> ".
			"<h3>LOCATION 3 SLOT STATUS:              {$row['s3']} </h3> ";
            
            
   		}
        
        mysqli_close($conn);

?>
<!-- <center><h2>Developed by: <br>  </h2></center> -->

</body>
<Center><a class="btn-success" href="update1.php" target="_blank">Book Parking Slot Online</a></center>

<Center><a class="btn-success1" href="Display.php" target="_blank">Parking Slot Status</a></center>
</html>