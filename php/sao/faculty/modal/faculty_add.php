<?php
include('../../../../sql/sqlfunction.php');
include('../../../../sql/otherfunction.php');

?>

<form action="sql/submit.php" method="POST">

<br>
<label for="username">Username</label>
<input class="form-control" type="text" name="username"	placeholder="Username" readonly value='<?php echo username_generator(); ?>'> <br>

<label for="password">Password</label>
<input class="form-control" type="text" name="password"	placeholder="Password" readonly value='<?php echo password_generator(); ?>'> <br>

<label for="fullname">Name of the Faculty</label>
<input class="form-control" type="text" name="fullname"	placeholder="Fullname" required autofocus> <br>

<label for="contact">Contact Number</label>
<input class="form-control" type="text" name="contact" placeholder="Contact" required><br>

<label for="departments">Choose Your Department</label>
<select id='departments' name="department" class="form-control">
  <option value='0'>SOECS</option>
  <option value='1'>SBMA</option>
  <option value='2'>SEAS</option>
  <option value='3'>SON</option>
  <option value='4'>SHOM</option>
</select>
<br>
<label>Choose Your Program: </label>
<select name='faculty_program' class='course' id='soecs_course'>
  <option value='0'>BSIT</option>
  <option value='1'>BSCS</option>
  <option value='2'>BSCE</option>
  <option value='3'>BSEE</option>
  <option value='4'>BLISS</option>
</select>

<select style='display:none;' name='faculty_program' class='course' id='sbma_course' disabled>
  <option value='5'>BSA</option>
  <option value='6'>BSMA</option>
  <option value='7'>BSFM</option>
  <option value='8'>BSIA</option>
  <option value='9'>BSHM</option>
  <option value='10'>BSMM</option>
  <option value='11'>BSOM</option>
</select>

<select style='display:none;' name='faculty_program' class='course' id='seas_course' disabled>
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

<select style='display:none;' name='faculty_program' class='course' id='soneas_course' disabled>
  <option value='21'>BSN</option>
</select>

<select style='display:none;' name='faculty_program' class='course' id='shom_course' disabled>
  <option value='22'>BSHM</option>
</select>
<br>

<script>
  $(document).ready(function(){
    $('#departments').change(function(){
      var departments = $(this).val();
      $('.course').attr('disabled', true);
      $('.course').fadeOut(function(){
        if(departments == 0){
          $('#soecs_course').attr('disabled', false);
          $('#soecs_course').fadeIn();
        } 

        if(departments == 1){

          $('#sbma_course').attr('disabled', false);
          $('#sbma_course').fadeIn();
        } 

        if(departments == 2){

          $('#seas_course').attr('disabled', false);
          $('#seas_course').fadeIn();
        } 
         if(departments == 3){

          $('#soneas_course').attr('disabled', false);
          $('#soneas_course').fadeIn();
        } 
         if(departments == 4){
          $('#shom_course').attr('disabled', false);
          $('#shom_course').fadeIn();
        } 

      }); 
    });
  });   
</script>
<br>
<select name="faculty_position"  class="form-control">
  <option value="program head">Program Head</option>
  <option value="dean">Dean</option>
  <option value="faculty">Faculty</option>
</select>
<br>
<center>
<button style="background:#4c516d; color: white;" class="btn btn-success" type="submit" name="faculty_add">Add faculty</button>
</center>
</form>