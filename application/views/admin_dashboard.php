<!DOCTYPE html>
<html>
<head>
	<title> Dashboard admin</title>
    <!--css-->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url();?>assets/css/smoothDivScroll.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css"  media="all" />
    <!--Font-->
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <!--javascript-->
    <script src="<?php echo base_url();?>assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/metisMenu.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/style.js" type="text/javascript"></script> 
    <script src="<?php echo base_url();?>assets/js/jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/npm.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/startmin.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/assets/js/dropdown.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap-tabs.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tab.js" type="text/javascript"></script>
</head>
<body>
    <div id="navibar-form">
        <div class="container-fluid">
          <div class="navi-icon pull-left ">
            <img src="<?php echo base_url();?>assets/images/itesega.png" class="logo-by" title="Teknologi Informasi">
          </div>
            <nav class="navbar navbar-light bg-faded navi-link pull-right">
              <div class="navi-icon">
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#menumodal">Back</button>
              </div>
            </nav>
        </div>
    </div>
<br>
<br>
<br>
<br>
<br>
<!-- Navigation Bar -->
<nav class="navbar navbar-default sidebar" role="navigation">
<div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="#">edit</a></li>
            <li><a href="#">Modificar</a></li>
            <li><a href="#">Reportar</a></li>
          </ul>
        </li>          
        <li ><a href="<?php echo base_url();?>index.php/team/view_team">Data Team<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>        
        <li ><a href="<?php echo base_url();?>index.php/peserta/view_peserta">Data Peserta<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
        <li ><a href="<?php echo base_url();?>index.php/match/view_match">Data Match<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
        <li ><a href="<?php echo base_url();?>index.php/verifikasi/view_verifikasi_req">Data Ferifikasi<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <div class="btn-box-row row-fluid">
                <div class="span12">
                    <div class="well well-small" style="box-shadow: none;background-color: #FFF;">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                            <li ><a data-toggle="tab" href="#menu1"> Menu 1</a></li>
                            <li ><a data-toggle="tab" href="#menu2"> Menu 2</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <h3>HOME</h3>
                                <h3><p> Selamat datang <?php echo($this->session->userdata('nama'));?> </p></h3>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <h3>Menu 1</h3>
                                <p>Tutorial pemrograman web, mobile dan design</p>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <h3>Menu 2</h3>
                                <p>Membuat navigasi tabs dan pills bootstrap.</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div> 
            </div>                      
        </div>
    </div>
</div>

<!-- <script type="text/javascript">
$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
});
</script> -->
<body>
</html>