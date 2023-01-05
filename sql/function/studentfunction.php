<?php
//ADD STUDENT

	function student_add($username, $password, $lname, $fname, $mname, $id_no, $email, $department, $course, $year, $contact, $address, $student_pic){
	
		$query = selectwhere('account', 'username', $username);
		if(mysqli_num_rows($query)==0){
			$query2 = selectwhere('student', 'id_no', $id_no);
			if(mysqli_num_rows($query2)==0){
				$query3 = selectwhere('student', 'email', $email);
				if(mysqli_num_rows($query3)==0){

					insert3('account', 'username', $username, 'password', $password, 'account_type', 0);
					$query = selectorder('account', 'id', 'DESC');
					$account = mysqli_fetch_array($query);

					if($student_pic['name']!=""){
						$target_path = "../images/student_profile/";    
						$ext = explode('.', basename($student_pic['name']));  

						$picture_name = md5(uniqid()) . "." . $ext[count($ext) - 1];
						$target_path = $target_path.$picture_name;    
						compress_image($student_pic["tmp_name"], $target_path, 50);

						insert2('gallery', 'folder_name', 'student_profile', 'picture_name', $picture_name);
						$query2 = selectorder('gallery', 'id', 'DESC');
						$picture = mysqli_fetch_array($query2);

						insert12('student', 'lname', $lname, 'fname', $fname, 'mname', $mname, 'id_no', $id_no, 'email', $email, 'department', $department, 'course', $course, 'year', $year, 'contact', $contact, 'address', $address, 'account_id', $account['id'], 'pic_id', $picture['id']);

					}else{
						insert11('student', 'lname', $lname, 'fname', $fname, 'mname', $mname, 'id_no', $id_no, 'email', $email, 'department', $department, 'course', $course, 'year', $year, 'contact', $contact, 'address', $address, 'account_id', $account['id']);
					}

					$_SESSION['msg'] = "Successfully Registered: You can now Login";
			 		header('Location:../login.php');
			 	}else{
					$_SESSION['msg'] = 'Email Add is already used';
					header('Location:../register.php');
				}	
	 		}else{
				$_SESSION['msg'] = 'Id No. already exists';
				header('Location:../register.php');
			}	
		}else{
			$_SESSION['msg'] = 'Username already exists';
			header('Location:../register.php');
		}		

	}
//ADD student

//EDIT student
	function student_upd($student_id, $lname, $fname, $mname, $id_no, $email, $department, $course, $year, $contact, $address, $student_pic){

		$query2 = selectwhere('student', 'id_no', $id_no);
			if(mysqli_num_rows($query2)==0){
				$query3 = selectwhere('student', 'email', $email);
				if(mysqli_num_rows($query3)==0){

					insert3('account', 'username', $username, 'password', $password, 'account_type', 0);
					$query = selectorder('account', 'id', 'DESC');
					$account = mysqli_fetch_array($query);

					if($student_pic['name']!=""){
						$target_path = "../images/student_profile/";    
						$ext = explode('.', basename($student_pic['name']));  

						$picture_name = md5(uniqid()) . "." . $ext[count($ext) - 1];
						$target_path = $target_path.$picture_name;    
						compress_image($student_pic["tmp_name"], $target_path, 50);

						insert2('gallery', 'folder_name', 'student_profile', 'picture_name', $picture_name);
						$query2 = selectorder('gallery', 'id', 'DESC');
						$picture = mysqli_fetch_array($query2);

						insert11('student', 'id', $student_id, 'lname', $lname, 'fname', $fname, 'mname', $mname, 'id_no', $id_no, 'email', $email, 'department', $department, 'course', $course, 'year', $year, 'contact', $contact, 'address', $address, 'pic_id', $picture['id']);

					}else{
						update10('student', 'id', $student_id, 'lname', $lname, 'fname', $fname, 'mname', $mname, 'id_no', $id_no, 'email', $email, 'department', $department, 'course', $course, 'year', $year, 'contact', $contact, 'address', $address);
					}

			 		$_SESSION['MSG'] = "student ".$fullname." INFO IS UPDATED SUCESSFULLY "; 
		
					header('Location: ../index.php?folder=student&page=show&student_id='.$student_id);
			 	}else{
					$_SESSION['msg'] = 'Email Add is already used';
					header('Location: ../index.php?folder=student&page=show&student_id='.$student_id);
				}	
	 		}else{
				$_SESSION['msg'] = 'Id No. already exists';
				header('Location: ../index.php?folder=student&page=show&student_id='.$student_id);
			}

	}
//EDIT student

//DELETE student
	function student_delete($student_id, $fullname, $contact, $address){
		delete1('student', 'id', $student_id);
	$_SESSION['MSG'] = "student ".$fullname." INFO IS REMOVE SUCESSFULLY";

	header('Location: ../index.php?folder=student&page=show');

	}
//DELETE student

function student_status_update($status, $student_id){

		update1('student', 'id', $student_id, 'status', $status);

		$_SESSION['msg'] = "Status Updated Successfully";
		header('Location: ../index.php?folder=student&page=show&student_id='.$student_id);
	}
function student_view($student_id, $fullname, $contact, $course_year, $address) {

		update5('account', 'id', $account_id,   'fullname', $fullname, 'contact', $contact , 'course_year', $course_year, 'address', $address, 'department', $department);

		$_SESSION['msg'] = "<center><h5 class='alert alert-success'>student ".$fullname." Status has Successfully Updated!</h5></center>";
		header('Location: ../index.php?folder=student&page=show&student_id='.$student_id);
	}


?>