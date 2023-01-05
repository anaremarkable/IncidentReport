
<!DOCTYPE html>
<html>
<head>
<title>Student View Page</title>
<style>
	@import url('https://fonts.googleapis.com/css?family=Montserrat');

* {
	box-sizing: border-box;
}

body {
	
	font-family: verdana;
	
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;

	min-height: 90vh;
	margin: 0;
}

h3 {
	margin: 10px 0;
	font-family: Trattatello;
	font-size: 45px;
}

h4 {
	margin: 10px 0;
	font-family: URW Chancery L;
}

h5 {
	margin: 10px 0;
	font-family: URW Chancery L;
}

h6 {
	margin: 5px 0;
	text-transform: uppercase;
	font-family: Apple Chancery;
}


p {
	font-size: 14px;
	line-height: 21px;
}

.card-container {
	background-image: linear-gradient(#141e30, #243b55);
	border-radius: 5px;
	box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.75);
	color: #B3B8CD;
	padding-top: 3	0px;
	position: relative;
	width: 350px;
	max-width: 100%;
	text-align: center;
}

.card-container .round {
	border: 1px solid #03BFCB;
	border-radius: 50%;
	padding: 7px;
	margin-top: 10px;
	margin-bottom: 3px;
}



</style>
</head>
<body>
 <?php
	$student_id = $_GET['student_id'];

	$query = selectwhere('student', 'id', $student_id);
	$student = mysqli_fetch_array($query);

	
    $query2 = selectwhere('account', 'id', $student['account_id']);
    $account = mysqli_fetch_array($query2);


	$query3 = selectwhere('gallery', 'id', $student['pic_id']);
	$picture = mysqli_fetch_array($query3);
?>
	


	<div class="card-container" style="margin-top: 40px;">
		<h4 style="font-family: impact; font-size: 40px;">STUDENT PROFILE</h4>
		<img class="round" src='<?php echo "images/".$picture['folder_name']."/".$picture['picture_name']; ?>' style='height:25vh;width:25vh;' alt="user"/>

	<h3><?php echo ucwords($student['fullname']); ?></h3>
	<h4><?php echo department_acc($student['department']); ?></h4>
	<h5><?php echo ucwords($student['course_year']); ?></h5>
	<h4><?php echo ucwords($student['address']); ?></h4>
	<h6><?php echo ucwords($student['contact']); ?></h6>


</div>





</body>
</html>