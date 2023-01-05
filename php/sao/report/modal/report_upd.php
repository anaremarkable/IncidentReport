<?php
include('../../../../sql/sqlfunction.php');
$report_id = $_GET['report_id'];
$query = selectwhere('report', 'id', $report_id);
$report = mysqli_fetch_array($query);
?>
<form action="sql/submit.php" method="POST">

	<h2>Edit the Offense Status</h2>
  <hr>
  <textarea hidden class="span16 form-control" name="description" rows="5" readonly> <?php echo $report['description']; ?> </textarea><br>
 
	<label for="status">Status</label>
  <select name="status" id="status" class=' form-control'> 
  <option value="0" <?php if($report['status']==0) echo "SELECTED"; ?>>Pending</option>
  <option value="1" <?php if($report['status']==1) echo "SELECTED"; ?>>Verified</option>
  <option value="2" <?php if($report['status']==2) echo "SELECTED"; ?>>Duplicate</option>
  <option value="3" <?php if($report['status']==3) echo "SELECTED"; ?>>Hoax</option>
  <input type="hidden" name="report_id" value="<?php echo $report['id']; ?>" readonly><br>

  <center><input style="background-color:#4c516d; color: white;" class="btn btn-lg" type="submit" name="report_update" value="UPDATE STATUS"></center>
</form>