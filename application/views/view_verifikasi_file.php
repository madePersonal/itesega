<!DOCTYPE html>
<html>
<head>
	<title>Id_card</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">
	<script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</head>
</style>
<body>
<div class="container-fluid">
	<form action="<?php echo base_url(); ?>index.php/verifikasi/insert_verifikasi" method="POST" enctype="multipart/form-data" id="verifikasi-form">
		<h4><?php echo $file['file'];  ?></h4>
		<div class="col-md-12" align="center">
			<img src="<?php echo base_url();?>assets/uploads/file_verifikasi/<?php echo $file['file']; ?>" width="430" height="600" class="widget">
		</div>
		<input type="hidden" name="id_req" value="<?php echo $file['id_permintaan']; ?>">
	</form>
</div>
</body>
</html>
