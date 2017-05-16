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
	<div class="col-md-12" align="center">
		<img src="<?php echo base_url();?>assets/uploads/id_peserta/<?php echo $peserta['id_card']; ?>" width="330" height="200" class="widget">
	</div>
</div>
</body>
</html>
