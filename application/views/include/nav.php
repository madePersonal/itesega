<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- <title>Startmin - Bootstrap Admin Theme</title> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">
    <script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <link href="<?php echo base_url('assets/css/metisMenu.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/timeline.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/startmin.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/morris.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url('assets/js/metisMenu.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/startmin.js') ?>"></script>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Startmin</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
           
        </ul>
        <!-- <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="margin-right: 25px;">hehe
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-wrench"></span> Setting</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </li>
        </ul> -->

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <!-- <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div> -->
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/detail_buku/index') ?>" class=""><i class="fa fa-book fa-fw"></i> Buku Detail</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/buku') ?>" class=""><i class="fa fa-book fa-fw"></i> Buku</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/penerbit') ?>" class=""><i class="fa fa-user fa-fw"></i> Penerbit</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/pengarang') ?>" class=""><i class="fa fa-user fa-fw"></i> Pengarang</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/user'); ?>" class=""><i class="fa fa-user fa-fw"></i> User</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-gear fa-fw"></i> Setting<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url('index.php/user/form_edit'); ?>"><i class="fa fa-user fa-fw"></i> Profile</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('index.php/user/form_password'); ?>"><i class="fa fa-lock fa-fw"></i> Password</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class=""><i class="fa fa-tag fa-fw"></i> About</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/auth/logout') ?>" class=""><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                   <!--  <li>
                        <a href="#" class=""><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->
                </ul>

            </div>
        </div>
    </nav>
</body>
</html>
