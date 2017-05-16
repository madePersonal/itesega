<!DOCTYPE html>
<html>
<head>
	<title>Form Team</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">
	<script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</head>
<body>
<div class="container-fluid">
	<form action="<?php echo base_url(); ?>index.php/team/update_team" method="POST" id="edit-form" enctype="multipart/form-data">
		<div class="form-group">
			<label class="control-label col-md-3">Nama :</label>
			<div class="col-md-8">
				<input type="text" name="nama-team" placeholder="Nama" class="form-control" value="<?php echo $data['nama_team'] ?>"><br>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3">Email :</label>
			<div class="col-md-8">
				<input type="text" name="email" placeholder="email" class="form-control" value="<?php echo $data['email'] ?>"><br>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3">Logo :</label>
			<div class="col-md-8">
				<input type="file" name="logo-team" placeholder="logo" class="form-control" value=""><br>
			</div>
		</div>
			<input type="hidden" name="id_team" value="<?php echo $data['id_team'] ?>">
			<input type="hidden" name="nama_logo" value="<?php echo $data['logo'] ?>">
	</form>
</div>
</body>
</html>
