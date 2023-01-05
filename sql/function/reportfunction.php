<?php
	//ADD
	function report_add($offense_id, $description, $landmark,$faculty_id, $picture, $date_incident){
		if($picture['name'] != ""){
			$target_path = "../images/incident_picture/";    
			$ext = explode('.', basename($picture['name']));  
			$picture_name = md5(uniqid()) . "." . $ext[count($ext) - 1];
			$target_path = $target_path.$picture_name;    
			compress_image($picture["tmp_name"], $target_path, 50);

			insert2('gallery', 'folder_name', 'incident_picture', 'picture_name', $picture_name);
			$query2 = selectorder('gallery', 'id', 'DESC');
			$picture = mysqli_fetch_array($query2);

 			insert7('report' , 'offense_id', $offense_id, 'description', $description, 'landmark', $landmark ,'faculty_id', $faculty_id, 'pic_id', $picture['id'],'date_incident', $date_incident, 'student_id', $_SESSION['id']);

	 	}else{
	 		insert6('report' , 'offense_id', $offense_id, 'description', $description, 'landmark', $landmark ,'faculty_id', $faculty_id
	 		, 'date_incident', $date_incident, 'student_id', $_SESSION['id']);
	 	}
			

	 	$_SESSION['msg'] = "Report Has Been Added";
	 	header('Location: ../index.php?folder=report&page=show');
	}
	function report_add2($offense_id, $description, $landmark, $faculty_id, $picture, $date_incident, $clue_id, $picture_bool){
		if($picture['name'] != ""){

			$target_path = "../images/incident_picture/";    
			$ext = explode('.', basename($picture['name']));  
			$picture_name = md5(uniqid()) . "." . $ext[count($ext) - 1];
			$target_path = $target_path.$picture_name;    
			compress_image($picture["tmp_name"], $target_path, 50);

			insert2('gallery', 'folder_name', 'incident_picture', 'picture_name', $picture_name);
			$query2 = selectorder('gallery', 'id', 'DESC');
			$picture = mysqli_fetch_array($query2);

 			insert7('report' , 'offense_id', $offense_id, 'description', $description, 'landmark', $landmark ,'faculty_id', $faculty_id, 'pic_id', $picture['id'],'date_incident', $date_incident, 'student_id', $_SESSION['id']);

	 	}else{
	 		insert6('report' , 'offense_id', $offense_id, 'description', $description, 'landmark', $landmark ,'faculty_id', $faculty_id, 'date_incident', $date_incident, 'student_id', $_SESSION['id']);
	 	}
			
        $query = selectwhere('offense_suggestion', 'id', $clue_id);
        $off_sugest = mysqli_fetch_array($query);

        $points = $off_sugest['points']+1;
        $off_sugest_id = $off_sugest['id'];
        
        update1("offense_suggestion",'id', $off_sugest_id, 'points', $points); 

	 	$_SESSION['msg'] = "Report Has Been Added";
	 	header('Location: ../index.php?folder=report&page=show');
	}
	
	//ADD

	//EDIT
	function report_update($report_id, $description, $status){
		update2('report', 'id', $report_id, 'description', $description, 'status', $status);
	 
		$_SESSION['msg'] = "REPORT IS UPDATED SUCESSFULLY "; 
		header('Location: ../index.php?folder=report&page=show&report_id='.$report_id);
	}
	function report_forward($report_id, $faculty_id){
		update1('report', 'id', $report_id, 'faculty_id', $faculty_id);
	 
		$_SESSION['msg'] = "REPORT IS FORWARDED "; 
		header('Location: ../index.php?folder=report&page=show&report_id='.$report_id);
	}

?>