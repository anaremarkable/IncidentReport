<form action="sql/submit.php" method="POST">
    
    <label for="offense_description">Add Clue Word</label><br>
    <input class="form-control form-control-lg" type="text" name="description" placeholder="Description" required>
    <input type='hidden' name='offense_id' value='<?php echo $_GET['offense_id']; ?>'>
    <br>

    <center>
    	<button style="background:#4c516d; color: white;"class="btn " type="submit" name="offense_suggest_add">Add Clue Word</button>
	</center>
</form>