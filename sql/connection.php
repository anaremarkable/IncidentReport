
<?php
$con=mysqli_connect("localhost","root", "", "incident_report");

if (mysqli_connect_errno()){
	die("Database connection failed : " . 
		mysqli_connect_error() .
		" (". mysqli_connect_errno(). ")"
	);
}	

?>