<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Softnio">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="ICO Crypto is a modern and elegant landing page, created for ICO Agencies and digital crypto currency investment website.">
	<!-- Fav Icon  -->
	<link rel="shortcut icon" href="<?php echo site_url(); ?>assets/images/favicon.png">
	<!-- Site Title  -->
	<title>Blue Hill - &amp; The first copper reserve in the world to be following the more reliable, faster and cost effective
block chain technology</title>
	<!-- Vendor Bundle CSS -->
	<link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/vendor.bundle.css?ver=122">
	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/style.css?ver=122"> 
	
	<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/css/theme.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/css/style.css"> 
	<link rel="stylesheet" type="text/css" href="<?php echo site_url() ?>assets/css/jquery.popVideo.css">
 
	<script src="<?php echo site_url() ?>assets/js/jquery.popVideo.js"></script>
	<script type="text/javascript" src="<?php echo site_url(); ?>assets/js/ethwebpage/bower_components/web3/dist/web3.min.js"></script>

</head>

<body class="theme-lavendar io-lavendar" data-spy="scroll" data-target="#mainnav" data-offset="80">

	<!-- Header --> 
	<header class="site-header is-sticky">
		<!-- Navbar -->
		<div class="navbar navbar-expand-lg is-transparent" id="mainnav">
			<nav class="container">

				<a class="navbar-brand animated" data-animate="fadeInDown" data-delay=".65" href="./">
					<img class="logo logo-dark" alt="logo" src="<?php echo site_url(); ?>assets/images/logo.png" srcset="assets/images/logo2x.png 2x">
					<img class="logo logo-light" alt="logo" src="<?php echo site_url(); ?>assets/images/logo-full-white.png" srcset="assets/images/logo-full-white2x.png 2x">
				</a>
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle">
					<span class="navbar-toggler-icon">
						<span class="ti ti-align-justify"></span>
					</span>
				</button>

				<div class="collapse navbar-collapse justify-content-end" id="navbarToggle">
					<ul class="navbar-nav animated remove-animation" data-animate="fadeInDown" data-delay=".75">
						<li class="nav-item"><a class="nav-link menu-link" href="#about">Concept</a></li>
						<li class="nav-item"><a class="nav-link menu-link" href="#why">BLU &amp; Token</a></li>
						<li class="nav-item"><a class="nav-link menu-link" href="#team">Team</a></li>
						<li class="nav-item"><a class="nav-link menu-link" href="#token">FAQ</a></li>
						<li class="nav-item"><a class="nav-link menu-link" href="#roadmap">Roadmap</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">MORE</a>
							<div class="dropdown-menu">
								<a class="dropdown-item menu-link" href="#faq">Faqs</a>
								<a class="dropdown-item menu-link" href="#media">Legal</a>
							</div>
						</li>
					</ul>
					<ul class="navbar-btns animated remove-animation" data-animate="fadeInDown" data-delay=".85">
						<?php if (!$this->ion_auth->logged_in()){ ?>
							<li class="nav-item"><a class="nav-link btn btn-sm btn-outline menu-link main_imp" href="#" data-toggle="modal" data-target="#loginModal">BUY Token</a></li>
						<!--li class="nav-item"><a class="nav-link btn btn-white btn-sm menu-link" href="#">BUY Token</a></li-->
						<?php }else{ ?>
							<li class="nav-item"><a class="nav-link btn btn-sm btn-outline menu-link" href="<?php echo site_url() ?>dashboard">BUY Token</a></li>
							<?php } ?>
						<li class="nav-item lang-switch">
							<a class="btn btn-sm btn-outline" href="#" data-toggle="dropdown"><img class="lang-flag" src="<?php echo site_url(); ?>assets/images/flag-en.jpg" alt="">EN <em class="ti ti-angle-down"></em></a>
							<div class="dropdown-menu dropdown-menu-right" >
								<a class="dropdown-item" href="#"><img class="lang-flag" src="<?php echo site_url(); ?>assets/images/flag-fr.jpg" alt="">FR</a>
								<a class="dropdown-item" href="#"><img class="lang-flag" src="<?php echo site_url(); ?>assets/images/flag-ch.jpg" alt="">CH</a>
								<a class="dropdown-item" href="#"><img class="lang-flag" src="<?php echo site_url(); ?>assets/images/flag-br.jpg" alt="">BR</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- End Navbar -->

		<!-- Banner/Slider -->
		<div id="header" class="banner">
			<div class="banner-rounded-bg">
				<!-- Place Particle Js -->
				<div id="particles-js" class="particles-container particles-js"></div>
				<span class="banner-shade-1">
					<span class="banner-shade-2">
						<span class="banner-shade-3"></span>
					</span>
				</span>
			</div>
			<div class="container">
				<div class="banner-content">
					<div class="row text-center">
						<div class="col-lg-12">
							<div class="header-txt">
								<h1 class="animated" data-animate="fadeInUp" data-delay="1.25">Blue Hill <span>is on the way to what can</span> potentially become<br class="d-none d-xl-block"> <span>one of the</span> largest copper reserves <span></span> in the world</h1>
								<p class="lead animated" data-animate="fadeInUp" data-delay="1.35">Blue Hill the first copper reserve in the world to be following the more reliable, faster and cost effective<br class="d-none d-xl-block"> block chain technology.</p>
							</div>
						</div><!-- .col  -->
					</div><!-- .row  -->
				</div><!-- .banner-content  -->
				<div class="row justify-content-center text-center">
					<div class="col-lg-8">
						<span class="warnning-badge large animated" data-animate="fadeInUp" data-delay="1.45">FIRST PHASE</span>
						<div class="gaps"></div>
						<h4 class="animated" data-animate="fadeInUp" data-delay="1.55">Private Sale is LIVE!</h4>
						<div class="gaps size-0-5x"></div>
						<div class="token-box shadow animated" data-animate="fadeInUp" data-delay="1.65">
							<h6 class="small-text">Round one sales ends in:</h6>
							<div class="token-countdown d-flex align-content-stretch" data-date="2018/09/05"></div>
							<ul class="token-details">
								<li>0 BLU</li>
								<li>1 ETH = 50 BLU, BTC = 250 BLU</li>
								<li>50000 ICOX</li>
							</ul>
							<div class="token-bar">
								<div class="token-percent" style="width:40%;">16899.49 BLU</div>
								<span class="token-point token-point-1" style="left:25%;">Soft Cap</span>
								<span class="token-point token-point-2" style="left:75%;">Hard Cap</span>
							</div>
							<ul class="btns">
								<li><a href="https://www.youtube.com/watch?v=SSo_EIwHSd4" class="btn btn-simple video-play"> <em class="fa fa-play"></em> Watch Video</a></li>
								<li><a href="#" class="btn btn-alt btn-lg">BUY BLU NOW</a></li>
								<li><a href="#" class="btn btn-simple"> <em class="fa fa-file"></em> Whitepaper</a></li>
							</ul>
							<ul class="icon-list">
								<li>We Accept :</li>
								<li><em class="fa fa-bitcoin"></em></li>
								<li><em class="fa fa-eth"></em></li>
							</ul>
						</div>
					</div>
				</div>
			</div><!-- .container  -->
		</div>
	</header>
	<!-- End Header -->
	
	
		<!--- Login Modal -->
		<div id="loginModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<!--<h4 class="modal-title">Login</h4>-->
						<div class="tab-bar-new">
							<div id="tabl" class="tab2 active">
								<span id="log_in">Login</span>
							</div>
							<div id="tabr" class="tab2">
								<span id="reg_win">Register</span>
							</div>
						</div>
					</div>
					<div class="modal-body" id="log_win">
						<div id="infoMessage"><?php echo $this->session->flashdata('message');?></div>
						<?php echo form_open("user/login",array('id' => 'loginSubmit'));?>      
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Email" required="required" name="identity">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Password" required="required" name="password">
						</div>
						<!-- <div class="check-row"><a href="/password-reset-init"><span>Forgot password?</span></a></div> -->
						<div class="form-group">
							<button type="button" class="btn btn-primary btn-block" onclick="submitForm();">Login</button>
						</div>
						<?php echo form_close();?>
					</div>
					<div style="display:none" class="modal-body" id="reg_form">
						<h1></h1>
						<div id="infoMessage1"></div>
						<?php echo form_open("register",array('id' => 'registerSubmit'));?>
						<?php
						?>     
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Email" required="required" name="identity">
						</div>
						<div id="infoMessage2"></div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Password" required="required" name="password">
						</div>
						<div id="infoMessage3"></div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Confirm Password" required="required" name="password_confirm">
						</div> 
						<div class="check-row"><span class=""><input type="checkbox" class="checkbox" name="agree" id="chk-agree"><label for="chk-agree"><span class="agree-text"><span>I confirm that I have read, accepted and agreed to all<a target="_blank" href="/terms">
							Terms and Conditions</a>,and I am of legal age</span></span></label></span></div>
							<div class="form-group">
								<button type="button" class="btn btn-primary btn-block" onclick="registerForm();">Register<?php //echo  lang('create_user_submit_btn') ?></button>
							</div>
							<?php echo form_close();?>
						</div>
					</div>
				</div>
			</div>

			<!--Script starts here -->
			<script>
			$('#reg_win').click(function(){
				$('#reg_form').show();
				$('#log_win').hide(); 
				$('#tabl').removeClass('active');
				$('#tabr').addClass('active');


			});
			$('#log_in').click(function(){
				$('#log_win').show();
				$('#reg_form').hide();
				$('#tabl').addClass('active');
				$('#tabr').removeClass('active');
			});

			function submitForm(){ 
				$.ajax({
					type : "POST",
					url : "<?php echo site_url(); ?>login",
  data : $("#loginSubmit").serialize(), // Add your form data as inputname1=value1&inputname2=value2....
  success : function(data) {
  	$("#infoMessage").html(data);
  	if(data == 1){

  		window.location = "<?php echo site_url(); ?>dashboard";
  	}

  }	
});
			}

			function registerForm(){
				$('#infoMessage1').html('');
				var chk_val = $('#chk-agree').prop('checked');
				if(chk_val == false){
					$('#infoMessage1').html('Accept Terms & Conditions before registration');
				}else{	
					$.ajax({
						type : "POST",
						url : "<?php echo site_url(); ?>register",
		data : $("#registerSubmit").serialize(), // Add your form data as inputname1=value1&inputname2=value2....
		success : function(data) {
			if(data=='registered'){
                $("#tabr").removeClass("active");
				$("#tabl").addClass("active");
				

			}
			var data1 = JSON.parse(data);
			//alert(data1.message);
			$("#infoMessage1").html(data1.message);


		}	
	});

				}
			}
	// 	function change_lang(lang){
	// 		alert(lang);
 //    	$.ajax({
	// 			type : "POST",
	// 			url : "<?php echo base_url(); ?>User/index/",
	// 			data: {lang:lang},
	// 	 // Add your form data as inputname1=value1&inputname2=value2....
	// 	success : function(data) {

		
	// 	}	
	// });
	// }
	</script>
