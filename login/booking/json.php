<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>

  <head>
        
   <title>Parking</title>
   <style>
   
   body
   {  
    
    background-color: powderblue;
    
    background-size: 50% 20%;
    background-repeat: no-repeat;
    background-position: center;
    margin-bottom: 50px;
  
    
   }
   
/*Clearing Floats*/
.cf:before, .cf:after{
    content:"";
    display:table;
}

.cf:after{
    clear:both;
}

.cf{
    zoom:1;
}    
/* Form wrapper styling */

.search-wrapper {
    width: 4px;
    margin: 10px auto 5px auto;
    border-radius: 40px;
    background: transparent;
    box-shadow: 0 4px 20px -2px green;
}

/* Form text input */

.search-wrapper input 
{
  padding-left: 100px;
    width: 330px;
    height: 50px;
    padding: 1px 1px;
        position: relative;
    left: -160;
    float: left;   
    font: bold 13px 'lucida sans', 'trebuchet MS', 'Tahoma';
    border: 0;
    background: #fff;
    border-radius: 40px;
    border-top-style: none;
}

.search-wrapper input:focus 
{
    outline: 0;
    background: #fff;
    box-shadow: 0 0 2px rgba(0,0,0,0.8) inset;
}

.search-wrapper input::-webkit-input-placeholder {
   color: #999;
   font-weight: normal;
   font-style: italic;
  padding-left: 20px;
}

.search-wrapper input:-moz-placeholder {
    
    color: #999;
    font-weight: normal;
    font-style: italic;
}

.search-wrapper input:-ms-input-placeholder {
    color: #999;
    font-weight: normal;
    font-style: italic;
  border-style: none;
}   

  
h1 
{
    text-align: center;
color: GREEN;
}

h2 {
    text-align: center;
     color:maroon;
    
}

h3 {
    text-align: center;
color: green;
     

} 
p
{
 color:blueviolet;
}
}
</style>
<h1> Command Entered successfully.  </h1>

<form class="search-wrapper cf">
    
<input type="button" value="Status of Parking Slot" onclick="window.location.href='../projects.php'">
</form>
</head>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{ 
				
	function get_data() 
	{
		$name = $_POST['msg1'];
		$file_name='file'. '.json';

		if(file_exists("$file_name"))
		{
			unlink($file_name);
			
			$datae=array(
			    'ID' =>1,
				'MSG1' => $_POST['msg1'],
				'MSG2' => $_POST['msg2'],
				'MSG3' => $_POST['msg3'],
			);
		//	echo "file not exist<br/>";
			return json_encode($datae,JSON_PRETTY_PRINT);
			
			
							
			//echo "file exist<br/>";
			return json_encode($array_data,JSON_PRETTY_PRINT);
		}
		else
		{
			$datae=array();
			$datae[] = array(
			    'ID' =>1,
				'MSG1' => $_POST['msg1'],
				'MSG2' => $_POST['msg2'],
				'MSG3' => $_POST['msg3'],
				
			);
			//echo "file not exist<br/>";
			return json_encode($datae,JSON_PRETTY_PRINT);
		}
	}

	$file_name='file'. '.json';
	
	if(file_put_contents("$file_name", get_data()))
	{
		//echo 'success';
	}				
	else 
	{
		echo 'There is some error';				
	}
}
	
?>
