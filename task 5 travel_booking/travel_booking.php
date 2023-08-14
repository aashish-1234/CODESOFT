<?php
$con=mysqli_connect("localhost","root","","flight_booking");
if($con)
{
	echo "connection successful";
}
else{
	echo "connection not succesful";
}
$from=$_POST['from'];
$to=$_POST['to'];
$class=$_POST['class'];
$departure=$_POST['departure'];
$return=$_POST['return'];
$adults=$_POST['adults'];
$child=$_POST['child'];

$submit=$_POST['submit'];

$sql="INSERT INTO `client_data` (`airport_from`, `airport_to`, `class`, `departure_date`, `return_date`, `adults`, `child`) VALUES ('$from', '$to', '$class', '$departure', '$return', '$adults', '$child')";

$rs=mysqli_query($con,$sql);

if($rs)
{
	echo "data inserted";
}
else{
	echo "data not inserted";
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>travel booking platform</title>
	<link rel="stylesheet" type="text/css" href="travel_booking.css">
</head>
<body>
<div class="container">
	<nav>
		<div class="logo">Flight Booking</div>
		<ul class="navitems">
			<li><a href="#"></a>Home</li>
			<li><a href="#"></a>About</li>
			<li><a href="#"></a>Blog</li>
			<li><a href="#"></a>Contacts</li>
			<li><input type="search" placeholder="search" id="search"></li>
		</ul>
	</nav>
	<div class="box">
	<form method="post">
		<div class="radio_content">
			<div>
				<input type="radio" name="" >&nbsp Round Trip &nbsp
				<input type="radio" name="">&nbsp One Way &nbsp
				<input type="radio" name="">&nbsp Multi-city
			</div>

			<div>
				<input type="checkbox" name="" id="checkbox_right">&nbspDirect Flights Only
			</div>
		</div>

		<div class="input_content">

			<div><h>From</h> 
				<div class="field"><input type="TEXT" name="from" list="city" placeholder="choose airport">
				<datalist id="city"> 
					<option>delhi</option>
					<option>mumbai</option>
					<option>patna</option>
					<option>gaya</option>
					<option>odisa </option>
					<option>keral</option>
					<option>punjab</option>
					<option>kolkata</option>
					<option>chhatisgadh</option>
					<option>kashmir</option>
					<option>uttar pradesh</option> 
				</datalist></div>
				<div><input type="checkbox">&nbsp&nbsp&nbspAdd Nearby Airports</div>
			</div>

			<div><h>To</h>
				<div class="field"><input type="TEXT" name="to" list="city" placeholder="choose where to go">
				<datalist id="city"> 
					<option>delhi</option> 
					<option>mumbai</option>
					<option>patna</option>
					<option>gaya</option>
					<option>odisa </option>
					<option>keral</option>
					<option>punjab</option>
					<option>kolkata</option>
					<option>chhatisgadh</option>
					<option>kashmir</option>
					<option>uttar pradesh</option>
				</datalist></div>
				<div><input type="checkbox">&nbsp&nbsp&nbspAdd Nearby Airports</div>
			</div>
			<div><h>Cabin Class</h>
				<div> 
					<select name="class">
						<option>first class</option>
						<option>second class</option>
						<option>third class</option>
					</select>
				</div>
			</div>

			</div>
			<div class="bottom">
				<div><h>Departure</h>
					<div><input type="date" name="departure"></div>
				</div>
				<div>
					<h>Return</h>
					<div><input type="date" name="return"></div>
				</div>
				<div><h>Adults(16+)</h>
					<div><input type="number" name="adults"></div>
				</div>
				<div><h>Children</h>
					<div><input type="number" name="child"></div>
				</div>
				<div id="button">	
					<input type="submit" name="Submit" value="submit">
				</div>
		</div>
	</form>
	</div>
</div>
</body>
</html>