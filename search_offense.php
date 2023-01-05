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
            <div class="row justify-content-center">
                <div class='col-lg-12'>
                    <img src='images/header.png' style='height:7vw;'>
                </div>
                <div class='col-lg-12' style="font-family: verdana;" >
                    <h1 style='font:6vw Impact; color:white;text-align:center;'>Incident Report for DWCL</h1>
                        
                    <center>
                    <div class="card shadow-lg border-0 rounded-lg mt-5 w-50" style='background: #ffffffb3;'>
                        <div class="card-header">  
                        <?php
                        $href= "landing.php";
                        if(isset($_SESSION['account_type'])){
                            if($_SESSION['account_type']==0){
                                echo "<a href='index.php?folder=report&page=show'>Home</a> |";
                                 $href = 'index.php?folder=report&page=show';
                            }else{
                                echo "<a href='landing.php'>Home</a> |";
                            }
                        }else{
                            echo "<a href='landing.php'>Home</a> |";
                        }
                        echo " <a style='color: black; font-family: verdana;' href='".$href."'>";
                        ?>
                   

                        <button style="background:#4c516d; color:white; font-family: verdana;float:left;" class="btn btn-sm"   type="button" name="btn_login" >back </button></a>
                           <strong><h3 style=" color:#4c516d; font-family: verdana;" class="text-center font-weight-light my-2">SEARCH FOR COMPLAINT</strong></h3>
                        </div>
                        <div class="card-body">
                            <form action="search_result.php" method="GET">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control form-control-lg" name="search_input" placeholder="Enter Text" autofocus required style='text-align: center;padding:15px;border-radius:300px;margin:0px 60px 0px 60px;width:85%;'>
                                </div>
                                <center>
                                    <div style="font-family: verdana; " class="align-items-center justify-content-between mt-4 mb-0">
                                     <button style="background:#4c516d; color:white; font-family: verdana;" class="btn  btn-sm" type="submit" > SEARCH </button>
                                    </div>
                                </center>
                            </form>
                        </div>    
                    </div>
                    </center>
                </div>
            </div>
        </div>
    </body>
</html>
