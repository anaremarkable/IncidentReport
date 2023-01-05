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
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Report
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href='index.php?folder=report&page=add'>File Report</a>
                                    <a class="nav-link" href='index.php?folder=report&page=show'>My Report</a>
                                    </a>
                                </nav>
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
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <form action="sql/submit.php" method="POST" enctype="multipart/form-data">
                                <select name='offense_id'>
                                    <?php
                                        $query = select('offenselist');
                                        while($offense = mysqli_fetch_array($query)){
                                        echo "<option value='".$offense['id']."'>".$offense['description']."</option>";
                                        }
                                    ?>
                                </select>
                                
                                    <input type="text" name="landmark" placeholder="Landmark" ><br>
                                    <br>
                                    Upload Proof of Incident: <br>
                                    <input type ="file" name="offense_pic" id="picUpload" onchange="checkImg()" required>
                                    <br>
                                    <br>
                                    <textarea class="span16" name="description" rows="10" cols="70" placeholder="Enter Details Here...."></textarea><br>
                                    <button class="btn btn-primary" type="submit" name="report_add">Add offense</button>
                            </form>     
                    </div>
                </main>
            </div>
        </div>
        