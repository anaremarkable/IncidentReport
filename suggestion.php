<?php
include('sql/connection.php');
include('sql/sqlfunction.php');
$clue = $_GET['clue'];
if($clue != ""){

	$query = mysqli_query($con, "SELECT DISTINCT(offense_id) FROM offense_suggestion WHERE description LIKE '%".$clue."%' ORDER BY points DESC");

	if(mysqli_num_rows($query)){
		while($clues = mysqli_fetch_array($query)){
			$query2 = mysqli_query($con, "SELECT * FROM offense_list WHERE id = '".$clues['offense_id']."'");
			$clue_id = $clues['offense_id'];

			$query3 = mysqli_query($con, "SELECT * FROM offense_suggestion WHERE description LIKE '%".$clue."%' AND offense_id='$clue_id' ");
			

			if(mysqli_num_rows($query3)){
				$clu = mysqli_fetch_array($query3);

				if(mysqli_num_rows($query2)){
					$offense_list = mysqli_fetch_array($query2);

					echo "<div class='offense' data-id='".$offense_list['id']."' data-clue-id='".$clu['id']."' data-name='".$offense_list['title']."'><a href='search_complaints_login.php?search_input=".$clue."&offense_id=".$offense_list['id']."&clue_id=".$clu['id']."' style='color:#022261;text-decoration:none;'><b>".$offense_list['article']."</b> - ".$offense_list['offense_description']."</a> <br><br>
						<i>Matched Keywords: ";
						$query4 = selectwherelikeand('offense_suggestion', 'description', $clue, 'offense_id', $offense_list['id']);
						while($offsug = mysqli_fetch_array($query4)){
							echo $offsug['description']." | ";
						}

					echo "
						</i></div><hr>";

				}	
			}
		}	
	}else{
		echo "<i style='color:#022261;text-decoration:none;'> No Result Found </i><hr><br><br>";	
	}
}
?>
