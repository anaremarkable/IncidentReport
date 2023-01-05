<?php
//ADD DEAN
	function feedback_add($feedback){

			insert2('feedback', 'feedback', $feedback, 'student_id', $_SESSION['id']);

	 		$_SESSION['msg'] = "Feedback Has Been Added";
	 		header('Location:../index.php?folder=feedback&page=add');
 		
		
	}

?>