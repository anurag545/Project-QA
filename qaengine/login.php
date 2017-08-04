<?php
ob_start();
?>
<?php
require_once("header.php");
?>
  <div itemtype="http://schema.org/ItemList" class="col-md-8 main-content">
<link itemprop="url" href="index.php" style="display: none;"/>
<div class="clearfix"></div>
<div class="row select-category">
<div itemprop="mainEntityOfPage" class="col-md-6 col-xs-6 current-category">
<span itemprop="name"><h2><a href="login.php">Login</a></h2></span></div>
<div class="col-md-6 col-xs-6">
<div class="select-categories-wrapper">
<div class="outer-filter-wrapper">
<div class="select-categories-filter">
<span class="label-filter"></span>
  <div class="select-categories">
  <p>
  	   </p>
</div>
</div>
<div class="filter-by-select"></div>
</div>
</div>
</div>
</div>
<div class="login">
<?php
session_start();
require_once("vars.php");
if(isset($_POST["submit"]))
{
   $un=$_POST["username"];
   $pa=$_POST["password"];
   $conn=mysqli_connect(host,uname,pass,dbname) or die ("Error in connection". mysqli_connect_error());
	$q="select * from signup where Email='$un' and Password='$pa'"; 
	$res=mysqli_query($conn,$q) or die ("Error in query" . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	if($cnt==1)
	{   
	   $x=mysqli_fetch_array($res);
	   $_SESSION["n"]=$x[0];
	   $_SESSION["un"]=$x[5];
	   $_SESSION["pic"]=$x[10];
	   $_SESSION["utype"]=$x[11];
	   if($x[11]=='admin')
	   {
		header("location:adminpanel.php");
	   }
	   else
	   { 
	   if(isset($_GET["returnurl"]))
	   {
		   $pgname=$_GET["returnurl"];
		   header("location:$pgname");
	   }
		   else {
		header("location:indexuser.php");  
		   }
	   }
	 }
	else
	{
		$msg="Incorrect username /password";
		}
}
?>
<style type="text/css">
.login{
width:400px;
margin:auto;
margin-top:50px;
margin-bottom:200px;
}
</style>
<form name="form1" id="signin_form" class="form_modal_style" method="post">
<label for="username">
Username or Email </label>
<input type="text" class="email_user" name="username" id="username"/>
<label for="password">
Password </label>
<input type="password" class="password_user" id="password" name="password">
<div class="clearfix"></div>
<b><font color="#FF0000"> <?php
 if(isset($msg))
 print $msg;
 ?></b></font></br>
<input type="submit" name="submit" value="Sign in" class="btn-submit">
<a href="javascript:void(0)" class="link_forgot_pass"></a>
<div class="submit-block">
<a href="signup.php" class="link_sign_up">Sign up here</a><span>or sign in with</span>
<ul class="social-icon clearfix">

 
</ul>
</div>
</form>
</div>  
<div class="clearfix grey-line"></div>
</div>
<div class="row q-filter-waypoints collapse" id="q_filter_waypoints">
<div class="col-md-2 col-xs-2">
<button type="button" data-toggle="modal" class="action ask-question">
<i class="fa fa-plus"></i> ASK A QUESTION </button>
</div>
<div class="col-md-8 col-sm-10 col-xs-10">
<div class="row">
<div class="col-md-2 hidden-xs hidden-sm">
<span class="q-f-title">
All Questions </span>
</div> 
<div class="col-md-5 col-sm-6 col-xs-6">
<ul class="q-f-sort">
<li>
<a class="active" href="index.html">
Latest </a>
</li>
<li>

</li>
<li>

</li>
</ul> 
</div>
<div class="col-md-5 col-sm-6 col-xs-6 categories-wrapper">
<div class="select-categories-wrapper fixed">

</div>  
</div>
</div>
</div>
</div>


<div class="col-md-2 disable-mobile right-sidebar">
<div class="widget widget-statistic">
<ul>
<li class="questions-count">
<p>Questions<p>
<span><?php
require_once("vars.php");

	$conn=mysqli_connect(host,uname,pass,dbname) or die("Error in connection " . mysqli_connect_error());	
	$q="select QuestionID from addquestion";
	$res=mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	if($cnt==0)
	{
		print "No question available";
	}
	else
	{   $count=0;
		while($x=mysqli_fetch_array($res))
		$count++;
	print $count;
	}
	?></span>
</li>
<li class="members-count">
<p>Members<p>
<span><?php
require_once("vars.php");

	$conn=mysqli_connect(host,uname,pass,dbname) or die("Error in connection " . mysqli_connect_error());	
	$q="select Email from signup";
	$res=mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	if($cnt==0)
	{
		print "No member available";
	}
	else
	{   $count=0;
		while($x=mysqli_fetch_array($res))
		$count++;
	print $count;
	}
	?></span>
</li>
</ul>
</div>
<div class="widget widget-hot-questions"></div>
<div class="widget user-widget">
  <div class="hot-user-question">  </div>
</div>
</div>  </div> 
</div> 
<div style="display:none;">
<div id="wp-temp_id-wrap" class="wp-core-ui wp-editor-wrap html-active"><link rel='stylesheet' id='dashicons-css' href='../files/wp-includes/css/dashicons.minc74f.css?ver=1463369188' type='text/css' media='all'/>
<link rel='stylesheet' id='editor-buttons-css' href='../files/wp-includes/css/editor.minc74f.css?ver=1463369188' type='text/css' media='all'/>
<div id="wp-temp_id-editor-container" class="wp-editor-container"><textarea class="wp-editor-area" rows="20" tabindex="5" cols="40" name="post_content" id="temp_id"></textarea></div>
</div>
</div>
 
<div class="modal fade modal-submit-questions" id="login_register" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
<h4 class="modal-title modal-title-sign-in" id="myModalLabel">Sign In First</h4>
</div>
</div>
</div>
</div>
<?php
require_once("scriptfooter.php");
?>
</body> 

<!-- Mirrored from qaengine.enginethemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Jul 2016 13:52:04 GMT -->
</html>
