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
                            <a href='search_offense.php'><button class='btn btn-dark btn-md pull-right'><i class='fa fa-arrow-left'></i> Back</button></a><br><br>
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
                            <a href='search_offense.php'>Search Complaints</a> | Search Result
                           
                        </div>
                        <div class="card-body" style='height:70vh;'>
                            <form action="search_result.php" method="GET">
                                <div class="form-group mb-3">
                                    <input type="text" id='search_complaint'class="form-control form-control-lg w-50" name="search_input" placeholder="Enter Text" autofocus required style='padding:5px;padding-left:50px;border-radius:300px;' value='<?php echo $_GET['search_input']?>'>
                                </div>
                                <center>
                                    <div style="font-family: verdana; " class="align-items-center justify-content-between mt-4 mb-0">
                                     
                                     <button style="background:#4c516d; color:white; font-family: verdana;" class="btn  btn-sm" type="submit" hidden> SEARCH </button>
                                    </div>
                                </center>
                            </form>
                            <div class='row'>
                                <div class='col-lg-9' style='background: #a4acbd6b;height:55vh;padding:20px;overflow:auto;' id='search_result'>
                                    <?php
                                    $clue = $_GET['search_input'];
                                    if($clue != ""){

                                        $query = mysqli_query($con, "SELECT DISTINCT(offense_id) FROM offense_suggestion WHERE description LIKE '%".$clue."%' ORDER BY points DESC");

                                        if(mysqli_num_rows($query)){
                                            while($clues = mysqli_fetch_array($query)){
                                                $query2 = mysqli_query($con, "SELECT * FROM offense_list WHERE id = '".$clues['offense_id']."'");
                                                $clue_id = $clues['offense_id'];

                                                $query3 = mysqli_query($con, "SELECT * FROM offense_suggestion WHERE description LIKE '%".$clue."%' AND offense_id='$clue_id' ");
                                                

                                                if(mysqli_num_rows($query3)){
                                                    $clu = mysqli_fetch_array($query3);

                                                    if(mysqli_num_rows($query2)){
                                                        $offense_list = mysqli_fetch_array($query2);

                                                        echo "<div class='offense' data-id='".$offense_list['id']."' data-clue-id='".$clu['id']."' data-name='".$offense_list['title']."'>
                                                                <a href='search_complaints_login.php?search_input=".$clue."&offense_id=".$offense_list['id']."&clue_id=".$clu['id']."' style='color:#022261;text-decoration:none;'>

                                                                    <b>".$offense_list['article']."</b> - ".$offense_list['offense_description']."
                                                                </a> <br><br>
                                                            <i>Matched Keywords: ";
                                                            $query4 = selectwherelikeand('offense_suggestion', 'description', $clue, 'offense_id', $offense_list['id']);
                                                            while($offsug = mysqli_fetch_array($query4)){
                                                                echo $offsug['description']." | ";
                                                            }

                                                        echo "
                                                            </i></div><hr>";

                                                    }   
                                                }
                                            }   
                                        }else{

                                            echo "<i style='color:#022261;text-decoration:none;'> No Result Found </i><hr>";    
                                        }
                                    }
                                    ?>
                                </div>
                                <div class='col-lg-3' style='background: #a4acbd6b;height:55vh;padding:20px 20px 20px 30px;overflow:auto;float:right;'>
                                    <b>20 Most Common Complaints</b>
                                    <br><br>
                                    <?php
                                    $query = mysqli_query($con, "SELECT DISTINCT(offense_id) FROM offense_suggestion ORDER BY points DESC LIMIT 20");
                                    $x=1;
                                    while($clues = mysqli_fetch_array($query)){
                                        $query2 = mysqli_query($con, "SELECT * FROM offense_list WHERE id = '".$clues['offense_id']."'");
                                        $clue_id = $clues['offense_id'];

                                        $query3 = mysqli_query($con, "SELECT * FROM offense_suggestion WHERE offense_id='$clue_id' ");
                                        

                                        if(mysqli_num_rows($query3)){
                                            $clu = mysqli_fetch_array($query3);

                                            if(mysqli_num_rows($query2)){
                                                $offense_list = mysqli_fetch_array($query2);

                                                echo "<div class='offense' data-id='".$offense_list['id']."' data-clue-id='".$clu['id']."' data-name='".$offense_list['title']."'><a href='search_complaints_login.php?search_input=".$clue."&offense_id=".$offense_list['id']."&clue_id=".$clu['id']."' style='color:#022261;text-decoration:none;'>".$x.". ) <b>".$offense_list['article']."</b> - ".$offense_list['offense_description']."</a>
                                                    </div><hr>";

                                            }   
                                        }
                                        $x++;
                                    }   
                                    
                                    ?>
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
<script>
    $(document).ready(function(){
        $('#search_complaint').keyup(function(){
            var clue = $(this).val();
            var link ="suggestion.php?clue="+clue;

            $.get(link, function(returnData){
                $('#search_result').html(returnData);
            });     
            $('#search_result').fadeIn();
        });
    });
</script>
