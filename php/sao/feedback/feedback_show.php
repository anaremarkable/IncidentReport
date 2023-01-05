<?php include('feedback_navs.php'); ?>

<div class="container-fluid px-4">
    
    <strong><h1 style="font-family: verdana;" class="mt-4">Feedback List  about the Institution</strong></h1>
    
    <div class="row">
        <div class="card mb-4">
            <div class="card-header">
            </div>
            <div style=" border: 2px solid black;" class="card-body">
                <table style=" border: 2px solid black;" style="font-family: verdana;" id="datatablesSimple">
                    <thead style=" border: 2px solid black;">
                        <tr style=" border: 2px solid black; background-color:#4c516d; color: white;">
                            <th>Date</th>
                            <th>Student</th>
                            <th>Department</th>
                            <th>Programs</th>
                            <th>Feedback</th>
                        </tr>
                    </thead>
                        <tbody>
                            <?php
                                $query = selectorder('feedback', 'date_added', 'DESC');
                                while($feedback = mysqli_fetch_array($query)){


                               

                                 $query6 = selectwhere('student', 'id', $feedback['student_id']);
                                $student = mysqli_fetch_array($query6);

                                echo "
                                    <tr>
                                        <td>".date('<b>M d, Y h:i A l</b>', strtotime($feedback['date_added']))."</td>

                                       <td>".strtoupper($student['lname'])." ".ucwords($student['fname']).", ".ucwords($student['mname'])."</td>
                                        <td>".department_acc($student['department'])."</td>
                                        <td>".$student['course']."-".$student['year']."</td>   
                                        <td>".$feedback['feedback']."</td>   
                                    </tr>
                                    ";
                                }
                            ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
