<?php include('sql/sqlfunction.php'); ?>
<?php include('sql/otherfunction.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Landing - Incident Report</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
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
                            <?php
                                session_start();
                                if(isset($_SESSION['msg'])){
                                echo $_SESSION['msg'];
                                $_SESSION['msg']= "";
                            }
                            ?>
                           <strong><h3 style=" color:#4c516d; font-family: verdana;" class="text-center font-weight-light my-2">WELCOME</strong></h3>
                        </div>
                        <div class="card-body">                            <center>
                                <div style="font-family: verdana; " class="align-items-center justify-content-between mt-4 mb-0">
                                <a style="color: black; font-family: verdana;" href="login.php">
                                    <button style="background:#4c516d; color:white; font-family: verdana;width:100%;" class="btn  btn-lg"   type="button" name="btn_login" >LOGIN </button>
                                </a>
                                <br><br>
                                <a style="color: black; font-family: verdana;" href="search_offense.php">
                                    <button style="background:#4c516d; color:white; font-family: verdana;width:100%;" class="btn  btn-lg"   type="button" name="btn_login" >REPORT A STUDENT </button>
                                </a>
                                </div>
                            </center>
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
