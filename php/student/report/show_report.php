<?php include('report_navs.php'); ?>

<div class="container-fluid px-4">
    <strong><h1 style=" font-family: verdana;" class="mt-4">Student Complaints List</strong></h1>
    
    <div class="row">
        <div class="card mb-4">
            <div class="card-header">
                <a href='search_offense.php'><button  class='btn btn-sm btn-success pull-right' style="font-family: verdana; background:#4c516d; color:white;"> <i class='fa fa-plus'></i> Add Complaint</button></a>
            </div>
            <div class="card-body">
                <table style="font-family: verdana; " id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Date Submitted</th>
                            <th>Date Of Incident</th>
                            <th>Offense</th>
                            <th>Place of Incident</th>
                            <th>Reported To</th>                    
                            <th>Proof of Incident</th>
                            <th>Description</th> 
                        </tr>
                    </thead>
                        <tbody>
                        <?php
                        $query = selectwhereorder('report','student_id', $_SESSION['id'], 'id', 'DESC');
                        while($report = mysqli_fetch_array($query)){

                        $query2 = selectwhere('offense_list','id', $report['offense_id']);
                        $offense = mysqli_fetch_array($query2);
                        $piclink = "images/noimage.png";
                        if($report['pic_id']!=0){
                            $query4 = selectwhere('gallery', 'id', $report['pic_id']);
                            $picture = mysqli_fetch_array($query4);
                            $piclink = "images/".$picture['folder_name']."/".$picture['picture_name'];
                        }
                       
                        $query5 = selectwhere('student', 'id', $report['student_id']);
                        $student = mysqli_fetch_array($query5);


                        $faculty_name = "SAO Mr.Allan Albaytar";

                        $query6 = selectwhere('faculty', 'id', $report['faculty_id']);
                        if(mysqli_num_rows($query6)){
                            $faculty = mysqli_fetch_array($query6);
                            $faculty_name = $faculty['fullname'];
                        }
                        
                        

                        echo "
                            <tr>
                                <td>".date('<b>M d, Y h:i A l</b>', strtotime($report['date_added']))."</td>
                                <td>".$report['date_incident']."</td>
                                
                                <td>".$offense['title']."</td>
                                <td>".$report['landmark']."</td>
                                <td>".$faculty_name."</td>
                                <td><img src='".$piclink."' style='height:100px; width:100px;' data-toggle='modal' data-target='#modalOpenLg' data-type='enlargePhoto' data-id='".$piclink."'></td>
                                <td>".$report['description']."</td> 
                                
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
