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
	<form action="<?php echo base_url(); ?>index.php/peserta/update_peserta" method="POST" id="edit-form" enctype="multipart/form-data">
		<div class="form-group">
			<label class="control-label col-md-4">Nama :</label>
			<div class="col-md-8">
				<input type="text" name="nama-peserta" placeholder="Nama" class="form-control" value="<?php echo $peserta['nama_peserta']?>"><br>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-md-4">Email :</label>
			<div class="col-md-8">
				<input type="text" name="email" placeholder="email" class="form-control" value="<?php echo $peserta['email'] ?>"><br>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-md-4">Tanggal lahir :</label>
			<div class="col-md-8">
				<input type="text" name="birthday" placeholder="tgl_lahir" class="form-control" value="<?php echo $peserta['tgl_lahir'] ?>"><br>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-md-4">No HP :</label>
			<div class="col-md-8">
				<input type="text" name="contact" placeholder="no_hp" class="form-control" value="<?php echo $peserta['no_hp']?>"><br>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-4">id_card :</label>
			<div class="col-md-8">
				<input type="file" name="id_card" placeholder="id_card" class="form-control" value=""><br>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-4">Team :</label>
			<div class="col-md-8">
				<input type="text" disabled="disabled" name="team" placeholder="team" class="form-control" value="<?php echo $peserta['nama_team'] ?>"><br>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-md-4">Status :</label>
			<div class="col-md-8">
				<input type="text" name="status" placeholder="sataus" class="form-control" value="<?php echo $peserta['status'] ?>"><br>
			</div>
		</div>
			<input type="hidden" name="id_peserta" value="<?php echo $peserta['id_peserta'] ?>">
			<input type="hidden" name="nama_id_card" value="<?php echo $peserta['id_card'] ?>">
	</form>
</div>
</body>
</html>
