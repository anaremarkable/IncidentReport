
<div class="container-fluid px-4">
    <strong><h1 style=" font-family: verdana;" class="mt-4">Feedback about the Institution</strong></h1>
    
    <div class="row">
        <div class="card mb-4">
            <div class="card-header">
            </div>
            <div class="card-body">
                <form action="sql/submit.php" method="POST">
					<textarea class="form-control" type="text" name="feedback"	placeholder="Enter Feedback" required autofocus> </textarea><br>

					<center>
					<button style=" font-family: verdana; background:#4c516d; color:white;" class="btn btn-success" type="submit" name="feedback_add">Add Feedback</button>
					</center>
				</form>
            </div>
        </div>
    </div>
</div>

