<?php
require_once("headeruser.php");
?>
 <div itemtype="http://schema.org/ItemList" class="col-md-8 main-content">
<link itemprop="url" href="indexuser.php" style="display: none;"/>
<div class="clearfix"></div>
<div class="row select-category">
<div itemprop="mainEntityOfPage" class="col-md-6 col-xs-6 current-category">
<span itemprop="name"><a href="changepassword.php"><h2>Change Password</h2></a></span>
</div>
<div class="col-md-6 col-xs-6">
<div class="select-categories-wrapper">
<div class="outer-filter-wrapper">

<div class="filter-by-select"></div>
</div>
</div>
</div>
</div> 
<div class="row q-filter-waypoints collapse" id="q_filter_waypoints">
<div class="col-md-2 col-xs-2">
<a href="askquestion.php"><button type="button" data-toggle="modal" class="action ask-question">
<i class="fa fa-plus"></i> ASK A QUESTION </button></a>
</div>
<div class="col-md-8 col-sm-10 col-xs-10">
<div class="row">
<div class="col-md-2 hidden-xs hidden-sm">
<span class="q-f-title">
All Question </span>
</div> 
<div class="col-md-5 col-sm-6 col-xs-6 categories-wrapper">


</div>
</div>
</div>
</div>
<div class="changepassword">
<?php
if(!isset($_SESSION["n"]))
{
	header("location:error.php");
}
require_once("vars.php");
if(isset($_POST["submit"]))
{
   $cpass=$_POST["cpass"];
   $npass=$_POST["npass"];
   $cnewpass=$_POST["cnewpass"];
   $un=$_SESSION["un"];
 if($npass==$cnewpass)
 {
   $conn=mysqli_connect(host,uname,pass,dbname) or die ("Error in connection". mysqli_connect_error());
	$q="update signup set password='$npass' where Email='$un' and Password='$cpass'"; 
	mysqli_query($conn,$q) or die ("Error in query" . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	if($cnt==1)
	{
		$msg="Password Update Succesfully";
	}
	else
	{
		$msg="Current Password is Invalid";
	}
 }
 else
 {
	 $msg="Password does not match";
 }
}
?>
<div class="modal-body">
<form name="form1" id="form1" class="form_modal_style" method="post">
<style>
.changepassword {
width:400px;
margin:auto;
margin-top:40px;
margin-bottom:100px;
}
</style>
<input type="hidden" id="user_login" name="user_login" value=""/>
<input type="hidden" id="user_key" name="user_key" value="">
<label>Current Password</label>
<input type="password" class="name_user" name="cpass" id="cpass"/>
<label>New Password</label>
<input type="password" class="name_user" name="npass" id="npass"/>
<label>Re-type Password</label>
<input type="password" class="name_user" name="cnewpass" id="cnewpass"/>
<b><font color="#FF0000"><?php
if(isset($msg))
print $msg;
?></font></b></br>
<input type="submit" name="submit" value="Reset" class="btn-submit">
</form>
</div>
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

  <?php  
require_once("scriptfooter.php");
?>

</body> 

</html>
