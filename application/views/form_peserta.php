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
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.js"></script>
</head>
<body>
<?php
    $id_team=$data['id_team'];
    $nama_team=$data['nama_team'];
    $logo=$data['logo'];
?>
    <div id="navibar-form">
        <div class="container-fluid main">
          <div class="navi-icon pull-left ">
            <img src="<?php echo base_url();?>assets/images/itesega.png" class="logo-by" title="Teknologi Informasi">
          </div>
            <nav class="navbar navbar-light bg-faded navi-link pull-right">
              <div id="navbar">
                <button type="button" class="btn btn-info btn-lg">Back</button>
              </div>
            </nav>
        </div>
    </div>

  <div class="container">
    <div class="row">
      <div class="col-md-3 hidden-sm hidden-xs"></div>
        <div class="col-md-6 col-sm-12 col-xs-12 ">
          <div class="box">
            <form id="form_pendaftaran" class="form-horizontal" enctype="multipart/form-data"  accept-charset="utf-8" action="#">
              <div class="box-head">
                <h3>Formulir peserta</h3>
              </div>
              <div class="box-body">
                <div class="box-body-col">
                  <div class="form-group">
                    <p align="center"><?php echo $nama_team; ?></p>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12" align="center">
                      <img src="<?php echo base_url();?>assets/uploads/logo/<?php echo $logo;?>" alialt="image-responsive" class="profile_picture">
                    </div>
                  </div>
                </div>
                <h4 align="center"> Ketua</h4>
                <div class="box-body-col">
                  <div class="form-group">
                    <div class="col-md-12" align="center">
                      <button type="button" data-toggle="modal" data-target="#ketua" class="btn btn-primary btn-lg"> Tambah ketua <span class="glyphicon glyphicon-plus" aria-hidden="true"> </button> 
                    </div>
                  </div>
                </div>
                <h4 align="center"> Anggota</h4>
                <div class="box-body-col">
                  <div class="form-group">
                    <div class="col-md-12" align="center">
                      <button type="button" data-toggle="modal" data-target="#anggota" class="btn btn-primary btn-lg"> Tambah anggota <span class="glyphicon glyphicon-plus" aria-hidden="true"></button> 
                    </div>
                  </div>
                </div>
                <h4 align="center"> cadangan</h4>
                <div class="box-body-col">
                  <div class="form-group">
                      <div class="col-md-12" align="center">
                        <button type="button" data-toggle="modal" data-target="#cadangan" class="btn btn-primary btn-lg"> Tambah cadangan <span class="glyphicon glyphicon-plus" aria-hidden="true"></button> 
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

<!-- ketua modal -->
<form action="<?php echo base_url();?>index.php/peserta/insert_peserta" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
  <div id="ketua" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" style="color:black;">Ketua</h4>
        </div>
        <div class="modal-body">
        <input type="hidden" value=" <?php echo $id_team;?>" name="id_team">
        <input type="hidden" value="ketua" name="status">
          <div class="form-group">
            <label class="control-label col-md-3">Nama Lengkap</label>
              <div class="col-md-9">
                <input class="form-control" placeholder="ex. 'Nama Brata'" name="fullname" required="required" type="text">
              </div>
          </div>

        <div class="form-group">
           <label class="control-label col-md-3">Tanggal Lahir</label>
           <div class="col-md-9">
              <input class="form-control" placeholder="ex. '1995/12/27'" name="birthday" required="required" type="date">
           </div>
        </div>
        <div class="form-group">
           <label class="control-label col-md-3">Email</label>
           <div class="col-md-9">
              <input class="form-control" placeholder="ex. 'name@gmail'" name="email" required="required" type="email">
           </div>
        </div>
        <div class="form-group">
           <label class="control-label col-md-3">Nomer Kontak</label>
           <div class="col-md-9">
              <input class="form-control" placeholder="ex. '081632111111'" name="contact" required="required" type="number">
           </div>
        </div>
        <div class="form-group">
           <label class="control-label col-md-3">KTP/SIM</label>
           <div class="col-md-9">
               <input name="id_card" type="file" class="form-control" accept="image/*" required="required">
           </div>
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dangger" data-dismiss="modal">close</button>
            <input type="submit" class="btn btn-dangger" value="simpan"></input>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>


<!-- anggota modal -->
<form action="<?php echo base_url();?>index.php/peserta/insert_peserta" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
  <div id="anggota" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" style="color:black;">Anggota</h4>
        </div>
        <div class="modal-body">
        <input type="hidden" value=" <?php echo $id_team;?>" name="id_team">
        <input type="hidden" value="anggota" name="status">
          <div class="form-group">
            <label class="control-label col-md-3">Nama Lengkap</label>
              <div class="col-md-9">
                <input class="form-control" placeholder="ex. 'Nama Brata'" name="fullname" required="required" type="text">
              </div>
          </div>

        <div class="form-group">
           <label class="control-label col-md-3">Tanggal Lahir</label>
           <div class="col-md-9">
              <input class="form-control" placeholder="ex. '1995/12/27'" name="birthday" required="required" type="date">
           </div>
        </div>
        <div class="form-group">
           <label class="control-label col-md-3">Email</label>
           <div class="col-md-9">
              <input class="form-control" placeholder="ex. 'name@gmail'" name="email" required="required" type="email">
           </div>
        </div>
        <div class="form-group">
           <label class="control-label col-md-3">Nomer Kontak</label>
           <div class="col-md-9">
              <input class="form-control" placeholder="ex. '081632111111'" name="contact" required="required" type="number">
           </div>
        </div>
        <div class="form-group">
           <label class="control-label col-md-3">KTP/SIM</label>
           <div class="col-md-9">
               <input name="id_card" type="file" class="form-control" accept="image/*" required="required">
           </div>
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dangger" data-dismiss="modal">close</button>
            <input type="submit" class="btn btn-dangger" value="simpan"></input>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

<!-- cadangan modal -->
<form action="<?php echo base_url();?>index.php/peserta/insert_peserta" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
  <div id="cadangan" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" style="color:black;">Cadangan</h4>
        </div>
        <div class="modal-body">
        <input type="hidden" value=" <?php echo $id_team;?>" name="id_team">
        <input type="hidden" value="cadangan" name="status">
          <div class="form-group">
            <label class="control-label col-md-3">Nama Lengkap</label>
              <div class="col-md-9">
                <input class="form-control" placeholder="ex. 'Nama Brata'" name="fullname" required="required" type="text">
              </div>
          </div>

        <div class="form-group">
           <label class="control-label col-md-3">Tanggal Lahir</label>
           <div class="col-md-9">
              <input class="form-control" placeholder="ex. '1995/12/27'" name="birthday" required="required" type="date">
           </div>
        </div>
        <div class="form-group">
           <label class="control-label col-md-3">Email</label>
           <div class="col-md-9">
              <input class="form-control" placeholder="ex. 'name@gmail'" name="email" required="required" type="email">
           </div>
        </div>
        <div class="form-group">
           <label class="control-label col-md-3">Nomer Kontak</label>
           <div class="col-md-9">
              <input class="form-control" placeholder="ex. '081632111111'" name="contact" required="required" type="number">
           </div>
        </div>
        <div class="form-group">
           <label class="control-label col-md-3">KTP/SIM</label>
           <div class="col-md-9">
               <input name="id_card" type="file" class="form-control" accept="image/*" required="required">
           </div>
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dangger" data-dismiss="modal">close</button>
            <input type="submit" class="btn btn-dangger" value="simpan"></input>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

<!-- //menu modal -->
</body>
</html>