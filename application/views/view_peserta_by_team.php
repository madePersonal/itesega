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
                        ?>
                        <tr>   
                            <td><?php echo $No++;?></td>
                            <td><?php echo $nama;?></td>
                            <td><?php echo $email;?></td>
                            <td><?php echo $telp;?></td>
                            <td><?php echo $tgl_lahir;?></td>
                            <td><?php echo $status;?></td>
                            <td align="center">
                                <a href='#' class='edit btn btn-success' data-id="<?php echo $id;?>"><span class='glyphicon glyphicon-pencil' aria-hidden='true'></a>
                                <a href="#" class="delete btn btn-danger" onclick="return deleteValidation(<?php echo $id;?>)"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></a>
                                <a href="#" class="view btn btn-default" data-toggle="tooltip" data-placement="right" title="Lihat id_card" data-id="<?php echo $id;?>" ><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
                <a href='#' class="add btn-primary btn-lg">Tambah peserta <span class="glyphicon glyphicon-plus" aria-hidden="true"></a> 
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
    $(document).on('click','.add',function(e){
        e.preventDefault();
        $("#addModal" ).modal('show');
        $.post('<?php echo base_url('index.php/peserta/view_add_form') ?>',
            function(html){
                $("#addModal .modal-body").html(html);
            }   
        );
    });

    $(document).on('click','.edit',function(e){
        e.preventDefault();
        $("#editModal").modal('show');
        $.get('<?php echo base_url('index.php/peserta/view_edit_dashboard')?>',{id_peserta:$(this).attr('data-id')},
            function(html){
                $("#editModal .modal-body").html(html);
            }   
        );

    });
    
    $(document).on('click','.view',function(e){
        e.preventDefault();
        $("#viewModal").modal('show');
        $.get('<?php echo base_url('index.php/peserta/view_id_card')?>',{id_peserta:$(this).attr('data-id')},
            function(html){
                $("#viewModal .modal-body").html(html);
            }   
        );

    });

    function deleteValidation(id_peserta){
      $conf = confirm("Anda Yakin Ingin menghapus data ini ?");
      if($conf){
        location.href="<?php echo base_url();?>index.php/peserta/delete_peserta_at_dashboard?id_peserta="+id_peserta; 
        return true;
      }
        return false;
    }

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