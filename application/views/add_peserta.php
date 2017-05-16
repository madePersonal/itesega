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
	<form action="<?php echo base_url(); ?>index.php/peserta/add_peserta" method="POST" id="add-form" enctype="multipart/form-data">
		<div class="form-group">
			<label class="control-label col-md-4">Nama :</label>
			<div class="col-md-8">
				<input type="text" name="fullname" placeholder="Nama" class="form-control" required><br>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-md-4">Email :</label>
			<div class="col-md-8">
				<input type="email" name="email" placeholder="email" class="form-control" required><br>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-md-4">Tanggal lahir :</label>
			<div class="col-md-8">
				<input type="date" name="birthday" placeholder="tgl_lahir" class="form-control" required><br>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-md-4">No HP :</label>
			<div class="col-md-8">
				<input type="number" name="contact" placeholder="no_hp" class="form-control"><br>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-4">id_card :</label>
			<div class="col-md-8">
				<input type="file" name="id_card" placeholder="id_card" class="form-control" value=""><br>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-md-4">Status :</label>
			<div class="col-md-8">
				<select class="form-control" name="status">
					<option value="null">Pilih status</option>
					<option value="ketua">ketua</option>
					<option value="anggota">anggota</option>
					<option value="cadangan">cadangan</option>
				</select>
			</div>
		</div>
			
	</form>
</div>
</body>
</html>
