<?php
include('../../../../sql/sqlfunction.php');
include('../../../../sql/otherfunction.php');

$faculty_id = $_GET['faculty_id'];
$query = selectwhere('faculty', 'id', $faculty_id);
$faculty = mysqli_fetch_array($query);
?>

<form action="sql/submit.php" method="POST">

<input class="form-control" type="text" name="fullname" placeholder="Fullname" value="<?php echo $faculty['fullname']; ?>"> <br>

<input class="form-control" type="text" name="contact" placeholder="Contact" value="<?php echo $faculty['contact']; ?>" required><br>

<input  type="hidden" name="department" placeholder="Department" value="<?php echo $faculty['department']; ?>">

<input  type="hidden" name="faculty_program" placeholder="Program" value="<?php echo $faculty['faculty_program']; ?>">

<input class='form-control' type="text" name="faculty_position" placeholder="Faculty Position" value="<?php echo $faculty['faculty_position']; ?>"><br>

<select name="faculty_position"  class="form-control">
  <option value="program head">Program Head</option>
  <option value="dean">Dean</option>
  <option value="faculty">Faculty</option>
</select>
<br>


<select name="department"  class="form-control">
  <option value="0" <?php echo selected($faculty['department'], 0); ?>>SOECS</option>
  <option value="1" <?php echo selected($faculty['department'], 1); ?>>SBMA</option>
  <option value="2" <?php echo selected($faculty['department'], 2); ?>>SEAS</option>
  <option value="3" <?php echo selected($faculty['department'], 3); ?>>SON</option>
  <option value="4" <?php echo selected($faculty['department'], 4); ?>>SHOM</option>
</select>
<br>
<select class="form-control" name="status" id="status">
  <option value="1" <?php if($faculty['status']==0) echo "SELECTED"; ?>>Inactive</option>
  <option value="0" <?php if($faculty['status']==1) echo "SELECTED"; ?>>Active</option>
  <option value="2" <?php if($faculty['status']==2) echo "SELECTED"; ?>>Verified Reporter</option>
  <option value="3" <?php if($faculty['status']==3) echo "SELECTED"; ?>>Most Hoax Reported</option>
  <input type="hidden" name="faculty_id" value="<?php echo $faculty['id']; ?>" readonly>
  <br>
  <center><button style="background:#4c516d; color: white;" class="btn " name="faculty_update">EDIT</center></button>
</form>


