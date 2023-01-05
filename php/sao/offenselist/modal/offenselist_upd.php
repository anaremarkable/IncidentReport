<?php
include('../../../../sql/sqlfunction.php');
include('../../../../sql/otherfunction.php');

$offense_id = $_GET['offense_id'];
$query = selectwhere('offense_list', 'id', $offense_id);
$offense_list = mysqli_fetch_array($query);
?>

<form action="sql/submit.php" method="POST">

    <input class="form-control form-control-lg" type="text" name="article" placeholder="Article" required value='<?php echo $offense_list['article']; ?>'>
    <br>

	<input class="form-control form-control-lg" type="text" name="title"placeholder="offense Name" required value='<?php echo $offense_list['title']; ?>'>
    <br>

    <input class="form-control form-control-lg" type="text" name="offense_description" placeholder="Description" required value='<?php echo $offense_list['offense_description']; ?>'>
    <br>

    <select class="form-control form-control-lg" required name='offense_level'>
    	<option value='0' <?php echo selected(0, $offense_list['offense_level']); ?>>LIGHT OFFENSE</option>
    	<option value='1' <?php echo selected(1, $offense_list['offense_level']); ?>>LESS GRAVE OFFENSE</option>
    	<option value='2' <?php echo selected(2, $offense_list['offense_level']); ?>>GRAVE OFFENSE</option>
    </select>
    <br>
  
    <input type='hidden' name='id' value="<?php echo $offense_list['id']; ?>">
    <center>
    	<button style="background:#4c516d; color: white;" class="btn" type="submit" name="offense_update">Update offense List</button>
	</center>
</form>