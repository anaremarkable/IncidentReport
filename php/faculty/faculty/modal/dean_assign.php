<?php
include('../../../../sql/sqlfunction.php');
include('../../../../sql/otherfunction.php');

?>
<h2>Assign New Dean</h2>
<hr>
<form action="sql/submit.php" method="POST">
<br>
  <label for="departments">Choose Department</label>
  <select id='departments' name="department" class="form-control">
    <option value='0'>SOECS</option>
    <option value='1'>SBMA</option>
    <option value='2'>SEAS</option>
    <option value='3'>SON</option>
    <option value='4'>SHOM</option>
  </select><br>
  <select name='faculty_id' class='faculty form-control' id='faculty_soecs' required>
    <?php
    $query = selectwhereandnotorder('faculty', 'department', 0, 'faculty_position', 'dean',  'fullname', 'ASC');
    while($faculty = mysqli_fetch_array($query)){
      echo "<option value='".$faculty['id']."'>".strtoupper($faculty['fullname'])."</option>";
    }
    ?>
  </select>
  <select name='faculty_id' class='faculty form-control'  id='faculty_sbma' disabled style='display:none;' required>
    <?php
    $query = selectwhereandnotorder('faculty', 'department',1, 'faculty_position', 'dean',  'fullname', 'ASC');
    while($faculty = mysqli_fetch_array($query)){
      echo "<option value='".$faculty['id']."'>".strtoupper($faculty['fullname'])."</option>";
    }
    ?>
  </select>
  <select name='faculty_id' class='faculty form-control'  id='faculty_seas' disabled style='display:none;' required>
    <?php
    $query = selectwhereandnotorder('faculty', 'department',2, 'faculty_position', 'dean',  'fullname', 'ASC');
    while($faculty = mysqli_fetch_array($query)){
      echo "<option value='".$faculty['id']."'>".strtoupper($faculty['fullname'])."</option>";
    }
    ?>
  </select>
  <select name='faculty_id' class='faculty form-control'  id='faculty_soenas' disabled style='display:none;' required>
    <?php
    $query = selectwhereandnotorder('faculty', 'department',3, 'faculty_position', 'dean',  'fullname', 'ASC');
    while($faculty = mysqli_fetch_array($query)){
      echo "<option value='".$faculty['id']."'>".strtoupper($faculty['fullname'])."</option>";
    }
    ?>
  </select>
  <select name='faculty_id' class='faculty form-control'  id='faculty_shom' disabled style='display:none;' required>
    <?php
    $query = selectwhereandnotorder('faculty', 'department',4, 'faculty_position', 'dean',  'fullname', 'ASC');
    while($faculty = mysqli_fetch_array($query)){
      echo "<option value='".$faculty['id']."'>".strtoupper($faculty['fullname'])."</option>";
    }
    ?>
  </select>
  <center>
    <button style="background:#4c516d; color: white;" class="btn btn-success" type="submit" name="dean_assign">Assign Dean</button>
  </center>
</form>
<script>
   $(document).ready(function(){
    $('#departments').change(function(){
      var departments = $(this).val();
      $('.faculty').attr('disabled', true);
      $('.faculty').fadeOut('fast', function(){
        if(departments == 0){
          $('#faculty_soecs').attr('disabled', false);
          $('#faculty_soecs').fadeIn('slow');
        } 
        if(departments == 1){
          $('#faculty_sbma').attr('disabled', false);
          $('#faculty_sbma').fadeIn('slow');
        } 
        if(departments == 2){
          $('#faculty_seas').attr('disabled', false);
          $('#faculty_seas').fadeIn('slow');
        } 
         if(departments == 3){
          $('#faculty_soenas').attr('disabled', false);
          $('#faculty_soenas').fadeIn('slow');
        } 
         if(departments == 4){
          $('#faculty_shom').attr('disabled', false);
          $('#faculty_shom').fadeIn('slow');
        } 
      }); 
    });
  });   
</script>
</script>