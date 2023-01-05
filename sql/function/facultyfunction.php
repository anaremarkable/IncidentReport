<?php
	function dean_add($username, $password, $fullname,  $contact, $department){
		$query = selectwhere('account', 'username', $username);
		if(mysqli_num_rows($query)==0){
 			$query = selectwhere('account', 'username', $username);
			insert3('account', 'username', $username, 'password', $password, 'account_type', 3);

			$query = selectorder('account', 'id', 'DESC');
			$account = mysqli_fetch_array($query);

			update1('faculty', 'department', $department, 'faculty_position', 'faculty');

			insert5('faculty', 'fullname', $fullname,  'contact', $contact, 'department', $department, 'faculty_position', 'dean','account_id', $account['id']);

	 		$_SESSION['msg'] = "Dean Has Been Added";
	 		header('Location:../index.php?folder=faculty&page=show');
		}else{
			$_SESSION['msg'] = 'Username already exists';
			header('Location:../index.php?folder=faculty&page=add');
		}		

	}
	function dean_assign($department, $faculty_id){
		
		update1('faculty', 'department', $department, 'faculty_position', 'faculty');
		update1('faculty', 'id', $faculty_id, 'faculty_position', 'dean');

 		$_SESSION['msg'] = "Dean Has Been Assigned";
 		header('Location:../index.php?folder=faculty&page=show');
	}
	function program_head_assign($department, $faculty_id){
		$query = selectwhere('faculty', 'id', $faculty_id);
		$faculty = mysqli_fetch_array($query);

		updateand1('faculty', 'department', $department, 'faculty_program', $faculty['faculty_program'], 'faculty_position', 'faculty');
		update1('faculty', 'id', $faculty_id, 'faculty_position', 'program head');

 		$_SESSION['msg'] = "Program Head Has Been Assigned";
 		header('Location:../index.php?folder=faculty&page=show');
	}

	function faculty_add($username, $password, $fullname,  $contact, $department, $faculty_program, $faculty_position){
		$query = selectwhere('account', 'username', $username);
		if(mysqli_num_rows($query)==0){
			$query2 = selectwhereand('faculty', 'department', $department, 'faculty_position', $faculty_position);
			if(mysqli_num_rows($query2) && $faculty_position=="dean"){
				$_SESSION['msg'] = "Only one dean per department";
		 		header('Location:../index.php?folder=faculty&page=show');
 			}else{
	 			$query = selectwhere('account', 'username', $username);
				insert3('account', 'username', $username, 'password', $password, 'account_type', 3);

				$query = selectorder('account', 'id', 'DESC');
				$account = mysqli_fetch_array($query);

				insert6('faculty', 'fullname', $fullname,  'contact', $contact, 'department', $department, 'faculty_program', $faculty_program, 'faculty_position',$faculty_position,'account_id', $account['id']);

		 		$_SESSION['msg'] = "Faculty Has Been Added";
		 		header('Location:../index.php?folder=faculty&page=show');

 			}
		}else{
			$_SESSION['msg'] = 'Username already exists';
			header('Location:../index.php?folder=faculty&page=add');
		}		

	}

//UPDATE
	function faculty_update($faculty_id, $fullname, $contact, $faculty_program, $department, $faculty_position, $status){

		$query2 = selectwhereand('faculty', 'department', $department, 'faculty_position', $faculty_position);
		if(mysqli_num_rows($query2) && $faculty_position=="dean"){

			update6('faculty', 'id', $faculty_id, 'fullname', $fullname, 'faculty_program', $faculty_program, 'contact', $contact,'department', $department, 'faculty_position', $faculty_position,'status', $status,);

			$_SESSION['msg'] = "faculty ".$fullname." INFO IS UPDATED SUCESSFULLY "; 
			header('Location: ../index.php?folder=faculty&page=show&faculty_id='.$faculty_id);
		}else{
			$_SESSION['msg'] = "faculty ".$fullname." INFO IS UPDATED SUCESSFULLY "; 
			header('Location: ../index.php?folder=faculty&page=show&faculty_id='.$faculty_id);
		}
	}
	function faculty_status_update($faculty_id, $fullname, $contact, $faculty_program, $department, $faculty_position, $status){


		update1('faculty', 'id', $faculty_id,'status', $status,);
 
		$_SESSION['MSG'] = "faculty ".$fullname." INFO IS UPDATED SUCESSFULLY "; 
		header('Location: ../index.php?folder=faculty&page=show&faculty_id='.$faculty_id);
		
	}
	function faculty_view($student_id, $fullname, $contact, $course_year, $address) {

		update5('account', 'id', $account_id,   'fullname', $fullname, 'contact', $contact , 'course_year', $course_year, 'address', $address, 'department', $department);

		$_SESSION['msg'] = "<center><h5 class='alert alert-success'>student ".$fullname." Status has Successfully Updated!</h5></center>";
		header('Location: ../index.php?folder=faculty&page=show&student_id='.$student_id);
	}

?>