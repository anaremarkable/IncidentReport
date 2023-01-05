<div style="font-family: verdana; font-size: 17px;" id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" style="background-image: linear-gradient(#141e30, #243b55)" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                             <div class="sb-sidenav-footer " style="background-image: linear-gradient( #243b55,#141e30); font-family: verdana; font-size: 12px;">
                                <div class='row'>
                                    <div class='col-lg-3'>
                                        <center><img alt="" style="height: 40px; width: 40px; border-radius: 25px" src="<?php echo $_SESSION['pic_link']; ?>"></center>
                                    </div>
                                    <div class='col-lg-9'>
                                        <center><b><p>STUDENT: <?php echo strtoupper($_SESSION['fullname']); ?></p></b></center>
                                    </div>
                                </div>
                            </div>

                            <a class="nav-link" href="index.php?folder=dashboard&page=home" >
                                <div style="font-family: verdana" class="sb-nav-link-icon"><i class="fa fa-home"></i></div>
                                Home
                            </a>

                            <a class="nav-link" href="index.php?folder=report&page=show">
                                <div style="font-family: verdana;" class="sb-nav-link-icon"><i class="fa fa-comments"></i></div>
                                Complaints
                            </a>

                            <a class="nav-link" href="index.php?folder=feedback&page=add">
                                <div style="font-family: arial-black" class="sb-nav-link-icon"><i class="fa fa-envelope-open"></i></div>
                                Feedback
                            </a>

                            <a class="nav-link" href="handbook.pdf" download>
                                <div style="font-family: arial-black" class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                                Handbook
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

<script>
    $(document).ready(function(){
        $('#modalOpenSm2').on('show.bs.modal', function(e){
            var type = $(e.relatedTarget).data('type');

            if(type== 'changeUsername'){ var link = "php/template/modal/change_username.php";}
            if(type== 'changePassword'){ var link = "php/template/modal/change_password.php";}
            if(type== 'logout'){ var link = "php/template/modal/logout.php";}

            $.get(link, function(returnData){
                $('#modalOpenSmBody2').html(returnData);
            });
        });
    });
</script>