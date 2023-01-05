  <?php include('report_nav.php');
    $month = isset($_GET['month']) ? $_GET['month'] : date('Y-m');
 ?>
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php?folder=dashboard&page=home">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Users
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href='index.php?folder=liable&page=show'>Liable</a>
                                   
                                    <a class="nav-link" href='index.php?folder=student&page=show'>Student</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Report
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">

                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href='index.php?folder=report&page=show'>Report List</a>
                                    <a class="nav-link" href='index.php?folder=involvelist&page=show'>Involve List</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Others</div>
                            
                            <a class="nav-link" href='index.php?folder=violationlist&page=show'>
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                View Violation List
                            </a>
                            <a class="nav-link" href='index.php?folder=report&page=generate'>
                                <div class="sb-nav-link-icon"><i class="fas fa-print"></i></div>
                                Generate Report
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                         <?php echo strtoupper($_SESSION['fullname']); ?></b>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Incident Report</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Incident Report</li>
                        </ol>
                        <div class="row">
                            <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                             Incident Report
                            </div>
                        <div class="card-body">
                        <table id="datatablesSimple">
                            <div class="row justify-content-center pt-4">
                                <div class="col-sm-3">
                                    <input type="month" name="month" id="month" value="<?php echo $month ?>" class="form-control">
                                </div>
                            </div>
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>ID</th>
                                <th>Complainant</th>
                                <th>Category</th>
                                <th>Purok</th>
                                <th>Description</th>
                                <th>Landmark</th>
                                <th>Picture</th>
                                <th>Verified By</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                            <tbody>
                                <?php
                                    $query = selectorder('report', 'id', 'DESC');
                                    while($report = mysqli_fetch_array($query)){
                                    $query2 = selectwhere('violationlist','id', $report['violation_id']);
                                    $violation = mysqli_fetch_array($query2);


                                    $verifier = "Pending";
                                    if($report['verifier_id']!=0){
                                    if($report['verifier_id']==1){
                                    $verifier = "ADMIN";
                                    }else{
                                    $query4 = selectwhere('student', 'account_id', $report['verifier_id']);
                                    $report = mysqli_fetch_array($query4);
                                    $verifier = "Studen: ".$liable['fullname'];
                                    }
                                }
                                    $query5 = selectwhere('gallery', 'id', $report['pic_id']);
                                    $picture = mysqli_fetch_array($query5);

                                    $query6 = selectwhere('student', 'id', $report['student_id']);
                                    $student= mysqli_fetch_array($query6);

                                    echo "
                                        <tr>
                                            <td>".date('<b>M d, Y h:i A l</b>', strtotime($report['date_added']))."</td>
                                            <td>".$student['id']."</td>
                                            <td>".$student['fullname']."</td>
                                            <td>".$violation['description']."</td>
                                            
                                            <td>".$report['description']."</td>
                                            <td>".$report['description']."</td>
                                            <td>".$picture['picture_name']."</td>
                                            <td>".$verifier."</td>
                                            <td>".report_status($report['status'])."</td>
                                        </tr>
                                        ";
                                    }
                                ?>
                            
                            </tbody>
                        </table>
                             <center>
                        <button class="btn btn-success btn-sm col-sm-3" type="button" id="print"><i class="fa fa-print"></i> Print</button>
                    </center>
                    </div>
                        </div>
                    </div>
                    </div>
                </main>
            </div>
        </div>

<script>
$('#month').change(function(){
    location.replace('index.php?folder=report&page=generate&month='+$(this).val())
})
$('#print').click(function(){
        var _c = $('#report-list').clone();
        var ns = $('noscript').clone();
            ns.append(_c)
        var nw = window.open('','_blank','width=900,height=600')
        nw.document.write('<p class="text-center"><b>Reports as of <?php echo date("F, Y",strtotime($month)) ?></b></p>')
        nw.document.write(ns.html())
        nw.document.close()
        nw.print()
        setTimeout(() => {
            nw.close()
        }, 500);
    })
</script>