<?php
include('../../../../sql/sqlfunction.php');
include('../../../../sql/otherfunction.php');

$faculty_id = $_GET['faculty_id'];
$query = selectwhere('faculty', 'id', $faculty_id);
$faculty = mysqli_fetch_array($query);
?>
<form action="sql/submit.php" method="POST">	
<select name="status" id="status">
  <option value="0" <?php if($faculty['status']==0) echo "SELECTED"; ?>>Inactive</option>
  <option value="1" <?php if($faculty['status']==1) echo "SELECTED"; ?>>Actives</option>
  <option value="2" <?php if($faculty['status']==2) echo "SELECTED"; ?>>Verified Reporter</option>
  <option value="3" <?php if($faculty['status']==3) echo "SELECTED"; ?>>Most Hoax Reported</option>	

  <input type="hidden" name="faculty_id" value="<?php echo $faculty['id']; ?>" readonly><br>
  <br>
  <center><button style="background:#4c516d; color: white;" class="btn" type="submit" name="faculty_status_update">Update Status</button></center>
</form>
