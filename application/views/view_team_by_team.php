<!DOCTYPE html>
<html>
<head>
	<title>Data Team</title>
   <!--css-->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url();?>assets/css/smoothDivScroll.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url();?>assets/css/bootstrap.css')" rel="stylesheet" media="all" type="text/css" />
    <link href="<?php echo base_url();?>assets/datatables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">  
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
    <script src="<?php echo base_url();?>assets/js/jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/modal.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/metisMemu.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/datatables/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/datatables/media/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
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
                    <li> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil</span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a> </li>          
                    <li ><a href="<?php echo base_url();?>index.php/peserta/view_peserta_by_id_team">Data Peserta<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
                    <li ><a href="#">Data Match<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
                  </ul>
                </div>
            </nav>
        </div>
    <!-- Page Content -->
        <div class="col-md-8">
         <?php if($this->session->flashdata('success')){ ?>
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
            </div>
            <?php 
            }else if ($this->session->flashdata('danger')) {?>
                <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Error!</strong> <?php echo $this->session->flashdata('danger'); ?>
                </div>
            <?php
            }
            ?>
            <div class="well well-small" style="box-shadow: none;background-color: #FFF;">
                <img src="<?php echo base_url();?>assets/uploads/logo/<?php echo $team['logo'];?>" alt="Responsive image" class="img-thumbnail" width="300" height="300" >
                <div class="col-md-7 pull-right">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            
                                <label class="control-label col-md-2">Nama</label>
                                <input type="text" class="form-control" placeholder="<?php echo $team['nama_team'];?>">
                                <label class="control-label col-md-2">Email</label>
                                <input type="text" class="form-control" placeholder="<?php echo $team['email'];?>">
                                <br>
                                <br>
                                <br>
                                <a href="#" class="edit-profil btn btn-info" data-id="<?php echo $team['id_team'];?>"><span class="glyphicon glyphicon-edit" aria-hidden="true" style="margin-right:5px;"></span> Edit profil</a>

                                <button data-target="#edit-password"  data-toggle="modal" class="btn btn-info"><span class="glyphicon glyphicon-cog" aria-hidden="true" style="margin-right:5px;"></span> ubah password</button>
                        </div>
                    </div>
                </div> 
            </div> 
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="edit-profil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel" align="center" style="color:black;">Edit profil</h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="simpan btn btn-success" id="edit-submit">Simpan</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
<!-- Edit Modal -->

<!-- Modal ferivikasi -->
<form action="<?php echo base_url();?>index.php/team/update_password" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
    <div class="modal fade" id="edit-password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #B0C4DE;">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel" align="center">edit password</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                       <label class="control-label col-md-3">Password lama</label>
                       <div class="col-md-6">
                          <input class="form-control" placeholder="" name="old_password" required="required" type="password">
                       </div>
                    </div>
                    <div class="form-group">
                       <label class="control-label col-md-3">password baru</label>
                       <div class="col-md-6">
                          <input class="form-control" placeholder="" name="new_password" required="required" type="password">
                       </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-info" value="simpan">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
</form>

<script type="text/javascript">

$(document).on('click','.edit-profil',function(e){
    e.preventDefault();
    $("#edit-profil").modal('show');
    $.get('<?php echo base_url('index.php/team/view_edit')?>',{id_team:$(this).attr('data-id')},
        function(html){
            $("#edit-profil .modal-body").html(html);
        }   
    );
});

 $("#edit-submit").click(function(e){
        $('#edit-form').submit();
});
</script>
</body>
</html>