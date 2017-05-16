<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form id="rand_form" action="<?php echo base_url();?>index.php/match/rand_match" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
		<input type="hidden" value="<?php echo $data2['min_id'];?>" name="min_id">
	 	<input type="hidden" value="<?php echo $data['max_id'];?>" name="max_id">
	 	<input type="hidden" value="<?php echo $data3['jmlh_team'];?>" name="jmlh_team">
	 	<input type="time" value="" name="tgl_match" required placeholder="Tanggal Match" >
	 	<input type="text" value="" name="tempat" required placeholder="Tempat" >
	</form>
</body>
</html>


