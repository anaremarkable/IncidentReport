<?php  
	function offense_suggestion_add($offense_suggestion){

		insert1('offense_suggestion', 'offense_suggestion', $offense_suggestion);

		$_SESSION['msg'] = "Offense Suggestion has been added!";

		header('Location: ../index.php?folder=offense_suggestion&page=show');
		
	}
	function offense_suggestion_upd($offense_suggestion_id, $offense_suggestion){

		update1('offense_suggestion', 'id', $offense_suggestion_id, 'offense_suggestion', $offense_suggestion);

		$_SESSION['msg'] = "Offense Suggestion has been updated!";
		header('Location: ../index.php?folder=offense_suggestion&page=show');
	}
	function offense_suggestion_del($offense_suggestion_id, $offense_id){

		delete1('offense_suggestion', 'id', $offense_suggestion_id);

		$_SESSION['msg'] = "Offense Suggestion has been deleted!";
		header('Location: ../index.php?folder=offenselist&page=show');
	}
	

?>