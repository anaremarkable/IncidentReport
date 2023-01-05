<?php
//ADD INVOLVE DATA
	function offense_add($title, $offense_description, $offense_level, $article){
		$query = selectwhere('offense_list', 'article', $article);
		if(mysqli_num_rows($query)==0){
			insert4('offense_list', 'title', $title , 'offense_description', $offense_description, 'offense_level', $offense_level, 'article', $article);

 			$_SESSION['msg'] = "Offense Has Been Added";	
		}else{
			$_SESSION['msg'] = "Article already exist";
		}

 		header('Location: ../index.php?folder=offenselist&page=show');

	}

	function offense_update($id, $title, $offense_description, $offense_level, $article){
		$query = selectwhere('offense_list', 'article', $article);
		if(mysqli_num_rows($query)==0){
			update4('offense_list', 'id', $id, 'title', $title , 'offense_description', $offense_description, 'offense_level', $offense_level, 'article', $article);

	 		$_SESSION['msg'] = "offense Has Been Updated";
 		}else{
			$_SESSION['msg'] = "Article already exist";
		}
 		header('Location: ../index.php?folder=offenselist&page=show');
	}

	function suggest_add($description, $id){
		insert2('offense_suggestion', 'description', $description, 'offense_id', $id);

 		$_SESSION['msg'] = "Offense Has Been Added";
 		header('Location: ../index.php?folder=offenselist&page=show');
	}

?>