<?php include('sql/sqlfunction.php'); ?>
<?php include('sql/otherfunction.php'); ?>
<?php include('php/template/restriction.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>DWCL Reklamo</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/cssdatatable.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/font-awesome.min.css" rel="stylesheet" />


        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/charts.js"></script>
        <script src="js/utils.js"></script>
        <script src="js/fajs.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark " style="background-image: linear-gradient(#141e30, #243b55)">

            <!-- Navbar Brand-->
            <strong><a class="navbar-brand ps-3" href="index.html" style="font-family: verdana;">DWCL Complaint</a></strong>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fa fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                </div>
            </form>
            <!-- Navbar-->
        </nav>
        
<?php
    if($_SESSION['account_type']==0){
        include('student_navs.php');
    }
    if($_SESSION['account_type']==1){
        include('sao_navs.php');
    }
    if($_SESSION['account_type']==2){
        include('dean_navs.php');
    }
    if($_SESSION['account_type']==3){
        include('faculty_navs.php');
    }
?>