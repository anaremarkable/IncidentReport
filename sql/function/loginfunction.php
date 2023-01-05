<?php
	function login($username, $password){
		$query = selectwhereand('account', 'username', $username, 'password', $password);

		if(mysqli_num_rows($query)!=0){
			$user = mysqli_fetch_array($query);
			if($user['status'] == 0){
				if($user['account_type'] == 0){	
					$query = selectwhere('student', 'account_id', $user['id']);
				}elseif($user['account_type'] == 1){
					$query = selectwhere('sao', 'account_id', $user['id']);
				}elseif($user['account_type'] == 3){
					$query = selectwhere('faculty', 'account_id', $user['id']);
			}
				
				$account  = mysqli_fetch_array($query);
				$query2 = selectwhere('gallery', 'id', $account['pic_id']);
			$picture = mysqli_fetch_array($query2);

		$_SESSION['id'] = $account['id'];
		$_SESSION['pic_link'] = "images/".$picture['folder_name']."/".$picture['picture_name'];
		$_SESSION['fullname'] = $account['fullname'];
		$_SESSION['account_type'] = $user['account_type'];
		$_SESSION['account_id'] = $user['id'];
		$_SESSION['id'] = $account['id'];
		$_SESSION['department'] = $account['department'];
				header('Location: ../index.php?folder=dashboard&page=home');
			}else{
				$_SESSION['msg'] = "Login Failed: Account Disabled";
				header('Location: ../login.php');
			}
			
		}else{

			$_SESSION['msg'] = "Incorrect Username or Password";
			header('Location: ../login.php');
		}
	}
	function login2($username, $password, $offense_id, $search_input, $clue_id){
		$query = selectwhereand('account', 'username', $username, 'password', $password);

		if(mysqli_num_rows($query)!=0){
			$user = mysqli_fetch_array($query);
			if($user['status'] == 0){
				if($user['account_type'] == 0){	
					$query = selectwhere('student', 'account_id', $user['id']);
					$account  = mysqli_fetch_array($query);
					$query2 = selectwhere('gallery', 'id', $account['pic_id']);
					$picture = mysqli_fetch_array($query2);

					$_SESSION['id'] = $account['id'];
					$_SESSION['pic_link'] = "images/".$picture['folder_name']."/".$picture['picture_name'];
					$_SESSION['fullname'] = $account['fullname'];
					$_SESSION['account_type'] = $user['account_type'];
					$_SESSION['account_id'] = $user['id'];
					$_SESSION['id'] = $account['id'];
					$_SESSION['department'] = $account['department'];

					$_SESSION['msg'] = "<center><h5 style='color:red;'>Successfully Logged In: Student ".$_SESSION['fullname']."</h5></center>";
					header('Location: ../search_complaints_next.php?search_input='.$search_input.'&offense_id='.$offense_id.'&clue_id='.$clue_id);
				}else{
					$_SESSION['msg'] = "<center><h5 style='color:red;'>Failed! You are not a student</h5></center>";
					header('Location: ../search_complaints_login.php?search_input='.$search_input.'&offense_id='.$offense_id.'&clue_id='.$clue_id);
				}
			}else{
				$_SESSION['msg'] = "<center><h5 style='color:red;'><strong>Login Failed:</strong> Account Disabled</h5></center>";
				header('Location: ../search_complaints_login.php?search_input='.$search_input.'&offense_id='.$offense_id.'&clue_id='.$clue_id);
			}
			
		}else{
			$_SESSION['msg'] = "<center><h5 style='color:red;'>Incorrect Username or Password</h5></center>";
			header('Location: ../search_complaints_login.php?search_input='.$search_input.'&offense_id='.$offense_id.'&clue_id='.$clue_id);
		}
	}

function change_username($old_username, $password, $new_username){
	
	$query = selectwhereand2('account', 'username', $old_username, 'password', $password, 'id', $_SESSION['account_id']);
		if(mysqli_num_rows($query) == 0){
			$_SESSION['msg'] = 'Old Username or Password is Incorrect';
			header('Location../index.php?folder=dashboard&page=home');
		}else{
			$query = selectwhere('account', 'username', $new_username);
		if(mysqli_num_rows($query) == 0){
			update1('account', 'id', $_SESSION['account_id'], 'username', $new_username);

			$_SESSION['msg'] = "Success! Username has been changed!";
		}else{
			$_SESSION['msg'] = "Failed! Username has already exists!";
		}
	}
		header('Location:../index.php?folder=dashboard&page=home');
}

function change_password($username, $old_password, $new_password){
	$query = selectwhereand2('account', 'username', $username, 'password', $old_password, 'id', $_SESSION['account_id']);
		if(mysqli_num_rows($query) == 0){
			$_SESSION['msg'] = 'Old Username or Password is Incorrect';
			header('Location../index.php?folder=dashboard&page=home');
		}else{
			$query = selectwhere('account', 'password', $new_password);
		if(mysqli_num_rows($query) == 0){
			update1('account', 'id', $_SESSION['account_id'], 'password', $new_password);

			$_SESSION['msg'] = "Success! Password has been changed!";
		}else{
			$_SESSION['msg'] = " ";
		}
	}
		header('Location:../index.php?folder=dashboard&page=home');
}


?>