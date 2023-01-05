<?php include('sql/sqlfunction.php'); ?>
<?php include('sql/otherfunction.php'); ?>
<?php session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - Incident Report</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        
        <link href="css/font-awesome.min.css" rel="stylesheet" />
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/fajs.js" crossorigin="anonymous"></script>
    </head>
    
    <body style='overflow: hidden;'>
        <img src='images/bg.png' style='height:100vh;width:100%;position:fixed;z-index:-1;top:0px;bottom:0px;'>
        <div class='p-2'>
            <div class="row justify-content-center">
                <div class='col-lg-12'>
                    <img src='images/header.png' style='height:7vw;'>
                </div>
                <div class='col-lg-7'>
                    <h1 style='font:11vw Impact; color:white;'>Incident Report for DWCL</h1>
                </div>
                <div class='col-lg-4' style="font-family: verdana;" >
                    <div  class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">  
                           <strong><h3 style=" color:#4c516d; font-family: verdana;" class="text-center font-weight-light my-2">LOGIN</strong></h3>
                        </div>
                        <div class="card-body">
                            <a style="color: black; font-family: verdana;" href="landing.php"><button style="background:#4c516d; color:white; font-family: verdana;" class="btn  btn-sm"   type="button" name="btn_login" >back </button></a><br><br>
                            <form action="sql/submit.php" method="POST">
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input type="text" class="form-control" name="username" autofocus required>
                                            <label>Username <i class='fa fa-asterisk'></i></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input type="password" class="form-control" name="password" required>
                                            <label>Password <i class='fa fa-asterisk'></i></label>
                                        </div>
                                    </div>
                                </div>
                                <center>
                                    <div style="font-family: verdana; " class="align-items-center justify-content-between mt-4 mb-0">
                                     <button style="background:#4c516d; color:white; font-family: verdana;" class="btn btn-lg"   type="submit" name="btn_login" >LOGIN </button>
                                    </div>
                                </center>
                                <br>
                            <?php
                            if(isset($_SESSION['msg'])){
                                echo "
                                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                ".$_SESSION['msg']."<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                                </div>";

                                $_SESSION['msg']= "";
                                unset($_SESSION['msg']);
                            }
                            ?>
                            </form>
                        </div>    
                        <div class="card-footer text-center py-3">
                            <div class="small"><a style="color: black; font-family: verdana;" href="register.php">Need an account? Sign up as Student!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
