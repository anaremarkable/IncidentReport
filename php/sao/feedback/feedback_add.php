
<div class="container-fluid px-4">
    <h1 class="mt-4">Feedbacks</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Add Feedback</li>
    </ol>
    <div class="row">
        <div class="card mb-4">
            <div class="card-header">
            </div>
            <div class="card-body">
                <form action="sql/submit.php" method="POST">
					<textarea class="form-control" type="text" name="feedback"	placeholder="Enter Feedback" required autofocus> </textarea><br>

					<center>
					<button class="btn btn-success" type="submit" name="feedback_add">Add Feedback</button>
					</center>
				</form>
            </div>
        </div>
    </div>
</div>

