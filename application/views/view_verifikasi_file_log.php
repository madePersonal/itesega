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
		<h4><?php echo $file_log['file'];?></h4>
		<div class="col-md-12" align="center">
			<img src="<?php echo base_url();?>assets/uploads/file_verifikasi/<?php echo $file_log['file']; ?>" width="430" height="600" class="widget">
		</div>
</div>
</body>
</html>
