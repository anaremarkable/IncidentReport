<?php include('sql/sqlfunction.php'); ?>
<?php include('sql/otherfunction.php'); ?>

<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - Incident Report</title>
        <link href="css/styles.css" rel="stylesheet" />
        
        <link href="css/font-awesome.min.css" rel="stylesheet" />
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/fajs.js" crossorigin="anonymous"></script>
    </head>
    <body style='overflow-x:hidden;'>
        <img src='images/bg.png' style='height:100vh;width:100%;position:fixed;z-index:-1;top:0px;bottom:0px;'>
        <div class='p-2'>
            <div class="row">
                <div class='col-lg-12'>
                    <img src='images/header.png' style='height:7vw;'>
                </div>
                <div class='col-lg-4'>
                    <h1 style='font:8vw Impact; color:white;'>Incident Report for DWCL</h1>
                </div>
                <div class='col-lg-8' style="font-family: verdana;" >
                    <div  class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">  
                            <strong><h3 style=" color:#4c516d; font-family: verdana;"  class="text-center font-weight-light my-2">REGISTER STUDENT ACCOUNT</strong></h3>
                        </div>
                        <div class="card-body">
                            <form action="sql/submit.php" method="POST" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <div class="col-md-2">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" type="text" name="lname" required autofocus>
                                            <label>Last Name <i class='fa fa-asterisk'></i></label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" type="text" name="fname" required>
                                            <label>First Name <i class='fa fa-asterisk'></i></label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" type="text" name="mname" required>
                                            <label>Middle Name <i class='fa fa-asterisk'></i></label>
                                        </div>
                                    </div>
                                     <div class="col-md-2">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <select class="form-control" type="text" id='departments' name="department" required>
                                                  <option value="0">SOECS</option>
                                                  <option value="1">SBMA</option>
                                                  <option value="2">SOED</option>
                                                  <option value="3">SON</option>
                                                  <option value="4">SOHM</option>
                                            </select>
                                            <label>Department <i class='fa fa-asterisk'></i></label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <select name='course' class='course form-control' id='soecs_course'>
                                              <option value='0'>BSIT</option>
                                              <option value='1'>BSCS</option>
                                              <option value='2'>BSCE</option>
                                              <option value='3'>BSEE</option>
                                              <option value='4'>BLISS</option>
                                            </select>

                                            <select style='display:none;' name='course' class='course form-control' id='sbma_course' disabled>
                                              <option value='5'>BSA</option>
                                              <option value='6'>BSMA</option>
                                              <option value='7'>BSFM</option>
                                              <option value='8'>BSIA</option>
                                              <option value='9'>BSHM</option>
                                              <option value='10'>BSMM</option>
                                              <option value='11'>BSOM</option>
                                            </select>

                                            <select style='display:none;' name='course' class='course form-control' id='seas_course' disabled>
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

                                            <select style='display:none;' name='course' class='course form-control' id='soneas_course' disabled>
                                              <option value='21'>BSN</option>
                                            </select>

                                            <select style='display:none;' name='course' class='course form-control' id='shom_course' disabled>
                                              <option value='22'>BSHM</option>
                                            </select>
                                            <label>Course <i class='fa fa-asterisk'></i></label>
                                        </div>
                                    </div>


                                    <div class="col-md-2">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" type="number" name="year" required>
                                            <label>Year <i class='fa fa-asterisk'></i></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <input class="form-control" type="number" name="id_no" required>
                                            <label>Id Number <i class='fa fa-asterisk'></i></label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <input class="form-control" type="email" name="email" required>
                                            <label>Email <i class='fa fa-asterisk'></i></label>
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" type="text" name="password" value="<?php echo password_generator(); ?>" required>
                                            <label>Temporary Password <i class='fa fa-asterisk'></i></label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <input class="form-control" type="number" name="contact" required max='9999999999' min='9000000000'>
                                            <label>Contact <i>(09xxxxxxxxx)</i></label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <input class="form-control" type="text" name="address" required>
                                            <label>Address</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input type ="file" class="form-control" name="student_pic" id="picUpload" onchange="checkImg()">
                                            <label>Profile Pic</label>
                                        </div>
                                    </div>
                                </div>
                                <center>
                                    <div class="mt-4 mb-0">
                                       <button style="background-color: #4c516d; color:white; font-family: verdana;" class="btn btn-lg" type="submit" name="student_register">REGISTER AS STUDENT</button>
                                    </div>
                                </center>
                            </form>
                            <br>
                            <?php
                            if(isset($_SESSION['msg'])){
                                echo "
                                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                ".$_SESSION['msg']."
                                </div>";

                                $_SESSION['msg']= "";
                                unset($_SESSION['msg']);
                            }
                            ?>
                        </div>    
                        <div class="card-footer text-center py-3">
                            <div class="small"><a style="color:black; font-family: verdana;" href="login.php">Back to Login</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
 <script src="js/jquery-3.3.1.min.js"></script>
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