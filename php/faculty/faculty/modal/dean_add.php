<?php
include('../../../../sql/sqlfunction.php');
include('../../../../sql/otherfunction.php');

?>
<h2>Create New Dean</h2>
<hr>
<form action="sql/submit.php" method="POST">
<br>
  <label for="username">Username</label>
  <input class="form-control" type="text" name="username"	placeholder="Username" readonly value='<?php echo username_generator(); ?>'> <br>

  <label for="password">Password</label>
  <input class="form-control" type="text" name="password"	placeholder="Password" readonly value='<?php echo password_generator(); ?>'> <br>

  <label for="fullname">Name of the Dean</label>
  <input class="form-control" type="text" name="fullname"	placeholder="Fullname" required autofocus> <br>

  <label for="contact">Contact Number</label>
  <input class="form-control" type="text" name="contact" placeholder="Contact" required><br>

  <label for="departments">Choose Department</label>
  <select  class="form-control" id='departments' name="department" class="form-control">
    <option value='0'>SOECS</option>
    <option value='1'>SBMA</option>
    <option value='2'>SEAS</option>
    <option value='3'>SON</option>
    <option value='4'>SHOM</option>
  </select>
  <br>
  <center>
    <button style="background:#4c516d; color: white;" class="btn btn-success" type="submit" name="dean_add">Add Dean</button>
  </center>
</form>