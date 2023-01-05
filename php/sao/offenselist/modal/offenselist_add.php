<form action="sql/submit.php" method="POST">
    <label for="article">Add Article</label><br>
    <input class="form-control form-control-lg" type="text" name="article" placeholder="Article" required>
    <br>
    <label for="title">Add offense Title</label><br>
	<input class="form-control form-control-lg" type="text" name="title" placeholder="Offense Name" required>
    <br>
    <label for="offense_description">Add offense Description</label><br>
    <input class="form-control form-control-lg" type="text" name="offense_description" placeholder="Description" required>
    <br>

    <label for="offense_level">Select Level of Offense</label><br>
    <select class="form-control form-control-lg" required name='offense_level'>
    	<option value='0'>LIGHT OFFENSE</option>
    	<option value='1'>LESS GRAVE OFFENSE</option>
    	<option value='2'>GRAVE OFFENSE</option>
    </select>
    <br>


    <center>
    	<button style="background:#4c516d; color: white;" class="btn " type="submit" name="offense_add">Add offense List</button>
	</center>
</form>