<?php
include('../../../sql/connection.php');
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
					echo "<div class='offense' data-id='".$offense_list['id']."' data-clue-id='".$clu['id']."' data-name='".$offense_list['title']."'><b>".$offense_list['article']."</b> - ".$offense_list['offense_description']."</div><br><br>";	
				}	
			}
			
			
		}	
	}
	
}
?>

<!-- 
<script src="../../../js/jquery-3.3.1.min.js"></script> -->
<script>
	$(document).ready(function(){
	
		$('.offense').click(function(){
			var offense_id = $(this).data('id');
			var clue_id = $(this).data('clue-id');
			var offense_name = $(this).data('name');
            $('#offense_id').val(offense_id);
            $('#offense').val(offense_name);
            
            var link ="php/student/report/suggest_rank.php?id="+clue_id+"&id2="+clue_id;
            $.get(link, function(returnData){});  

		});
		
	});
</script>