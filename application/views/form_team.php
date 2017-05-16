<!DOCTYPE html>
<html>
<head>
	<title> Daftar</title>
    <!--css-->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url();?>assets/css/smoothDivScroll.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet" type="text/css" media="all" />
    <!--Font-->
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <!--javascript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/smooth-scroll.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/wow.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.mousewheel.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.kinetic.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.smoothdivscroll-1.3-min.js" type="text/javascript"></script> 
    <script src="<?php echo base_url();?>assets/js/style.js" type="text/javascript"></script> 
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
</head>
<body>

    <div id="navibar-form">
        <div class="container-fluid">
          <div class="navi-icon pull-left ">
            <img src="<?php echo base_url();?>assets/images/itesega.png" class="logo-by" title="Teknologi Informasi">
          </div>
            <nav class="navbar navbar-light bg-faded navi-link pull-right">
              <div id="navbar">
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#menumodal">Back</button>
              </div>
            </nav>
        </div>
    </div>
    

<div class="container">
    <div class="row">
        <div class="col-md-3 hidden-sm hidden-xs"></div>
            <div class="col-md-6 col-sm-12 col-xs-12 ">
                <div class="box">
                    <form id="form_pendaftaran" action="<?php echo base_url();?>index.php/team/insert_team" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                     <div class="box-head">
                        <h3>Formulir Team</h3>
                     </div>
                     <div class="box-body">
                        <div class="box-body-col">
                           <div class="form-group">
                             <label class="control-label col-md-3">Nama Tim</label>
                             <div class="col-md-9">
                                 <input class="form-control" placeholder="" name="nama-team" required="required" type="text">
                             </div>
                           </div>

                           <div class="form-group">
                             <label class="control-label col-md-3">email</label>
                            <div class="col-md-9">
                                 <input class="form-control" placeholder="" name="email" required="required" type="email">
                            </div>
                           </div>

                            <div class="form-group">
                             <label class="control-label col-md-3">password</label>
                                <div class="col-md-9">
                                 <input class="form-control" placeholder="" name="password" required="required" type="text">
                                </div>
                            </div>

                            <div class="form-group">
                             <label class="control-label col-md-3">Ulangi password</label>
                                <div class="col-md-9">
                                 <input class="form-control" placeholder="" name="re-paswword" required="required" type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Logo team</label>
                                <div class="col-md-9">
                                    <input name="logo-team" type="file" class="form-control" accept="image/*" required="required">
                                </div>
                            </div>
                        </div>
                     </div>
                     <div class="box-foot" align="center">
                        <input type="submit" name="submit" value="Next" class="btn btn-submit">
                     </div>
                     </form>
                  </div>
               </div>
               <div class="col-md-3 hidden-sm hidden-xs"></div>
            </div>
         </div>
      </div>
</body>
</html>