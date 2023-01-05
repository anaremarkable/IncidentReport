<?php include('sql/connection.php'); ?>
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
        <title>Login - Incident Report</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    
    <body style='overflow: hidden;'>
        <img src='images/bg.png' style='height:100vh;width:100%;position:fixed;z-index:-1;top:0px;bottom:0px;'>
        <div class='p-2'>
            <div class="row">
                <div class='col-lg-12'>
                    <img src='images/header.png' style='height:7vw;'>
                </div>
                <div class='col-lg-12 px-5' style="font-family: verdana;" >
                    <h1 style='font:4vw Impact; color:white;'>Incident Report for DWCL</h1>
                    <div class="card shadow-lg border-0 rounded-lg" style='background: #ffffffb3;'>
                        <div class="card-header">  
                            <a href='search_result.php?search_input=<?php echo $_GET['search_input']; ?>'><button class='btn btn-dark btn-md pull-right'><i class='fa fa-arrow-left'></i> Back</button></a>
                            <?php
                                session_start();
                                if(isset($_SESSION['msg'])){
                                echo $_SESSION['msg'];
                                $_SESSION['msg']= "";
                            }
                            ?>
                        </div>
                        <div class="card-body" style='height:70vh;'>
                            <form action="search_result.php" method="POST">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control form-control-lg" name="search_input" placeholder="Enter Text" autofocus required value='<?php echo $_GET['offense_id']?>' hidden>
                                </div>
                                <center>
                                    <div style="font-family: verdana; " class="align-items-center justify-content-between mt-4 mb-0">
                                    <button style="background:#4c516d; color:white; font-family: verdana;" class="btn  btn-sm" type="submit" hidden> SEARCH </button>
                                    </div>
                                </center>
                            </form>
                            <div class='row'>
                                <div class='col-lg-12'>
                                    <center>
                                        <h1>We need you to log in first</h1>
                                    </center>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<script src="js/jquery-3.3.1.min.js"></script>

