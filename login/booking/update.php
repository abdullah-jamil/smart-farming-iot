
<?php
       $dbhost = 'localhost';                // db host
	   $dbuser = 'id20634690_iot';            // my sql user name
	   $dbpass = 'u19QCArJCU(i/1)4';            // db password
	   $dbname = "id20634690_project";
	   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

if(isset($_GET['s1'])  AND isset($_GET['s2']) AND isset($_GET['s3']) AND isset($_GET['token'])  )
   {
     //$key = mysql_real_espcape_string($conn,$_GET['token']);
     $key =  $_GET['token'];
     $checkres =mysqli_query($conn,"select Valid_upto from API_KEY where Token= '$key' ");
		 if(mysqli_num_rows($checkres)>0)
		 {
       
			   $checkrow =mysqli_fetch_assoc($checkres);
			   if($checkrow['Valid_upto'] >= date("Y-m-d"))
			  
			   {
						   $temp_s1 =  $_GET['s1'];
						   $temp_s2 =  $_GET['s2'];
						   $temp_s3 =  $_GET['s3'];
						   $sql = "INSERT INTO parking (s1,s2,s3) VALUES ('$temp_s1' ,'$temp_s2','$temp_s3')";
						   $retval = mysqli_query(  $conn,$sql );
						   echo "Data Inserted Successfully";
					   
				}
					   
			  else
			    {
				  echo "API KEY Has been Deactivated Please Check with Admin";
				}
					   
					   
		       }
		else
		{
		   echo "Please provide valid API Key";
		}
		  
	}
			   
   
 else
	 {
		 echo "Please provide token along with Mandatory data";
	 
	 }
   
 ?>