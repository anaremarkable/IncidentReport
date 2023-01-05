<?php include('sql/sqlfunction.php'); ?>
<?php include('sql/connection.php'); ?>
<?php include('sql/otherfunction.php'); ?>
<?php

session_start();
if(isset($_SESSION['account_type'])){
    if($_SESSION['account_type']==0){
        if(isset($_GET['search_input']) || isset($_GET['offense_id'])){
            echo $_SESSION['msg'] = "<center><h5 style='color:red;'>Failed! Wrong Url </h5></center>";
            header('Location: search_complaints_next.php?search_input='.$_GET['search_input'].'&offense_id='.$_GET['offense_id'].'&clue_id='.$_GET['clue_id']);
        }
    }
}
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
                <div class='col-lg-12'>
                    <h1 style='font:5vw Impact; color:white;'>Incident Report for DWCL</h1>
                </div>
                <div class='col-lg-3'>
                    <a href='search_result.php?search_input=<?php echo $_GET['search_input']; ?>'><button class='btn btn-dark btn-md pull-right'><i class='fa fa-arrow-left'></i> Back</button></a>
                </div>
                <div class='col-lg-6' style='background: white;padding:20px;overflow:auto;' id='search_result'>
                    <?php
                    if(isset($_SESSION['account_type'])){
                        if($_SESSION['account_type']==0){
                            echo "<a href='index.php?folder=report&page=show'>Home</a> |";
                        }else{
                            echo "<a href='landing.php'>Home</a> |";
                        }
                    }else{
                        echo "<a href='landing.php'>Home</a> |";
                    }
                    ?>
                    <a href='search_offense.php'>Search Complaints</a> | 
                    <a href='search_result.php?search_input=<?php echo $_GET['search_input']; ?>'>Search Result</a> | Login First <br><br>
                    <?php
                    $clue = $_GET['search_input'];
                    if($clue != ""){

                        $query = mysqli_query($con, "SELECT DISTINCT(offense_id) FROM offense_suggestion WHERE description LIKE '%".$clue."%' AND offense_id='".$_GET['offense_id']."' ");

                        if(mysqli_num_rows($query)){
                            while($clues = mysqli_fetch_array($query)){
                                $query2 = mysqli_query($con, "SELECT * FROM offense_list WHERE id = '".$clues['offense_id']."'");
                                $clue_id = $clues['offense_id'];

                                $query3 = mysqli_query($con, "SELECT * FROM offense_suggestion WHERE description LIKE '%".$clue."%' AND offense_id='$clue_id' ");
                                

                                if(mysqli_num_rows($query3)){
                                    $clu = mysqli_fetch_array($query3);

                                    if(mysqli_num_rows($query2)){
                                        $offense_list = mysqli_fetch_array($query2);

                                        echo "<div class='offense' data-id='".$offense_list['id']."' data-clue-id='".$clu['id']."' data-name='".$offense_list['title']."'><b>".$offense_list['article']."</b> - ".$offense_list['offense_description']."</a></div><hr>";

                                    }   
                                }
                            }   
                        }else{

                            echo "<i style='color:#022261;text-decoration:none;'> No Result Found </i><hr>";    
                        }
                    }
                    ?>
                </div>
                <div class='col-lg-3'></div>
                <div class='col-lg-6' style="font-family: verdana;" >
                    <div  class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">  
                            <?php
                                if(isset($_SESSION['msg'])){
                                echo $_SESSION['msg'];
                                $_SESSION['msg']= "";
                            }
                            ?>
                           <strong><h3 style=" color:#4c516d; font-family: verdana;" class="text-center font-weight-light my-2">We Need you to LOGIN FIRST!</strong></h3>
                        </div>
                        <div class="card-body">
                            <form action="sql/submit.php" method="POST">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control form-control-user" name="username"  placeholder="Enter Username" autofocus required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" class="form-control form-control-user" name="password" placeholder="Enter Password" required>
                                </div>
                                <center>
                                    <div style="font-family: verdana; " class="align-items-center justify-content-between mt-4 mb-0">

                                     <input type="hidden" name="offense_id" value="<?php echo $_GET['offense_id']; ?>" required>

                                     <input type="hidden" name="search_input" value="<?php echo $_GET['search_input']; ?>" required>
                                     <input type="hidden" name="clue_id" value="<?php echo $_GET['clue_id']; ?>" required>
                                     <button style="background:#4c516d; color:white; font-family: verdana;" class="btn  btn-sm"   type="submit" name="btn_login2">LOGIN TO PROCEED </button>
                                    </div>
                                </center>
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
