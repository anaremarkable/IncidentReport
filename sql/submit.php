<?php 
 session_start();
 include('connection.php'); 
 include('sqlfunction.php');
 include('otherfunction.php');

if (isset($_POST['btn_login'])){
 	include ('function/loginfunction.php');
	$username = sqlstrip(encryptor($_POST['username']));
	$password= sqlstrip(encryptor($_POST['password']));
	login($username, $password);
}
if (isset($_POST['btn_login2'])){
 	include ('function/loginfunction.php');
	$username = sqlstrip(encryptor($_POST['username']));
	$password= sqlstrip(encryptor($_POST['password']));
	$offense_id = sqlstrip($_POST['offense_id']);
	$clue_id = sqlstrip($_POST['clue_id']);
	$search_input = sqlstrip($_POST['search_input']);
	login2($username, $password, $offense_id, $search_input, $clue_id);
}


//CHANGE USERNAME AND PASSWORD
if (isset($_POST['change_username'])){
 	include ('function/loginfunction.php');
	$old_username = sqlstrip(encryptor($_POST['old_username']));
	$password= sqlstrip(encryptor($_POST['password']));
	$new_username = sqlstrip(encryptor($_POST['new_username']));
	change_username($old_username, $password, $new_username);
}

if (isset($_POST['change_password'])){
 	include ('function/loginfunction.php');
	$old_password = sqlstrip(encryptor($_POST['old_password']));
	$username= sqlstrip(encryptor($_POST['username']));
	$new_password = sqlstrip(encryptor($_POST['new_password']));
	change_password($username, $old_password, $new_password);
}




// FOR STUDENT_REGISTER

if(isset($_POST['student_register'])){
	include ('function/studentfunction.php');
	$username = sqlstrip(encryptor($_POST['email']));
	$password = sqlstrip(encryptor($_POST['password']));
	
	$lname = sqlstrip($_POST['lname']);
	$fname = sqlstrip($_POST['fname']);
	$mname = sqlstrip($_POST['mname']);
	$id_no = sqlstrip($_POST['id_no']);
	$email = sqlstrip($_POST['email']);
	$department = sqlstrip($_POST['department']);
	$course = sqlstrip($_POST['course']);
	$year = sqlstrip($_POST['year']);
	$contact = sqlstrip($_POST['contact']);
	$address = sqlstrip($_POST['address']);
	$student_pic = $_FILES['student_pic'];

	student_add($username, $password, $lname, $fname, $mname, $id_no, $email, $department, $course, $year, $contact, $address, $student_pic);

}


// STUDENT_UPDATE

if(isset($_POST['student_update'])){
	include ('function/studentfunction.php');
	$student_id = $_POST['student_id'];
	$lname = sqlstrip($_POST['lname']);
	$fname = sqlstrip($_POST['fname']);
	$mname = sqlstrip($_POST['mname']);
	$id_no = sqlstrip($_POST['id_no']);
	$email = sqlstrip($_POST['email']);
	$department = sqlstrip($_POST['department']);
	$course = sqlstrip($_POST['course']);
	$year = sqlstrip($_POST['year']);
	$contact = sqlstrip($_POST['contact']);
	$address = sqlstrip($_POST['address']);
	$student_pic = $_FILES['student_pic'];

	student_upd($student_id, $lname, $fname, $mname, $id_no, $email, $department, $course, $year, $contact, $address, $student_pic);

}
if(isset($_POST['student_status_update'])){
	include ('function/studentfunction.php');
	$student_id = $_POST['student_id'];
	$status = $_POST['status'];
	student_status_update($status, $student_id);

}

// STUDENT_DELETE

if(isset($_POST['student_delete'])){
	include('function/studentfunction.php');
	$student_id = $_POST['student_id'];
	$fullname = $_POST['fullname'];
	$contact = $_POST['contact'];
	$course_year = sqlstrip($_POST['course_year']);
	$address = $_POST['address'];
	student_delete($student_id, $fullname, $contact, $course_year, $address);
}

//STUDENT VIEW
if(isset($_POST['student_view'])){
	include('function/studentfunction.php');
	$student_id = $_POST['student_id'];
	$fullname = $_POST['fullname'];
	$contact = $_POST['contact'];
	$course_year = sqlstrip($_POST['course_year']);
	$address = $_POST['address'];
	student_view($student_id, $fullname, $contact, $course_year, $address);
}

// FOR DEAN
// if(isset($_POST['dean_add'])){
// 	include ('function/deanfunction.php');
// 	$username = sqlstrip(encryptor($_POST['username']));
// 	$password = sqlstrip(encryptor($_POST['password']));

