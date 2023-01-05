<?php
include('../../sql/sqlfunction.php');
session_start();
$query = selectwhereandcount('report', 'id', 'totalpending', 'status', 0, 'faculty_id', $_SESSION['id']);
$pending = mysqli_fetch_array($query);

if($pending['totalpending']!=0){
    echo "
    <div style='background: red;height:40px;width:40px; padding:5px;border-radius:40px;float:right;'>
        <center><b style='color:white;font:18px comic sans ms;'>".$pending['totalpending']."</b></center>
    </div>
    ";
}

?>