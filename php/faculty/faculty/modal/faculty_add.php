<?php
include('../../../../sql/sqlfunction.php');
include('../../../../sql/otherfunction.php');
session_start();
?>

<form action="sql/submit.php" method="POST">

<br>
<label for="username">Username</label>
<input class="form-control" type="text" name="username"	placeholder="Username" readonly value='<?php echo username_generator(); ?>'><br>

<label for="password">Password</label>
<input class="form-control" type="text" name="password"	placeholder="Password" readonly value='<?php echo password_generator(); ?>'><br>

<label for="fullname">Name of the Faculty</label>
<input class="form-control" type="text" name="fullname"	placeholder="Fullname" required autofocus><br>

<label for="contact">Contact Number</label>
<input class="form-control" type="text" name="contact" placeholder="Contact" required><br>

<input class="form-control" type="hidden" name="department" value="<?php echo $_SESSION['department']; ?>" required><br>

<label>Choose Your Program: </label>
<?php if($_SESSION['department']==0){ ?>
<select name='faculty_program' class='course form-control' id='soecs_course'>
  <option value='0'>BSIT</option>
  <option value='1'>BSCS</option>
  <option value='2'>BSCE</option>
  <option value='3'>BSEE</option>
  <option value='4'>BLISS</option>
</select>

<?php }if($_SESSION['department']==1){ ?>
<select  name='faculty_program' class='course form-control' id='sbma_course' >
  <option value='5'>BSA</option>
  <option value='6'>BSMA</option>
  <option value='7'>BSFM</option>
  <option value='8'>BSIA</option>
  <option value='9'>BSHM</option>
  <option value='10'>BSMM</option>
  <option value='11'>BSOM</option>
</select>

<?php }if($_SESSION['department']==2){ ?>
<select  name='faculty_program' class='course form-control' id='seas_course' >
  <option value='12'>BSNE</option>
  <option value='13'>BEE</option>
  <option value='14'>BSMATH</option>
  <option value='15'>BSENGLISH</option>
  <option value='16'>FILIPINO</option>
  <option value='17'>BSSCIENCE</option>
  <option value='18'>BPE</option>
  <option value='19'>BSP</option>
  <option value='20'>BHS</option>
</select>

<?php }if($_SESSION['department']==3){ ?>
<select name='faculty_program' class='course form-control' id='soneas_course' >
  <option value='21'>BSN</option>
</select>

<?php } if($_SESSION['department']==4){ ?>
<select style='display:none;' name='faculty_program' class='course form-control' id='shom_course' >
  <option value='22'>BSHM</option>
</select>
<?php } ?>
<br>

<br>
<select name="faculty_position"  class="form-control">
  <option value="faculty">Faculty</option>
  <option value="program head">Program Head</option>
</select>
<br>
<center>
<button style="background:#4c516d; color: white;" class="btn btn-success" type="submit" name="faculty_add">Add faculty</button>
</center>
</form>