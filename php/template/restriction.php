<?php
if(isset($_SESSION['id']) && isset($_SESSION['account_id'])){
	if(isset($_POST['logout'])){
		unset($_SESSION['id']);
		unset($_SESSION['account_id']);
		unset($_SESSION['fullname']);
		unset($_SESSION['account_type']);

		$_SESSION['msg'] = "Logout Sucessfully";
		header('Location: login.php');
	}
}else{

	$_SESSION['msg'] = "Please Login";
	header('Location: login.php');
}

?>