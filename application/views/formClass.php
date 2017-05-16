<!DOCTYPE html>
<html>
<head>
	<title>Smart Class</title>
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
    <script src="<?php echo base_url('assets/datatables/media/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/media/js/dataTables.bootstrap.min.js')?>"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datatables/media/css/dataTables.bootstrap.min.css')?>">
</head>
<body>
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tambah Kelas</h1>
            </div>
        </div>
        <!-- ... Your content goes here ... -->
        <div class="row">
            <div class="col-md-4">
			<form id="addgroup" enctype="multipart/form-data" method="POST"  action="<?php echo base_url() ?>kelas/insert">
				<!-- input -->
				<div class="form-group">
					<input type="text" class="form-control" name="class_name" placeholder="Group Name"></input>
				</div>


				<div class="form-group">
					<input type="text" class="form-control" name="class_nickname" placeholder="Nick Name"></input>
				</div>

				<!-- input -->
				<div class="form-group">
					<select class="form-control" name="class_type">
						<option value="null">Pilih Jenis Kelas</option>
						<option value="1">Publik</option>
						<option value="2">Private</option>
					</select>
				</div>

				<!-- input -->
				<div class="form-group">
					<input type="password" class="form-control" name="class_pw" placeholder="Password"></input>
				</div>

				<div class="form-group">
					<textarea class="form-control" rows="4" placeholder="Deskripsi" name="class_info"></textarea>	
				</div>
				

				<div class="form-group">
					<input type="file" name="class_image" class="form-control">	
				</div>
				

				<input id="submit" type="submit" name="submit" value="Tambah Class" class="btn btn-primary btn-block"></input>
			</form>
            </div><!-- col-md-4 -->
        </div><!-- row -->
                
    </div>
</div>

</body>
</html>