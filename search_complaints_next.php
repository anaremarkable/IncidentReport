<?php include('sql/sqlfunction.php'); ?>
<?php include('sql/connection.php'); ?>
<?php include('sql/otherfunction.php'); ?>
<?php

session_start();
if(isset($_SESSION['account_type'])){
    if($_SESSION['account_type']==0){
        if(!isset($_GET['search_input']) || !isset($_GET['offense_id'])){
            echo $_SESSION['msg'] = "<center><h5 style='color:red;'>Failed! Wrong Url </h5></center>";
            header('Location: search_complaints_login.php?search_input='.$_GET['search_input'].'&offense_id='.$_GET['offense_id']);
        }
    }else{
        echo $_SESSION['msg'] = "<center><h5 style='color:red;'>Failed! You are not Logged In as a Student</h5></center>";
        header('Location: search_complaints_login.php?search_input='.$_GET['search_input'].'&offense_id='.$_GET['offense_id']);
    }
}else{
    echo $_SESSION['msg'] = "<center><h5 style='color:red;'>Failed! Please Login as a Student First</h5></center>";
    header('Location: search_complaints_login.php?search_input='.$_GET['search_input'].'&offense_id='.$_GET['offense_id']);
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
            <div class="row">
                <div class='col-lg-12'>
                    <img src='images/header.png' style='height:5vw;'>
                    <h1 style='font:4vw Impact; color:white;float:right;'>Incident Report for DWCL</h1>
                </div>
                <div class='col-lg-2'>
                    <a href='search_result.php?search_input=<?php echo $_GET['search_input']; ?>'><button class='btn btn-dark btn-md pull-right'><i class='fa fa-arrow-left'></i> Back</button></a>
                </div>
                <div class='col-lg-8' style='background: white;padding:20px;overflow:auto;' id='search_result'>

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
                    <a href='search_result.php?search_input=<?php echo $_GET['search_input']; ?>'>Search Result</a> | Complaints Add Details <br><br>
                    <h4 style='float:right;'>Date: <b><?php echo date('M d, Y'); ?></b></h4>
                    <h4>Student Reporter: <b><?php echo $_SESSION['fullname']; ?></b></h4>
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
                    <div  class="card shadow-lg border-0 rounded-lg">
                        <div class="card-body">
                            <form action="sql/submit.php" method="POST" enctype="multipart/form-data">
                                <strong><label style="font-family: verdana;" for="date_incident">Enter the Date of Incident</label></strong>
                                <input class="form-control " type="date" name="date_incident" placeholder="Enter Date of Incident" value="<?php echo date('Y-m-d'); ?>" required>
                                <br>
                                <strong><label style="font-family: verdana;" for="landmark">Place of the Incident</label></strong>
                                    <input type="text" name="landmark" placeholder="Place of Incident" class='form-control' required><br>

                                <strong><label style="font-family: verdana;" for="faculty_id">Report To</label></strong>
                                    <select class="form-control" name='faculty_id' required>
                                        <option value='0'><b>SAO Mr. Allan Albaytar</b></option>
                                        <?php
                                        for($i=0; $i<5; $i++){
                                            echo "<optgroup label='".department_acc($i)."'>";
                                            $query = selectwhere('faculty', 'department', $i); 
                                            while($faculty = mysqli_fetch_array($query)){
                                            echo "<option value='".$faculty['id']."'>".$faculty['fullname']."</option>";
                                            }
                                            echo  "</optgroup>";
                                        }
                                        ?>
                                    </select>
                                <br>  
                                <strong>Upload Proof of Incident(Optional) <br></strong>
                                <input type ="file" name="report_pic" id="picUpload" onchange="checkImg()" class='form-control'>
                                <br>
  
                                <strong><label style="font-family: verdana;" for="faculty_id">Short Narrative (Please also include the name/s of those involved)</label></strong>
                                <textarea name="description" rows="5"  placeholder="Enter Details Here...." class='form-control' required></textarea><br>
                                <center>
                                    <div style="font-family: verdana; " class="align-items-center justify-content-between mt-4 mb-0">
                                     <input type="hidden" name="offense_id" value="<?php echo $_GET['offense_id']; ?>" required>

                                     <input type="hidden" name="clue_id" value="<?php echo $_GET['clue_id']; ?>" required>

                                     <input type="hidden" name="search_input" value="<?php echo $_GET['search_input']; ?>" required>

                                     <button style="background:#4c516d; color:white; font-family: verdana;" class="btn btn-sm"   type="submit" name="report_add2">CONTINUE to PROCEED </button>

                                    </div>
                                </center>
                            </form>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
