<?php
include('../../../../sql/sqlfunction.php');
include('../../../../sql/otherfunction.php');
$student_id = $_GET['student_id'];
$query = selectwhere('student', 'id', $student_id);
$student = mysqli_fetch_array($query);

$query2 = selectwhere('account', 'id', $student['account_id']);
  $account = mysqli_fetch_array($query2);
?>

<form action="sql/submit.php" method="POST"><br>
<input  style=" border: 2px solid black;" class="form-control" type="text" name="lname"	placeholder="Last Name" value="<?php echo $student['lname']; ?>" required> <br>
<input  style=" border: 2px solid black;" class="form-control" type="text" name="fname"	placeholder="First Name" value="<?php echo $student['fname']; ?>" required> <br>
<input  style=" border: 2px solid black;" class="form-control" type="text" name="mname"	placeholder="Middle Name" value="<?php echo $student['mname']; ?>" required> <br>
<input  style=" border: 2px solid black;" class="form-control" type="number" name="id_no" placeholder="Id Number" value="<?php echo $student['id_no']; ?>" required><br>

<input  style=" border: 2px solid black;" class="form-control" type="email" name="email" placeholder="Email Address" value="<?php echo $student['email']; ?>" required><br>
<input  style=" border: 2px solid black;" class="form-control" type="number" name="contact" placeholder="Contact" value="<?php echo $student['contact']; ?>" required><br>

<input  style=" border: 2px solid black;" class="form-control" type="text" name="address"placeholder="Address" value="<?php echo $student['address']; ?>" required><br>

<select style=" border: 2px solid black;" class="form-control" type="text" id='departments' name="department" required>
  <option value="0" <?php echo selected(0, $student['department']); ?>>SOECS</option>
  <option value="1" <?php echo selected(1, $student['department']); ?>>SBMA</option>
  <option value="2" <?php echo selected(2, $student['department']); ?>>SOED</option>
  <option value="3" <?php echo selected(3, $student['department']); ?>>SON</option>
  <option value="4" <?php echo selected(4, $student['department']); ?>>SOHM</option>
</select><br>
<select style=" border: 2px solid black;" name='course' class='course form-control' id='soecs_course'>
  <option value='0' <?php echo selected(0, $student['course']); ?>>BSIT</option>
  <option value='1' <?php echo selected(1, $student['course']); ?>>BSCS</option>
  <option value='2' <?php echo selected(2, $student['course']); ?>>BSCE</option>
  <option value='3' <?php echo selected(3, $student['course']); ?>>BSEE</option>
  <option value='4' <?php echo selected(4, $student['course']); ?>>BLISS</option>
</select>

<select style='display:none; border: 2px solid black;' name='course' class='course form-control' id='sbma_course' disabled>
  <option value='5' <?php echo selected(5, $student['course']); ?>>BSA</option>
  <option value='6' <?php echo selected(6, $student['course']); ?>>BSMA</option>
  <option value='7' <?php echo selected(7, $student['course']); ?>>BSFM</option>
  <option value='8' <?php echo selected(8, $student['course']); ?>>BSIA</option>
  <option value='9' <?php echo selected(9, $student['course']); ?>>BSHM</option>
  <option value='10' <?php echo selected(10, $student['course']); ?>>BSMM</option>
  <option value='11' <?php echo selected(11, $student['course']); ?>>BSOM</option>
</select>

<select style='display:none; border: 2px solid black;' name='course' class='course form-control' id='seas_course' disabled>
  <option value='12' <?php echo selected(12, $student['course']); ?>>BSNE</option>
  <option value='13' <?php echo selected(13, $student['course']); ?>>BEE</option>
  <option value='14' <?php echo selected(14, $student['course']); ?>>BSMATH</option>
  <option value='15' <?php echo selected(15, $student['course']); ?>>BSENGLISH</option>
  <option value='16' <?php echo selected(16, $student['course']); ?>>FILIPINO</option>
  <option value='17' <?php echo selected(17, $student['course']); ?>>BSSCIENCE</option>
  <option value='18' <?php echo selected(18, $student['course']); ?>>BPE</option>
  <option value='19' <?php echo selected(19, $student['course']); ?>>BSP</option>
  <option value='20' <?php echo selected(20, $student['course']); ?>>BHS</option>
</select>

<select style='display:none; border: 2px solid black;' name='course' class='course form-control' id='soneas_course' disabled>
  <option value='21' <?php echo selected(21, $student['course']); ?>>BSN</option>
</select>

<select style='display:none; border: 2px solid black;' name='course' class='course form-control' id='shom_course' disabled>
  <option value='22' <?php echo selected(22, $student['course']); ?>>BSHM</option>
</select>

<input  style=" border: 2px solid black;" type="hidden" name="student_id" value="<?php echo $student['id']; ?>" readonly><br>

<input  style=" border: 2px solid black;" class="form-control" type="number" name="year"placeholder="Year" value="<?php echo $student['year']; ?>" required><br>

 <input style=" border: 2px solid black;" type ="file" class="form-control" name="student_pic" id="picUpload" onchange="checkImg()"><br>

<center><button style="background:#4c516d; color: white;" class="btn" type="submit" name="student_update">UPDATE STUDENT</button></center>
</form>
<script>
    
  function checkImg(){
    var fileSize = document.getElementById('picUpload').files[0].size;
    var fileType = document.getElementById('picUpload').files[0].type;
    var errMessage =''; var errCnt =0;
    if(fileType!='image/jpg' && fileType!='image/jpeg' && fileType!='image/png' && fileType!='image/JPG' && fileType!='image/JPEG' && fileType!='image/PNG'){
      errMessage += 'Fail! File is not an image \n';
      errCnt ++;
    }else if(fileSize>1563961){
      errMessage += 'Fail! Image Exceeds 1.5 mb \n';
      errCnt ++;
    }
    
    if(errCnt >0){
      alert(errMessage);
      document.getElementById('picUpload').value="";
      errMessage =''; errCnt =0;
    }

  }
  $(document).ready(function(){
    $('#departments').change(function(){
      var departments = $(this).val();
      $('.course').attr('disabled', true);
      $('.course').fadeOut('fast', function(){
        if(departments == 0){
          $('#soecs_course').attr('disabled', false);
          $('#soecs_course').fadeIn('slow');
        } 

        if(departments == 1){
          $('#sbma_course').attr('disabled', false);
          $('#sbma_course').fadeIn('slow');
        } 

        if(departments == 2){

          $('#seas_course').attr('disabled', false);
          $('#seas_course').fadeIn('slow');
        } 
         if(departments == 3){

          $('#soneas_course').attr('disabled', false);
          $('#soneas_course').fadeIn('slow');
        } 
         if(departments == 4){
          $('#shom_course').attr('disabled', false);
          $('#shom_course').fadeIn('slow');
        } 

      }); 
    });
  });   
</script>