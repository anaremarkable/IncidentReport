 <?php
include('../../../../sql/sqlfunction.php');
include('../../../../sql/otherfunction.php');
?>
<h3>Create Complaint</h3>
<hr>
 <form  action="sql/submit.php" method="POST" enctype="multipart/form-data">
    <strong><label style="font-family: verdana;" for="offense_id">Choose a offense</label></strong>
    <input type='hidden' id='offense_id' name='offense_id' required>
    <input type='text' id='offense' class='form-control' placeholder="complaint" autocomplete="false">
    <div style='border:1px solid rgba(222, 226, 230, 1);padding:20px;margin-top:-1px;display:none;' id='suggestion'>
    </div>
<br>
<div id='description' style='width:100%;'>
    
</div>
<br>
<strong><label style="font-family: verdana;" for="landmark">Place of the Incident</label></strong>
    <input type="text" name="landmark" placeholder="Place of Incident" class='form-control' ><br>

<strong><label style="font-family: verdana;" for="faculty_id">Choose a Faculty Involve</label></strong>
    <select class="form-control" name='faculty_id'>

        <?php
            $query = select('faculty');
            while($faculty = mysqli_fetch_array($query)){
            echo "<option value='".$faculty['id']."'>".$faculty['fullname']."</option>";
         }
        ?>
    </select>
<br>
    <strong><label style="font-family: verdana;" for="date_incident">Enter the Date of Incident</label></strong>
    <input class="form-control " type="date" name="date_incident" placeholder="Enter Date of Incident">

    <br>
    <strong>Upload Proof of Incident: <br></strong>
    <input type ="file" name="report_pic" id="picUpload" onchange="checkImg()" class='form-control'>
    <br>

    
    <textarea name="description" rows="5"  placeholder="Enter Details Here...." class='form-control'></textarea><br>
    <center>
    <button style="font-family: verdana; background:#4c516d; color: white;" class="btn  btn-sm" type="submit" name="report_add">Add Complaint</button>
    </center>
</form>     

<script>
    $(document).ready(function(){
        $('#offense').keyup(function(){
            var clue = $(this).val();
            var link ="php/student/report/suggestion.php?clue="+clue;
            $.get(link, function(returnData){
                $('#suggestion').html(returnData);
            });     
            $('#suggestion').fadeIn();
        });
        $('#offense').blur(function(){

            $('#suggestion').fadeOut();
      });
    });
</script>