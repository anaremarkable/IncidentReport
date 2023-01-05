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
                                    <a class="nav-link" href='index.php?folder=blotterreport&page=show'>Involve List</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Others</div>
                           
                            <a class="nav-link" href='index.php?folder=offenselist&page=show'>
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                View offense List
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
                        <h1 class="mt-4">Add offense List</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">offense List</li>
                        </ol>
                        <div class="row">
                            <form action="sql/submit.php" method="POST">
								<input class="form-control col-md-2" type="text" name="description"placeholder="Incident Name" required>
								<br>
								<button class="btn btn-primary" type="submit" name="offense_register">Add offense List</button>
							</form>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>