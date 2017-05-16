<?php
$image=$this->session->userdata('user_image');
$token=$this->uri->segment(3);
// print_r($post);
?>
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
    <!-- <script src="<?php echo base_url('assets/datatables/media/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/media/js/dataTables.bootstrap.min.js')?>"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datatables/media/css/dataTables.bootstrap.min.css')?>"> -->
</head>
<body>
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo "$class[class_name]"; ?></h1>
                <!-- <br> -->
            </div><!-- col-lg-12 -->
        </div>

        <!-- ... Your content goes here ... -->
        <div class="row">
            <div class="col-md-12">
		
				<?php  
				if (isset($detail_class)) {
				?>
					<div class="row">
						<div class="col-md-4">
							<span class="label label-primary">Pengumuman</span>
							<form action="<?php echo base_url("kelas/post/$token"); ?>"  enctype="multipart/form-data" method="POST">
								<textarea class="form-control" rows="4" placeholder="Tambah Post" name="post_text"></textarea>
								<input id="picture" type="file" class="form-control" name="picture[]" multiple="multiple" accept="image/*">
								<input type="hidden" name="class_id" value="<?php echo "$class[class_id]"; ?>">
								<input type="submit" name="submit" class="btn btn-primary pull-right" value="POST" >
							</form>
						</div>

						<div class="col-md-4">
							<span class="label label-primary">Share Materi</span>
							<form action="<?php echo base_url("kelas/materi/$token"); ?>"  enctype="multipart/form-data" method="POST">
								<textarea class="form-control" rows="4" placeholder="Tambah Post" name="post_text"></textarea>
								<input id="file" type="file" class="form-control" name="file" aria-describedby="fileStatus">
								<input type="hidden" name="class_id" value="<?php echo "$class[class_id]"; ?>">
								<input type="submit" name="submit" class="btn btn-primary pull-right" value="POST" >
							</form>
						</div>

						<div class="col-md-4">
							<span class="label label-primary">Kelompok</span>
							<form action="<?php echo base_url("kelas/post/$token"); ?>"  enctype="multipart/form-data" method="POST">
								<textarea class="form-control" rows="4" placeholder="Tambah Post" name="post_text"></textarea>
								<!-- <input id="picture" type="file" class="form-control" name="picture" aria-describedby="pictureStatus"> -->
								<input type="hidden" name="class_id" value="<?php echo "$class[class_id]"; ?>">
								<input type="submit" name="submit" class="btn btn-primary pull-right" value="POST" >
							</form>
						</div>
					</div>
						
					<br>
				<?php
				foreach ($post as $value) {
				?>
					<div class="post-content">
						<blockquote>
							<div class="row">
								<div class="col-md-1">
									<img src="<?php echo base_url(); ?>/images/user/<?php echo $value['user_image']; ?>" class="comment_picture">	
								</div>
								
								<h4><?php echo "$value[user_name]"; ?></h4>
							</div>
							<div class="row">
								<div class="col-md-5">
									<?php  
									echo "<h5>$value[post_text]</h5>";
									// echo "string";
									if (isset($value['post_file'])) {
										echo "<a href=".base_url("materi/$value[post_file]".">Download</a>");
										// <a href="<?php echo base_url(); 
									}
									?>
									
								</div>
							</div>
							<?php  
							foreach ($value['comment'] as $comment) {
							?>
								<blockquote>
									<div class="row">
										<div class="col-md-1">
											<img src="<?php echo base_url(); ?>/images/user/<?php echo $comment['user_image']; ?>" class="profile_picture">	
										</div>
										
										<h6><strong><?php echo "$comment[user_name]"; ?></strong></h6>
									</div>
									<div class="row">
										<div class="col-md-5">
											<?php  
											echo "<h6>$comment[comment_text]</h6>";
											?>
										</div>
									</div>		
								</blockquote>
							<?php
								# code...
							}
							?>
							<div class="row">
								<div class="col-md-1">
									<img src="<?php echo base_url(); ?>/images/user/<?php echo $image; ?>" class="profile_picture">	
								</div>
								<div class="col-md-6">
									<form action="<?php echo base_url("kelas/comment/$token") ?>" method="POST">
										<div class="form-group">
											<input class="form-control" type="text" name="comment_text" placeholder="Komentar...">
											<input type="hidden" name="post_id" value="<?php echo $value['post_id'] ?>">
										</div>
									</form>
								</div>
							</div>
								
						</blockquote>
					</div>
						
				<?php
				}
				?>
				<?php
				}else{
				?>
					<a href="<?php echo base_url("kelas/join/$class[class_token]") ?>" class="btn btn-primary">Join Group</a>
				<?php
				# code...
				}
				?>
            </div><!-- col-md-12 -->
        </div><!-- row -->
                
    </div><!-- container-fluid -->
</div><!-- page wrapper -->

</body>
</html>