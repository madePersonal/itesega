<!DOCTYPE html>
<html>
<head>
	<title>Data Peserta</title>
    <!--css-->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url();?>assets/css/smoothDivScroll.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" media="all" type="text/css" />
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
              <div class="navi-icon" >
                <button type="button" class="btn btn-danger" data-toggle="modal" onclick=location.href="<?php echo base_url();?>index.php/Auth/logout">Logout</button>
              </div>
            </nav>
        </div>
    </div>
<br>
<br>
<br>
<br>
<br>
<div class="container-fluid">
    <div class="row">
<!-- Navigation Bar -->
        <div class="col-md-2">
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
                </div>
            </nav>  
        </div>

<!-- Page Content -->
        <div class="col-md-10">
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
                <div class="btn-box-row row-fluid">
                    <div class="span12">
                        <div class="well well-small" style="box-shadow: none;background-color: #FFF;">
                            <table id="data-table" class="table table-hover table-responsive a">
                                <thead>
                                    <th align="center">No</th>
                                    <th align="center">Nama</th>
                                    <th align="center">Email</th>
                                    <th align="center">Contact</th>
                                    <th align="center">tgl_lahir</th>
                                    <th align="center">Status</th>
                                    <th align="center">Team</th>
                                    <th align="center">Action</th>
                                </thead>
                                <tbody>
                                    <?php
                                        $No=1;
                                        foreach($peserta as $value){
                                            $id = $value->id_peserta;
                                            $nama = $value->nama_peserta;
                                            $email= $value->email;
                                            $id_card = $value->id_card;
                                            $telp = $value->no_hp;
                                            $status = $value->status;
                                            $tgl_lahir= $value->tgl_lahir;
                                            $team= $value->nama_team;
                                    ?>
                                    <tr>   
                                        <td><?php echo $No++;?></td>
                                        <td><?php echo $nama;?></td>
                                        <td><?php echo $email;?></td>
                                        <td><?php echo $telp;?></td>
                                        <td><?php echo $tgl_lahir;?></td>
                                        <td><?php echo $status;?></td>
                                        <td><?php echo $team;?></td>
                                        <td align="center">
                                            <a href="#" class="view btn btn-default" data-toggle="tooltip" data-placement="right" title="Lihat id_card" data-id="<?php echo $id;?>" ><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>                   
            </div>
        </div>
    </div>
    

<!-- viwe id_card Modal -->
<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" style="color:black;" align="center">ID Card</h4>
            </div>
            <div class="modal-body">
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#data-table').DataTable( {
                "lengthMenu": [[5, 10, 25, -1], [5, 10, 25, 100]]
        });
    });
</script>
<script type="text/javascript">
    
    $(document).on('click','.view',function(e){
        e.preventDefault();
        $("#viewModal").modal('show');
        $.get('<?php echo base_url('index.php/peserta/view_id_card')?>',{id_peserta:$(this).attr('data-id')},
            function(html){
                $("#viewModal .modal-body").html(html);
            }   
        );

    });

    $("#add-submit").click(function(e){
        $('#add-form').submit();
    });

    $("#edit-submit").click(function(e){
        $('#edit-form').submit();
    });

    $('.view').hover(function(e){
        $(this).tooltip('show');    
    });   

</script>
</body>
</html>