// 	$fullname = sqlstrip($_POST['fullname']);
// 	$department = sqlstrip($_POST['department']);
// 	$contact = sqlstrip($_POST['contact']);
// 	dean_add($username, $password, $fullname, $department, $contact);


// }

// FOR FACULTY
if(isset($_POST['dean_add'])){
	include ('function/facultyfunction.php');
	$username = sqlstrip(encryptor($_POST['username']));
	$password = sqlstrip(encryptor($_POST['password']));
	$fullname = sqlstrip($_POST['fullname']);
	$contact = sqlstrip($_POST['contact']);
	$department = sqlstrip($_POST['department']);

	dean_add($username, $password, $fullname,  $contact, $department);


}
if(isset($_POST['dean_assign'])){
	include ('function/facultyfunction.php');
	$department = sqlstrip($_POST['department']);
	$faculty_id = sqlstrip($_POST['faculty_id']);

	dean_assign($department, $faculty_id);
}

if(isset($_POST['program_head_assign'])){
	include ('function/facultyfunction.php');
	$department = sqlstrip($_POST['department']);
	$faculty_id = sqlstrip($_POST['faculty_id']);

	program_head_assign($department, $faculty_id);
}

if(isset($_POST['faculty_add'])){
	include ('function/facultyfunction.php');
	$username = sqlstrip(encryptor($_POST['username']));
	$password = sqlstrip(encryptor($_POST['password']));
	$fullname = sqlstrip($_POST['fullname']);
	$contact = sqlstrip($_POST['contact']);
	$department = sqlstrip($_POST['department']);
	$faculty_program = sqlstrip($_POST['faculty_program']);
	$faculty_position = sqlstrip($_POST['faculty_position']);

	faculty_add($username, $password, $fullname,  $contact, $department, $faculty_program, $faculty_position);


}
if(isset($_POST['faculty_update'])){
	include ('function/facultyfunction.php');
	$faculty_id = $_POST['faculty_id'];
	$fullname = sqlstrip($_POST['fullname']);
	$contact = sqlstrip($_POST['contact']);
	$faculty_program = sqlstrip($_POST['faculty_program']);
	$department = sqlstrip($_POST['department']);
	$faculty_position = sqlstrip($_POST['faculty_position']);
	$status = $_POST['status'];
	faculty_update($faculty_id, $fullname, $contact, $faculty_program, $department, $faculty_position, $status);

}
if(isset($_POST['faculty_delete'])){
	include('function/facultyfunction.php');
	$faculty_id = $_POST['faculty_id'];
	$fullname = sqlstrip($_POST['fullname']);
	$department = sqlstrip($_POST['department']);
	$contact = sqlstrip($_POST['contact']);
	$faculty = sqlstrip($_POST['faculty_position']);
	faculty_delete($username, $password, $fullname, $department, $contact, $faculty_position);

}
if(isset($_POST['faculty_view'])){
	include('function/facultyfunction.php');
	$student_id = $_POST['student_id'];
	$fullname = $_POST['fullname'];
	$contact = $_POST['contact'];
	$course_year = sqlstrip($_POST['course_year']);
	$address = $_POST['address'];
	faculty_view($student_id, $fullname, $contact, $course_year, $address);
}
//FOR REPORT

if(isset($_POST['report_add'])){
	include('function/reportfunction.php');
	$offense_id = $_POST['offense_id'];
	$description = $_POST['description'];
	$landmark = $_POST['landmark'];
	$faculty_id = $_POST['faculty_id'];
	if(isset($_FILES['report_pic'])){
		$report_pic = $_FILES['report_pic'];
	}else{
		$report_pic = "";
	}
	$date_incident = $_POST['date_incident'];
	report_add($offense_id, $description, $landmark,$faculty_id, $report_pic, $date_incident);
}
if(isset($_POST['report_add2'])){
	include('function/reportfunction.php');
	$offense_id = $_POST['offense_id'];
	$clue_id = $_POST['clue_id'];
	$description = $_POST['description'];
	$landmark = $_POST['landmark'];
	$faculty_id = $_POST['faculty_id'];

	if(isset($_FILES['report_pic'])){
		$report_pic = $_FILES['report_pic'];
		$picture_bool = 1;
	}else{
		$report_pic = "";
		$picture_bool = 0;
	}

	$date_incident = $_POST['date_incident'];
	
	report_add2($offense_id, $description, $landmark, $faculty_id, $report_pic, $date_incident, $clue_id, $picture_bool);
}
if(isset($_POST['report_update'])){
	include('function/reportfunction.php');
	$report_id = $_POST['report_id'];
	$description = $_POST['description'];
	$status = $_POST['status'];
	report_update($report_id, $description, $status);

}

