<?php
include('sql/connection.php');
$suggest_id = $_GET['id2'];

            $query = mysqli_query($con, "SELECT * FROM offense_suggestion WHERE id='$suggest_id' ");
            $off_sugest = mysqli_fetch_array($query);

            $points = $off_sugest['points']+1;
            $off_sugest_id = $off_sugest['id'];
            
            mysqli_query($con, "UPDATE offense_suggestion SET points='$points' WHERE id='$off_sugest_id'"); 

            ?>