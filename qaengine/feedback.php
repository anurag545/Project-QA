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
<span itemprop="name"><h2><a href="feedback.php">Feedback</a></h2></span></div>
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
   $un=$_POST["name"];
   $ph=$_POST["phone"];
    $em=$_POST["email"];
   $be=$_POST["best"];
   $rat=$_POST["rat"];
   $level=$_POST["lev"];
   $msg=$_POST["msg"];
   
  date_default_timezone_set("Asia/Kolkata");
  $dt=date('Y-m-d H:i:s');
   $conn=mysqli_connect(host,uname,pass,dbname) or die ("Error in connection". mysqli_connect_error());

	$q="insert into feedback values('$un','$ph','$em','$be','$rat','$level','$msg','$dt')";
	mysqli_query($conn,$q) or die ("Error in query" . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	if($cnt==1)
	{
		$msg="Feedback Filled Succesfully";
		
	}
	else
	{
		$msg="Error,plz try again";
	}
}

?>
<style type="text/css">
.login{
width:430px;
margin:auto;
margin-top:50px;
}
</style>
<script type="text/javascript">
function xyz()
{
   		if(document.form1.name.value.length<4)
	{
		alert("please fill atleast 4 characters in Name");
		return false;
	}
			if(document.form1.phone.value.length<10)
	{
		alert("please fill atleast 10 digits in Phone");
		return false;
	}
	if(document.form1.email.value.length<1||document.form1.email.value.indexOf("@")<3||document.form1.email.value.indexOf(".")<4)
	{
		alert("please fill proper email id");
		return false;
	}
	if(document.form1.rat[0].checked==false&&document.form1.rat[1].checked==false&&document.form1.rat[3].checked==false&&document.form1.rat[4].checked==false)
	{
		alert("Give rating");
		return false;
	}
		if(document.form1.lev[0].checked==false&&document.form1.lev[1].checked==false&&document.form1.lev[3].checked==false&&document.form1.lev[4].checked==false)
	{
		alert("Select Level Of Questions");
		return false;
	}

}

       function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
			{
             return false;
			}
			else {
          return true; }
       }
       



</script>
<form name="form1" id="signin_form" class="form_modal_style" method="post" onSubmit="return xyz()">
<label for="username">
Name </label>
<input type="text" class="email_user" name="name" id="username"/>
<label for="password">
Phone</label>
<input type="text" class="email_user" name="phone" id="username" onKeyPress="return isNumberKey(event)"/>
<label for="password">
Email</label>
<input type="text" class="email_user" name="email" id="username"/>
<label>Best Thing About Our Site</label>
<input type="text" class="email_user" name="best" id="username"/>
<label>Rating For Site
<style>
#gen_0{
	width:17px;
	height:17px;
	margin-right:7px;
	display:inline;}
	#gen_1{
	width:17px;
	height:17px;
	margin-right:7px;
	display:inline;}
#day {
	margin-top:10px;
	margin-bottom:5px;
}
</style>
<label for="MF">
<input name="rat" type="radio" value="Excell" id="gen_0">Excellent&nbsp; &nbsp;
<input name="rat" type="radio" value="VGood" id="gen_1">Very Good&nbsp; &nbsp;
<input name="rat" type="radio" value="Average" id="gen_0">Average &nbsp; &nbsp;
<input name="rat" type="radio" value="Not Bad" id="gen_0">Not Bad &nbsp; &nbsp;</label> 
<label>Level Of Questions</label>
<style>
#gen_0{
	width:17px;
	height:17px;
	margin-right:7px;
	display:inline;}
	#gen_1{
	width:17px;
	height:17px;
	margin-right:7px;
	display:inline;}
#day {
	margin-top:10px;
	margin-bottom:5px;
}
</style>
<label for="MF">
<input name="lev" type="radio" value="VHigh" id="gen_0">Very High&nbsp; &nbsp;
<input name="lev" type="radio" value="High" id="gen_1">High&nbsp; &nbsp;
<input name="lev" type="radio" value="Average" id="gen_0">Average &nbsp; &nbsp;
<input name="lev" type="radio" value="Low" id="gen_0">Low &nbsp; &nbsp;</label>

<label>Any Other Message</label>
<textarea name="msg" cols="40" rows="8" id="msg"></textarea>
<div class="clearfix"></div>
<b><font color="#FF0000"> <?php
 if(isset($msg))
 print $msg;
 ?></b></font>
 <div class="clearfix"></div>
<input type="submit" name="submit" value="Submit" class="btn-submit">
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
</div> 
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
