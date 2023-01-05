<?php include('student_nav.php'); ?>
<div  class="container-fluid px-4">
    <strong><h1 style="font-family: verdana;" class="mt-4">Student List</strong></h1>
    <div style=" border: 2px solid black;" class="row">
        <div class="card mb-4"  style='background-color: #20334a05;'>
        <div class="card-body">
                <table style=" border: 2px solid black;" style="font-family: verdana;" id="datatablesSimple">
                  <thead style=" border: 2px solid black;">
                      <tr style="  border: 2px solid black; background-color:#4c516d; color: white;">
                        <th>Student Name</th>
                        <th>ID Number</th>
                        <th>Course Yr</th>
                        <th>Email Address</th>
                        <?php
                        if($faculty['faculty_position']=='dean'){
                        ?>
                        <th></th>
                        <?php
                        }
                        ?>
                      </tr>
                  </thead>
                  <tbody>
                  <?php
                  $query = selectwhereorder('student','department', $_SESSION['department'], 'lname', 'ASC');
                  while($student = mysqli_fetch_array($query)){
                    $query2 = selectwhere('account', 'id', $student['account_id']);
                    $account = mysqli_fetch_array($query2);

                    $query4 = selectwhere('gallery', 'id', $student['pic_id']);
                    $picture = mysqli_fetch_array($query4);       

                    echo "
                    <tr>
                      <td>".strtoupper($student['lname'])." ".$student['fname'].", ".$student['mname']."</td>
                      <td>".strtoupper($student['id_no'])."</td>
                      <td>".faculty_program($student['course'])." ".strtoupper($student['year'])."</td>
                      <td>".strtolower($student['email'])."</td>";
                      if($faculty['faculty_position']=='dean'){
                      echo   "<td>
                      <button class='btn btn-sm' data-toggle='modal' data-target='#modalOpenMd' data-type='updStudent' data-id='".$student['id']."'><i class='fa fa-edit'></i></button>
                      <button class='btn btn-sm' data-toggle='modal' data-target='#modalOpenMd' data-type='updStudStatus' data-id='".$student['id']."'><i class='fa fa-toggle-off'></i></button>
                      
                      </td>";
                      }
                    echo "  
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
