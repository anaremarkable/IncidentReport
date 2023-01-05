<?php
include('../../../sql/sqlfunction.php');

$offense_id = $_GET['offense_id'];
$query = selectwhere('offense_list', 'id', $offense_id);
$offense_list = mysqli_fetch_array($query);

echo $offense_list['offense_description'];
echo "<br>";
?>