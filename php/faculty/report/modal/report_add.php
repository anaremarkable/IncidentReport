 <?php
include('../../../../sql/sqlfunction.php');
include('../../../../sql/otherfunction.php');
?>
<h3>Create Complaint</h3>
<hr>
 <form action="sql/submit.php" method="POST" enctype="multipart/form-data">
   
    <select name='offense_id' class='form-control'>
        <?php
            $query = select('offense_list');
            while($offense = mysqli_fetch_array($query)){
            echo "<option value='".$offense['id']."'>".$offense['title']."</option>";
            }
        ?>
    </select>
    <br>
    <br>
    <input type="text" name="landmark" placeholder="Landmark" class='form-control' ><br>
    <label for="faculty_id">Faculty Involve</label>
    <select class="form-control" name='faculty_id'>
        <?php
            $query = select('faculty');
            while($faculty = mysqli_fetch_array($query)){
            echo "<option value='".$faculty['is']."'>".$faculty['fullname']."</option>";
                                        }
        ?>
    </select>
    
    <input class="form-control col-md-5" type="date" name="date_incident" placeholder="Enter Date of Incident"><br>

    Upload Proof of Incident: <br>
    <input type ="file" name="report_pic" id="picUpload" onchange="checkImg()" class='form-control'>
    <br>
    <textarea  name="description" rows="10"  placeholder="Enter Details Here...." class='form-control'></textarea><br>
    <center>
    <button style="background-color:#4c516d; color: white;" class="btn btn-success btn-sm" type="submit" name="report_add">Add Complaint</button>
    </center>
</form>     