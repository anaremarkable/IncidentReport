<?php include('faculty_nav.php'); ?>

<div class="container-fluid px-4" >
    <strong><h1 style="font-family: verdana;" class="mt-4"><?php echo strtoupper(department_acc($faculty['department'])); ?> Faculties</strong></h1>
    
    <div class="row">
        <div class="card mb-4"  style='background-color: #20334a05;'>
           
            <div class="card-header">
                <button style="font-family: verdana; background-color:#4c516d; color: white;" class='btn btn-sm pull-right' data-toggle='modal' data-target='#modalOpenLg' data-type='addFaculty'> <i style="color: white;"  class='fa fa-plus'></i> Add Faculty</button>
                <button style="font-family: verdana; background-color:#4c516d; color: white;" class='btn btn-sm pull-right' data-toggle='modal' data-target='#modalOpenLg' data-type='assignProgramHead'> <i style="color: white;"  class='fa fa-plus'></i> Assign Program Head</button>
            </div>
            <div style=" border: 1px solid black;" class="card-body">
                <table style=" border: 1px solid black;" style="font-family: verdana;" id="datatablesSimple" >
                     <thead style=" border: 1px solid black;" style="font-family: verdana;">
                          <tr style="background-color:#4c516d; color: white;">
                             <th>Faculty Name</th>
                             <th>Contact</th>
                             <th>Faculty Program</th>
                             <th>Position</th>
                             <th></th>
                          </tr>
                     </thead>
                      <tbody>
                         <?php
                       $query = selectwhereandnotorder('faculty','department', $_SESSION['department'], 'id', $_SESSION['id'], 'id', 'DESC');
                        while($faculty = mysqli_fetch_array($query)){
                           echo "
                            <tr>
                                <td>".$faculty['fullname']."
                                <td>".$faculty['contact']."</td>
                                <td>".faculty_program($faculty['faculty_program'])."</td>
                                <td>".$faculty['faculty_position']."</td>
                                <td><button class='btn btn-sm' data-toggle='modal' data-target='#modalOpenMd' data-type='updFaculty' data-id='".$faculty['id']."'><i class='fa fa-edit'></i></button></td>
                               
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
