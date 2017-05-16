<!DOCTYPE html>
<html>
<head>
	<title> Data Match</title>
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
                    <li class="active"><a href="<?php echo base_url();?>index.php/admin/view_dashboard">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
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
            </nav>
        </div>
    <!-- Page Content -->
        <div class="col-md-10">
            <div class="well well-small" style="box-shadow: none;background-color: #fff;">
                <ul class="nav nav-tabs">
                    <li class="active" ><a data-toggle="tab" href="#menu1">Penyisihan</a></li>
                    <li ><a data-toggle="tab" href="#menu2">Semin final</a></li>
                    <li ><a data-toggle="tab" href="#menu3">Perempat final</a></li>
                </ul>
                <div class="tab-content">
                    <div id="menu1" class="tab-pane fade in active">
                    <br/>
                        <table id="data-verifikasi_req" class="table table-hover table-responsive a">
                            <thead>
                                <th align="center" >No</th>
                                <th align="center" >Team 1</th>
                                <th align="center" >VS</th>
                                <th align="center" >Team 2</th>
                                <th align="center" >Tanggal</th>
                                <th align="center" >Tempat</th>
                                <th align="center" >Action</th>
                            </thead>
                            <tbody>
                                <?php
                                    $No=1;
                                    foreach($penyisihan as $value){
                                        $team_1        	= $value->team_1;
                                        $team_2      	= $value->team_2;
                                        $round      	= $value->round;
                                        $tgl_match      = $value->tgl_match;
                                        $score			= $value->score;
                                        $tempat			= $value->tempat;
                                        $id_match		= $value->id_match;
                                ?>
                                <tr>   
                                    <td><?php echo $No++;?></td>
                                    <td><?php echo $team_1?></td>
                                    <td>VS</td>
                                    <td><?php echo $team_2?></td>
                                    <td><?php echo $tgl_match?></td>
                                    <td><?php echo $tempat?></td>
                                    <td align="center">
                                        <a href="#" class="view btn btn-default" data-toggle="tooltip" data-placement="right" title="Lihat file" data-id="<?php echo $id_match;?>" ><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                        </a>
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                        <a href='#' class="rand btn-success btn-lg">Rand Match<span class="glyphicon glyphicon-plus" aria-hidden="true"></a>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        
                    </div>
                     <div id="menu3" class="tab-pane fade">
                        
                    </div>
                    <div id="menu4" class="tab-pane fade">
                        
                    </div>
                </div>    
            </div> 
        </div>
    </div>
</div>

<!-- Modal ferivikasi -->
<div class="modal fade" id="rand" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #B0C4DE;">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel" align="center">Rand MAtch</h4>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <input type="submit" id="rand_submit" class="btn btn-info" value="Verivikasi">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_file" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #B0C4DE;">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel" align="center">file Verifikasi</h4>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <input type="submit" id="verifikasi_submit" class="btn btn-info" value="Verivikasi">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#data-verifikasi_req').DataTable( {
            "lengthMenu": [[5, 10, 25, -1], [5, 10, 25, 100]]
        });
    });
    $(document).ready(function() {
        $('#data-verifikasi_log').DataTable( {
            "lengthMenu": [[5, 10, 25, -1], [5, 10, 25, 100]]
        });
    });

    $(document).on('click','.view',function(e){
        e.preventDefault();
        $("#modal").modal('show');
        $.get('<?php echo base_url('index.php/verifikasi/view_verifikasi_file')?>',{id_req:$(this).attr('data-id')},
            function(html){
                $("#modal .modal-body").html(html);
            }   
        );
    });

    $(document).on('click','.rand',function(e){
        e.preventDefault();
        $("#rand").modal('show');
        $.get('<?php echo base_url('index.php/match/rand_form')?>',{id_verifikasi:$(this).attr('data-id')},
            function(html){
                $("#rand .modal-body").html(html);
            }   
        );
    });

    $("#rand_submit").click(function(e){
        $('#rand_form').submit();
    });

</script>
</body>
</html>