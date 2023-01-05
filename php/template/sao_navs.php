<div style="font-family: verdana;" id="layoutSidenav">
            <div  id="layoutSidenav_nav">

                <nav class="sb-sidenav accordion sb-sidenav-dark" style="background-image: linear-gradient(#141e30, #243b55)" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">

            
                             <div class="sb-sidenav-footer " style="background-image: linear-gradient( #243b55,#141e30); font-family: verdana; font-size: 13px;">

                             
                                <center><img alt="" style="height: 30px; width: 30px; border-radius: 25px" src="images/sao.jpg"></center>
                            </span>

                            <b class="float-right" style="color:white;"></b>
                            
                            <span class="status online"></span>
                        </span>    
                       

                     <center><b><p>SAO: <?php echo strtoupper($_SESSION['fullname']); ?></p></b></center>

                    </div>
                   
                           <li > <a  class="nav-link <?php echo sidebar_active($_GET['folder'], 'dashboard'); ?>" href="index.php?folder=dashboard&page=home">
                                <div  style="font-family: verdana; " class="sb-nav-link-icon"><i class="fa fa-home"></i>
                                </div>
                                Home
                                
                            </a></li>
                            
                               
                            <a class="nav-link <?php echo sidebar_active($_GET['folder'], 'faculty'); ?>" href="index.php?folder=faculty&page=show">
                                <div style="font-family: arial-black" class="sb-nav-link-icon"><i class="fa fa-user"></i></div>
                                Deans
                            </a>
                            
                            <a class="nav-link <?php echo sidebar_active($_GET['folder'], 'offenselist'); ?>" href="index.php?folder=offenselist&page=show">
                                <div style="font-family: arial-black" class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                                Offenses
                            </a>
                            <a class="nav-link <?php echo sidebar_active($_GET['folder'], 'report'); ?>" href="index.php?folder=report&page=show">
                                <div style="font-family: arial-black" class="sb-nav-link-icon"><i class="fa fa-comments"></i></div>
                                Complaints 
                                <div id='complaints_div'></div>
                            </a>
                            <a class="nav-link <?php echo sidebar_active($_GET['folder'], 'feedback'); ?>" href="index.php?folder=feedback&page=show">
                                <div style="font-family: arial-black" class="sb-nav-link-icon"><i class="fa fa-envelope-open"></i></div>
                                Feedback
                            </a>

                            <a class="nav-link <?php echo sidebar_active($_GET['folder'], 'reports'); ?>" href="index.php?folder=reports&page=show">
                                <div style="font-family: arial-black" class="sb-nav-link-icon"><i class="fa fa-bar-chart"></i></div>
                                Reports
                            </a>
                              <a class="nav-link" data-toggle ='modal' data-target = '#modalOpenSm2' data-type='changeUsername'>
                                <div style="font-family: arial-black" class="sb-nav-link-icon"><i class="fa fa-wrench"></i></div>
                                Change Username
                            </a>
                              <a class="nav-link"data-toggle ='modal' data-target = '#modalOpenSm2' data-type='changePassword'>
                                <div style="font-family: arial-black" class="sb-nav-link-icon"><i class="fa fa-cogs"></i></div>
                                Change Password
                            </a>
                              <a class="nav-link" data-toggle ='modal' data-target = '#modalOpenSm2' data-type='logout'>
                                <div style="font-family: arial-black" class="sb-nav-link-icon"><i class="fa fa-sign-out"></i></div>
                                Logout
                            </a>
                        </div>
                    </div>
                    
                   
                </nav>
            </div>

            <div id="layoutSidenav_content">
                <img src='images/ana.png' style='height:80vh;position:fixed;right:0px;bottom:-100px;z-index:-1;opacity:0.1;'>

                <?php
                    if(isset($_SESSION['msg'])){
                    echo "
                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    ".$_SESSION['msg']."<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                    </div>";

                    $_SESSION['msg']= "";
                    unset($_SESSION['msg']);
                }
                ?>

</p>
<script>
    $(document).ready(function(){
        $('#modalOpenSm2').on('show.bs.modal', function(e){
            var type = $(e.relatedTarget).data('type');

            if(type== 'changeUsername'){ var link = "php/template/modal/change_username.php";}
            if(type== 'changePassword'){ var link = "php/template/modal/change_password.php";}
            if(type== 'logout'){ var link = "php/template/modal/logout.php";}
            var link = "php/template/modal/logout.php";
            $.get(link, function(returnData){
                $('#modalOpenSmBody2').html(returnData);
            });
        });
    });
</script>