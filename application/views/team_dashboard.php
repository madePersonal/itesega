<!DOCTYPE html>
<html>
<head>
	<title> Dashboard Team</title>
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
     <script src="<?php echo base_url(); ?>/assets/js/modal.js" type="text/javascript"></script>
</head>
<body>
    <div id="navibar-form">
        <div class="container-fluid">
          <div class="navi-icon pull-left ">
            <img src="<?php echo base_url();?>assets/images/itesega.png" class="logo-by" title="Teknologi Informasi">
          </div>
            <nav class="navbar navbar-light bg-faded navi-link pull-right">
              <div class="navi-icon">
                <button type="button" class="btn btn-danger" data-toggle="modal" onclick=location.href="<?php echo base_url();?>index.php/teamAuth/logout">Logout</button>
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
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <nav class="navbar navbar-default sidebar" role="navigation">
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
                    <li> <a href="<?php echo base_url();?>index.php/team/view_team_by_id_team">Profil</span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a> </li>          
                    <li ><a href="<?php echo base_url();?>index.php/peserta/view_peserta_by_id_team">Data Peserta<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
                    <li ><a href="#">Data Match<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
                  </ul>
                </div>
            </nav>
        </div>
    <!-- Page Content -->
        <div class="col-md-7">
            <div class="well well-small" style="box-shadow: none;background-color: #FFF;">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                    <li ><a data-toggle="tab" href="#menu1"> pengumuman</a></li>
                    <li ><a data-toggle="tab" href="#menu2"> Syarat dan ketentuan</a></li>
                </ul>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <h3>HOME</h3>
                        <h3><p> Selamat datang <i>"<?php echo($this->session->userdata('nama_team'));?>"</i> </p></h3>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <h3>Pengumunan</h3>
                        <p>1. Batas Akhir perubahan data peserta : 10 juni 2017 </p>
                        <p>2. Batas Akhir Melakukan verifikasi   : 10 juni 2017 </p>
                        <p>2. Tecnical meeting   : 15 juni 2017 </p>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <h3>Syarat dan Ketentuan ITESEGA 2017</h3>
                        <p>1. Jumlah Peserta maksial 10 orang yang terdiri dari : 1 org ketua 4 org anggota, dan sisanya cadangan</p>
                        <p>2. Jika dalam proses pendaftaran ditemukan ada peserta yang menggunakan data diri palsu, maka team dari peserta tersebut akan langsung terdisklwikasi</p>
                    </div>
                </div>    
            </div> 
        </div>
        
        <?php if($status_req['status'] == 'diproses'){ ?>                 
        <div class="col-md-3">
            <div class="well well-small" style="box-shadow: none;background-color: #FFF;">
                <div class="alert alert-info">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Verifikasi Sedang diproses!</strong>
                </div>
                <div align="center">
                    <button type="button" data-toggle="modal" data-target="#modal" class="ferivikasi btn btn-info btn-lg btn-block"> <span class="glyphicon glyphicon-send"></span>  Upload ulang </button>                
                </div>
            </div>     
        </div>
        <?php }else if($status_req['status'] == 'sudah'){ ?>                 
        <div class="col-md-3">
            <div class="well well-small" style="box-shadow: none;background-color: #FFF;">
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Anda telah terverifikasi</strong>
                </div>
            </div>     
        </div>

        <?php }else { ?>                 
        <div class="col-md-3">
            <div class="well well-small" style="box-shadow: none;background-color: #FFF;">
                <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Anda Belum Melakukan verifikasi!</strong>
                </div>
                <div align="center">
                    <button type="button" data-toggle="modal" data-target="#modal" class="ferivikasi btn btn-danger btn-lg btn-block"> <span class="glyphicon glyphicon-send"></span>  Verifikasi </button>                
                </div>
            </div>     
        </div>
        <?php }?>
    </div>
</div>
<!-- Modal ferivikasi -->
<form action="<?php echo base_url();?>index.php/verifikasi/upload_file_verifikasi" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #B0C4DE;">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel" align="center">file Verifikasi</h4>
                </div>
                <div class="modal-body">
                <input type="file"  required="required" name="file_verifikasi">
                <input type="hidden"  required="required" name="id_team" value="<?php echo($this->session->userdata('id_team'));?>">
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-info" value="Kirim">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
</form>

</body>
</html>