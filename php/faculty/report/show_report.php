<?php include('report_nav.php'); ?>

<div class="container-fluid px-4" >
    <strong><h1 style="font-family: verdana;" class="mt-4">Faculty Complaints List</strong></h1>
    
    <div class="row">
        <div class="card mb-4"  style='background-color: #20334a05;'>
           
            <div style=" border: 2px solid black;" class="card-body">
                <table style=" border: 2px solid black;" style="font-family: verdana;" id="datatablesSimple">
                    <thead style=" border: 2px solid black;">
                        <tr style=" border: 2px solid black; background-color:#4c516d; color: white;">
                            <th>Date Submitted</th>
                            <th>Date Of Incident</th>
                            <th>Complainant</th>
                            <th>Offense</th>
                            <th>Place of Incident</th>         
                            <th>Proof of Incident</th>
                            <th>Description</th> 
                            <th>Status</th>
                        </tr>
                    </thead>
                        <tbody>
                            <?php
                                $query = selectwhereorder('report', 'faculty_id', $_SESSION['id'], 'id', 'DESC');
                                while($report = mysqli_fetch_array($query)){

                                $query2 = selectwhere('offense_list','id', $report['offense_id']);
                                $offense = mysqli_fetch_array($query2);
                            
                                 $piclink = "images/noimage.png";
                                if($report['pic_id']!=0){
                                    $query4 = selectwhere('gallery', 'id', $report['pic_id']);
                                    $picture = mysqli_fetch_array($query4);
                                    $piclink = "images/".$picture['folder_name']."/".$picture['picture_name'];

                                }
                                $query4 = selectwhere('gallery', 'id', $report['pic_id']);
                                    $picture = mysqli_fetch_array($query4);
                                $query5 = selectwhere('student', 'id', $report['student_id']);
                                $student = mysqli_fetch_array($query5);
                                
                                echo "
                                    <tr>
                                        <td>".date('<b>M d, Y h:i A l</b>', strtotime($report['date_added']))."</td>
                                        <td>".date('M d, Y', strtotime($report['date_incident']))."</td>
                                        <td>".strtoupper($student['lname'])." ".ucwords($student['fname']).", ".ucwords($student['mname'])."</td>
                                        <td>".$offense['title']."</td>
                                        <td>".$report['landmark']."</td>
                                        <td><center><img src='".$piclink."' style='height:30px; width:30px;' data-toggle='modal' data-target='#modalOpenLg' data-type='enlargePhoto' data-id='".$piclink."'></center></td>
                                        <td>".$report['description']."</td> 
                                        <td>
                                            <button style='background:#4c516d; color: white;margin-left:20px;'class='btn btn-sm float-right' data-toggle='modal' data-target='#modalOpenLg' data-type= 'forwardReport' data-id= '".$report['id']."'><i class='fa fa-arrow-right'></i></button>
                                            <button style='background:#4c516d; color: white;'class='btn btn-sm float-right' data-toggle='modal' data-target='#modalOpenLg' data-type= 'updReport' data-id= '".$report['id']."'><i class='fa fa-edit'></i>".report_status($report['status'])."</button>

                                        </td>
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
