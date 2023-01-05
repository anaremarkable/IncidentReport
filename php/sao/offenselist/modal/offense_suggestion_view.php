<?php
include('../../../../sql/sqlfunction.php');
include('../../../../sql/otherfunction.php');

$offense_id = $_GET['offense_id'];
$query = selectwhere('offense_list', 'id', $offense_id);
$offense_list = mysqli_fetch_array($query);

?>
<h4>Clue Words for: <b><?php echo strtoupper($offense_list['title']); ?></b>
<?php echo "
<button class='btn btn-sm' style='float:right; background:#4c516d; color:white;' data-toggle='modal' data-target='#modalOpenSm' data-type='addSuggestion' data-id='".$offense_list['id']."'> <i class='fa fa-plus'></i> Add New</button>"; ?>
</h4>
<hr>

<?php
$query2 = selectwhere('offense_suggestion', 'offense_id', $offense_list['id']);
while($suggestion = mysqli_fetch_array($query2)){
    echo "<button style='background:#4c516d; color:white; margin:10px;' class='btn btn btn-xs float-center' data-toggle='modal' data-target='#modalOpenMd' data-type='delOffenseSuggestion' data-id='".$suggestion['id']."'>".$suggestion['description']."</button>";
}

?>