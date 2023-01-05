<?php
include('../../../../sql/sqlfunction.php');
$student_id = $_GET['student_id'];
$query = selectwhere('student', 'id', $student_id);
$student = mysqli_fetch_array($query);

$query2 = selectwhere('account', 'id', $student['account_id']);
  $account = mysqli_fetch_array($query2);
?>

<form action="sql/submit.php" method="POST">
<select  name="status" id="status">
  <option value="1" <?php if($account['status']==1) echo "SELECTED"; ?>>Inactive</option>
  <option value="0" <?php if($account['status']==0) echo "SELECTED"; ?>>Active</option>
  <option value="2" <?php if($student['status']==2) echo "SELECTED"; ?>>Verified Reporter</option>
  <option value="3" <?php if($student['status']==3) echo "SELECTED"; ?>>Most Hoax Reported</option>
<input type="hidden" name="student_id" value="<?php echo $student['id']; ?>" readonly><br>
<input type="hidden" name="account_id" value="<?php echo $account['id']; ?>" readonly>
<br>
<center><button style="background:#4c516d; color: white;" class="btn" type="submit" name="student_status_update">Update Status</button></center>
</form>