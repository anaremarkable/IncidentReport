<?php
session_start();

if(isset($_GET['folder']) && isset($_GET['page'])  && isset($_SESSION['account_type'])){
	$folder = $_GET['folder'];
 	$page = $_GET['page'];
//FOR STUDENT USER
	if ($_SESSION['account_type']==0){
 		if($folder == "dashboard" && $page == "home"){
 			$body = "php/student/dashboard/home.php";
 		}elseif($folder == "report" && $page == "add"){
 			$body = "php/student/report/add_report.php";
 		}elseif($folder == "report" && $page == "show"){
 			$body = "php/student/report/show_report.php";
		}elseif($folder == "feedback" && $page == "add"){
 			$body = "php/student/feedback/feedback_add.php";
		}elseif($folder == "feedback" && $page == "view"){
 			$body = "php/student/feedback/feedback_show.php";
		}else{	
 			header('Location: errorpage.php');
 		}
	} 	
//FOR SAO/ADMIN USER
 	if ($_SESSION['account_type']==1){
		if($folder == "dashboard" && $page == "home"){
			$body = "php/sao/dashboard/home.php";
		}elseif($folder == "student" && $page == "show"){
			$body = "php/sao/student/show_student.php";
		}elseif($folder == "student" && $page == "edit"){
			$body = "php/sao/student/edit_student.php";
 		}elseif($folder == "student" && $page == "view"){
 			$body = "php/sao/student/modal/student_view.php";
		}elseif($folder == "faculty" && $page == "add"){
			$body = "php/sao/faculty/add_faculty.php";
		}elseif($folder == "faculty" && $page =="show"){
			$body = "php/sao/faculty/show_faculty.php";
		}elseif($folder == "faculty" && $page == "update"){
			$body = "php/sao/faculty/faculty_upd.php";
		}elseif($folder == "faculty" && $page == "view"){
 			$body = "php/faculty/student/modal/student_view.php";
		}elseif($folder == "report" && $page == "add"){
			$body = "php/sao/report/report_add.php";
		}elseif($folder == "report" && $page == "show"){
			$body = "php/sao/report/show_report.php";
		}elseif($folder == "report" && $page == "edit"){
			$body = "php/sao/report/edit_report.php";
		}elseif($folder == "offenselist" && $page == "add"){
			$body = "php/sao/offenselist/offenselist_add.php";	
		}elseif($folder == "offenselist" && $page == "edit"){
			$body = "php/sao/offenselist/offenselist_upd.php";	
		}elseif($folder == "offenselist" && $page == "show"){
			$body = "php/sao/offenselist/show_offense.php";
		}elseif($folder == "offense_suggestion" && $page == "show"){
			$body = "php/sao/offense_suggestion/show_offense_suggestion.php";
		}elseif($folder == "involvelist" && $page == "add"){
			$body = "php/sao/involvelist/add_involvelist.php";
		}elseif($folder == "involvelist" && $page == "edit"){
			$body = "php/sao/involvelist/edit_involvelist.php";
		}elseif($folder == "involvelist" && $page == "show"){
			$body ="php/sao/involvelist/show_involvelist.php";
		}elseif($folder == "report" && $page == "generate"){
			$body ="php/sao/report/generate_report.php";
		}elseif($folder == "report" && $page == "show"){
			$body ="php/sao/report/show_report.php";
		}elseif($folder == "feedback" && $page == "show"){
			$body ="php/sao/feedback/feedback_show.php";
		}
		elseif($folder == "reports" && $page == "show"){
			$body ="php/sao/reports/show_reports.php";
		}else{
			header('Location: errorpage.php');
		}
	}
//FOR FACULTY USER
	if ($_SESSION['account_type']==3){
 		if($folder == "dashboard" && $page == "home"){
 			$body = "php/faculty/dashboard/home.php";
 		}elseif($folder == "report" && $page == "add"){
 			$body = "php/faculty/report/add_report.php";
 		}elseif($folder == "report" && $page == "show"){
 			$body = "php/faculty/report/show_report.php";
		}elseif($folder == "student" && $page == "show"){
 			$body = "php/faculty/student/show_student.php";
 		}elseif($folder == "faculty" && $page == "show"){
			$body ="php/faculty/faculty/show_faculty.php";
		}else{
 			header('Location: errorpage.php');
 		}
	}
	include('php/template/header.php');
	include($body);
	include('php/template/footer.php');	
}else{
	header('Location: errorpage.php');
}
?>