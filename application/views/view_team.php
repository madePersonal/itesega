<!DOCTYPE html>
<html>
<head>
	<title> Data Team</title>
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
                <button type="button" class="btn btn-danger" data-toggle="modal" onclick=location.href="<?php echo base_url();?>index.php/adminAuth/logout">Logout</button>
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
            <div class="btn-box-row row-fluid">
                <div class="span12">
                    <div class="well well-small" style="box-shadow: none;background-color: #FFF;">
                        <table id="data-table" class="table table-hover table-responsive a">
                            <thead>
                                <th align="center" >No</th>
                                <th align="center" >Nama Team</th>
                                <th align="center" >Email</th>
                                <th align="center" >Status verifikasi</th>
                                <th align="center" >Logo</th>
                                <th align="center">Action</th>
                            </thead>
                            <tbody>
                                <?php
                                    $No=1;
                                    foreach($team as $value){
                                        $id = $value->id_team;
                                        $nama = $value->nama_team;
                                        $email= $value->email;
                                        $logo = $value->logo;
                                        $verifikasi=$value->verifikasi;
                                ?>
                                <tr>   
                                    <td><?php echo $No++;?></td>
                                    <td><?php echo $nama;?></td>
                                    <td><?php echo $email;?></td>
                                    <td align="center"><?php echo $verifikasi;?></td>
                                    <td align="center"><img src="<?php echo base_url();?>assets/uploads/logo/<?php echo $logo;?>" alialt="image-responsive" class="profile_picture"> </td>
                                    <td align="center">
                                        <a href='#' class='edit btn btn-success' data-id="<?php echo $id;?>"><span class='glyphicon glyphicon-pencil' aria-hidden='true'></a>
                                       <a href="#" class="delete btn btn-danger" data-id="<?php $id;?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel" align="center">Tambah Buku</h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="simpan btn btn-primary" id="add-submit">Tambah</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Add Modal -->

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel" align="center">Edit team</h4>
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

<script type="text/javascript">
    $(document).ready(function() {
        $('#data-table').DataTable( {
                "lengthMenu": [[5, 10, 25, -1], [5, 10, 25, 100]]
        });
    });
</script>

<script type="text/javascript">
    $(document).on('click','.add',function(e){
        e.preventDefault();
        $("#addModal" ).modal('show');
        $.post('<?php echo base_url('index.php/buku/form') ?>',
            function(html){
                $("#addModal .modal-body").html(html);
            }   
        );
    });

    $(document).on('click','.edit',function(e){
        e.preventDefault();
        $("#editModal").modal('show');
        $.get('<?php echo base_url('index.php/team/view_edit')?>',{id_team:$(this).attr('data-id')},
            function(html){
                $("#editModal .modal-body").html(html);
            }   
        );

    });

    $(document).on('click','.delete',function(e){
        e.preventDefault();
        $id= $(this).data('id');
        $delete_link="location.href='<?php echo base_url('index.php/buku/delete?id_buku=') ?>"+$id+"'";
        $("#deleteModal").modal('show');
        $("#deleteModal .modal-footer #delete-submit").attr('onclick',$delete_link);
    });

    $("#add-submit").click(function(e){
        $('#add-form').submit();
    });

    $("#edit-submit").click(function(e){
        $('#edit-form').submit();
    });
</script>
</body>
</html>