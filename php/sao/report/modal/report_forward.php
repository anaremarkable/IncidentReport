<?php
include('../../../../sql/sqlfunction.php');
include('../../../../sql/otherfunction.php');
$report_id = $_GET['report_id'];
$query = selectwhere('report', 'id', $report_id);
$report = mysqli_fetch_array($query);
?>
<form action="sql/submit.php" method="POST">

	<h2>Forward Report</h2>
  <hr>
	<label for="faculty_id">Select Faculty</label>
  <select name="faculty_id" id="faculty_id" class='form-control'> 
    <?php
    echo "<option value='0' ".selected($report['faculty_id'], 0).">SAO Mr. Allan Albaytar</option>";

    $query = selectwherenot('faculty', 'id', $report['faculty_id']);
    while($faculty = mysqli_fetch_array($query)){

      echo "<option value='".$faculty['id']."' ".selected($report['faculty_id'], $faculty['id']).">".strtoupper($faculty['fullname'])."</option>";
    }
    ?>
    
  </select>
  <input type="hidden" name="report_id" value="<?php echo $report['id']; ?>" readonly><br>

  <center><input style="background-color:#4c516d; color: white;" class="btn btn-lg"  type="submit" name="report_forward" value="FORWARD"></center>
</form>