<?php include('faculty_nav.php'); ?>

<div class="container-fluid px-4" >
    <strong><h1 style="font-family: verdana;" class="mt-4">Deans</strong></h1>
    
    <div class="row">
        <div class="card mb-4"  style='background-color: #20334a05;'>
           
            <div class="card-header">
                <button style="font-family: verdana; background-color:#4c516d; color: white;" class='btn btn-sm pull-right' data-toggle='modal' data-target='#modalOpenLg' data-type='addDean'> <i style="color: white;"  class='fa fa-plus'></i> Add Dean</button>
                <button style="font-family: verdana; background-color:#4c516d; color: white;" class='btn btn-sm pull-right' data-toggle='modal' data-target='#modalOpenLg' data-type='assignDean'> <i style="color: white;"  class='fa fa-plus'></i> Assign Dean</button>
            </div>
            <div style=" border: 1px solid black;" class="card-body">
                <table style=" border: 1px solid black;" style="font-family: verdana;" id="datatablesSimple" >
                     <thead style=" border: 1px solid black;" style="font-family: verdana;">
                          <tr style="background-color:#4c516d; color: white;">
                             <th>Faculty Name</th>
                             <th>Contact</th>
                             <th>Department</th>
                          </tr>
                     </thead>
                      <tbody>
                         <?php
                       $query = selectwhereorder('faculty','faculty_position', 'dean', 'id', 'DESC');
                        while($faculty = mysqli_fetch_array($query)){
                           echo "
                            <tr>
                                <td>".$faculty['fullname']."
                                <td>".$faculty['contact']."</td>
                                <td>".department_acc($faculty['department'])."</td>
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
