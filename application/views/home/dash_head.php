<!DOCTYPE html>
<html lang="en">
<head>
  <style>
  #a_mdl{
    display: none;
  }
  </style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Template</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Bootstrap -->
  <link href="<?php echo site_url() ?>assets/css_/style.css" rel="stylesheet">

  <!-- <link href="css/animate.css" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script type="text/javascript" src="http://kicksportsmanager.com/assets/js/web3.min.js"></script>
<script type="text/javascript" src="http://kicksportsmanager.com/assets/js/moment.js"></script>
<script type="text/javascript" src="http://kicksportsmanager.com/assets/js/moment-timezone.js"></script>

</head>

<style>

	.navbar-brand{
		padding:0px 15px;
	}
	
	
	.navbar-brand img{
		height:50px;
		width:auto;
	}
	

</style>

<body>



  <!-- header start -->
  <div class="container-fluid s">
    <nav class="navbar navbar-inverse navbar1 navbar-inverse1 navbar-fixed-top scrolled">
      <div class="container">
        <div class="navbar-header navbar-header1">
        <!--button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button-->
      <a class="navbar-brand" data-animate="fadeInDown" data-delay=".65" href="./">
					<!--img class="logo logo-dark" alt="logo" src="assets/images/logo.png" srcset="assets/images/logo2x.png 2x"-->
					<img class="logo logo-light" alt="logo" src="assets/images/logo-full-white.png" srcset="assets/images/logo-full-white2x.png 2x">
				</a>      
    </div>
    <!-- <div class="select-box"> -->
      <!--   <img src="<?php echo site_url() ?>images/flag.jpg" class="img-responsive flag" />
       <i class="fa fa-caret-down"></i> -->
        <div class="flag_fix">

                        <a href="" data-toggle="dropdown"><i class="flag en"><img src="<?php echo site_url(); ?>images/gb.png" /></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <ul class="locales">
                              <li><a href="<?php echo BASE_URL()?>/LangSwitch/switchLanguage/english" class="item active"><i class="flag en"><img src="<?php echo site_url(); ?>images/gb.png" /></i><span class="title">English</span></a></li>
                <li><a href="<?php echo BASE_URL()?>/LangSwitch/switchLanguage/portuguese" class="item "><i class="flag1"><img src="<?php echo site_url(); ?>images/gb.png" /></i><span class="title">Português</span></a></li>
                               <!--  <li><a class="item "><i class="flag1"><img src="<?php echo site_url(); ?>images/gb.png" /></i><span class="title">हिन्दी</span></a></li>
                                <li><a class="item "><i class="flag1"><img src="<?php echo site_url(); ?>images/gb.png" /></i><span class="title">简体中文</span></a></li>
                                <li><a class="item "><i class="flag1"><img src="<?php echo site_url(); ?>images/gb.png" /></i><span class="title">Bahasa Indonesia</span></a></li>
                                <li><a class="item "><i class="flag1"><img src="<?php echo site_url(); ?>images/gb.png" /></i><span class="title">繁體中文</span></a></li>
                                <li><a class="item "><i class="flag1"><img src="<?php echo site_url(); ?>images/gb.png" /></i><span class="title">Malay</span></a></li>
                                <li><a class="item "><i class="flag1"><img src="<?php echo site_url(); ?>images/gb.png" /></i><span class="title">ภาษาไทย</span></a></li>
                                <li><a class="item "><i class="flag1"><img src="<?php echo site_url(); ?>images/gb.png" /></i><span class="title">Tiếng Việt</span></a></li>
                                <li><a class="item "><i class="flag1"><img src="<?php echo site_url(); ?>images/gb.png" /></i><span class="title">Tagalog</span></a></li>
                                
                                <li><a class="item "><i class="flag1"><img src="<?php echo site_url(); ?>images/gb.png" /></i><span class="title">Español</span></a></li>
                                <li><a class="item "><i class="flag1"><img src="<?php echo site_url(); ?>images/gb.png" /></i><span class="title">Español</span></a></li> -->
                                
                            </ul>   
                        </div>
                    </div>
  <!-- </div> -->
  
  <div class="collapse navbar-collapse in" id="myNavbar">
       <!--  <ul class="nav navbar-nav nav1 navbar-nav1">
        <li><a> <i class="fa fa-user"></i> &nbsp test@kindlebit.com &nbsp <i class="fa fa-caret-down"></i> </a></li>
      </ul> -->
        <ul class="dwn">
          <li><a href="#"><img src="<?php echo site_url(); ?>images/ava.png" class="img_header_mail" /> <?php echo get_data_by_id('users','id',$this->session->userdata('user_id'),'email');?></a></li>
          <li><a href="#"  data-toggle="modal" data-target="#loginModal1"><i class="fa fa-cog"></i>SETTINGS</a></li>
          <li><a  href="<?php echo site_url() ?>logout"><i class="fa fa-sign-out" aria-hidden="true"></i>LOG OUT</a></li>
        </ul>
    </div>
  </div>
