<?php
include('../../../../sql/sqlfunction.php');
include('../../../../sql/otherfunction.php');
session_start();
?>
<h2>Assign New Program Head</h2>
<hr>
<form action="sql/submit.php" method="POST">
<br>
  <select name='faculty_id' class='faculty form-control' required>
    <?php
    $query = selectwhereandnotorder('faculty', 'department', $_SESSION['department'], 'faculty_position', 'dean',  'fullname', 'ASC');
    while($faculty = mysqli_fetch_array($query)){
      echo "<option value='".$faculty['id']."'>".strtoupper($faculty['fullname'])."</option>";
    }
    ?>
  </select><br>

  <input class="form-control" type="hidden" name="department" value="<?php echo $_SESSION['department']; ?>" required><br>
  <center>
    <button style="background:#4c516d; color: white;" class="btn btn-success" type="submit" name="program_head_assign">ASSIGN PROGRAM HEAD</button>
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