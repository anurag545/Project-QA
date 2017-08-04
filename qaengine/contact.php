
<?php
ob_start();
?>
<?php
require_once("header.php");
?>
<script type="text/javascript">
function xyz()
{


	if(document.form1.conemail.value.length<1||document.form1.conemail.value.indexOf("@")<3||document.form1.conemail.value.indexOf(".")<4)
	{
		alert("please fill proper email id");
		return false;
	}

		if(document.form1.conname.value.length<4)
	{
		alert("please fill atleast 4 characters in Name");
		return false;
	}
			if(document.form1.conphone.value.length<10)
	{
		alert("please fill atleast 10 digits in Phone");
		return false;
	}
			if(document.form1.conmsg.value.length<10)
	{
		alert("please fill atleast 10 digits in Message");
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
  <div class="col-md-8 main-blog-fix">
<div class="row">
<div class="col-md-12">
<div class="blog-classic-top">
<h2 class="title-blog"><a href="contact.php">Contact Us</a></h2>
</div>
</div>
<div class="clearfix"></div>
<div class="col-md-12">
<div class="blog-wrapper">
<div class="row">
 
<div class="col-md-10 col-xs-10" id="page_content">
<div class="blog-content">
 
<p style="text-align: center;">&nbsp;</p>
<?php
require_once("vars.php"); 
if(isset($_POST["submit"]))
{  

  $conname=$_POST["conname"];
  $conphone=$_POST["conphone"];
  $conemail=$_POST["conemail"];
  $conmsg=$_POST["conmsg"];
    date_default_timezone_set("Asia/Kolkata");
  $dt=date('Y-m-d H:i:s');
   $conn=mysqli_connect(host,uname,pass,dbname) or die ("Error in connection". mysqli_connect_error());

	$q="insert into contactus values('$conname','$conphone','$conemail','$conmsg','$dt')";
	mysqli_query($conn,$q) or die ("Error in query" . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	if($cnt==1)
	{
		header("location:contact.php");
	}
	else
	{
		$msg="Error,plz try again";
	}
}

?>
<style>
#conemail,#conname,#conphone,#conmsg
{
	border-radius:3px;
	border:1px solid #dadfea;
}
#conemail,#conname,#conphone
{
	height:40px;
}
</style>
<form  method="post" name="form1" class="" onSubmit="return xyz()">
  <table width="500" align="left" cellpadding="0px" cellspacing="">

    <tr height="30">
     <label> <th width="243" align="left">Name :</th></label>
      <th width="235" align="left"><label>Phone :</label></th>
    </tr>
    <tr>
      <td>
      <input name="conname" type="text" id="conname" size="27" height="40"/></td>
      <td>
      <input name="conphone" type="text" id="conphone" size="20" height="40" onKeyPress="return isNumberKey(event)" /></td>
    </tr>
    <tr height="40px">
      <th align="left" width="243"><label>Email :</label></th>
     
    </tr>
    <tr>
      <th align="left">
      <input name="conemail" type="text" id="conemail" size="35" height="40"/></th>
      <td>&nbsp;</td>
    </tr>
    <tr height="40px">
      <th align="left"><label>Message :</label></th>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th height="108" align="left">
      <textarea name="conmsg" cols="40" rows="8" id="conmsg"></textarea></th>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th height="47" align="left"><input type="submit" name="submit" id="submit" value="Submit" height="35"/></th>
      <td>&nbsp;</td>
    </tr
>
    <tr>
      <th height="47" align="left"><?php
      if(isset($msg))
	  {
		  print $msg;
	  }
	  ?>
	  </th>
      <td>&nbsp;</td>
    </tr
>
  </table>
  </form>
<div class="contact-address" style="color: #777777;"><span class="jicons-text" style="color: #444444;">MY ADDRESS:</span><br/>
<address><span class="contact-street">Anurag Thakur<br/>
</span><span class="contact-suburb">NIT Hamirpur ,</span><span class="contact-postcode"> H.P.</span><span class="contact-country">,India</span></address>
</div>
<div class="contact-contactinfo" style="color: #777777;">
<div><span class="jicons-text" style="color: #444444;">EMAIL: <a href="mailto:ranaanurag67@gmail.com" target="_blank" rel="nofollow">ranaanurag67@gmail.com</a></span></div>
<div><span class="jicons-text" style="color: #444444;">MOBILE:</span><span class="contact-mobile">+91-8894138980</span></div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
</div>
</div>
</div>
</div>
</div>
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