</nav>

<div id="loginModal1" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!--<h4 class="modal-title">Login</h4>-->
                <div class="tab-bar-new">
                    <div id="tabl1" class="tab2 active">
                        <span id="log_in1"><?php echo 'Change Password';?></span>
                    </div>
                    <div id="tabr1" class="tab2">
                        <span id="reg_win1"><?php echo '2-Step Verification';?></span>
                    </div>
                </div>
            </div>
            <div class="modal-body" id="log_win1">
                <h1></h1>
                <!--   <div id="infoMessage"><?php echo $this->session->flashdata('message');?></div> -->

                <div class="tab-content">
                    <div class="auth-form">
                        <div class="active-pane ">
                           <?php echo form_open("login",array('id' => 'loginSubmit11'));?> 
                           <input type="hidden" value="<?php echo $this->session->userdata('user_id');?>" name="user_id"> 
                           <div class="input">
                            <input type="password" autocomplete="on" name="oldPassword" placeholder="Current password" required/><span>
                        </span>
                    </div>
                    <div class="input">
                        <input type="password" autocomplete="on" name="newPassword" placeholder="New password" required/><span></span>
                    </div>
                    <div class="errors"></div>
                    <div class="centered-button">
                        <button class="button blue mid center" type="button" onclick="change_pass();"><div class="loader" style="display:none;"></div>
                            <span data-lokalise="true" data-key="AUTH.PASSWORD_RESET.CHANGE_PASSWORD_BUTTON">Change password</span>
                        </button></div>
                        <?php echo form_close();?>
                    </div>

                    <div class="result-pane " style="display:none;">
                        <div class="result-animation">
                            <div class="inner">
                                <div class="animated-icon ready">
                                    <svg width="118px" height="118px" viewBox="0 0 118 118" version="1.1" xmlns="http://www.w3.org/2000/svg"><g transform="translate(3.000000, 3.000000)">
                                        <path transform="translate(56, 56) rotate(90) translate(-56, -56)" id="circle-path-success" stroke="#4C9DF4" stroke-width="4" fill="transparent" d="M0,55a55,55 0 1,0 110,0a55,55 0 1,0 -110,0"></path>
                                        <path id="figure-path-success" stroke="#55D260" stroke-width="4" stroke-linejoin="round" stroke-linecap="round" fill="transparent" d="M27,57.7201476 C33.9136427,64.202498 45.4234318,75.6994803 45.4234318,75.6994803 C45.4234318,75.6994803 70.5283203,50.722168 84.7926242,36.3005197"></path>
                                    </g></svg></div></div></div>
                                    <div class="text-block">
                                        <span>Your password has been<br>changed successfully</span>
                                    </div></div></div></div>

                                </div>
                                <div style="display:none" class="modal-body" id="reg_form1">
                                    <h1></h1>
                                    <!-- <div id="infoMessage1"></div> -->
                                    <div class="tab-content">
                                        <div class="auth-form">
                                            <?php if(get_data_by_id('2_veri','userId',$this->session->userdata('user_id'),'status') == '0'){?>
                                            <div class="two-fa">
                                                <div class="two-fa-enable">
                                                    <i class="icon"></i>
                                                    <div class="title">
                                                        <span>Google Authenticator</span>
                                                    </div>
                                                    <div class="text">
                                                        <span>To use 2-Step Verification install the Google Authenticator application on your mobile device.</span>
                                                    </div>
                                                    <div class="apps">
                                                        <a target="_blank" href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2" class="app google"></a>
                                                        <a target="_blank" href="https://itunes.apple.com/us/app/google-authenticator/id388497605" class="app apple"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="two-fa-next">
                                                <button class="button blue" type="button" onclick="enable();">Enable</button>
                                            </div>

                                            <div class="enable_text" style="display:none">

                                                <div class="input">
                                                    <a href="<?= $qrCode; ?>"><img src="<?= $qrCode; ?>"></a>
                                                </div>
                                                <div class="input">
                                                    <input type="text" name="secret" class="secret"  id="secret" value="<?php echo get_data_by_id('2_veri','userId',$this->session->userdata('user_id'),'secret');?>" readonly="">
                                                    <div class="box" style="display:none;">Copied!</div><div class="errors"></div>
                                                </div><span></span>
                                                <div class="two-fa-next1">
                                                   <button class="button blue" type="button" id="next">Next</button>
                                               </div>
                                           </div>
                                           <div class="put_text" style="display:none">
                                            <form method="post" class="formsubmit">
                                                <input type="hidden" name="secr" value="<?php echo get_data_by_id('2_veri','userId',$this->session->userdata('user_id'),'secret');?>">
                                                <input type="hidden" name="type" value="enable">
                                                <div class="input">
                                                    <input type="text" name="token" class="token"  id="token" placeholder="Google Aunthenticator Token">
                                                </div><span></span>
                                                <div class="errors"></div>
                                                <div class="input">
                                                    <button class="button blue" type="button" onclick="formsubmit();">Enable</button>
                                                </div><span></span>
                                            </form>
                                        </div>
                                        <div class="result-pane1" style="display:none;">
                                            <div class="result-animation">
                                                <div class="inner">
                                                    <div class="animated-icon ready">
                                                        <svg width="118px" height="118px" viewBox="0 0 118 118" version="1.1" xmlns="http://www.w3.org/2000/svg"><g transform="translate(3.000000, 3.000000)">
                                                            <path transform="translate(56, 56) rotate(90) translate(-56, -56)" id="circle-path-success" stroke="#4C9DF4" stroke-width="4" fill="transparent" d="M0,55a55,55 0 1,0 110,0a55,55 0 1,0 -110,0"></path>
                                                            <path id="figure-path-success" stroke="#55D260" stroke-width="4" stroke-linejoin="round" stroke-linecap="round" fill="transparent" d="M27,57.7201476 C33.9136427,64.202498 45.4234318,75.6994803 45.4234318,75.6994803 C45.4234318,75.6994803 70.5283203,50.722168 84.7926242,36.3005197"></path>
                                                        </g></svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-block">
                                                <span>Your 2 Step verification<br>enabled successfully</span>
                                            </div>
                                        </div>
                                        <?php }else{ ?>
                                            <div class="disable_text" >
                                            <form method="post" class="formsubmit">
                                                <input type="hidden" name="secr" value="<?php echo get_data_by_id('2_veri','userId',$this->session->userdata('user_id'),'secret');?>">
                                                <input type="hidden" name="type" value="disable">
                                                <div class="input">
                                                    <input type="text" name="token" class="token"  id="token" placeholder="Google Aunthenticator Token">
                                                </div><span></span>
                                                <div class="errors"></div>
                                                <div class="input">
                                                    <button class="button blue" type="button" onclick="formsubmit();">Disable</button>
                                                </div><span></span>
                                            </form>
                                        </div>
                                        <div class="result-pane1" style="display:none;">
                                            <div class="result-animation">
                                                <div class="inner">
                                                    <div class="animated-icon ready">
                                                        <svg width="118px" height="118px" viewBox="0 0 118 118" version="1.1" xmlns="http://www.w3.org/2000/svg"><g transform="translate(3.000000, 3.000000)">
                                                            <path transform="translate(56, 56) rotate(90) translate(-56, -56)" id="circle-path-success" stroke="#4C9DF4" stroke-width="4" fill="transparent" d="M0,55a55,55 0 1,0 110,0a55,55 0 1,0 -110,0"></path>
                                                            <path id="figure-path-success" stroke="#55D260" stroke-width="4" stroke-linejoin="round" stroke-linecap="round" fill="transparent" d="M27,57.7201476 C33.9136427,64.202498 45.4234318,75.6994803 45.4234318,75.6994803 C45.4234318,75.6994803 70.5283203,50.722168 84.7926242,36.3005197"></path>
                                                        </g></svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-block">
                                                <span>Your 2 Step verification<br>Disable successfully</span>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



</div>

  <script>
            $('#reg_win1').click(function(){
                $('#reg_form1').show();
                $('#log_win1').hide(); 
                $('#tabl1').removeClass('active');
                $('#tabr1').addClass('active');


            });
            $('#log_in1').click(function(){
                $('#log_win1').show();
                $('#reg_form1').hide();
                $('#tabl1').addClass('active');
                $('#tabr1').removeClass('active');
            });

            function change_pass(){
                $(".loader").show();
                $.ajax({
                    type : "POST",
                    url : "<?php echo site_url(); ?>User/change_pass",
                    data : $("#loginSubmit11").serialize(),
                    success : function(data) {
                        if(data==1){
                            $(".loader").hide();
                            $(".result-pane").show();
                            $(".active-pane").hide();
                        }else if(data==0){
                            $(".errors").html('<div class="alert alert-danger"><strong>Old password is not matching</strong></div>');
                            $(".alert-danger").fadeTo(2000, 500).slideUp(500, function(){
                                $(".alert-danger").slideUp(500);
                            });}else if(data==2){
                                $(".errors").html('<div class="alert alert-danger"><strong>Both fields are required</strong></div>');
                                $(".alert-danger").fadeTo(2000, 500).slideUp(500, function(){
                                    $(".alert-danger").slideUp(500); 
                                });
                            }else{
                                $(".loader").hide();
                                $(".result-pane").hide();
                                $(".active-pane").show();
                            }

                        }


                    });
}
function enable(){
    $(".two-fa").hide();
    $(".two-fa-next").hide();
    $(".enable_text").show();
    $(".disable_text").hide();
}
$("#next").click(function(){
 $(".two-fa").hide();
 $(".two-fa-next").hide();
 $('.put_text').show();
 $('.enable_text').hide();
 $('.disable_text').hide();
});
document.getElementById("secret").onclick = function() {
  this.select();
  document.execCommand('copy');

  $('.enable_text .box').show();
  setTimeout(function() {
    $('.enable_text .box').slideUp(500);
}, 1000);
}

function formsubmit(){
    $.ajax({
        type : "POST",
        url : "<?php echo site_url(); ?>User/enable",
data : $(".formsubmit").serialize(), // Add your form data as inputname1=value1&inputname2=value2....
success : function(data) {
    if(data == 1){
        $('.result-pane1').show();
        $(".two-fa").hide();
        $(".two-fa-next").hide();
        $('.put_text').hide();
        $('.enable_text').hide();
        $('.disable_text').hide();

    }else{
        $('.errors').html('<div class="alert alert-danger"><strong>Please enter valid token</strong></div>');
          $(".alert-danger").fadeTo(2000, 500).slideUp(500, function(){
                                    $(".alert-danger").slideUp(500); 
                                });
    }
}   
});
}
</script>
<style>
.goog-te-gadget-icon{
background-image:none!important; background-position:0px!important;
}
.goog-te-banner{
  display:none!important;
  background-image:none!important;
}
.pop{
  background: none;
    border: none;
    color: white;
    font-size: 20px;
    font-weight: 700;
}

.modal-header{
border-bottom:none!important;
}
.modal-content{
  width:517px!important;
}
.payment {
    padding: 30px;
}
.personal-header {
    color: #2632a9;
    font-family: Rubik,sans-serif;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 25px;
}
.modal-body{
      margin-top: 0px!important;
    padding: 0px!important;
}
.input-label {
    color: #aeaeae;
    font-family: Roboto mono,sans-serif;
    font-size: 12px;
}
.payment .row {
    display: flex;
    justify-content: space-between;
    margin-bottom: 15px;
    flex-wrap: wrap;
}

.input input {
    background: #f2f2f2;
    box-shadow: inset 0 1px 3px 0 rgba(0,0,0,.2);
    border-radius: 4px;
    border: none;
    padding: 0 15px;
    font-family: Roboto mono,sans-serif;
    font-size: 14px;
    font-weight: 400;
    color: #2632a9;
    height: 40px;
    width: 87%;
    box-sizing: border-box;
    outline: none;
    -webkit-appearance: none;
    transition: box-shadow .2s;
    position: relative;
}
.input .errors {
    border-radius: 5px;
    overflow: hidden;
    font-family: Rubik,sans-serif;
    color: #fff;
    font-size: 12px;
    position: absolute;
    text-align: right;
    width: 100%;
    height: 2em;
    top: 100%;
}
.payment .row .col-total {
    width: 55%;
    padding-top: 12px;
}
.payment .fields {
    display: flex;
    justify-content: flex-start;
    padding-left: 1.5ex;
}
.payment .fields>div {
    margin-top: 2px;
    margin-right: 1.5ex;
}
.payment .fields .bunny-price, .payment .fields>div {
    white-space: nowrap;
    height: 36px;
    max-height: 36px;
    line-height: 16px;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
}
.payment .fields .bunny-price .symbol, .payment .fields>div .symbol {
    display: block;
    font-size: 11px;
    line-height: 12px;
}
.payment .fields>div {
    margin-top: 2px;
    margin-right: 1.5ex;
}
.payment .bonus-amount.active {
    color: #d32859;
}
.payment .fields>div {
    margin-top: 2px;
    margin-right: 1.5ex;
}
.payment .price, .payment .total-sum {
    color: #1717a6;
    font-family: Rubik,sans-serif;
    font-size: 14px;
    font-weight: 700;
}
.payment .row .col-full {
    width: 100%;
}
.payment .row {
    display: flex;
    justify-content: space-between;
    margin-bottom: 15px;
    flex-wrap: wrap;
}
.payment .row .col-half {
    width: 48%;
}
.input-label {
    color: #aeaeae;
    font-family: Roboto mono,sans-serif;
    font-size: 12px;
}
.payment .value-item {
    color: #1717a6;
    font-family: Roboto mono,sans-serif;
    font-size: 14px;
}
.payment .payment-additional-ethereum .double-buttons {
    text-align: center;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}
.payment .payment-additional-ethereum .double-buttons .button-wrapper {
    width: 214px;
    margin-bottom: 0;
}
.double-buttons .button-wrapper:first-child {
    margin: 0 12px 20px 0;
}
.button-wrapper {
    display: inline-block;
    position: relative;
}
.button-wrapper:before {
    content: "";
    position: absolute;
    z-index: 1;
    width: 86%;
    height: 100%;
    left: 7%;
    top: 0;
    border-radius: 10px;
    box-shadow: 0 10px 25px 0 rgba(23,23,166,.5);
}
.button-wrapper>.content {
    position: relative;
    z-index: 2;
    border-radius: 10px;
    font-size: 20px;
}
.button.blue {
    background: #0a2acc radial-gradient(farthest-side at 50% 0,#0a2acc 0,#1717a6 100%);
}
.payment .payment-additional-ethereum .double-buttons .button {
    min-width: 100%;
}
.double-buttons .button-wrapper:first-child {
    margin: 0 12px 20px 0;
}
.button-wrapper {
    display: inline-block;
    position: relative;
}
.payment .payment-additional-ethereum .double-buttons {
    text-align: center;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}
.alert-success{
  width: 74px!important;
    position: relative!important;
    top: -53px!important;
    z-index: 7px!important;
    left: 209px!important;
    height: 42px!important;
}
.payment .equals{
      color: #aeaeae;
}
.payment .progress-bar {
    display: block;
    bottom: auto;
    left: auto;
    right: auto;
    top: auto;
    width: 100%;
    margin-top: 30px;
    background-color: #ffffff!important;
}
.progress-bar {
    position: absolute;
    bottom: 5px;
    width: calc(100% - 108px);
    left: 54px;
    z-index: 5;
    position: relative;
}
.payment .progress-bar .content {
    padding: 0;
    height: 40px;
}
.progress-bar .content {
    background: #fff;
    border-radius: 10px;
    height: 120px;
    padding: 45px 54px;
    box-sizing: border-box;
}
.progress-bar>.content {
    position: relative;
    z-index: 2;
    border-radius: 10px;
}
.progress-bar .bar {
    background: #f2f2f2;
    box-shadow: inset 0 1px 3px 0 rgba(0,0,0,.2);
    border-radius: 4px;
    padding: 7px;
}
.payment .progress-bar .content .bar {
    padding: 0;
}
.progress-bar .bar .progress-wrap {
    position: relative;
}
.payment .progress-bar .content .bar .progress-wrap .scale.top {
    top: -1.5em;
}
.payment .progress-bar .content .bar .progress-wrap .scale .item {
    font-size: 12px;
}
.progress-bar .bar .scale .item:first-of-type {
    animation-delay: .2s;
}
.progress-bar .bar .scale .item {
    position: absolute;
    left: 20%;
    white-space: nowrap;
}
.payment .progress-bar .content .bar .progress-wrap .scale .item {
    font-size: 12px;
}
.progress-bar .bar .scale .item {
    position: absolute;
    left: 20%;
    white-space: nowrap;
}
.payment .progress-bar .content .bar .progress-wrap .scale .item {
    font-size: 12px;
}
.progress-bar .bar .scale .item {
    position: absolute;
    left: 20%;
    white-space: nowrap;
}
.payment .progress-bar .content .bar .progress-wrap .scale {
    height: 1em;
    line-height: 1em;
}
.progress-bar .bar .scale {
    color: #aeaeae;
    font-size: 14px;
    position: absolute;
    width: 100%;
    height: 30px;
    line-height: 30px;
    font-family: Roboto mono,sans-serif;
}
.progress-bar .bar .scale.mid {
    top: 0;
}
.payment .progress-bar .progress {
    transition-delay: 0s;
}
.progress-bar .bar .progress {
    background-image: linear-gradient(63deg,#0a2acc 5%,#1717a6);
    background-color: #1717a6;
    box-shadow: 0 2px 4px 0 rgba(32,40,104,.5);
    border-radius: 2px;
    height: 16px;
    transition-property: width;
    transition-duration: 1s;
    text-align: right;
    position: relative;
    overflow: hidden;
}
.progress-bar .bar .progress .percent {
    display: block;
    padding-right: 5px;
    font-size: 11px;
    font-family: Roboto mono,sans-serif;
    line-height: 16px;
    color: #fff;
}
.payment .progress-bar .content .bar .progress-wrap .scale.bottom {
    bottom: -1.5em;
}
.payment .progress-bar .content .bar .progress-wrap .scale {
    height: 1em;
    line-height: 1em;
}
.contract-info {
    text-align: left;
    margin: 25px 0 0;
    padding: 0;
    color: #8e9399;
    font-family: Roboto mono,sans-serif;
    font-size: 14px;
    text-align: center;
    margin: -20px 0 10px;
}
.contract-info .fa{
      background: #3dabe1;
    border-radius: 42px;
    /* font-size: 22px; */
    width: 17px;
    height: 14px;
    text-align: center;
}
.right_right span{
  padding:4px!important;
}
.modal-container {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1000;
}
.modal-container:before {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(189,56,92,.55);
    -webkit-backdrop-filter: blur(8px);
}
.modal-container .modal-inner {
    position: relative;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
}
.modal-container .modal-inner-pane {
    width: 100%;
    min-height: 100%;
    padding: 60px 0 20px;
    box-sizing: border-box;
    position: relative;
    display: flex;
    align-items: center;
}
.modal-container .modal-contract-address {
    width: 500px;
}
.modal-container .modal {
    width: 400px;
    background-color: #fff;
    border-radius: 16px;
    box-shadow: 0 5px 14px 0 rgba(0,0,0,.2);
    transform-origin: 50%;
    margin: 0 auto;
    position: relative;
}
.contract-address {
    padding: 30px;
    text-align: center;
}
.contract-address .copy_text{

    color: black;
    font-family: Roboto,sans-serif;
    line-height: 1.5em;
    font-size: 16px;

}
.contract-address .input input {
    background: #e7e8ea;
    color: #8e9399;
    font-family: Roboto mono,sans-serif;
    font-size: 14px;
    padding: 2px 5px;
    height: 32px;
    line-height: 32px;
    border-radius: 5px;
    box-shadow: none!important;
    display: inline-block;
    width: 380px;
    text-align: center;
    font-weight: 700;
}
.contract-address .box{
  color: #060652;
    position: absolute;
    top: 82px;
    left: 223px;
    /* width: 100%; */
    margin: 0 auto;
    /* width: 300px; */
    /* height: 50px; */
    background: white;
    text-align: center;
    padding: 5px 12px 8px 12px;
    font-size: 14px;
    border-radius: 8px;
}
#value2 {
    width: 165px!important;
}
.bounty .box{
    color: rgb(6, 6, 82);
    position: absolute;
    bottom: 46px;
    left: 107px;
    margin: 0px auto;
    background: white;
    text-align: center;
    padding: 5px 12px 8px;
    font-size: 14px;
    border-radius: 8px;
   
}
#particles-js{ 
	width: 100%;
    height: 100%;
    background-color: #transparent;
    background-image: url(style.css);
    background-size: cover;
    background-position: 50% 50%;
    background-repeat: no-repeat;
    background: #42308a linear-gradient(0deg,#1662d4,##5d46e8)!important;
    }
</style>
<!-- header end -->


