<!DOCTYPE html>
<html>
<head>
<title>Parking Slot Booking</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrapper" style="background-image: url('233.jpg');">
<div class="inner">
<div class="image-holder">
<img src="big.png" alt="image">
</div>
<form action="json.php" method="post">
<h3>Smart Booking</h3>

<div class="form-wrapper">
<select name="msg1" id="" class="form-control">
<option value="NO">Select the Slot 1</option>
<option value="YES">YES</option>
<option value="NO">NO</option>
</select>
</div>
<div class="form-wrapper">
<select name="msg2" id="" class="form-control">
<option value="NO" >Select the Slot 2</option>
<option value="YES">YES</option>
<option value="NO">NO</option>
</select>
</div>
<div class="form-wrapper">
<select name="msg3" id="" class="form-control">
<option value="NO">Select the Slot 3</option>
<option value="YES">YES</option>
<option value="NO">NO</option>
</select>
</div>

<button>Submit
</button>
<p>* By Default Selection will be NO</p>
</form>
</div>
</div>
</body>
</html>