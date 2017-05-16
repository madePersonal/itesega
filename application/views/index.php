<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Smart Class</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.3.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Perpustakaan</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
           
        </ul>
    </nav>

	<div id="wrapper" class="container">
		<div class="col-md-4"></div>
		<div class="col-md-4">
            <?php if($this->session->flashdata('success')){ ?>
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php 
            }else if ($this->session->flashdata('danger')) {?>
                <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Error!</strong> <?php echo $this->session->flashdata('danger'); ?>
                </div>
            <?php
            }
            ?>
			<h3 align="center">Login</h3>
			<form id="login-frm" enctype="multipart/form-data" method="POST"  action="<?php echo base_url() ?>index.php/auth/login">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
						</span>
						<input type="text" class="form-control" name="user_username" placeholder="Username"></input>
					</div>
				</div>

				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
						</span>
						<input id="password" type="password" name="user_pw" class="form-control" placeholder="Password"></input>
					</div>
				</div>
				<input id="submit" type="submit" name="submit" value="Login" class="btn btn-primary btn-block"></input>
			</form>
		</div> <!-- col-md-4 -->
		<div class="col-md-4"></div>
	</div><!-- wrapper container -->
</body>
</html>