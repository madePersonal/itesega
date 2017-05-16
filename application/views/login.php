<!DOCTYPE html>
<html>
<head>
  <title>login</title>
    <link rel="icon" type="image/jpg" href="<?php echo base_url();?>assets/images/logo2.png">
    <!--css-->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url();?>assets/css/smoothDivScroll.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet" type="text/css" media="all" />
    <!--javascript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/smooth-scroll.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/wow.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.mousewheel.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.kinetic.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.smoothdivscroll-1.3-min.js" type="text/javascript"></script> 
    <script src="<?php echo base_url();?>assets/js/style.js" type="text/javascript"></script> 
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.js"></script>
</head>
<body bgcolor="black">
 <div id="navibar-form">
        <div class="container-fluid">
          <div class="navi-icon pull-left ">
            <img src="<?php echo base_url();?>assets/images/itesega.png" class="logo-by" title="Teknologi Informasi">
          </div>
            <nav class="navbar navbar-light bg-faded navi-link pull-right">
              <div id="navbar">
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#menumodal">Back</button>
              </div>
            </nav>
        </div>
    </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
  <div class="container">
    <div class="col-md-12">
      <div class="row">
        <div class="column left-side">
          <div class="col-md-5">
            <div class="btn-box-row row-fluid">
              <div class="well well-small" style="box-shadow: none;background-color: #black;">
                <h2 align="center">Admin</h2>
                <form class="form-login" id="" name="frmLogin" action="<?php echo base_url();?>index.php/adminAuth/login" method="POST">
                  <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-user" id="basic-addon1"></span>
                    <input type="text" tabindex="1" id="username" name="username" class="form-control" placeholder="Username" aria-describedby="basic-addon1" required="required">
                  </div>
                  <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-lock" id="basic-addon1"></span>
                    <input type="password" tabindex="2" id="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
                    <span class="input-group-btn">
                      <button id="see_password" class="btn btn-default" type="button" title="Seeing Password">
                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                      </button>
                    </span>
                  </div>
                  <br>
                  <div class="text-right">
                    <button id="btnSubmit" name="btnSubmit" type="submit" class="btn btn-primary">Login</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="column right-side">
          <div class="col-md-5">
            <div class="well well-small" style="box-shadow: none; background-color:#black;">
              <h2 align="center">Peserta</h2>
              <form class="form-login" id="" name="frmLogin" action="<?php echo base_url();?>index.php/teamAuth/login" method="POST">
                <div class="input-group">
                  <span class="input-group-addon glyphicon glyphicon-user" id="basic-addon1"></span>
                    <input type="email" tabindex="1" id="username" name="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
                </div>
                <div class="input-group">
                  <span class="input-group-addon glyphicon glyphicon-lock" id="basic-addon1"></span>
                  <input type="password" tabindex="2" id="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
                  <span class="input-group-btn">
                    <button id="see_password" class="btn btn-default" type="button" title="Seeing Password">
                      <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                    </button>
                  </span>
                </div>
                <br/>
                <div class="text-right">
                  <button id="btnSubmit" name="btnSubmit" type="submit" class="btn btn-primary">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    

<script type="text/javascript">
  $( document ).ready(function() {
    var this_element = null;

    $('#myTabs a').click(function (e) {
      e.preventDefault()
      $(this).tab('show')
    });

      $( "#see_password" ).mousedown(function() {
      $( '#password' ).prop('type','text');
    });

    $( "#see_password" ).mouseup(function() {
      $( '#password' ).prop('type','password');
    });

    $('[data-toggle="offcanvas"]').click(function () {
      $('.row-offcanvas').toggleClass('active')
    });

    var active=false;
    if (active) {
      $('.row-offcanvas').toggleClass('active')
    };

    $(document).on('mouseover', '.frame', function(){
      $(this).parent().find('.see_photo').css('display','block');

    });

    $(document).on('mouseleave', '.frame', function(){
      $(this).parent().find('.see_photo').css('display','none');
    });

    $(window).load(function() {
      $("#kotak").animate({
        opacity: 0.8
      }, {
        duration: 2000
      });

      $("#kereta").animate({
        right: 0
      }, {
        duration: 700
      });
    });

    $('.see_photo').click(function(){
      this_element = $(this).parent().parent();
      var img = $(this).parent().find('.item').html();
      $('.modal-header').hide();
      $('#myModalBody').html('<div class="row"><div class="col-sm-12 text-center">'+ img +'</div></div>');
        $('#myModal').modal();
    });
  });
}
</script>
</body>
</html>


