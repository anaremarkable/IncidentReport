<?php
include('../../../../sql/sqlfunction.php');
include('../../../../sql/otherfunction.php');

$offense_suggestion_id = $_GET['offense_suggestion_id'];
$query = selectwhere('offense_suggestion', 'id', $offense_suggestion_id);
$offense_suggestion = mysqli_fetch_array($query);


$query = selectwhere('offense_list', 'id', $offense_suggestion['offense_id']);
$offense_list = mysqli_fetch_array($query);
?>

<form action="sql/submit.php" method="POST">

    <center><h2>Remove Clueword??</h2></center>
    <br>
  
    <input type='hidden' name='offense_id' value="<?php echo $offense_list['id']; ?>">
    <input type='hidden' name='offense_suggestion_id' value="<?php echo $offense_suggestion['id']; ?>">
    <center>
    	<button style="background:#4c516d; color: white;" class="btn" type="submit" name="offense_suggestion_del">Delete Clue Word</button>
	</center>
</form>