if(isset($_POST['report_forward'])){
	include('function/reportfunction.php');
	$report_id = $_POST['report_id'];
	$faculty_id = $_POST['faculty_id'];
	report_forward($report_id, $faculty_id);

}



//FOR offense LIST
if(isset($_POST['offense_add'])){
	include ('function/offenselistfunction.php');
	$title = $_POST['title'];
	$offense_description = $_POST['offense_description'];
	$offense_level = $_POST['offense_level'];
	$article = $_POST['article'];

	offense_add($title, $offense_description, $offense_level, $article);

}
if(isset($_POST['offense_update'])){
	include ('function/offenselistfunction.php');
	$id = $_POST['id'];
	$title = $_POST['title'];
	$offense_description = $_POST['offense_description'];
	$offense_level = $_POST['offense_level'];
	$article = $_POST['article'];

	offense_update($id, $title, $offense_description, $offense_level, $article);

}
if(isset($_POST['offense_suggestion_add'])){
	include('function/offense_suggestionfunction.php');
	$offense_suggestion = $_POST['offense_suggestion'];

	offense_suggestion_add($offense_suggestion);
}
if(isset($_POST['offense_suggestion_upd'])){
	include('function/offense_suggestionfunction.php');
	$offense_suggestion_id = $_POST['offense_suggestion_id'];
	$offense_suggestion = $_POST['offense_suggestion'];

	offense_suggestion_upd($offense_suggestion_id, $offense_suggestion);
}

if(isset($_POST['offense_suggestion_del'])){
	include('function/offense_suggestionfunction.php');
	$offense_suggestion_id = $_POST['offense_suggestion_id'];
	$offense_id = $_POST['offense_id'];

	offense_suggestion_del($offense_suggestion_id, $offense_id);
}


//FOR INVOLVE DATA

if(isset($_POST['involve_register'])){
	include ('function/involvefunction.php');
	$offense_id = $_POST['offense_id'];
	$description = $_POST['description'];
	$date_of_incident = $_POST['date_of_incident'];
	involve_add($offense_id, $description, $date_of_incident);

}
if(isset($_POST['involve_update'])){
	include ('function/involvefunction.php');
	$involve_id = $_POST['involve_id'];
	$description = $_POST['description'];
	$date_of_incident = $_POST['date_of_incident'];
	$status = $_POST['status'];
	involve_update($involve_id, $description, $date_of_incident, $status);

}
if(isset($_POST['involve_delete'])){
	include('function/involvefunction.php');
	$involve_id = $_POST['involve_id'];
	$description = $_POST['description'];
	involve_delete($involve_id, $description);

}


// INVOLVE PERSON


if(isset($_POST['involvedata_add'])){
	include('function/involvedatafunction.php');
	$involvedata_id = $_POST['involvedata_id'];
	$fullname = $_POST['fullname'];
	involvedata_add($involvedata_id, $fullname);

}
if(isset($_POST['involvedata_upd'])){
	include('function/involvedatafunction.php');
	$involve_id = $_POST['involve_id'];
	$involvedata_id = $_POST['involvedata_id'];
	$fullname = $_POST['fullname'];
	involvedata_upd($involve_id, $involvedata_id, $fullname);

}

if(isset($_POST['involvedata_del'])){
	include('function/involvedatafunction.php');
	$involve_id = $_POST['involve_id'];
	$involvedata_id = $_POST['involvedata_id'];
	$fullname = $_POST['fullname'];
	involvedata_del($involve_id, $involvedata_id, $fullname);

}


if(isset($_POST['feedback_add'])){
	include('function/feedbackfunction.php');
	$feedback = $_POST['feedback'];
	feedback_add($feedback);

}
if(isset($_POST['offense_suggest_add'])){

	include('function/offenselistfunction.php');
	
	$description = $_POST['description'];
	$offense_id = $_POST['offense_id'];

	suggest_add($description, $offense_id);

}

//FOR RESIDENT STATUS
if(isset($_POST['student_status_update'])){
	include('function/studentfunction.php');
	$account_id = $_POST['account_id'];
	$student_id = $_POST['student_id'];
	$fullname= sqlstrip($_POST['fullname']);
	$contact = sqlstrip($_POST['contact']);
	$address = sqlstrip($_POST['address']);
	$status = $_POST['status'];
	student_status_update($account_id, $student_id, $fullname, $contact, $address, $status);
}


//FOR RESIDENT STATUS


if(isset($_POST['faculty_status_update'])){
	include ('function/facultyfunction.php');
	$faculty_id = $_POST['faculty_id'];
	$status = $_POST['status'];
	faculty_status_update($faculty_id, $fullname, $contact, $faculty_program, $department, $faculty_position, $status);

}
?>